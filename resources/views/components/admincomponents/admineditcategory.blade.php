@extends('layouts.superadmin')

@section('superadmincontent')
    <div class="section  bg-white rounded-lg shadow-blue-300 shadow-md  m-auto " style="padding:50px">
        <h1 class="rounded-md  text-blue-600 font-bold text-lg text-center">Edit/Update Category</h1>

        <form action="{{ url('update-category/' . $category->id) }}" method="POST" autocomplete="off" id="myForm"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6 flex items-center w-5/6 ">
                <span class="block mb-2 mr-5 text-sm font-medium text-gray-900 dark:text-white">Categroy ID</span>
                <input type="text" name="category_name" value="{{ $category->id }}"
                    class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-60 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter Category Name" disabled>
            </div>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categroy Name</label>
                <input type="text" name="category_name" value="{{ $category->name }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter Category Name" required>
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categroy Name</label>
                <input type="text" name="category_item_name" value="{{ $category->category_item_name }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter Category Name" required>
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                    Slug</label>
                <input type="text" name="category_slug" value="{{ $category->slug }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter Category Slug" required>
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                    Meta Title</label>
                <input type="text" name="category_meta_title" value="{{ $category->meta_title }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter Category Meta Title" required>
            </div>


            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                    Meta Description</label>
                <input type="text" name="category_meta_description" value="{{ $category->meta_description }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter Category Meta Description" required>
            </div>


            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                    Meta Keywords</label>
                <input type="text" name="category_meta_keywords" value="{{ $category->meta_keywords }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter Category Meta Keywords" required>
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Description</label>
                <textarea name="category_description" placeholder="Enter Category Description"
                    class="lg:w-5/6 px-3 py-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 resize-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 sm:w-auto">{{ $category->description }}</textarea>
            </div>

            <div class="flex justify-around w-44">
                <div class="flex items-center mb-4">
                    <input id="default-checkbox" name="category_status" type="checkbox"
                        {{ $category->status == '1' ? 'checked' : '' }}
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-checkbox"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">status</label>
                </div>

                <div class="flex items-center mb-4">
                    <input id="default-checkbox" name="category_popular" type="checkbox"
                        {{ $category->popular == '1' ? 'checked' : '' }}
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-checkbox"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Popular</label>
                </div>
            </div>

            <br>

            @if ($category->image)
            <img width="8%" style="height: 15vh;" src="{{ asset('assets/uploads/category/' . $category->image) }}" alt="category image">

            @endif

            <span>Uploaded Image: {{ $category->image }}</span>
            <br>
            <br>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload New
                Image:</label>
            <input
                class="p-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="file_input" name="image" type="file" accept="image/*">

            <div id="image_preview" class="mt-4"></div>


            <br>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>


    <script>
        const fileInput = document.getElementById('file_input');
        const imagePreview = document.getElementById('image_preview');

        fileInput.addEventListener('change', function(event) {
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.classList.add('max-w-full',
                        'max-h-64'); // Adjust the maximum width and height as needed
                    imagePreview.innerHTML = '';
                    imagePreview.appendChild(img);
                };

                reader.readAsDataURL(file);
            } else {
                imagePreview.innerHTML = '';
            }
        });
    </script>
@endsection
