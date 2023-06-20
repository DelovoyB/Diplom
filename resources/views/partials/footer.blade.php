<footer class="bg-white mt-auto mb-4">
    <div class="container mx-auto px-6 py-2 md:py-8">
        @guest('web')
            <div class="md:-mx-3 md:flex md:items-center md:justify-between">
                <h1 class="text-3xl text-center font-semibold tracking-tight text-gray-800 md:mx-3 xl:text-4xl">Станьте нашим клиентом уже сейчас.</h1>

                <div class="mt-6 shrink-0 md:mx-3 md:mt-0 md:w-auto">
                    <a href="{{ route("register") }}" class="inline-flex w-full items-center justify-center rounded-lg bg-gray-800 px-4 py-2 text-sm text-white duration-300 hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                        <span class="mx-2">Зарегистрироваться</span>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-2 h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>
            <hr class="my-6 border-gray-200 md:my-10" />
        @endguest

        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="p-4 md:mr-12">
                <img class="w-24 h-24" src="/storage/items/logo.png" alt="">
            </div>
            <div class="flex flex-1 flex-col">
                <div class="flex flex-1 flex-col md:flex-row items-center justify-between mb-2 gap-2 md:gap-0">
                    <div class="text-2xl text-blue-700 font-bold uppercase">Наши контакты</div>
                    <div class="-mx-2 flex items-start justify-end">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-2 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="#1f2937" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>

                        <span class="mx-2 truncate text-gray-800">+7 (473) 232-30-25</span>
                    </div>
                    <div class="-mx-2 flex items-start justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-2 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="#1f2937" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>

                        <a href="https://yandex.ru/maps/-/CCUKR-au8D" target="_blank" class="mx-2 text-gray-800 underline"> Воронеж, ул. Ворошилова, д. 16</a>
                    </div>
                </div>
                <div class="w-full mb-2">
                    <div class="h-[4px] flex flex-1 bg-gray-400"></div>
                </div>
                <div class="flex flex-1 flex-col md:flex-row items-center justify-between gap-2 md:gap-0">
                    <a href="{{ route("home") }}" class="text-2xl font-bold text-gray-800 transition-colors duration-300 hover:text-gray-700">ВентТехСервис</a>
                    <div class="-mx-2 flex items-start justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-2 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="#1f2937" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>

                        <span class="mx-2 truncate text-gray-800">venttehservis@inbox.ru</span>
                    </div>
                    <p class="mt-4 text-sm text-gray-500 sm:mt-0">© Copyright {{ date("Y") }}. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
