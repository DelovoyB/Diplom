@extends('layouts.app')
@section('title', 'Корзина')
@section('content')
    @include('partials.header')

    <section class="container mx-auto mt-10">
        <div class="flex flex-col items-center lg:items-start lg:flex-row shadow-md my-10 border-2 border-gray-200">
            <div class="w-full bg-white text-black px-10 py-10">
                <div class="flex justify-between border-b pb-8">
                    <h1 class="font-semibold text-xl md:text-2xl">Корзина</h1>
                    <h2 class="font-semibold text-xl md:text-2xl">{{ Cart::content()->count() }} товар(ов)</h2>
                </div>
                <div class="hidden md:flex mt-10 mb-5">
                    <h3 class="font-semibold text-xs uppercase w-2/5">Детали заказа</h3>
                    <h3 class="font-semibold text-center text-xs uppercase w-1/5 text-center">Количество</h3>
                    <h3 class="font-semibold text-center text-xs uppercase w-1/5 text-center">Цена</h3>
                    <h3 class="font-semibold text-center text-xs uppercase w-1/5 text-center">Сумма</h3>
                </div>

                @if(\Gloudemans\Shoppingcart\Facades\Cart::content()->count() < 1)
                    <h1 class="text-3xl text-red-500">Корзина пуста!</h1>
                    <h2 class="text-xl text-red-500">Попробуйте добавить несколько товаров в корзину.</h2>
                @endif

                @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)

                    @include('cart.partials.cart_item')

                @endforeach

                <a href="{{ route('items.index') }}" class="flex font-semibold text-blue-600 text-sm mt-4 md:mt-10">

                    <svg class="fill-current mr-2 text-blue-600 w-4" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
                    В магазин
                </a>
            </div>

            <div id="summary" class="flex flex-col w-full lg:w-1/4 px-8 pb-10 md:pt-10 bg-white text-base lg:text-sm">
                <h1 class="font-semibold text-2xl border-b pb-4 md:pb-8">Итог</h1>
                <div class="flex justify-between mt-5 md:mt-10 mb-5">
                    <span class="font-semibold uppercase">Товаров {{ Cart::content()->count() }}</span>
                    <span class="font-semibold">{{ Cart::total() }} ₽</span>
                </div>
                <div class="flex justify-between mt-5 mb-5">
                    <span class="font-semibold uppercase">Доставка</span>
                    <span class="font-semibold">Бесплатно</span>
                </div>
                <div class="border-t md:mt-8 flex flex-col">
                    <div class="flex font-semibold justify-between py-6 uppercase">
                        <span>Итого</span>
                        <span>{{ Cart::total() }} ₽</span>
                    </div>
                    <a href="{{ route('checkout', Auth::id()) }}" class="font-semibold py-3 text-center text-white uppercase w-full @if(Cart::content()->count() < 1) bg-blue-400 pointer-events-none @else bg-blue-600 hover:bg-blue-500 @endif ">Оформить заказ</a>
                </div>
            </div>

        </div>
    </section>

    @include('partials.footer')
@endsection
