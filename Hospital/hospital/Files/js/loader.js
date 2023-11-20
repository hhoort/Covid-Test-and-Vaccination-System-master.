document.addEventListener("DOMContentLoaded", function () {
    var loader = document.getElementById("loader");
    var content = document.querySelector(".content");

    window.addEventListener("load", function () {
        loader.style.display = "none";
        content.style.display = "block";
    });
});
