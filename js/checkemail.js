function checkDomain(){
    var validEmailDomain = "nus.edu.sg";
    var validEmailDomainNew = "u.nus.edu";

    var userEmail = $(#"input-nus-email");
    var stringArray = userEmail.split("@");
    var userDomain = stringArray[1];

    if (userDomain==validEmailDomain || userDomain==validEmailDomainNew){
        $("#div-check-domain").css('color','#000000');
        $("#div-check-domain").html("Valid domain");
        $("#create-account-button").removeAttr('disabled');
    } else {
        $("#div-check-domain").css('color','red');
        $("#div-check-domain").html("Invalid domain");
        $("#create-account-button").removeAttr('disabled','disabled');
    }
}

$(document).ready(function () {
    $("#create-account-button").attr('disabled','disabled');
    $("#div-check-domain").css('color','#FF0000');
    $("#input-password-confirm").keyup(checkDomain);
});
