function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if (!name.trim()) {
        displayErrorMessage("Por favor, insira seu nome.");
        return false;
    }

    if (!emailPattern.test(email)) {
        displayErrorMessage("Por favor, insira um endereço de e-mail válido.");
        return false;
    }

    displaySuccessMessage("Enviando e-mail...");

    return true;
}

function displaySuccessMessage(message) {
    document.getElementById("successMessage").textContent = message;
    document.getElementById("successMessage").style.display = "block";
    document.getElementById("errorMessage").style.display = "none";
}

function displayErrorMessage(message) {
    document.getElementById("errorMessage").textContent = message;
    document.getElementById("errorMessage").style.display = "block";
    document.getElementById("successMessage").style.display = "none";
}
