@extends('layouts.app')
@section('title', 'Войти в аккаунт')
@section('content')

    <section class="flex items-center min-h-screen bg-white dark:bg-gray-900">
        <div class="container mx-auto h-full">
            <div class="max-w-md mx-auto my-10">
                <div class="text-center">
                    <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Восстановление доступа</h1>
                    <p class="text-gray-500 dark:text-gray-400">Сбросим ваш пароль и отправим новый на почту</p>
                </div>
                <div class="m-7">
                    <form method="Post" action="{{ route("forgot_process") }}">
                        @csrf

                        <div class="mb-6">
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email адрес</label>
                            <input type="email" name="email" placeholder="ivanivanov@mail.ru" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                            @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <button type="submit" class="w-full px-3 py-4 text-white bg-blue-600 rounded-md hover:bg-blue-500 hover:outline-none">Сбросить пароль</button>
                        </div>
                        <p class="text-sm text-center text-gray-400">Вспомнили пароль? <a href="{{ route("login") }}" class="text-blue-600 focus:outline-none focus:underline focus:text-blue-500 dark:focus:border-blue-800">Войти</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
