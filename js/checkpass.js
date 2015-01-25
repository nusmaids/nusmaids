function checkPasswordMatch() {
    var password = $("#input-password").val();
    var confirmPassword = $("#input-password-confirm").val();
    var password = $("#input-password-confirm").val();
    var lok = (password.length >= 8) && (password.length <= 32);
    var pok = password != confirmPassword;

    if (!lok || !pok) {
        $("#div-check-match").html("Passwords do not match!");
        $("#div-check-match").css('color','#FF0000');
        $("#create-account-button").attr('disabled','disabled');
    } else {
        $("#div-check-match").css('color','#000000');
        $("#div-check-match").html("Passwords match!");
        $("#create-account-button").removeAttr('disabled');
    }
}

function checkPasswordLength() {
    var password = $("#input-password-confirm").val();
    var ok = (password.length >= 8) && (password.length <= 32);

    if (!ok) {
        $("#div-check-match").html("Password must be between 8 to 32 characters inclusive");
        $("#div-check-match").css('color','#FF0000');
        $("#create-account-button").attr('disabled','disabled');
    } else {
        $("#div-check-match").css('color','#000000');
        $("#div-check-match").html("Passwords match.");
        $("#create-account-button").removeAttr('disabled');
        checkPasswordMatch();
    }
}

function doBoth() {
    checkPasswordMatch();
    checkPasswordLength();
}

$(document).ready(function () {
    $("#create-account-button").attr('disabled','disabled');
    $("#div-check-match").css('color','#FF0000');
    $("#input-password-confirm").keyup(doBoth);
});
