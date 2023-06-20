@extends('layouts.app')
@section('title', 'Наша продукция')
@section('content')
    @include('partials.header')

    <div class="flex flex-col w-full">
        <div class="flex flex-col lg:flex-row text-xl w-full justify-center my-4">
            <a class="flex flex-1 lg:mx-2 justify-center items-center text-center border p-2 @if(!isset($category)) bg-blue-600 text-white @endif" href="{{ route("items.index") }}">Вся продукция</a>
            <a class="flex flex-1 lg:mx-2 justify-center items-center text-center border p-2 @if(isset($category) && $category == "1") bg-blue-600 text-white @endif" href="{{ route("items.category", "1") }}">Канальные вентиляторы</a>
            <a class="flex flex-1 lg:mx-2 justify-center items-center text-center border p-2 @if(isset($category) && $category == "2") bg-blue-600 text-white @endif" href="{{ route("items.category", "2") }}">Центробежные вентиляторы</a>
            <a class="flex flex-1 lg:mx-2 justify-center items-center text-center border p-2 @if(isset($category) && $category == "3") bg-blue-600 text-white @endif" href="{{ route("items.category", "3") }}">Крышные вентиляторы</a>
            <a class="flex flex-1 lg:mx-2 justify-center items-center text-center border p-2 @if(isset($category) && $category == "4") bg-blue-600 text-white @endif" href="{{ route("items.category", "4") }}">Мультизональные вентиляторы</a>
        </div>
        <div class="flex-1 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-10 mb-20 auto-cols-min">

            @foreach($items as $item)

                @include('items.partials.item')

            @endforeach

        </div>
    </div>

    <div class="pag flex flex-row justify-center items-center mb-12">
        {{ $items->links() }}
    </div>

    @include('partials.footer')

@endsection
