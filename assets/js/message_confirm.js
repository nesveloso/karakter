document.addEventListener("DOMContentLoaded", function(){
    var isMsgDisplayed = localStorage.getItem("msgDisplayed");

    if (!isMsgDisplayed){
        window.scrollTo(0, document.body.scrollHeight);

        localStorage.setItem("msgDisplayed", "true");
    }
});

