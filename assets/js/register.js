
// Show/Hide Password
$("#show-hide-password").click(function () {
    var passwordField = $("#password");
    var fieldType = passwordField.attr("type");
    if (fieldType === "password") {
        passwordField.attr("type", "text");
    } else {
        passwordField.attr("type", "password");
    }
});

// Show/Hide Confirm Password
$("#show-hide-confirm-password").click(function () {
    var confirmPasswordField = $("#confirmPassword");
    var fieldType = confirmPasswordField.attr("type");
    if (fieldType === "password") {
        confirmPasswordField.attr("type", "text");
    } else {
        confirmPasswordField.attr("type", "password");
    }
});
