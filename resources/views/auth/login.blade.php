@extends('layouts.app')
@section('title', 'Войти в аккаунт')
@section('content')

    <section class="flex items-center min-h-screen bg-white ">
        <div class="container mx-auto h-full">
            <div class="max-w-md mx-auto my-10">
                <div class="text-center">
                    <h1 class="my-3 text-3xl font-semibold text-gray-700 ">С возвращением!</h1>
                    <p class="text-gray-500 ">Для доступа к аккаунту авторизуйтесь</p>
                </div>
                <div class="m-7">
                    <form method="Post" action="{{ route("login_process") }}">
                        @csrf

                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm text-gray-600 ">Email адрес</label>
                            <input type="email" name="email" id="email" placeholder="ivanivanov@mail.ru" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300      " />
                            @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <div class="flex justify-between mb-2">
                                <label class="text-sm text-gray-600 ">Пароль</label>
                                <a href="{{ route("forgot") }}" class="text-sm text-gray-400 focus:outline-none focus:text-indigo-500 hover:text-indigo-500 ">Забыли пароль?</a>
                            </div>
                            <input type="password" name="password" id="password" placeholder="Ваш пароль" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300      " />
                            @error('password')
                            <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <button type="submit" class="w-full px-3 py-4 text-white bg-blue-600 rounded-md hover:bg-blue-500 hover:outline-none">Войти</button>
                        </div>
                        <p class="text-sm text-center text-gray-400">Нет аккаунта? <a href="{{ route("register") }}" class="text-blue-600 focus:outline-none focus:underline focus:text-blue-500 ">Регистрация</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
