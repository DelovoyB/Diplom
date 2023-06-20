<div class="flex flex-col md:flex-row items-start md:items-center hover:bg-gray-100 -mx-8 px-6 py-5 text-base">
    <div class="flex w-full md:w-2/5 flex-col md:flex-row mb-2">
        <div class="w-full md:w-24">
            <img class="h-auto md:h-20" src="/storage/items/thumbnails/{{ $item->options->source }}" alt="">
        </div>
        <form method="Post" action="{{ route('cart.delete') }}" class="flex flex-col justify-between items-start md:ml-4 flex-grow">
            @csrf
            <input type="hidden" value="{{ $item->id }}" name="item_id">
            <a href="{{ route("items.show", $item->id) }}" class="mt-3 md:mt-0 text-xl md:text-base font-bold">{{ $item->name }}</a>
            <button type="submit" class="mt-3 md:mt-0 font-semibold hover:text-red-500 text-gray-500 text-base">Удалить</button>
        </form>
    </div>
    <div class="flex justify-between md:justify-center items-center flex-row w-full md:w-1/5 text-2xl mb-3">
        <label class="block md:hidden mr-3 text-base font-medium">Количество:</label>
        <div class="flex flex-row">
            <form method="Post" action="{{ route("cart.update") }}" class="flex justify-center flex-row">
                @csrf
                <input type="hidden" value="{{ $item->id }}" name="item_id">
                <input type="hidden" value="-" name="action">
                <button type="submit" class="w-3 flex items-center">
                    –
                </button>
            </form>
            <input class="mx-2 text-base border text-center w-8" type="text" value="{{ $item->qty }}" disabled>
            <form method="Post" action="{{ route("cart.update") }}" class="flex justify-center flex-row">
                @csrf
                <input type="hidden" value="{{ $item->id }}" name="item_id">
                <input type="hidden" value="+" name="action">
                <button type="submit" class="w-3 flex items-center @if ($item->options->available <= (int)$item->qty) text-blue-300 @endif" @if ($item->options->available <= (int)$item->qty) disabled @endif>
                    +
                </button>
            </form>
        </div>
    </div>
    <div class="md:w-1/5 flex flex-row w-full justify-between md:justify-center mb-4 md:mb-0">
        <label class="block md:hidden mr-3 text-base font-medium">Цена:</label>
        <span class="text-center font-semibold">{{ $item->price }} ₽</span>
    </div>
    <div class="md:w-1/5 flex flex-row w-full justify-between md:justify-center">
        <label class="block md:hidden mr-3 text-base font-medium">Сумма:</label>
        <span class="text-center font-bold">{{ $item->price * $item->qty }} ₽</span>
    </div>
</div>
