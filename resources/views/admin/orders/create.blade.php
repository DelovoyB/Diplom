@extends('layouts.admin')
@section('title', 'Заказы')
@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{ isset($order) ? "Изменить"  : "Добавить" }} заказ</h3>

        <div class="mt-8">
            <form enctype="multipart/form-data" class="w-full flex flex-col space-y-2 mt-5" method="Post" action="{{ isset($order) ? route("admin.orders.update", $order->id) : route("admin.orders.store") }}">
                @csrf

                @if(isset($order))
                    @method('Put')
                @endif

                <label class="block text-sm text-gray-600 ">Пользователь</label>
                <select name="user_id" class="max-w-lg px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300     ">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" @if(isset($order) && $order->user_id == $user->id) selected="selected" @endif>{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('user_id')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block text-sm text-gray-600 ">Телефон</label>
                <input name="phone" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="918-555-3535" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300      " value="{{ isset($order) ? $order->phone : '' }}"/>
                @error('phone')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block text-sm text-gray-600 ">Адрес</label>
                <input name="address" type="text" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300      " placeholder="Адрес" value="{{ isset($order) ? $order->address : '' }}"/>
                @error('address')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block text-sm text-gray-600 ">Сообщение</label>
                <input name="message" type="text" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300      " placeholder="Сообщение" value="{{ isset($order) ? $order->message : '' }}"/>
                @error('message')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block text-sm text-gray-600 ">Статус</label>
                <select name="status" class="max-w-lg px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300     ">
                    <option value="0" @if(isset($order) && $order->status == "0") selected="selected" @endif>0</option>
                    <option value="1" @if(isset($order) && $order->status == "1") selected="selected" @endif>1</option>
                </select>
                @error('status')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <div class="w-full flex justify-end">
                    <button type="submit" class="w-fit px-4 py-3 text-white bg-blue-600 rounded-md hover:bg-blue-500 hover:outline-none">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
