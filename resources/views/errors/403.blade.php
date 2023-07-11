@extends('errors::minimal')
<style>
    .text-50px {
        font-size: 50px;
    }

    .text-30px{
        font-size: 30px;
    }
    .font-boldcustom{
        font: bold
    }
    .text-20px{
        font-size: 20px
    }
    .text-10px{
        font-size: 18px
    }
</style>
@section('title', __('Unauthorized Access'))
@section('content')
    <!-- component -->
    <div class="flex flex-col justify-center  min-h-screen bg-gray-100">
        <div class="flex flex-col flex-grow items-center justify-center">
            <div class="text-center">
                <h1 class="text-50px font-bold text-red-600">403</h1>
                <p class="mt-4 text-30px font-boldcustom text-red-600">Access Denied</p>
                <p class="mt-2 text-20px text-gray-600">Sorry, you don't have permission to access this page.</p>
                <p class="text-20px text-gray-800 mb-4">We apologize for the inconvenience, but you do not have the necessary
                    permissions to access this dashboard.</p>
                <p class="text-10px text-gray-800 mb-4">If you believe this is an error, please contact the system administrator for
                    assistance.</p>
            </div>
        </div>
        <div class="bg-gray-200">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                <div class="text-center text-sm text-gray-600">
                    &copy; 2023 Your Website. All rights reserved.
                </div>
            </div>
        </div>
    </div>


@endsection





{{-- @section('message', __($exception->getMessage() ?: 'Forbidden')) --}}
