@extends('layouts.admin')
@section('title', 'Изображения')
@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{ isset($image) ? "Изменить"  : "Добавить" }} изображение</h3>

        <div class="mt-8">
            <form enctype="multipart/form-data" class="w-full flex flex-col space-y-2 mt-5" method="Post" action="{{ isset($image) ? route("admin.images.update", $image->id) : route("admin.images.store") }}">
                @csrf

                @if(isset($image))
                    @method('Put')
                @endif
                <label class="block text-sm text-gray-600 ">Изображение</label>
                @if(isset($image) && $image->source)
                    <div>
                        <img class="h-32 w-32" src="/storage/items/products/{{ $image->source }}">
                    </div>
                @endif

                <input name="source" type="file" class="w-full h-12" placeholder="Изображение" />
                @error('source')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block text-sm text-gray-600 ">Товар</label>
                <select name="item_id" class="max-w-lg px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300     ">
                    @foreach($items as $item)
                        <option value="{{ $item->id }}" @if(isset($image) && $image->item_id == $item->id) selected="selected" @endif>{{ $item->title }}</option>
                    @endforeach
                </select>
                @error('item_id')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <div class="w-full flex justify-end">
                    <button type="submit" class="w-fit px-4 py-3 text-white bg-blue-600 rounded-md hover:bg-blue-500 hover:outline-none">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
