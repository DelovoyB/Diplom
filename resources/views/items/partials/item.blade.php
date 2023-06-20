<div class="w-80 mx-auto bg-white rounded-lg max-w-sm border-2 border-gray-200">
    <a href="{{ route("items.show", $item->id) }}">
        <img class="w-80 h-64 object-scale-down rounded-t-lg p-8" src="/storage/items/thumbnails/{{ $item->source }}" alt="product image">
    </a>
    <div class="px-5 pb-5">
        <a href="{{ route("items.show", $item->id) }}" class="flex justify-center lg:justify-start w-full">
            <h3 class="text-gray-900 mb-2 font-semibold text-xl tracking-tight lg:text-start truncate @if($item->quantity<1) text-red-600 @endif">{{ $item->title }}</h3>
        </a>
        <form method="Post" action="@if ($cart->where('id', $item->id)->count()) {{ route('cart.delete') }} @else {{ route('cart.store') }} @endif" class="flex items-center justify-between flex-col lg:flex-row">
            @csrf
            <span class="text-xl font-bold text-gray-900 mb-2">{{ $item->price }} ₽</span>
            @if ($cart->where('id', $item->id)->count())
                <input type="hidden" value="{{ $item->id }}" name="item_id">
                <button type="submit" class="text-white font-medium rounded-lg text-sm px-5 py-2.5 md:px-3 md:py-1.5 lg:px-5 lg:py-2.5 text-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300">Удалить из корзины</button>
            @else
            <div class="group">
                <button id="addToCart{{ $item->id }}" onclick="openQuantity({{ $item->id }})" type="button" class="text-white font-medium rounded-lg text-sm px-5 py-2.5 md:px-3 md:py-1.5 lg:px-5 lg:py-2.5 text-center {{ $item->quantity == 0 ? "bg-blue-400" : "bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300"}}" @if($item->quantity<1) disabled @endif>Добавить в корзину</button>
                <div id="addToCartQuantity{{ $item->id }}" class="hidden flex-row w-full bg-blue-700 rounded-lg">
                    <button id="quantityM{{ $item->id }}" onclick="quantityM({{ $item->id }}, {{ $item->quantity }})" type="button" class="border-r border-blue-400 px-3 text-white flex text-xs text-center my-auto">-</button>
                    <input type="hidden" value="{{ $item->id }}" name="item_id">
                    <input id="quantity{{ $item->id }}" type="number" min="1" max="{{ $item->quantity }}" name="quantity" value="1" required="required" class="text-white w-8 text-sm text-center bg-blue-700 hover:bg-blue-800">
                    <button id="quantityP{{ $item->id }}" onclick="quantityP({{ $item->id }}, {{ $item->quantity }})" type="button" class="border-l border-r border-blue-400 px-3 text-white flex text-sm text-center my-auto">+</button>
                    <button type="submit" class="block text-white font-medium rounded-r-lg text-sm px-5 py-2.5 md:px-3 md:py-1.5 lg:px-5 lg:py-2.5 text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">Готово</button>
                </div>
            </div>
            @endif
        </form>
    </div>
</div>
