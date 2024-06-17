document.addEventListener("DOMContentLoaded", function () {
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
});
