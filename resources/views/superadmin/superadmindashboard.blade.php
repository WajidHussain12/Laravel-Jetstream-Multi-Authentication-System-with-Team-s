@extends('layouts.superadmin')

@section('content')
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-red-500">

            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                <p>Welcome, {{ auth()->user()->name }}</p>
            </h1>
            <hr>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Super_Admin_Dashboard') }}
            </h2>
        </div>
    </header>
@endsection
