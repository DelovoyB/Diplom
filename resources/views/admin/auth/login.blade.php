@extends('layouts.app')
@section('title', 'Администрирование')
@section('content')

    <section class="flex items-center min-h-screen bg-white ">
        <div class="container mx-auto h-full">
            <div class="max-w-md mx-auto my-10">
                <div class="text-center">
                    <h1 class="my-3 text-3xl font-semibold text-gray-700 ">Администрирование</h1>
                    <p class="text-gray-500 ">Для доступа к админ-панели авторизуйтесь</p>
                </div>
                <div class="m-7">
                    <form method="Post" action="{{ route("admin.login_process") }}">
                        @csrf

                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm text-gray-600 ">Email</label>
                            <input type="email" name="email" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300      " />
                            @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="text-sm text-gray-600 ">Пароль</label>
                            <input type="password" name="password" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300      " />
                            @error('password')
                            <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <button type="submit" class="w-full px-3 py-4 text-white bg-blue-600 rounded-md hover:bg-blue-500 hover:outline-none">Войти</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
