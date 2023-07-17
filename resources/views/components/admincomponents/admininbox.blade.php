@extends('layouts.superadmin')

@section('superadmincontent')
    <div class="section relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Email's
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Color
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                        <ul role="list" class="max-w-sm divide-y divide-gray-200 dark:divide-gray-700">

                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            email@flowbite.com
                                        </p>
                                    </div>
                                </div>
                            </li>

                        </ul>

                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Delete</a>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>
@endsection