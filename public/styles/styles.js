const loginLink = document.getElementById("login-link");
const loginSection = document.getElementById("login-section");
const loginClose = document.getElementById("login-close");

const registerLink = document.getElementById("register-link");
const registerSection = document.getElementById("register-section");
const registerClose = document.getElementById("register-close");

loginLink.addEventListener("click", () => {
    if (loginSection.classList.contains("slide-out-left")) {
        loginSection.style.display = "flex";
        loginSection.classList.replace("slide-out-left", "slide-in-left");
    } else {
        loginSection.style.display = "flex";
        loginSection.classList.add("slide-in-left");
    }

    if (registerSection.style.display == "flex") {
        registerSection.style.display = "none";
    }
});

loginClose.addEventListener("click", () => {
    loginSection.classList.replace("slide-in-left", "slide-out-left");
    setTimeout(() => {
        loginSection.style.display = "none";
    }, 400);
});

registerLink.addEventListener("click", () => {
    if (registerSection.classList.contains("slide-out-left")) {
        registerSection.style.display = "flex";
        registerSection.classList.replace("slide-out-left", "slide-in-left");
    } else {
        registerSection.style.display = "flex";
        registerSection.classList.add("slide-in-left");
    }
    loginSection.classList.add("slide-in-left");

    if (loginSection.style.display == "flex") {
        loginSection.style.display = "none";
    }
});

registerClose.addEventListener("click", () => {
    registerSection.classList.replace("slide-in-left", "slide-out-left");
    setTimeout(() => {
        registerSection.style.display = "none";
    }, 400);
});
