@extends('layouts.superadmin')

@section('superadmincontent')
    <style>
        @keyframes fadeout {
            0% {
                opacity: 1;
                width: 100%;
            }

            100% {
                opacity: 0;
                width: 0;
            }
        }

        #toast-success {
            animation: none;
            position: relative;
        }

        #toast-progress {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 1px;
            background-color: #34D399;
            border-radius: 1px;
            animation: progress 8s linear forwards;
        }

        @keyframes progress {
            0% {
                width: 100%;
            }

            100% {
                width: 0;
            }
        }
    </style>

    <h1 class="mb-4 text-2xl font-bold leading-none tracking-tight dark:bg-slate-500 rounded-lg p-2 pl-5 text-gray-900 md:text-3xl lg:text-3xl dark:text-white">
        Item <span class="text-blue-600 dark:text-blue-500">List</span></h1>

    <form>
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search"
                class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search Items" required>
            <button type="submit"
                class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </form>
    <br>
    <div class="section relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Category ID
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Category Name
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Category Item Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Updated at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($showitem as $item)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                {{ $item->id }}
                            </p>
                        </th>

                        <td class="px-6 py-4">
                            {{ $item->category_id }}

                        </td>
                        <td class="px-6 py-4">
                            {{ $item->item_name }}

                        </td>
                        <td class="px-6 py-4">
                            {{ $item->created_at}}

                        </td>
                        <td class="px-6 py-4">
                            {{ $item->updated_at}}

                        </td>

                        {{-- <td class="px-6 py-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full"
                                    src="{{ asset('assets/uploads/category/' . $item->image) }}" alt="image Hera">
                            </div>
                        </td> --}}
                        <td class="px-6 py-4">
                            <span id="availability-available"
                                class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                <span class="w-2 h-2 mr-1 bg-green-500 rounded-full"></span>
                                Available
                            </span>
                            <span id="availability-unavailable"
                                class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300"
                                style="display: none">
                                <span class="w-2 h-2 mr-1 bg-red-500 rounded-full"></span>
                                Unavailable
                            </span>
                        </td>
                        <td class="px-6 py-4 flex justify-center items-center">
                            <a href="#" class="font-medium text-orange-500 dark:text-blue-500 hover:underline"
                                id="block-link">Block</a>
                            <p class="ml-2 mr-2">|</p>
                            <a href="#" class="font-medium text-green-500 dark:text-blue-500 hover:underline"
                                id="unblock-link">Unblock</a>
                            <p class="ml-2 mr-2">|</p>
                            <a href="{{url('edit-category/'.$item->id)}}" class="font-medium text-blue-500 dark:text-blue-500 hover:underline"
                                id="unblock-link">Edit</a>
                            <p class="ml-2 mr-2">|</p>
                            <a href="{{url('delete-category/'.$item->id)}}" class="font-medium text-red-600 dark:text-blue-500 hover:underline"
                                id="unblock-link">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>


    </div>
    {{-- Toast Notification --}}

    @if (session('status'))
        <div class="fixed bottom-5 left-30">
            <div id="toast-success"
                class=" flex items-center w-full max-w-xs p-4 mb-4 text-green-800 bg-green-200 rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
                role="alert">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-800 bg-green-200 rounded-lg dark:bg-green-800 dark:text-green-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="sr-only">Check icon</span>
                </div>
                <div class="ml-3 text-sm font-normal mr-2">{{ session('status') }}</div>
                <div id="toast-progress" class="h-1 bg-green-500 rounded-lg mt-2 w-full"></div>
                <button id="toast-close" class="ml-auto focus:outline-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
    @endif


    @if (session('status_delete'))
        <div class="fixed bottom-5 left-30">
            <div id="toast-success"
                class=" flex items-center w-full max-w-xs p-4 mb-4 text-red-800 bg-red-200 rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
                role="alert">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-200 bg-red-200 rounded-lg dark:bg-green-800 dark:text-green-200">
                    <svg class="w-6 h-6 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z"/>
                      </svg>
                    <span class="sr-only">Check icon</span>

                </div>
                <div class="ml-3 text-sm font-normal mr-2">{{ session('status_delete') }}</div>
                <div id="toast-progress" class="h-1 bg-green-500 rounded-lg mt-2 w-full"></div>
                <button id="toast-close" class="ml-auto focus:outline-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
    @endif
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#block-link").click(function() {
                $("#availability-available").hide();
                $("#availability-unavailable").show();
            });

            $("#unblock-link").click(function() {
                $("#availability-available").show();
                $("#availability-unavailable").hide();
            });
        });



        // close notification div

        document.addEventListener('DOMContentLoaded', function() {
            const closeButton = document.getElementById('toast-close');
            const toastDiv = document.getElementById('toast-success');
            const progressBar = document.getElementById('toast-progress');

            closeButton.addEventListener('click', function() {
                toastDiv.style.display = 'none';
            });

            setTimeout(function() {
                toastDiv.style.animation = 'fadeout 0.5s forwards';
            }, 7500);

            setTimeout(function() {
                toastDiv.style.display = 'none';
            }, 8000);
        });
    </script>
@endsection
