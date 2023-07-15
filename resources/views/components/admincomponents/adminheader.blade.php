<header class="bg-white shadow rounded-lg mt-2">
    <div class="max-w-7xl mx-auto p-2 sm:px-6 lg:px-8 text-red-500">

        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            <p>Welcome, {{ auth()->user()->name }}</p>
        </h1>
        <hr>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Super_Admin_Dashboard') }}
        </h2>

        {{-- @php
            $string = "hacker";
            $rev_string = strrev($string);
            echo $rev_string;
        @endphp --}}
    </div>
</header>
