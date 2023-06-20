<script type="text/javascript">
    let e = document.getElementById("selectionOrder");
    function onChange() {
    let array = {!! json_encode($items) !!};
    let value = e.value;
    console.log(value, array[value-1]);
    document.getElementById("ordered_items_quantity").max = array[value-1].quantity;
    }
    e.onchange = onChange;
    onChange();
</script>
