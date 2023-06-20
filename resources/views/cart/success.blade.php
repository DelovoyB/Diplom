@extends('layouts.app')
@section('title', 'Корзина')
@section('content')

    <section class="container mx-auto flex items-center justify-center min-h-screen">
        <div class="flex flex-col items-center shadow-2xl p-8">
            <svg class="w-24 h-24 my-6" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#00ff33" stroke="#00ff33"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#00a81c" d="M512 64a448 448 0 1 1 0 896 448 448 0 0 1 0-896zm-55.808 536.384-99.52-99.584a38.4 38.4 0 1 0-54.336 54.336l126.72 126.72a38.272 38.272 0 0 0 54.336 0l262.4-262.464a38.4 38.4 0 1 0-54.272-54.336L456.192 600.384z"></path></g></svg>
            <h2 class="text-gray-800 text-2xl mb-6 text-center">Оплата произведена успешно!</h2>
            <h2 class="text-gray-800 text-xl mb-6">Номер заказа #{{ $orderId }}</h2>
            <a href="{{ route("items.index") }}" class="text-white bg-blue-600 text-xl px-3 py-2 hover:bg-blue-500">Вернуться в магазин</a>
        </div>
    </section>

@endsection
