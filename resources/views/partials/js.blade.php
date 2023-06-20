<script type="text/javascript">
    let scrollBool = true;

    window.onscroll = function ()
    {
        if (!scrollBool && screen.width < 1024)
        {
            window.scrollTo(0, 0);
        }
    };

    function openNav() {
        document.getElementById("brg_btn1").classList.toggle("hidden");
        document.getElementById("brg_btn2").classList.toggle("hidden");
        document.getElementById("brg").classList.toggle("-translate-x-full");
        document.getElementById("brg").classList.toggle("opacity-0");
        scrollBool = !scrollBool;
    }

    function iconSwitch() {
        document.getElementById("themeIcon1").classList.toggle("hidden");
        document.getElementById("themeIcon2").classList.toggle("hidden");
    }

    function openProfile() {
        document.getElementById("profileMenu").classList.toggle("lg:hidden");
        document.getElementById("profileName").classList.toggle("lg:rounded-b-lg");
    }

    let quantity = [];
    function openQuantity(id) {
        document.getElementById(`addToCart${id}`).classList.toggle("hidden");
        document.getElementById(`addToCartQuantity${id}`).classList.toggle("hidden");
        document.getElementById(`addToCartQuantity${id}`).classList.toggle("flex");
        document.getElementById(`quantityM${id}`).disabled = true;
        document.getElementById(`quantityM${id}`).style.color = "#3b82f6";
        quantity[id] = document.getElementById(`quantity${id}`).value;
    }


    function quantityM(id, maxQuantity) {
        quantity[id]--;
        document.getElementById(`quantity${id}`).value = quantity[id];
        if (quantity[id] < maxQuantity) {
            document.getElementById(`quantityP${id}`).disabled = false;
            document.getElementById(`quantityP${id}`).style.color = "white";
        }
        else {
            document.getElementById(`quantityP${id}`).disabled = true;
            document.getElementById(`quantityP${id}`).style.color = "#3b82f6";
        }
        if (quantity[id] > 1) {
            document.getElementById(`quantityM${id}`).disabled = false;
            document.getElementById(`quantityM${id}`).style.color = "white";
        }
        else {
            document.getElementById(`quantityM${id}`).disabled = true;
            document.getElementById(`quantityM${id}`).style.color = "#3b82f6";
        }
    }

    function quantityP(id, maxQuantity) {
        quantity[id]++;
        document.getElementById(`quantity${id}`).value = quantity[id];
        if (quantity[id] < maxQuantity) {
            document.getElementById(`quantityP${id}`).disabled = false;
            document.getElementById(`quantityP${id}`).style.color = "white";
        }
        else {
            document.getElementById(`quantityP${id}`).disabled = true;
            document.getElementById(`quantityP${id}`).style.color = "#3b82f6";
        }
        if (quantity[id] > 1) {
            document.getElementById(`quantityM${id}`).disabled = false;
            document.getElementById(`quantityM${id}`).style.color = "white";
        }
        else {
            document.getElementById(`quantityM${id}`).disabled = true;
            document.getElementById(`quantityM${id}`).style.color = "#3b82f6";
        }
    }

    function openOrder(id) {
        document.getElementById(`orderButton${id}`).classList.toggle("rotate-180");
        const list = document.querySelectorAll(`.order${id}`);
        for (let i = 0; i < list.length; i++) {
            list[i].classList.toggle("hidden");
        }
    }

    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    function openAdmin() {
        document.getElementById("brgAdmin").classList.toggle("-translate-x-full");
        scrollBool = !scrollBool;
        if(!scrollBool) {
            sleepScroll();
        }
    }

    async function sleepScroll() {
        await new Promise(resolve => setTimeout(resolve, 500));
        window.scrollTo(0, 0);
    }

</script>
