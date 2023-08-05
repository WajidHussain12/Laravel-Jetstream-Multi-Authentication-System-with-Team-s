@extends('layouts.seller');

@section('sellercontent')
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Categories name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Items
                    </th>
                </tr>
            </thead>
            <tbody>

                @php
                $categoryItemNames = [];

                foreach ($category as $item) {
                    $categoryItemNames[$item->name][] = $item->category_item_name;
                }
            @endphp

            @foreach ($categoryItemNames as $categoryName => $categoryItems)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $categoryName }}
                    </th>
                    <td class="px-6 py-4 w-52">
                        <div class="relative">
                            <button id="dropdownDefaultButton_{{ Str::slug($categoryName) }}"
                                data-dropdown-toggle="dropdown_{{ Str::slug($categoryName) }}"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">Category Items <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdown_{{ Str::slug($categoryName) }}"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute top-full right-0">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownDefaultButton_{{ Str::slug($categoryName) }}">
                                    @foreach ($categoryItems as $item)
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                {{ $item }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach



            </tbody>
        </table>
    </div>
@endsection
