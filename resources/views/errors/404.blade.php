@extends('layouts.app')
@section('title', 'Страница не найдена')
@section('content')

    <section class="bg-gradient-to-r from-blue-600 via-blue-800 to-blue-900">
        <div class="w-9/12 m-auto py-16 min-h-screen flex items-center justify-center">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg pb-8">
                <div class="border-t border-gray-200 text-center pt-8">
                    <h1 class="text-9xl font-bold text-blue-500">404</h1>
                    <h1 class="text-6xl font-medium py-8">Ой! Страница не найдена :(</h1>
                    <p class="text-2xl pb-8 px-12 font-medium">Страница, которую вы ищите не существует. Её могли перенести или удалить.</p>
                    <a href="{{ route("home") }}" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold px-6 py-3 rounded-md mr-6">
                        На главную
                    </a>
                    <a href="{{ route("home") }}#feedback" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold px-6 py-3 rounded-md">
                        Написать нам
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
