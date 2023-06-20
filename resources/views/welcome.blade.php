@extends('layouts.app')
@section('title', 'Главная страница')
@section('content')
    @include('partials.header')

    <section class="bg-white">
        <div class="container mx-auto px-6 py-16 text-center">
            <div class="mx-auto max-w-lg">
                <h1 class="text-3xl font-bold text-gray-800 lg:text-4xl">Устанавливайте вентиляции наивысшего класса</h1>
                <p class="mt-6 mb-8 text-gray-500">Позвольте нам обеспечить вашему бизнесу высокое качество вентиляции и холодильного оборудования.</p>
                <a href="{{ route("items.index") }}" class="mt-6 rounded-lg bg-blue-600 px-6 py-2.5 text-center text-sm font-medium  leading-5 text-white hover:bg-blue-500 focus:outline-none lg:mx-0 lg:w-auto">Перейти к продукции</a>
            </div>

            <div class="mt-10 flex justify-center">
                <img class="h-96 w-full rounded-xl object-cover pointer-events-none lg:w-4/5" src="storage/items/air.jpg"/>
            </div>
            <hr class="border-gray-200 mt-12">
        </div>
    </section>

    <section class="bg-white ">
        <div class="container px-6 py-10 mx-auto">
            <div class="lg:flex lg:items-center">
                <div class="w-full space-y-12 lg:w-1/2 ">
                    <div>
                        <h1 class="text-3xl font-semibold text-gray-800 lg:text-4xl ">Высокое качество<br>- залог успеха</h1>

                        <div class="mt-2">
                            <span class="inline-block w-40 h-1 rounded-full bg-blue-500"></span>
                            <span class="inline-block w-3 h-1 ml-1 rounded-full bg-blue-500"></span>
                            <span class="inline-block w-1 h-1 ml-1 rounded-full bg-blue-500"></span>
                        </div>
                    </div>

                    <div class="md:flex md:items-start md:-mx-4">
                            <span class="inline-block p-2 text-blue-100 bg-blue-500 rounded-xl md:mx-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>
                            </span>

                        <div class="mt-4 md:mx-4 md:mt-0">
                            <h1 class="text-2xl font-semibold text-gray-700">Быстрая доставка</h1>

                            <p class="mt-3 text-gray-500">
                                Быстрая доставка - это наша главная ценность! Доверьтесь нам и получите свой заказ максимально быстро и удобно
                            </p>
                        </div>
                    </div>

                    <div class="md:flex md:items-start md:-mx-4">
                            <span class="inline-block p-2 text-blue-100 bg-blue-500 rounded-xl md:mx-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                            </span>

                        <div class="mt-4 md:mx-4 md:mt-0">
                            <h1 class="text-2xl font-semibold text-gray-700">Гибкая настройка</h1>

                            <p class="mt-3 text-gray-500">
                                Наша продукция может быть настроена под любые задачи, чтобы удовлетворить потребности каждого клиента
                            </p>
                        </div>
                    </div>

                    <div class="md:flex md:items-start md:-mx-4">
                            <span class="inline-block p-2 text-blue-100 bg-blue-500 rounded-xl md:mx-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                                </svg>
                            </span>

                        <div class="mt-4 md:mx-4 md:mt-0">
                            <h1 class="text-2xl font-semibold text-gray-700">Скидки постоянным клиентам</h1>

                            <p class="mt-3 text-gray-500">
                                Мы ценим наших постоянных клиентов и рады предложить им особые скидки на все наши товары и услуги
                            </p>
                        </div>
                    </div>
                </div>

                <div class="hidden lg:flex lg:items-center lg:w-1/2 lg:justify-center">
                    <img class="w-1/2 h-1/2 object-cover xl:w-3/4 xl:w-3/4 rounded-full pointer-events-none" src="storage/items/air2.png" alt="">
                </div>
            </div>

            <hr class="border-gray-200 my-12">

            <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                    <svg class="h-28" fill="#e60505" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M23.714 15.214h-1.365c0-0.13-0.026-0.255-0.068-0.38-0.109-0.271-0.333-0.484-0.615-0.568-0.396-0.125-0.823-0.12-1.219 0.026-0.333 0.12-0.594 0.385-0.714 0.724-0.214 0.609-0.234 1.276-0.052 1.896 0.099 0.359 0.365 0.651 0.714 0.781 0.417 0.156 0.875 0.172 1.302 0.036 0.255-0.083 0.464-0.271 0.573-0.516 0.073-0.167 0.109-0.344 0.104-0.526h1.375c-0.010 0.156-0.031 0.313-0.063 0.469-0.12 0.484-0.464 0.896-0.917 1.083-0.948 0.406-2.016 0.453-3 0.141-0.635-0.198-1.188-0.656-1.406-1.281-0.115-0.339-0.177-0.693-0.177-1.052 0-0.516 0.094-1.016 0.339-1.432 0.26-0.427 0.651-0.76 1.125-0.938 1-0.375 2.109-0.349 3.089 0.083 0.479 0.208 0.823 0.63 0.932 1.141 0.021 0.099 0.036 0.208 0.042 0.313zM18.411 18.464h-1.453l-0.427-1.057h-2.443c0 0-0.422 1.057-0.427 1.057h-1.453l2.302-4.927c0 0.005 1.599 0 1.599 0zM25.719 18.464h-1.302c0 0 0.010-4.927 0-4.927h1.302v1.974h2.635c0 0.005 0-1.974 0-1.974h1.307c0 0 0.005 4.917 0 4.927h-1.307v-2.167c0 0.005-2.635 0-2.635 0 0.005 0.005 0 2.161 0 2.167zM1.307 18.464h-1.307c0 0 0.005-4.927 0-4.927h1.307c0 0-0.005 1.984 0 1.974h2.63c0 0.005-0.005-1.974 0-1.974h1.307c0 0 0.005 4.917 0 4.927h-1.307v-2.167c0 0.005-2.63 0-2.63 0 0 0.005-0.005 2.167 0 2.167zM11.349 18.464h-1.307v-4.089h-1.995c0 0 0.005-0.833 0-0.839 0.005 0.005 5.297 0 5.297 0v0.839h-1.995zM6.281 13.536h1.302v4.927h-1.302zM30.693 13.536h1.307v4.927h-1.307zM15.313 14.375l-0.906 2.24h1.813z"></path> </g></svg>
                </div>

                <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                    <img class="h-32 mt-2 text-gray-500 fill-current" src="storage/items/LG.svg" alt="">
                </div>

                <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                    <svg class="h-28" viewBox="0 0 192.756 192.756" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill-rule="evenodd" clip-rule="evenodd"> <path fill="#ffffff" d="M0 0h192.756v192.756H0V0z"></path> <path d="M44.873 102.534c-.125 2.042-2.041 2.722-2.722 2.722h-7.238v-5.878h7.116c.369 0 2.844.558 2.844 3.156zm8.228.681c0-6.312-4.826-7.239-4.826-7.239s3.465-1.67 3.465-5.877c0-6.868-5.878-8.909-8.229-8.909H27.549v30.315h17.076c3.156 0 8.476-3.217 8.476-8.29zm-9.28-12.869c0 1.917-1.793 2.908-2.474 2.908h-6.435V87.5h5.877c.681 0 3.032.681 3.032 2.846zm32.357 6.001c0 4.394-2.475 8.662-6.682 8.662-4.269 0-6.744-4.269-6.744-8.662 0-4.207 2.475-8.414 6.744-8.29 4.208 0 6.682 4.206 6.682 8.29zm7.487 0c0-8.414-5.692-15.528-14.168-15.528-8.6 0-14.354 7.115-14.354 15.528.124 8.662 5.753 16.024 14.354 16.024 8.475 0 14.29-7.362 14.168-16.024zm25.983 6.063c0-12.312-16.704-7.115-15.714-12.869.372-2.165 2.599-2.475 4.517-2.475 3.277 0 5.568 2.599 5.568 2.599l4.516-4.764c-3.402-3.155-5.877-4.516-10.641-4.516-6.125 0-11.756 3.835-11.756 10.084 0 8.786 9.714 8.786 13.118 9.837 2.041.557 2.598 1.114 2.473 2.475 0 1.486-2.35 2.908-3.959 2.908-3.464.247-5.506-1.547-7.918-3.96l-4.64 5.012c4.207 4.083 7.919 5.63 12.559 5.506 6-.185 11.877-3.589 11.877-9.837zm28.399 2.724l-6.125-3.837s-2.475 3.712-5.322 3.712c-4.516.125-6.99-4.393-6.99-8.785 0-4.331 2.289-8.167 6.559-8.167 2.475 0 4.207 1.485 5.32 3.527l5.877-3.835c-.99-1.484-3.279-6.806-10.766-7.053-8.104-.185-14.539 7.362-14.539 15.529 0 8.785 5.197 15.714 14.787 15.714 4.888.123 8.724-2.97 11.199-6.805zm27.16 6.371V81.189h-7.611v11.383h-9.279V81.189h-7.795v30.315h7.609V99.378h9.465v12.127h7.611z" fill="#cc212f"></path> </g> </g></svg>
                </div>

                <div class="flex items-center justify-center col-span-1 md:col-span-3 lg:col-span-1">
                    <img class="h-28 mt-2 text-gray-500 fill-current" src="storage/items/Samsung.svg" alt="">
                </div>

                <div class="flex items-center justify-center col-span-2 md:col-span-3 lg:col-span-1">
                    <img class="h-28 mt-2 text-gray-500 fill-current" src="storage/items/Toshiba.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="min-h-screen bg-gradient-to-r from-blue-600 via-blue-800 to-blue-900">
        <div id="feedback" class="container mx-auto flex min-h-screen flex-col px-6 py-12">
            <div class="flex-1 lg:-mx-6 lg:flex lg:items-center">
                <div class="text-white lg:mx-6 lg:w-1/2">
                    <h1 class="text-3xl font-semibold lg:text-5xl">Остались вопросы?</h1>

                    <p class="mt-6 max-w-xl">Свяжитесь с нами и мы постараемся на них ответить</p>

                    <div class="mt-6 space-y-8 md:mt-8">
                        <p class="-mx-2 flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-2 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>

                            <a href="https://yandex.ru/maps/-/CCUKR-au8D" target="_blank" class="mx-2 w-72 text-white underline"> Воронеж, ул. Ворошилова, д. 16</a>
                        </p>

                        <p class="-mx-2 flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-2 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>

                            <span class="mx-2 w-72 truncate text-white">+7 (473) 232-30-25</span>
                        </p>

                        <p class="-mx-2 flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-2 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>

                            <span class="mx-2 w-72 truncate text-white">venttehservis@inbox.ru</span>
                        </p>
                    </div>
                </div>

                <div class="mt-8 lg:mx-6 lg:w-1/2">
                    <div class="mx-auto w-full overflow-hidden rounded-xl bg-white px-8 py-10 shadow-2xl lg:max-w-xl">
                        <h1 class="text-2xl font-medium text-gray-700">Форма связи</h1>

                        <form class="mt-6" method="Post" action="{{ route("contact_form_process") }}">
                            @csrf

                            <div class="flex-1">
                                <label class="mb-2 block text-sm text-gray-600">Фамилия и имя</label>
                                <input name="name" type="text" placeholder="Иванов Иван" class="mt-2 block w-full rounded-md border border-gray-200 bg-white px-5 py-3 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" />
                                @error('name')
                                <p class="text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-6 flex-1">
                                <label class="mb-2 block text-sm text-gray-600">Email адрес</label>
                                <input name="email" type="text" placeholder="ivanov@example.com" class="mt-2 block w-full rounded-md border border-gray-200 bg-white px-5 py-3 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" />
                                @error('email')
                                <p class="text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-6 w-full">
                                <label class="mb-2 block text-sm text-gray-600">Сообщение</label>
                                <textarea name="text" class="mt-2 block h-32 w-full rounded-md border border-gray-200 bg-white px-5 py-3 text-gray-700 placeholder-gray-400 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 md:h-48" placeholder="Сообщение"></textarea>
                                @error('text')
                                <p class="text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="mt-6 w-full transform rounded-md bg-blue-600 px-6 py-3 text-sm font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-50">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

@endsection
