@extends('layouts.app')
@section('title', $item->title)
@section('content')
    @include('partials.header')

    <section class="pb-12 sm:pb-16">
        <div class="container mx-auto px-4">
            <a href="{{ url()->previous() }}" class="flex w-fit flex-row items-center justify-center mt-6 mb-24">
                <svg class="w-6 h-6" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#6b7280" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path><path fill="#6b7280" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path></g></svg>
                <span class="text-gray-500">Назад</span>
            </a>
            <div class="lg:col-gap-12 xl:col-gap-16 mt-8 grid grid-cols-1 gap-12 lg:mt-12 lg:grid-cols-5 lg:gap-16">
                <div class="lg:col-span-3 lg:row-end-1">
                    <div class="lg:flex lg:items-start lg:gap-24">
                        <div class="lg:order-2 lg:ml-5">
                            <div class="w-full overflow-hidden rounded-lg">
                                <img id="thumb" class="h-full w-full max-w-full object-scale-down" src="/storage/items/thumbnails/{{ $item->source }}" alt="" draggable="false"/>
                            </div>
                        </div>

                        <div class="mt-2 w-full lg:order-1 lg:w-32 lg:flex-shrink-0">
                            <div class="flex flex-row gap-2 items-start md:justify-around lg:flex-col">

                                <button type="button" value="thumbnail" class="slide flex-0 aspect-square mb-3 h-20 overflow-hidden rounded-lg border border-gray-900 text-center" onclick="edit(this)">
                                    <img class="h-full w-full object-cover" src="/storage/items/thumbnails/{{ $item->source }}" alt="" draggable="false"/>
                                </button>

                                @foreach($images as $image)

                                    <button type="button" value="{{ $image->source }}" class="slide flex-0 aspect-square mb-3 h-20 overflow-hidden rounded-lg border border-gray-900 text-center" onclick="edit(this)">
                                        <img class="h-full w-full object-cover" src="/storage/items/products/{{ $image->source }}" alt="" draggable="false"/>
                                    </button>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 lg:row-span-2 lg:row-end-2">
                    <div class="sm: text-2xl font-bold text-gray-900 sm:text-3xl">{{ $item->title }}</div>

                    @if($item->quantity<1)
                    <span class="text-red-600 font-bold text-lg">Товара нет в наличии!</span>
                    @endif

                    <div class="my-5 flex flex-col items-center justify-between space-y-4 border-t border-b py-4 sm:flex-row sm:space-y-0 md:flex-row lg:flex-col-reverse xl:flex-row">
                        <div class="flex items-end lg:mt-4 xl:mt-0">
                            <span class="text-3xl font-bold">{{ $item->price }} ₽</span>
                        </div>

                        <form method="Post" action="@if ($cart->where('id', $item->id)->count()) {{ route('cart.delete') }} @else {{ route('cart.store') }} @endif" class="flex items-center justify-between flex-col lg:flex-row">
                            @csrf
                            @if ($cart->where('id', $item->id)->count())
                                <input type="hidden" value="{{ $item->id }}" name="item_id">
                                <button type="submit" class="text-white font-medium rounded-lg text-xl px-5 py-2.5 md:px-3 md:py-1.5 lg:px-6 lg:py-3 text-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300">Удалить из корзины</button>
                            @else
                                <div class="group">
                                    <button id="addToCart{{ $item->id }}" onclick="openQuantity({{ $item->id }})" type="button" class="flex flex-row items-center text-white font-medium rounded-lg text-xl px-5 py-2.5 md:px-3 md:py-1.5 lg:px-5 lg:py-2.5 text-center {{ $item->quantity == 0 ? "bg-blue-400" : "bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300"}}" @if($item->quantity<1) disabled @endif>
                                        <svg class="w-8 h-8 mr-2" viewBox="0 0 22 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>bag_plus [#1122]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-340.000000, -3159.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M306.000448,3018 C306.000448,3018.552 305.552448,3019 305.000448,3019 L304.000448,3019 C304.000448,3020 304.105448,3021 303.000448,3021 C301.907448,3021 302.000448,3020 302.000448,3019 C301.000448,3019 300.000448,3019.105 300.000448,3018 C300.000448,3016.907 301.000448,3017 302.000448,3017 C302.000448,3016 301.895448,3015 303.000448,3015 C304.104448,3015 304.000448,3016 304.000448,3017 C305.000448,3017 306.000448,3016.895 306.000448,3018 L306.000448,3018 Z M297.000448,3005 L291.000448,3005 L291.000448,3004 C291.000448,3002.346 292.346448,3001 294.000448,3001 C295.654448,3001 297.000448,3002 297.000448,3004 L297.000448,3005 Z M300.694448,3007.859 L301.488448,3013.418 C302.078448,3013.071 302.742448,3012.929 303.454448,3013.038 L302.551448,3006.717 C302.410448,3005.732 301.566448,3005 300.571448,3005 L299.000448,3005 L299.000448,3004 C299.000448,3001 296.757448,2999 294.000448,2999 C291.243448,2999 289.000448,3001.243 289.000448,3004 L289.000448,3005 L287.735448,3005 C286.739448,3005 285.590448,3005.732 285.449448,3006.717 L284.020448,3016.717 C283.848448,3017.922 284.783448,3019 286.000448,3019 L298.000448,3019 L298.000448,3017 L287.153448,3017 C286.545448,3017 286.077448,3016.461 286.163448,3015.859 L287.306448,3007.859 C287.377448,3007.366 287.799448,3007 288.296448,3007 L289.000448,3007 L289.000448,3009 C289.000448,3009.552 289.448448,3010 290.000448,3010 C290.552448,3010 291.000448,3009.552 291.000448,3009 L291.000448,3007 L297.000448,3007 L297.000448,3009 C297.000448,3009.552 297.448448,3010 298.000448,3010 C298.552448,3010 299.000448,3009.552 299.000448,3009 L299.000448,3007 L299.704448,3007 C300.201448,3007 300.623448,3007.366 300.694448,3007.859 L300.694448,3007.859 Z" id="bag_plus-[#1122]"> </path> </g> </g> </g> </g></svg>
                                        <div>Добавить в корзину</div>
                                    </button>
                                    <div id="addToCartQuantity{{ $item->id }}" class="hidden flex-row w-full bg-blue-700 rounded-lg">
                                        <button id="quantityM{{ $item->id }}" onclick="quantityM({{ $item->id }}, {{ $item->quantity }})" type="button" class="border-r border-blue-400 px-4 text-white flex text-xl text-center my-auto">-</button>
                                        <input type="hidden" value="{{ $item->id }}" name="item_id">
                                        <input id="quantity{{ $item->id }}" type="number" min="1" max="{{ $item->quantity }}" name="quantity" value="1" required="required" class="text-white w-10 text-xl text-center bg-blue-700 hover:bg-blue-800">
                                        <button id="quantityP{{ $item->id }}" onclick="quantityP({{ $item->id }}, {{ $item->quantity }})" type="button" class="border-l border-r border-blue-400 px-4 text-white flex text-xl text-center my-auto">+</button>
                                        <button type="submit" class="block text-white font-medium rounded-r-lg text-xl px-5 py-2.5 md:px-3 md:py-1.5 lg:px-5 lg:py-2.5 text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">Готово</button>
                                    </div>
                                </div>
                            @endif
                        </form>
                    </div>

                    <span class="text-xl text-gray-900 sm:text-xl">{{ $item->description }}</span>

                    <ul class="mt-8 space-y-2">
                        <li class="flex items-center text-left text-sm font-medium text-gray-600">
                            <svg class="mr-2 block h-5 w-5 align-middle text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" class=""></path>
                            </svg>
                            Бесплатная доставка по России
                        </li>

                        <li class="flex items-center text-left text-sm font-medium text-gray-600">
                            <svg class="mr-2 block h-5 w-5 align-middle text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" class=""></path>
                            </svg>
                            Отменяйте в любое время
                        </li>
                    </ul>
                </div>

                <div class="lg:col-start-2 lg:col-span-3">
                    <div class="flex gap-4 border-b border-gray-300">
                            <div title="" class="inline-flex items-center border-b-2 border-transparent py-4 text-sm font-medium text-black">Отзывы
                                <span class="ml-2 block rounded-full bg-blue-600 px-2 py-px text-xs font-bold text-white"> {{ $comments->count() }} </span>
                            </div>
                    </div>

                    <form action="{{ route('comment') }}" method="Post" class="flow-root sm:mt-12 border-b border-gray-300">
                        @csrf
                        <span class="text-2xl font-bold">Поделитесь своими впечатлениями о товаре!</span>
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <textarea name="message" class="mt-4 block h-32 w-full rounded-md border border-gray-200 bg-white px-5 py-3 text-gray-700 placeholder-gray-400 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 md:h-32" placeholder="Сообщение" required></textarea>
                        @error('message')
                        <p class="text-red-500">{{ $message }}</p>
                        @enderror
                        <button type="submit" class="py-2 mt-4 mb-6 px-6 bg-blue-600 text-white rounded-lg">Оставить отзыв</button>
                    </form>

                    @foreach($comments as $comment)

                        <div class="mt-8 flow-root sm:mt-12 border-b border-gray-300">
                            <div class="flex flex-row items-center">
                                <img class="w-16 h-16 mr-2 rounded-full object-cover" src="/storage/users/{{ $comment->avatar }}" alt="">
                                <span class="text-2xl font-bold">{{ $comment->name }}</span>
                            </div>
                            <p class="mt-4 mb-6">{{ $comment->text }}</p>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
    <script>
        function edit(objButton)
        {
            if (objButton.value === "thumbnail"){
                document.getElementById("thumb").src="/storage/items/thumbnails/{{ $item->source }}";
            }
            else{
                document.getElementById("thumb").src=`/storage/items/products/${objButton.value}`;
            }
        }
    </script>
@endsection
