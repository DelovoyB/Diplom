@extends('layouts.app')
@section('title', 'Регистрация')
@section('content')

    <section class="flex items-center min-h-screen bg-white ">
        <div class="container mx-auto h-full">
            <div class="max-w-md mx-auto my-10">
                <div class="text-center">
                    <h1 class="my-3 text-3xl font-semibold text-gray-700 ">Регистрация</h1>
                    <p class="text-gray-500 ">Создайте аккаунт для совершения покупок</p>
                </div>
                <div class="m-7">
                    <form method="Post" action="{{ route("register_process") }}">
                        @csrf

                        <div class="mb-6">
                            <label class="block mb-2 text-sm text-gray-600 ">Фамилия и Имя</label>
                            <input type="text" name="name" placeholder="Иванов Иван" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                            @error('name')
                            <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label  class="block mb-2 text-sm text-gray-600 ">Представляете компанию</label>
                            <input type="text" name="represents" placeholder="Название компании(необяз.)" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                            @error('represents')
                            <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block mb-2 text-sm text-gray-600">Email адрес</label>
                            <input type="email" name="email" placeholder="ivanivanov@mail.ru" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                            @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="text-sm text-gray-600">Пароль</label>
                            <input type="password" name="password" placeholder="Ваш пароль" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                            @error('password')
                            <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="text-sm text-gray-600">Подтвердите пароль</label>
                            <input type="password" name="password_confirmation" placeholder="Введите пароль повторно" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                            @error('password_confirmation')
                            <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <button type="submit" class="w-full px-3 py-4 text-white bg-blue-600 rounded-md hover:bg-blue-500 hover:outline-none">Зарегистрироваться</button>
                        </div>
                        <p class="text-sm text-center text-gray-400">Есть аккаунт? <a href="{{ route("login") }}" class="text-blue-600 focus:outline-none focus:underline focus:text-blue-500">Войти</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
