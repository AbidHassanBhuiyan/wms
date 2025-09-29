$(document).ready(function () {
    $("#registrationForm").on("submit", function (e) {
        e.preventDefault(); $(document).ready(function () {
    $("#registrationForm").on("submit", function (e) {
        e.preventDefault(); 

        if (!validateRegistration()) {
            return false;
        }

        $.ajax({
            url: "Action_reg.php",
            method: "POST",
            data: $(this).serialize(),
            success: function (response) {
                $("#response").html("<p style='color:green'>" + response + "</p>");
            },
            error: function () {
                $("#response").html("<p style='color:red'>Error. Try again.</p>");
            }
        });
    });
});

function validateRegistration() {
    let firstName = $("#firstName").val().trim();
    let lastName = $("#lastName").val().trim();
    let email = $("#email").val().trim();
    let password = $("#password").val().trim();
    let confirmPassword = $("#confirmPassword").val().trim();

    if (firstName === "") { alert("First name is required"); return false; }
    if (lastName === "") { alert("Last name is required"); return false; }
    if (email === "") { alert("Email is required"); return false; }
    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!emailPattern.test(email)) { alert("Enter a valid email"); return false; }
    if (password === "") { alert("Password is required"); return false; }
    if (password.length < 6) { alert("Password must be at least 6 chars"); return false; }
    if (confirmPassword === "") { alert("Confirm your password"); return false; }
    if (password !== confirmPassword) { alert("Passwords do not match"); return false; }

    return true;
}


       
        });
    });



