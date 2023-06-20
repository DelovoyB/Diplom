@extends('layouts.app')
@section('title', 'Личный кабинет')
@section('content')
    @include('partials.header')

    <section class="container w-full flex flex-col justify-between mx-auto lg:my-5 p-5">
        <div class="flex flex-col lg:flex-row lg:shadow-2xl rounded-md md:p-8 mb-12">
                <img class="w-56 h-56 md:w-96 md:h-96 object-cover mb-4 mx-auto md:mx-0 lg:mb-0 md:mr-12 rounded-lg" src="/storage/users/{{ $user->avatar }}" alt="">
            <div class="flex flex-1 flex-col">
                <div class="flex flex-row items-center">
                    <svg class="hidden md:block w-8 h-8 mr-2" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M12,11A5,5,0,1,0,7,6,5.006,5.006,0,0,0,12,11Zm0-8A3,3,0,1,1,9,6,3,3,0,0,1,12,3ZM4,23H20a1,1,0,0,0,1-1V18a5.006,5.006,0,0,0-5-5H8a5.006,5.006,0,0,0-5,5v4A1,1,0,0,0,4,23Zm1-5a3,3,0,0,1,3-3h8a3,3,0,0,1,3,3v3H5Z"></path></g></svg>
                    <div class="text-2xl md:text-3xl font-semibold mx-auto md:mx-0">Личная информация</div>
                </div>
                <div class="flex flex-col text-xl md:text-2xl w-full mt-8 space-y-8">
                    <div class="flex flex-1 flex-row justify-between mx-42">
                        <div class="flex flex-row items-center">
                            <svg class="mr-4 w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="User / User_Card_ID"> <path id="Vector" d="M6 18C6.06366 18 6.12926 18 6.19691 18H12M6 18C5.01173 17.9992 4.49334 17.9868 4.0918 17.7822C3.71547 17.5905 3.40973 17.2837 3.21799 16.9074C3 16.4796 3 15.9203 3 14.8002V9.2002C3 8.08009 3 7.51962 3.21799 7.0918C3.40973 6.71547 3.71547 6.40973 4.0918 6.21799C4.51962 6 5.08009 6 6.2002 6H17.8002C18.9203 6 19.4796 6 19.9074 6.21799C20.2837 6.40973 20.5905 6.71547 20.7822 7.0918C21 7.5192 21 8.07899 21 9.19691V14.8031C21 15.921 21 16.48 20.7822 16.9074C20.5905 17.2837 20.2837 17.5905 19.9074 17.7822C19.48 18 18.921 18 17.8031 18H12M6 18C6.00004 16.8954 7.34317 16 9 16C10.6569 16 12 16.8954 12 18M6 18C6 18 6 17.9999 6 18ZM18 14H14M18 11H15M9 13C7.89543 13 7 12.1046 7 11C7 9.89543 7.89543 9 9 9C10.1046 9 11 9.89543 11 11C11 12.1046 10.1046 13 9 13Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                            <div class="hidden md:block">Имя и Фамилия</div>
                        </div>
                        <div class="text-center flex items-center truncate">{{ $user->name }}</div>
                    </div>
                    <div class="flex flex-1 flex-row justify-between mx-42">
                        <div class="flex flex-row items-center">
                            <svg class="mr-4 w-6 h-6" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M22,7H13V2a1,1,0,0,0-1-1H2A1,1,0,0,0,1,2V22a1,1,0,0,0,1,1H22a1,1,0,0,0,1-1V8A1,1,0,0,0,22,7ZM11,13H3V11h8Zm0-5V9H3V7h8ZM3,15h8v2H3ZM11,3V5H3V3ZM3,19h8v2H3Zm18,2H13V9h8Zm-5-5H14V14h2Zm0,4H14V18h2Zm4-4H18V14h2Zm-4-4H14V10h2Zm4,0H18V10h2Zm0,8H18V18h2Z"></path></g></svg>
                            <div class="hidden md:block">Компания</div>
                        </div>
                        <div class="text-center flex items-center truncate @if(!isset($user->represents)) text-red-600 font-bold @endif">{{ $user->represents }} @if(!isset($user->represents)) Отсутствует @endif</div>
                    </div>
                    <div class="flex flex-1 flex-row justify-between mx-42">
                        <div class="flex flex-row items-center">
                            <svg class="mr-4 w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 7.00005L10.2 11.65C11.2667 12.45 12.7333 12.45 13.8 11.65L20 7" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <rect x="3" y="5" width="18" height="14" rx="2" stroke="#000000" stroke-width="2" stroke-linecap="round"></rect> </g></svg>
                            <div class="hidden md:block">Email</div>
                        </div>
                        <div class="text-center flex items-center truncate">{{ $user->email }}</div>
                    </div>
                    <div class="flex flex-1 flex-row justify-between mx-42">
                        <div class="flex flex-row items-center">
                            <svg class="mr-4 w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 10V7C20 5.89543 19.1046 5 18 5H6C4.89543 5 4 5.89543 4 7V10M20 10V19C20 20.1046 19.1046 21 18 21H6C4.89543 21 4 20.1046 4 19V10M20 10H4M8 3V7M16 3V7" stroke="#000000" stroke-width="2" stroke-linecap="round"></path> <rect x="6" y="12" width="3" height="3" rx="0.5" fill="#000000"></rect> <rect x="10.5" y="12" width="3" height="3" rx="0.5" fill="#000000"></rect> <rect x="15" y="12" width="3" height="3" rx="0.5" fill="#000000"></rect> </g></svg>
                            <div class="hidden md:block">Дата создания</div>
                        </div>
                        <div class="text-center flex items-center truncate">{{ $user->created_at }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-1 flex-col lg:shadow-2xl rounded-md md:p-8">
            <div class="flex flex-row items-center justify-center md:justify-start">
                <svg class="w-10 h-10 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.5 7.5H16.1C16.9401 7.5 17.3601 7.5 17.681 7.66349C17.9632 7.8073 18.1927 8.03677 18.3365 8.31901C18.5 8.63988 18.5 9.05992 18.5 9.9V17.5C18.5 18.6046 17.6046 19.5 16.5 19.5V19.5C15.3954 19.5 14.5 18.6046 14.5 17.5V7.7C14.5 6.57989 14.5 6.01984 14.282 5.59202C14.0903 5.21569 13.7843 4.90973 13.408 4.71799C12.9802 4.5 12.4201 4.5 11.3 4.5H7.7C6.57989 4.5 6.01984 4.5 5.59202 4.71799C5.21569 4.90973 4.90973 5.21569 4.71799 5.59202C4.5 6.01984 4.5 6.5799 4.5 7.7V16.3C4.5 17.4201 4.5 17.9802 4.71799 18.408C4.90973 18.7843 5.21569 19.0903 5.59202 19.282C6.01984 19.5 6.5799 19.5 7.7 19.5H16.5" stroke="#000000"></path> <path d="M11 6.5H8C7.53406 6.5 7.30109 6.5 7.11732 6.57612C6.87229 6.67761 6.67761 6.87229 6.57612 7.11732C6.5 7.30109 6.5 7.53406 6.5 8C6.5 8.46594 6.5 8.69891 6.57612 8.88268C6.67761 9.12771 6.87229 9.32239 7.11732 9.42388C7.30109 9.5 7.53406 9.5 8 9.5H11C11.4659 9.5 11.6989 9.5 11.8827 9.42388C12.1277 9.32239 12.3224 9.12771 12.4239 8.88268C12.5 8.69891 12.5 8.46594 12.5 8C12.5 7.53406 12.5 7.30109 12.4239 7.11732C12.3224 6.87229 12.1277 6.67761 11.8827 6.57612C11.6989 6.5 11.4659 6.5 11 6.5Z" stroke="#000000"></path> <path d="M6.5 11.5H12.5" stroke="#000000" stroke-linecap="round"></path> <path d="M6.5 13.5H12.5" stroke="#000000" stroke-linecap="round"></path> <path d="M6.5 15.5H12.5" stroke="#000000" stroke-linecap="round"></path> <path d="M6.5 17.5H10.5" stroke="#000000" stroke-linecap="round"></path> </g></svg>
                <div class="text-2xl md:text-3xl font-semibold">История заказов</div>
            </div>
            @if($orders->count() == 0)
                <div class="w-full text-center lg:text-left text-xl text-red-600 mt-4">Заказы отсутствуют</div>
            @else
                <div class="grid grid-cols-2 md:grid-cols-4 text-xl text-center w-full mt-8 space-y-8">
                    <div class="mt-auto">
                        ID
                    </div>
                    <div class="hidden md:block">
                        Сумма
                    </div>
                    <div class="hidden md:block">
                        Дата оформления
                    </div>
                    <div class="">
                        Статус
                    </div>
                    @foreach($orders as $order)
                        <div class="border-t-2 pt-2 flex flex-row items-center justify-center">
                            <div class="w-1/2 text-left">
                                <button id="orderButton{{ $order->id }}" class="w-min duration-500 ease-out" onclick="openOrder({{ $order->id }})">
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(180)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Shape / Triangle"> <path id="Vector" d="M4.37891 15.1999C3.46947 16.775 3.01489 17.5634 3.08281 18.2097C3.14206 18.7734 3.43792 19.2851 3.89648 19.6182C4.42204 20.0001 5.3309 20.0001 7.14853 20.0001H16.8515C18.6691 20.0001 19.5778 20.0001 20.1034 19.6182C20.5619 19.2851 20.8579 18.7734 20.9172 18.2097C20.9851 17.5634 20.5307 16.775 19.6212 15.1999L14.7715 6.79986C13.8621 5.22468 13.4071 4.43722 12.8135 4.17291C12.2957 3.94236 11.704 3.94236 11.1862 4.17291C10.5928 4.43711 10.1381 5.22458 9.22946 6.79845L4.37891 15.1999Z" stroke="#000000" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                                </button>
                            </div>
                            <div class="w-1/2 text-left">{{ $order->id }}</div>
                        </div>
                        <div class="hidden md:block border-t-2 pt-2">{{ $order->total }} ₽</div>
                        <div class="hidden md:block border-t-2 pt-2">{{ $order->created_at }}</div>
                        <div class="@if($order->status == 1) text-green-600 @else text-red-600 @endif border-t-2 pt-2">
                            @if($order->status == 1)
                                Выполнен
                            @else
                                Обработка
                            @endif
                        </div>
                        @foreach($ordered_items as $ordered_item)
                            @if($ordered_item->order_id == $order->id)
                                <div class="order{{ $order->id }} hidden flex justify-center items-center ml-4"><svg class="w-8 h-8" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Arrow / Arrow_Sub_Down_Right"> <path id="Vector" d="M13 11L18 16M18 16L13 21M18 16H10.1969C9.07899 16 8.5192 16 8.0918 15.7822C7.71547 15.5905 7.40973 15.2839 7.21799 14.9076C7 14.4798 7 13.9201 7 12.8V3" stroke="#000000" stroke-width="0.8399999999999999" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg></div>
                                <div class="order{{ $order->id }} hidden flex flex-row items-center col-span-1 md:col-span-3">
                                        <img class="w-16 h-16 object-cover mr-6" src="/storage/items/thumbnails/{{ $ordered_item->source }}" alt="">
                                        <div class="hidden md:block mr-6">{{ $ordered_item->title }}</div>
                                        <div class="hidden md:block mr-2"><b>{{ $ordered_item->price }}</b> ₽ x</div>
                                        <div class="mr-2"><b>{{ $ordered_item->quantity }}</b>шт.</div>
                                    <div class="hidden md:block">= <b>{{ $ordered_item->price * $ordered_item->quantity }}</b> ₽</div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    @include('partials.footer')
@endsection
