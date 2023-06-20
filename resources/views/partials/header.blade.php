<nav class="container mx-auto p-6 lg:flex lg:items-center lg:justify-between">
    <div class="flex items-center justify-between">
        <div>
            <a class="text-2xl font-bold text-gray-800 hover:text-gray-700 lg:text-3xl" href="{{ route("home") }}">ВентТехСервис</a>
        </div>

        <!-- Mobile menu button -->
        <div class="flex lg:hidden">
            <button type="button" onclick="openNav()" class="text-gray-500 hover:text-gray-600 focus:text-gray-600 focus:outline-none" aria-label="toggle menu">
                <svg id="brg_btn1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                </svg>

                <svg id="brg_btn2" xmlns="http://www.w3.org/2000/svg" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <div id="brg" class="opacity-0 -translate-x-full absolute text-center text-2xl lg:text-base inset-x-0 z-20 w-full min-h-screen lg:min-h-min bg-white px-6 py-4 shadow-md transition-all duration-300 ease-in-out lg:relative lg:top-0 lg:mt-0 lg:flex lg:w-auto lg:translate-x-0 lg:items-center lg:bg-transparent lg:p-0 lg:opacity-100 lg:shadow-none">
        <div class="lg:-px-8 flex flex-col items-center space-y-8 lg:flex-row lg:space-y-0 mt-12 lg:mt-0">
            <a class="transform text-gray-700 transition-colors duration-300 hover:text-blue-500 lg:mx-8" href="{{ route("home") }}">Главная</a>
            <a class="transform text-gray-700 transition-colors duration-300 hover:text-blue-500 lg:mx-8" href="{{ route("items.index") }}">Продукция</a>
            <a class="transform text-gray-700 transition-colors duration-300 hover:text-blue-500 lg:mx-8" href="{{ route("home") }}#feedback">Связь с нами</a>
            @guest('web')
                <a class="mt-12 w-fit block rounded-lg bg-blue-600 px-6 py-2.5 text-center font-medium capitalize leading-5 text-white hover:bg-blue-500 lg:mt-0 lg:w-auto" href="{{ route("login") }}"> Войти </a>
            @endguest
        </div>

        @auth('web')
            <div class="relative inline-block">
                <button onclick="openProfile()" id="profileName" class="lg:block lg:rounded-b-lg rounded-t-lg hidden mt-4 bg-blue-600 px-6 py-2.5 text-center font-medium capitalize leading-5 text-white hover:bg-blue-500 lg:mt-0 lg:min-w-[120px]">{{ Auth::user()['name'] }}</button>
                <div id="profileMenu" class="lg:hidden lg:absolute w-full">
                    <a class="mt-12 lg:mt-0 block lg:bg-blue-600 lg:px-6 lg:py-2.5 lg:text-center lg:font-medium lg:capitalize lg:mx-0 leading-5 text-blue-700 lg:text-white lg:hover:bg-blue-500 lg:w-auto" href="{{ route("cabinet", Auth::id()) }}">Профиль</a>
                    <a class="mt-12 lg:mt-0 block lg:bg-blue-600 lg:px-6 lg:py-2.5 lg:text-center lg:font-medium lg:capitalize lg:mx-0 leading-5 text-blue-700 lg:text-white lg:hover:bg-blue-500 lg:w-auto" href="{{ route("cart") }}">Корзина({{ Cart::content()->count() }})</a>
                    <a class="mt-12 lg:mt-0 block lg:bg-blue-600 lg:px-6 lg:py-2.5 lg:text-center lg:font-medium lg:capitalize lg:mx-0 leading-5 text-blue-700 lg:text-white lg:hover:bg-blue-500 lg:w-auto lg:rounded-b-lg" href="{{ route("logout") }}">Выйти</a>
                </div>
            </div>
        @endauth

    </div>
</nav>
