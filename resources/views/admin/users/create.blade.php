@extends('layouts.admin')
@section('title', 'Пользователи')
@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{ isset($user) ? "Изменить"  : "Добавить" }} пользователя</h3>

        <div class="mt-8">
            <form enctype="multipart/form-data" class="w-full flex flex-col space-y-2 mt-5" method="Post" action="{{ isset($user) ? route("admin.users.update", $user->id) : route("admin.users.store") }}">
                @csrf

                @if(isset($user))
                    @method('Put')
                @endif
                <label class="block text-sm text-gray-600 ">Имя и фамилия</label>
                <input name="name" type="text" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300      " placeholder="Иванов Иван" value="{{ isset($user) ? $user->name : '' }}"/>
                @error('name')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block text-sm text-gray-600 ">Представляет компанию</label>
                <input name="represents" type="text" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300      " placeholder="Название компании" value="{{ isset($user) ? $user->represents : '' }}"/>
                @error('represents')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block text-sm text-gray-600 ">Email</label>
                <input name="email" type="email" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300      " placeholder="ivanov@ivan.ru" value="{{ isset($user) ? $user->email : '' }}"/>
                @error('email')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block text-sm text-gray-600 ">Пароль</label>
                <input name="password" type="password" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300      " placeholder="Пароль"/>
                @error('password')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block text-sm text-gray-600 ">Введите пароль еще раз</label>
                <input name="password_confirmation" type="password" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300      " placeholder="Пароль повторно"/>
                @error('password_confirmation')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label class="block text-sm text-gray-600 ">Аватар</label>
                @if(isset($user) && $user->avatar)
                    <div>
                        <img class="h-32 w-32" src="/storage/users/{{ $user->avatar }}">
                    </div>
                @endif

                <input name="avatar" type="file" class="w-full h-12" placeholder="Аватар" />
                @error('avatar')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <div class="w-full flex justify-end">
                    <button type="submit" class="w-fit px-4 py-3 text-white bg-blue-600 rounded-md hover:bg-blue-500 hover:outline-none">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
