@extends('layouts.admin')
@section('title', 'Отзывы')
@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{ isset($comment) ? "Изменить"  : "Добавить" }} отзыв</h3>

        <div class="mt-8">
            <form enctype="multipart/form-data" class="w-full flex flex-col space-y-2 mt-5" method="Post" action="{{ isset($comment) ? route("admin.comments.update", $comment->id) : route("admin.comments.store") }}">
                @csrf

                @if(isset($comment))
                    @method('Put')
                @endif

                <label class="block text-sm text-gray-600 ">Текст</label>
                <input name="text" type="text" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300      " placeholder="Текст" value="{{ isset($comment) ? $comment->text : '' }}"/>
                @error('text')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block text-sm text-gray-600 ">Пользователь</label>
                <select name="user_id" class="max-w-lg px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300     ">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" @if(isset($comment) && $comment->user_id == $user->id) selected="selected" @endif>{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('user_id')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block text-sm text-gray-600 ">Товар</label>
                <select name="item_id" class="max-w-lg px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300     ">
                    @foreach($items as $item)
                        <option value="{{ $item->id }}" @if(isset($comment) && $comment->item_id == $item->id) selected="selected" @endif>{{ $item->title }}</option>
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
