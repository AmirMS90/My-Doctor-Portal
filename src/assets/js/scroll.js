const image = document.querySelector("#docIMG");
const windowHeight = window.innerHeight;

window.addEventListener("scroll", function () {
    let imageTop = image.getBoundingClientRect().top;
    let isVisible = imageTop < windowHeight * 0.6;

    image.classList.toggle("revealIMG" , isVisible);
});
