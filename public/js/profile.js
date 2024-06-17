document.addEventListener("DOMContentLoaded", function () {
    const profileSaveButton = document.querySelector(".btn-profile-save");
    if (profileSaveButton) {
        profileSaveButton.addEventListener("click", saveProfile);
    }

    const passwordUpdateButton = document.querySelector(".btn-password-update");
    if (passwordUpdateButton) {
        passwordUpdateButton.addEventListener("click", updatePassword);
    }

    const accountDeleteButton = document.querySelector(".btn-account-delete");
    if (accountDeleteButton) {
        accountDeleteButton.addEventListener("click", deleteAccount);
    }

    // Menú desplegable de perfil
    const profileButton = document.getElementById("profile-button");
    const dropdownContent = document.getElementById("dropdown-content");

    if (profileButton) {
        profileButton.addEventListener("click", function (event) {
            event.preventDefault();
            dropdownContent.classList.toggle("show");
        });

        window.onclick = function (event) {
            if (!event.target.matches("#profile-button img")) {
                if (
                    dropdownContent &&
                    dropdownContent.classList.contains("show")
                ) {
                    dropdownContent.classList.remove("show");
                }
            }
        };
    }

    // Manejar el clic en "Eliminar foto de perfil"
    const deleteProfilePicture = document.querySelector(
        ".delete-profile-picture"
    );
    if (deleteProfilePicture) {
        deleteProfilePicture.addEventListener("click", function () {
            document.getElementById("delete-profile-picture-form").submit();
        });
    }
});

function displayMessage(type, message) {
    const messageContainer = document.getElementById("message-container");
    if (messageContainer) {
        messageContainer.innerHTML = `<div class="message ${type}">${message}</div>`;
        const messageElement = messageContainer.firstChild;
        messageElement.style.display = "block";
        setTimeout(() => {
            messageElement.style.display = "none";
        }, 5000);
    }
}

function saveProfile() {
    const form = document.getElementById("profile-form");
    if (form) {
        const formData = new FormData(form);

        fetch(form.action, {
            method: form.method,
            headers: {
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
            body: formData,
        })
            .then((response) => {
                if (!response.ok) {
                    throw new Error("Network response was not ok");
                }
                return response.json();
            })
            .then((data) => {
                if (data.error) {
                    displayMessage("error", data.error);
                } else {
                    displayMessage(
                        "success",
                        data.message || "Perfil guardado con éxito."
                    );
                }
            })
            .catch((error) => {
                displayMessage(
                    "error",
                    "Hubo un error al actualizar el perfil."
                );
            });
    }
}

function updatePassword() {
    const form = document.getElementById("password-form");
    if (form) {
        const formData = new FormData(form);

        fetch(form.action, {
            method: form.method,
            headers: {
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
            body: formData,
        })
            .then((response) => {
                if (!response.ok) {
                    throw new Error("Network response was not ok");
                }
                return response.json();
            })
            .then((data) => {
                if (data.error) {
                    displayMessage("error", data.error);
                } else {
                    displayMessage(
                        "success",
                        data.message || "Contraseña actualizada con éxito."
                    );
                }
            })
            .catch((error) => {
                displayMessage(
                    "error",
                    "Hubo un error al actualizar la contraseña."
                );
            });
    }
}

function deleteAccount() {
    if (
        confirm(
            "¿Estás seguro de que deseas eliminar tu cuenta? Esta acción no se puede deshacer."
        )
    ) {
        const form = document.getElementById("delete-account-form");
        if (form) {
            const formData = new FormData(form);

            fetch(form.action, {
                method: form.method,
                headers: {
                    "X-CSRF-TOKEN": document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content"),
                },
                body: formData,
            })
                .then((response) => {
                    if (!response.ok) {
                        throw new Error("Network response was not ok");
                    }
                    return response.json();
                })
                .then((data) => {
                    if (data.error) {
                        displayMessage(
                            "error",
                            "Hubo un error al eliminar la cuenta."
                        );
                    } else {
                        displayMessage(
                            "success",
                            data.message || "Cuenta eliminada con éxito."
                        );
                        setTimeout(() => {
                            window.location.href = "/";
                        }, 2000);
                    }
                })
                .catch((error) => {
                    displayMessage(
                        "error",
                        "Hubo un error al eliminar la cuenta."
                    );
                });
        }
    }
}

function previewImage(event) {
    var input = event.target;
    var reader = new FileReader();

    reader.onload = function () {
        var dataURL = reader.result;
        var preview = document.getElementById("profile-picture-preview");

        preview.src = dataURL;
    };

    reader.readAsDataURL(input.files[0]);
}
