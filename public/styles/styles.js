const loginLinks = document.querySelectorAll(".login-link");
const loginSection = document.getElementById("login-section");
const loginClose = document.getElementById("login-close");

const registerLinks = document.querySelectorAll(".register-link");
const registerSection = document.getElementById("register-section");
const registerClose = document.getElementById("register-close");

const nav = document.getElementById("nav-container");
const main = document.getElementsByTagName("main");

if (document.getElementById("loginErrorContainer")) {
    $loginErrorContainer = document.getElementById("loginErrorContainer");
}

if (document.getElementById("registerErrorContainer")) {
    $registerErrorContainer = document.getElementById("registerErrorContainer");
}

window.addEventListener("load", function () {
    if (loginErrorContainer) {
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
    }
});

window.addEventListener("load", function () {
    if (registerErrorContainer) {
        if (registerSection.classList.contains("slide-out-left")) {
            registerSection.style.display = "flex";
            registerSection.classList.replace(
                "slide-out-left",
                "slide-in-left"
            );
        } else {
            registerSection.style.display = "flex";
            registerSection.classList.add("slide-in-left");
        }
        loginSection.classList.add("slide-in-left");

        if (loginSection.style.display == "flex") {
            loginSection.style.display = "none";
        }
    }
});

loginLinks.forEach((link) => {
    link.addEventListener("click", () => {
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
});

loginClose.addEventListener("click", () => {
    loginSection.classList.replace("slide-in-left", "slide-out-left");
    setTimeout(() => {
        loginSection.style.display = "none";
    }, 400);
});

if (registerLinks) {
    registerLinks.forEach((link) => {
        link.addEventListener("click", () => {
            if (registerSection.classList.contains("slide-out-left")) {
                registerSection.style.display = "flex";
                registerSection.classList.replace(
                    "slide-out-left",
                    "slide-in-left"
                );
            } else {
                registerSection.style.display = "flex";
                registerSection.classList.add("slide-in-left");
            }
            loginSection.classList.add("slide-in-left");

            if (loginSection.style.display == "flex") {
                loginSection.style.display = "none";
            }
        });
    });
}

registerClose.addEventListener("click", () => {
    registerSection.classList.replace("slide-in-left", "slide-out-left");
    setTimeout(() => {
        registerSection.style.display = "none";
    }, 400);
});

const showOptions = (event) => {
    event.target.parentNode.parentNode.nextElementSibling.classList.toggle(
        "showOptions"
    );
};

setTimeout(function () {
    var statusMessage = document.getElementById("status-message");
    if (statusMessage) {
        statusMessage.style.display = "none";
    }
}, 5000);

setTimeout(function () {
    var statusMessage = document.getElementById("status-message");
    if (statusMessage) {
        statusMessage.style.display = "none";
    }
}, 5000);

function imageDownload(imagePath) {
    var imageRoute = imagePath;

    var enlaceTemporal = document.createElement('a');
    enlaceTemporal.href = imageRoute;
    enlaceTemporal.target = '_blank';
    enlaceTemporal.download = imagePath || 'imagen_descarga';

    document.body.appendChild(enlaceTemporal);

    enlaceTemporal.click();

    document.body.removeChild(enlaceTemporal);
}

var loadFile = function(event) {
    var output = document.getElementById('img_path_output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src)
    }
};

var loadFileCopy = function(event) {
    var output = document.getElementById('img_path_copyright_output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src)
    }
};

setTimeout(function() {
    var statusMessage = document.getElementById('status-message');
    if (statusMessage) {
        statusMessage.style.display = 'none';
    }
}, 5000);

setTimeout(function() {
    var errorMessage = document.getElementById('error-message');
    if (errorMessage) {
        errorMessage.style.display = 'none';
    }
}, 5000);

var loadFile = function(event) {
    var output = document.getElementById('img_path_output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src)
    }
};

var loadFileCopy = function(event) {
    var output = document.getElementById('img_path_copyright_output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src)
    }
};

setTimeout(function() {
    var statusMessage = document.getElementById('status-message');
    if (statusMessage) {
        statusMessage.style.display = 'none';
    }
}, 5000);

setTimeout(function() {
    var errorMessage = document.getElementById('error-message');
    if (errorMessage) {
        errorMessage.style.display = 'none';
    }
}, 5000);

var loadFile = function(event) {
    var output = document.getElementById('img_path_output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src)
    }
};

setTimeout(function() {
    var statusMessage = document.getElementById('status-message');
    if (statusMessage) {
        statusMessage.style.display = 'none';
    }
}, 5000);

setTimeout(function() {
    var errorMessage = document.getElementById('error-message');
    if (errorMessage) {
        errorMessage.style.display = 'none';
    }
}, 5000);

var loadFile = function(event) {
    var output = document.getElementById('img_path_output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src)
    }
};

setTimeout(function() {
    var statusMessage = document.getElementById('status-message');
    if (statusMessage) {
        statusMessage.style.display = 'none';
    }
}, 5000);

setTimeout(function() {
    var errorMessage = document.getElementById('error-message');
    if (errorMessage) {
        errorMessage.style.display = 'none';
    }
}, 5000);

setTimeout(function() {
    var statusMessage = document.getElementById('status-message');
    if (statusMessage) {
        statusMessage.style.display = 'none';
    }
}, 5000);

setTimeout(function() {
    var statusError = document.getElementById('status-error');
    if (statusError) {
        statusError.style.display = 'none';
    }
}, 5000);

setTimeout(function() {
    var statusMessage = document.getElementById('status-message');
    if (statusMessage) {
        statusMessage.style.display = 'none';
    }
}, 5000);

setTimeout(function() {
    var statusError = document.getElementById('status-error');
    if (statusError) {
        statusError.style.display = 'none';
    }
}, 5000);

setTimeout(function() {
    var statusMessage = document.getElementById('status-message');
    if (statusMessage) {
        statusMessage.style.display = 'none';
    }
}, 5000);
