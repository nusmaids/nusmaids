$(document).ready(function () {
    $("#create-account-button").attr('disabled','disabled');
    $("#txtConfirmPassword").keyup(checkPasswordMatch);
});

function checkPasswordMatch() {
    var password = $("#input-password").val();
    var confirmPassword = $("#input-password-confirm").val();

    if (password != confirmPassword) {
        $("#div-check-match").html("Passwords do not match!");
    } else {
        $("#div-check-match").html("Passwords match.");
        $("#create-account-button").attr('disabled','disabled');
    }
}
