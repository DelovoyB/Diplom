@extends('layouts.admin')
@section('title', 'Заказанные товары')
@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{ isset($ordered_item) ? "Изменить"  : "Добавить" }} товар</h3>

        <div class="mt-8">
            <form enctype="multipart/form-data" class="w-full flex flex-col space-y-2 mt-5" method="Post" action="{{ isset($ordered_item) ? route("admin.ordered_items.update", $ordered_item->id) : route("admin.ordered_items.store") }}">
                @csrf

                @if(isset($ordered_item))
                    @method('Put')
                @endif

                <label class="block text-sm text-gray-600 ">Товар</label>
                <select id="selectionOrder" name="item_id" class="max-w-lg px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300     ">
                    @foreach($items as $item)
                        <option value="{{ $item->id }}" @if(isset($ordered_item) && $ordered_item->item_id == $item->id || $item->id == 1) selected="selected" @endif>{{ $item->title }}</option>
                    @endforeach
                </select>
                @error('item_id')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block text-sm text-gray-600 ">Количество</label>
                <input id="ordered_items_quantity" name="quantity" min="1" max="2" type="number" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300      " placeholder="Количество" value="{{ isset($ordered_item) ? $ordered_item->quantity : '' }}"/>
                @error('quantity')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block text-sm text-gray-600 ">Заказ</label>
                <select name="order_id" class="max-w-lg px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300     ">
                    @foreach($orders as $order)
                        <option value="{{ $order->id }}" @if(isset($ordered_item) && $ordered_item->order_id == $order->id) selected="selected" @endif>{{ $order->id }}</option>
                    @endforeach
                </select>
                @error('order_id')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <div class="w-full flex justify-end">
                    <button type="submit" class="w-fit px-4 py-3 text-white bg-blue-600 rounded-md hover:bg-blue-500 hover:outline-none">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
