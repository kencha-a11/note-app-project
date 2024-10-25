function validateForm() {
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    const confirmPassword = document.getElementById("confirmPassword");
    let valid = true;

    // Reset error messages
    document.getElementById("nameError").style.display = "none";
    document.getElementById("emailError").style.display = "none";
    document.getElementById("passwordError").style.display = "none";
    document.getElementById("confirmPasswordError").style.display = "none";

    // Validate name
    if (!name.value) {
        document.getElementById("nameError").textContent = "Name is required.";
        document.getElementById("nameError").style.display = "block";
        valid = false;
    }

    // Validate email
    if (!email.value) {
        document.getElementById("emailError").textContent = "Email is required.";
        document.getElementById("emailError").style.display = "block";
        valid = false;
    } else if (!/^\S+@\S+\.\S+$/.test(email.value)) {
        document.getElementById("emailError").textContent = "Please enter a valid email.";
        document.getElementById("emailError").style.display = "block";
        valid = false;
    }

    // Validate password
    if (!password.value) {
        document.getElementById("passwordError").textContent = "Password is required.";
        document.getElementById("passwordError").style.display = "block";
        valid = false;
    } else if (password.value.length < 6) {
        document.getElementById("passwordError").textContent = "Password must be at least 6 characters.";
        document.getElementById("passwordError").style.display = "block";
        valid = false;
    }

    // Validate confirm password
    if (confirmPassword.value !== password.value) {
        document.getElementById("confirmPasswordError").textContent = "Passwords do not match.";
        document.getElementById("confirmPasswordError").style.display = "block";
        valid = false;
    }

    return valid;
}
