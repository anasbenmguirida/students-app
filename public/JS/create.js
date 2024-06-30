window.onloadTurnstileCallback = function () {
    turnstile.render("#mywidget", {
        sitekey: "0x4AAAAAAAcPqi00a6QZbAZd",
        callback: function (token) {
            console.log(`Challenge Success ${token}`);
        },
    });
};
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const nameInput = document.getElementById("username");
    const prenomInput = document.getElementById("prenom");
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");
    const passwordConfirmationInput = document.getElementById("passwordc");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the form from submitting

        const name = nameInput.value.trim();
        const prenom = prenomInput.value.trim();
        const email = emailInput.value.trim();
        const password = passwordInput.value.trim();
        const passwordConfirmation = passwordConfirmationInput.value.trim();

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; // Minimum 8 characters, at least one letter and one number

        let errors = [];

        if (name === "") {
            errors.push("Veuillez entrer votre nom!");
        }

        if (prenom === "") {
            errors.push("Veuillez entrer votre prenom!");
        }

        if (!emailRegex.test(email)) {
            errors.push("Veuillez entrer une address mail valide!");
        }

        if (!passwordRegex.test(password)) {
            errors.push(
                "le mot de passe doit etre de 8 caracteres et contient 1 lettre et 1 chiffre au minimun!"
            );
        }

        if (password !== passwordConfirmation) {
            errors.push("Passwords do not match.");
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
