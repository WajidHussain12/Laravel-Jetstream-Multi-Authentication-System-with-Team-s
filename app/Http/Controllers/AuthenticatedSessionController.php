<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Features;
use Illuminate\Routing\Pipeline;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\StatefulGuard;
use Laravel\Fortify\Contracts\LoginResponse;
use Laravel\Fortify\Contracts\LogoutResponse;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Http\Requests\LoginRequest;
use Laravel\Fortify\Contracts\LoginViewResponse;
use Laravel\Fortify\Actions\AttemptToAuthenticate;
use Laravel\Fortify\Actions\EnsureLoginIsNotThrottled;
use Laravel\Fortify\Actions\PrepareAuthenticatedSession;
use Laravel\Fortify\Actions\RedirectIfTwoFactorAuthenticatable;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * The guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected $guard;

    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\StatefulGuard  $guard
     * @return void
     */
    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }

    /**
     * Show the login view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Laravel\Fortify\Contracts\LoginViewResponse
     */

public function usercreate(Request $request): LoginViewResponse
{
    $userRoleId = 2; // The role ID for "user"
    $userId = Auth::id();

    $isUserRole = DB::table('model_has_roles')
        ->where('role_id', $userRoleId)
        ->where('model_type', User::class)
        ->where('model_id', $userId)
        ->exists();

    if (!$isUserRole) {
        abort(403); // If the user's role is not "user", return a 403 Forbidden response
    }

    return app(LoginViewResponse::class);
}

public function userstore(LoginRequest $request)
{
    $credentials = $request->only('email', 'password');
    $userRoleId = 2; // The role ID for "user"

    $isUserRole = DB::table('model_has_roles')
        ->where('role_id', $userRoleId)
        ->where('model_type', User::class)
        ->where('model_id', function ($query) use ($credentials) {
            $query->select('model_id')
                ->from('model_has_roles')
                ->join('users', 'model_has_roles.model_id', '=', 'users.id')
                ->where('users.email', $credentials['email']);
        })
        ->exists();

    if (!$isUserRole) {
        throw ValidationException::withMessages([
            'email' => __('Unauthorized access.'),
        ])->status(403);
    }

    if (!Auth::attempt($credentials)) {
        throw ValidationException::withMessages([
            'email' => __('The provided credentials are incorrect.'),
        ])->status(403);
    }

    return redirect()->intended('/dashboard');
}




    /**
     * Get the authentication pipeline instance.
     *
     * @param  \Laravel\Fortify\Http\Requests\LoginRequest  $request
     * @return \Illuminate\Pipeline\Pipeline
     */
    protected function loginPipeline(LoginRequest $request)
    {
        if (Fortify::$authenticateThroughCallback) {
            return (new Pipeline(app()))->send($request)->through(array_filter(
                call_user_func(Fortify::$authenticateThroughCallback, $request)
            ));
        }

        if (is_array(config('fortify.pipelines.login'))) {
            return (new Pipeline(app()))->send($request)->through(array_filter(
                config('fortify.pipelines.login')
            ));
        }

        return (new Pipeline(app()))->send($request)->through(array_filter([
            config('fortify.limiters.login') ? null : EnsureLoginIsNotThrottled::class,
            Features::enabled(Features::twoFactorAuthentication()) ? RedirectIfTwoFactorAuthenticatable::class : null,
            AttemptToAuthenticate::class,
            PrepareAuthenticatedSession::class,
        ]));
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Laravel\Fortify\Contracts\LogoutResponse
     */
    public function destroy(Request $request): LogoutResponse
    {
        $this->guard->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return app(LogoutResponse::class);
    }
}
