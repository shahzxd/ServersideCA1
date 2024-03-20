@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-4xl sm:text-6xl font-bold">
            Create Post
        </h1>
    </div>
</div>
 
@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-full md:w-2/5 mb-4 text-gray-800 bg-red-200 rounded-lg py-2 px-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-10">
    <form 
        action="/blog"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input 
            type="text"
            name="title"
            placeholder="Title..."
            class="bg-gray-100 placeholder-gray-500 rounded-lg py-3 px-4 mb-6 w-full text-xl">

        <textarea 
            name="description"
            placeholder="Description..."
            class="bg-gray-100 placeholder-gray-500 rounded-lg py-3 px-4 mb-6 w-full h-40 text-xl"></textarea>

        <div class="bg-gray-100 py-3 px-4 rounded-lg mb-6">
            <label class="cursor-pointer">
                <span class="text-lg font-semibold">Select Image:</span>
                <input 
                    type="file"
                    name="image"
                    class="hidden">
            </label>
        </div>

        <button    
            type="submit"
            class="uppercase bg-blue-500 hover:bg-blue-600 text-white text-lg font-bold py-3 px-6 rounded-lg">
            Submit Post
        </button>
    </form>
</div>

@endsection
