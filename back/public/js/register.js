// register.js

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("registerForm");
    const button = document.getElementById("registerButton");
    const inputs = document.querySelectorAll(".form-group input");

    // Add focus and blur event listeners to inputs for animation
    inputs.forEach((input) => {
        input.addEventListener("focus", () => {
            input.previousElementSibling.classList.add("focused");
        });

        input.addEventListener("blur", () => {
            if (!input.value) {
                input.previousElementSibling.classList.remove("focused");
            }
        });
    });

    // Add loading animation to the button on form submit
    form.addEventListener("submit", function () {
        button.classList.add("loading");
        button.disabled = true;
        button.innerHTML = "Registrando...";
    });
});
