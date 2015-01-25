<div class="container">
    <div class="row">
        <div class="nusmaids-title-container">
            <h1>Login</h1>
            <h3>Logging in allows you to manage your jobs!</h3>
        </div>
        <div class="nusmaids-logo-container">
            <img class="nusmaids-inline-logo" src="img/NUSMaids logo.png">
        </div>
    </div>
</div>

<hr>

<div class="container form-create-container" id="create-form-container">
    <form class="form-horizontal" id="create-form-horizontal" action="login-user.php" method="post" > <!--needs to run a scrpit to check the user/pass and display error msg below if fail-->

        <div class="nusmaids-form-item-wrapper">
            <p class="form-error-message" id="div-check-auth">Invalid username and password combination! Please try again.</p>
        </div>

        <div class="nusmaids-form-item-wrapper">
            <div class="form-create-header">
                <label class="create-form-group">NUS Email</label>
            </div>
            <div class="form-create-input">
                <input type="email" name="loginEmail" class="form-control" id="input-nus-email" placeholder="a1234567@nus.edu.sg">
            </div>
        </div>

        <div class="nusmaids-form-item-wrapper">
            <div class="form-create-header">
                <label class="create-form-group">Password</label>
            </div>
            <div class="form-create-input">
                <input type="password" name="loginPassword" class="form-control" id="input-password-login" >
            </div>
        </div>

        <button type="submit" name="loginSubmit" class="btn btn-primary btn-lg btn-success nusmaids-form-button" id="login-button">Login</button>

    </form>
</div>

<?php
function login() {
    if(empty($_POST['username']))
    {
        $this->HandleError("Email field is empty!");
        return false;
    }

    if(empty($_POST['password']))
    {
        $this->HandleError("Password is empty!");
        return false;
    }

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if(!$this->CheckLoginInDB($username,$password))
    {
        return false;
    }

    session_start();

    $_SESSION[$this->GetLoginSessionVar()] = $username;

    return true;
}
?>
