@extends('layouts.superadmin')

@section('superadmincontent')

<form>
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Admin's Email" required>
        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>
</form>
<br>
<div class="section relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Admin Email's
                </th>
                <th scope="col" class="px-6 py-3">
                    Pic
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                        email@flowbite.com
                    </p>
                </th>
                <td class="px-6 py-4">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="{{asset('Images/logo/logo.png')}}" alt="Neil image">
                    </div>
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    <span id="availability-available" class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                      <span class="w-2 h-2 mr-1 bg-green-500 rounded-full"></span>
                      Available
                    </span>
                    <span id="availability-unavailable" class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300" style="display: none">
                      <span class="w-2 h-2 mr-1 bg-red-500 rounded-full"></span>
                      Unavailable
                    </span>
                  </td>
                  <td class="px-6 py-4">
                    <a href="#" class="font-medium text-orange-500 dark:text-blue-500 hover:underline" id="block-link">Block</a>
                    |
                    <a href="#" class="font-medium text-green-500 dark:text-blue-500 hover:underline" id="unblock-link">Unblock</a>
                  </td>
            </tr>

        </tbody>
    </table>
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
</script>
@endsection
