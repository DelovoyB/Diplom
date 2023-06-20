@extends('layouts.app')
@section('title', 'Корзина')
@section('content')
    @include('partials.header')

    <section class="container mx-auto mt-10">
        <script src="https://securepay.tinkoff.ru/html/payForm/js/tinkoff_v2.js"></script>
        <form method="Post" action="{{ route('checkout_process') }}" name="TinkoffPayForm" {{--onsubmit="pay(this); return false;"--}} class="flex flex-col items-center lg:items-start lg:flex-row shadow-md my-10 border-2 border-gray-200">
            @csrf
            <input class="tinkoffPayRow" type="hidden" name="terminalkey" value="TinkoffBankTest">
            <input class="tinkoffPayRow" type="hidden" name="frame" value="true">
            <input class="tinkoffPayRow" type="hidden" name="language" value="ru">
            <input class="tinkoffPayRow" type="hidden" placeholder="Сумма заказа" name="amount" value="{{ str((float)Cart::total()) }}" required>
            <input class="tinkoffPayRow" type="hidden" placeholder="Номер заказа" name="order" value="">
            <input class="tinkoffPayRow" type="hidden" placeholder="Описание заказа" name="description">
            <input class="tinkoffPayRow" type="hidden" placeholder="ФИО плательщика" name="name" value="{{ Auth::user()['name'] }}">
            <input class="tinkoffPayRow" type="hidden" placeholder="E-mail" name="email" value="{{ Auth::user()['email'] }}">
            <div class="w-full bg-white text-black px-10 py-10">
                <div class="flex justify-between border-b pb-8">
                    <h1 class="font-semibold text-xl md:text-2xl">Финальные детали</h1>
                </div>

                <div class="flex w-full flex-col md:flex-row md:gap-8">
                    <div class="flex-1 mt-6">
                        <label class="mb-2 block text-sm text-gray-600">Номер телефона</label>
                        <input name="phone" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="918-555-3535" class="tinkoffPayRow mt-2 block w-full rounded-md border border-gray-200 bg-white px-5 py-3 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" required/>
                        @error('phone')
                        <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6 flex-1">
                        <label class="mb-2 block text-sm text-gray-600">Адрес доставки</label>
                        <input name="address" type="text" placeholder="Москва, ул. Пушкина 15а" class="mt-2 block w-full rounded-md border border-gray-200 bg-white px-5 py-3 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" required/>
                        @error('address')
                        <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6 w-full md:w-1/2">
                    <label class="mb-2 block text-sm text-gray-600">Сообщение</label>
                    <textarea name="message" class="mt-2 block h-32 w-full rounded-md border border-gray-200 bg-white px-5 py-3 text-gray-700 placeholder-gray-400 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 md:h-32" placeholder="Сообщение"></textarea>
                    @error('message')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <a href="{{ route('cart') }}" class="flex font-semibold text-blue-600 text-sm mt-4 md:mt-10">
                    <svg class="fill-current mr-2 text-blue-600 w-4" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
                    В корзину
                </a>
            </div>

            <div id="summary" class="flex flex-col w-full lg:w-1/4 px-8 pb-10 md:pt-10 bg-white text-black text-base lg:text-sm">
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
                        <input type="hidden" value="{{ Cart::total() }}" name="total">
                    </div>
                    <button type="submit" class="tinkoffPayRow font-semibold py-3 text-center text-white uppercase w-full @if(Cart::content()->count() < 1) bg-blue-400 @else bg-blue-600 hover:bg-green-500 @endif ">Оплатить</button>
                </div>
            </div>

        </form>
    </section>

    @include('partials.footer')
@endsection
