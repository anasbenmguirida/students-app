window.onloadTurnstileCallback = function () {
    turnstile.render("#mywidget", {
        sitekey: "0x4AAAAAAAcPqi00a6QZbAZd",
        callback: function (token) {
            console.log(`Challenge Success ${token}`);
        },
    });
};

// valider les inputs :
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the form from submitting

        const email = emailInput.value.trim();
        const password = passwordInput.value.trim();

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        function isEmpty(field) {
            if (field == "") return true;
        }
        let errors = [];
        if (isEmpty(email)) {
            errors.push("l'email est un champ obligatoire!");
        }
        if (isEmpty(password)) {
            errors.push("le mot de passe est un chap obligatoire!");
        }
        if (!emailRegex.test(email)) {
            errors.push("Please enter a valid email address.");
        }

        if (password.length < 8) {
            errors.push("Password must be at least 8 characters long ");
        }

        if (errors.length > 0) {
            Swal.fire({
                title: "Error!",
                html: errors.join("<br>"),
                icon: "error",
                confirmButtonText: "OK",
            });
        } else {
            form.submit(); // If validation passes, submit the form
        }
    });
});
