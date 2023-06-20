import '../../resources/js/bootstrap';

function edit(objButton)
{
    if (objButton.value === "thumbnail"){
        document.getElementById("thumb").src="/storage/items/thumbnails/{{ $item->source }}";
    }
    else{
        document.getElementById("thumb").src=`/storage/items/products/${objButton.value}`;
    }
}
