<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\SuperAdminController;

include_once 'userroutes.php';
include_once 'adminroutes.php';
include_once 'superadminroutes.php';
include_once 'sellerroutes.php';


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// default login Route

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:user'])->group(function () {
    Route::get('/login', function () {
        return view('userdashboard');
    })->name('login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'redirectuser'])->name('dashboard');
});



// User



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:user'])->group(function () {
    Route::get('/user/dashboard', function () {
        return view('userdashboard');
    })->name('user.dashboard');
});

Route::get('user/login', function () {
    return view('auth.userlogin');
})->name('user.login');



// Admin


Route::middleware(['adminauth:sanctum', config('jetstream.auth_session'), 'verified', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admindashboard');
    })->name('admin.dashboard');
});



Route::get('admin/login', function () {
    return view('auth.adminlogin');
})->name('admin.login');

// Other routes...

// include_once 'routes/adminroutes.php';
// require __DIR__.'adminroutes.php';


// Other routes...




// Superadmin Routes

Route::middleware(['superadminauth:sanctum', config('jetstream.auth_session'), 'verified', 'role:superadmin'])->group(function () {


    Route::get('/superadmin/dashboard', [SuperAdminController::class, 'adminmaindashboard'])->name('superadmin.dashboard');

    Route::get('/admin/register', [SuperAdminController::class, 'adminregister'])->name('adminregister');
    Route::get('/registerd/admins/list', [SuperAdminController::class, 'registeradminslist'])->name('regadminlist');
    Route::get('/super/admin/inbox', [SuperAdminController::class, 'admininbox'])->name('admininbox');
    Route::get('/super/admin/addcategory', [SuperAdminController::class, 'adminaddcategory'])->name('adminaddcategory');
    Route::get('/super/admin/showcategory', [SuperAdminController::class, 'adminshowcategory'])->name('adminshowcategory');
    // this url for fetch data
    Route::get('/super/admin/showcategory', [SuperAdminController::class, 'categorylistshow'])->name('adminshowcategory');
    Route::post('/super/admin/regcategory', [SuperAdminController::class, 'regcategory'])->name('regcategory');
    // Category Edit Route
    Route::get('edit-category/{id}', [SuperAdminController::class, 'categoryedit'])->name('categoryedit');
    Route::put('update-category/{id}', [SuperAdminController::class, 'updatecategory'])->name('updatecategory');
    Route::get('delete-category/{id}', [SuperAdminController::class, 'deletecategory'])->name('deletecategory');

    // Route::get('/admin/maindashboard', [SuperAdminController::class, 'adminmaindashboard']);
});



Route::get('superadmin/login', function () {
    return view('superadmin.superadminlogin');
})->name('superadmin.login');





// Modified /dashboard Route


// User Dashboard


// Dashboard Redirect
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->hasRole('user')) {
            return redirect()->route('user.dashboard');
        } elseif (auth()->user()->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        } elseif (auth()->user()->hasRole('superadmin')) {
            return redirect()->route('superadmin.dashboard');
        } elseif (auth()->user()->hasRole('seller')) {
            return redirect()->route('seller.dashboard');
        }
    })->name('dashboard');
});





// seller Center Account


Route::middleware(['sellerauth:sanctum', config('jetstream.auth_session'), 'verified', 'role:seller'])->group(function () {
    Route::get('/seller/dashboard',[SellerController::class,'sellerdashboard'])->name('seller.dashboard');
    Route::get('/seller/dashboard',[SellerController::class,'seller_dashboard_main'])->name('seller.dashboard');
    Route::get('/seller/product/quantity',[SellerController::class,'productquantity'])->name('seller_product_quantity');
});



Route::get('seller/login', function () {
    return view('seller.sellerlogin');
})->name('seller.login');
