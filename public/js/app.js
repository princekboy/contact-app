//show password js
const showpass = (pass, span) => {
    let password = document.getElementById(pass);
    if (password.type == "password") {
        password.type = "text";
        $("#" + span).html("<span class= 'fas fa-eye'></span>");
    } else {
        password.type = "password";
        $("#" + span).html("<span class= 'fas fa-eye-slash'></span>");
    }
};

//Change theme
try {
    function setTheme(theme) {
        localStorage.setItem("theme", theme);
        if (theme === "dark") {
            $("body").attr("data-theme", "dark");
            $(".lightBtn").fadeOut();
            $(".darkBtn").fadeIn();
        } else {
            $("body").attr("data-theme", "light");
            $(".darkBtn").fadeOut();
            $(".lightBtn").fadeIn();
        }
    }

    function loadTheme() {
        if (!localStorage.getItem("theme")) {
            //Checking if the default browser theme is light
            if (
                window.matchMedia &&
                window.matchMedia("(prefers-color-scheme: dark)").matches
            ) {
                $("body").attr("data-theme", "dark");
                $(".lightBtn").fadeOut();
                $(".darkBtn").fadeIn();
            } else {
                $("body").attr("data-mdb-theme", "light");
                $(".darkBtn").fadeOut();
                $(".lightBtn").fadeIn();
            }
        } else {
            let GetTheme = localStorage.getItem("theme");
            if (GetTheme === "dark") {
                $("body").attr("data-theme", "dark");
                $(".lightBtn").fadeOut();
                $(".darkBtn").fadeIn();
            } else {
                $("body").attr("data-theme", "light");
                $(".darkBtn").fadeOut();
                $(".lightBtn").fadeIn();
            }
        }
    }
} catch (error) {
    console.log("An error occured");
}

//Loading theme
$(document).ready(() => {
    loadTheme();
});

// Clicking to change theme
$(".lightBtn").click(() => {
    setTheme("dark");
});

$(".darkBtn").click(() => {
    setTheme("light");
});
