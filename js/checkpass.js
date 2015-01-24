function checkPasswordMatch() {
    var password = $("#input-password").val();
    var confirmPassword = $("#input-password-confirm").val();

    if (password != confirmPassword) {
        $("#div-check-match").html("Passwords do not match!");
        $("#div-check-match").css('color','#FF0000');
        $("#create-account-button").attr('disabled','disabled');
    } else {
        $("#div-check-match").css('color','#000000');
        $("#div-check-match").html("Passwords match.");
        $("#create-account-button").removeAttr('disabled');
    }
}

$(document).ready(function () {
    $("#create-account-button").attr('disabled','disabled');
    $("#div-check-match").css('color','#FF0000');
    $("#input-password-confirm").keyup(checkPasswordMatch);
});
