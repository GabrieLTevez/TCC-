function togglePasswordVisibility() {
    var passwordInput = document.getElementById("passwordInput");
    var toggleButton = document.getElementById("toggleButton");
    var toggleImage = toggleButton.querySelector("img");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleImage.src = "imagens/visivel.png";
        toggleImage.alt = "Ocultar Senha";
    } else {
        passwordInput.type = "password";
        toggleImage.src = "imagens/olho.png";
        toggleImage.alt = "Mostrar Senha";
    }
}