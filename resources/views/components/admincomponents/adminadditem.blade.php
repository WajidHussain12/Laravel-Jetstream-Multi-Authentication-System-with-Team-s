@extends('layouts.superadmin');

@section('superadmincontent')
    <form action="{{ Route('insertitem') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Select an
            Category</label>
        <select id="countries"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            name="categoryid">
            @foreach ($itemcategory as $item)
                <option selected value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>

        <div class="mb-6">
            <label for="email" class="block mt-3 mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Enter Item
                Name</label>
            <input type="text" id="text"
                class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Item Name" required name="itemname">
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
@endsection
