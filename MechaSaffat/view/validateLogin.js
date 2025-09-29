function validateLogin() {
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();

    
    if (email === "") {
        alert("Email is required");
        return false;
    }

    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address");
        return false;
    }

    
    if (password === "") {
        alert("Password is required");
        return false;
    }

    if (password.length < 6) {
        alert("Password must be at least 6 characters long");
        return false;
    }

    
    window.location.href = "mechanics_dash.html";
    return false; 
}
