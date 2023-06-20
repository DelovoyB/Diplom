@extends('layouts.admin')
@section('title', 'Товары')
@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{ isset($item) ? "Изменить"  : "Добавить" }} товар</h3>

        <div class="mt-8">
            <form enctype="multipart/form-data" class="w-full flex flex-col space-y-2 mt-5" method="Post" action="{{ isset($item) ? route("admin.items.update", $item->id) : route("admin.items.store") }}">
                @csrf

                @if(isset($item))
                    @method('Put')
                @endif
                <label class="block text-sm text-gray-600 ">Название</label>
                <input name="title" type="text" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300      " placeholder="Название" value="{{ isset($item) ? $item->title : '' }}"/>
                @error('title')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block text-sm text-gray-600 ">Описание</label>
                <input name="description" type="text" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300      " placeholder="Описание" value="{{ isset($item) ? $item->description : '' }}"/>
                @error('description')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block text-sm text-gray-600 ">Стоистость</label>
                <input name="price" type="number" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300      " placeholder="Стоимость" value="{{ isset($item) ? $item->price : '' }}"/>
                @error('price')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block text-sm text-gray-600 ">Количество</label>
                <input name="quantity" min="0" type="number" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300      " placeholder="Количество" value="{{ isset($item) ? $item->quantity : '' }}"/>
                @error('quantity')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block text-sm text-gray-600 ">Категория</label>
                <select name="category_id" class="max-w-lg px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300     ">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" @if(isset($item) && $item->category_id == $category->id) selected="selected" @endif>{{ $category->category }}</option>
                    @endforeach
                </select>
                @error('category_id')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block text-sm text-gray-600 ">Превью</label>
                @if(isset($item) && $item->source)
                    <div>
                        <img class="h-32 w-32" src="/storage/items/thumbnails/{{ $item->source }}">
                    </div>
                @endif

                <input name="source" type="file" class="w-full h-12" placeholder="Превью" />
                @error('source')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <div class="w-full flex justify-end">
                    <button type="submit" class="w-fit px-4 py-3 text-white bg-blue-600 rounded-md hover:bg-blue-500 hover:outline-none">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
