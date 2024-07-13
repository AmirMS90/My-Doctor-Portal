const darkModeBTN = document.querySelector(".darkModeBTN");
const htmlElement = document.querySelector("html");
const image = document.querySelector("#docIMG");
const windowHeight = window.innerHeight;

darkModeBTN.addEventListener("click", (e) => {
    e.stopImmediatePropagation();
    let date = new Date();
    date.setFullYear(date.getFullYear() + 1);
    let expires = "expires=" + date.toUTCString();
    if (htmlElement.classList.contains("dark")) {
        htmlElement.classList.remove("dark");
        document.cookie = "darkMode=inactive; " + expires + "path=/";
    } else {
        htmlElement.classList.add("dark");
        document.cookie = "darkMode=active; " + expires + "path=/";
    }
});

window.addEventListener("scroll", function () {
    let imageTop = image.getBoundingClientRect().top;
    let isVisible = imageTop < windowHeight * 0.6;

    image.classList.toggle("revealIMG" , isVisible);
});
