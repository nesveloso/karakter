function readMore(elemento){
    let small_text = document.getElementById("small_text");
    let big_text = document.getElementById("big_text");

    small_text.style.display = "none";
    big_text.style.display = "block";

    elemento.remove();

}
