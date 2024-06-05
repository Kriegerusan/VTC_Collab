const inputs = document.querySelectorAll('.suppressButton')
    const confirmButton = document.getElementById('confirm')
    var inputValue = 0;
    var redirectUrl = "";

    inputs.forEach(button => {
        button.addEventListener("click", function(){
            inputValue = this.value;
            //console.log(inputValue);
        });
    });

    confirmButton.addEventListener("click", function(){
        redirectUrl = '?&action=delete&id=' + inputValue;
        if(redirectUrl != ''){
        //console.log(redirectUrl);
        window.location.href = redirectUrl;
    }
    });
