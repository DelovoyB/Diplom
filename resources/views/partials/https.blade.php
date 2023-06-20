<script type="text/javascript">

    let forms = document.querySelectorAll("form");
    console.log(forms[0].action.replace("http","https"));

    for (let i = 0; i < forms.length; i++) {
        forms[i].action = forms[0].action.replace("http","https");
    }

</script>
