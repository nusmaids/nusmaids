<div class="container">
    <div class="row">
        <div class="nusmaids-title-container">
            <h1>Register</h1>
            <h3>Get started! Do jobs and get your jobs done!</h3>
        </div>
        <div class="nusmaids-logo-container">
            <img class="nusmaids-inline-logo" src="img/NUSMaids logo.png">
        </div>
    </div>
</div>

<hr>

<script src="js/checkpass.js"></script>
<script src="js/checkemail.js"></script>
<div class="container form-create-container" id="create-form-container">
    <form class="form-horizontal" id="create-form-horizontal" action= "add-user.php" method="post">

        <div class="nusmaids-form-item-wrapper">
            <div class="form-create-header">
                <label class="create-form-group">NUS Email</label>
            </div>
            <div class="form-create-input">
                <input type="email" name="registerEmail" class="form-control" id="input-nus-email" placeholder="a1234567@nus.edu.sg">
            </div>
        </div>

        <div class="nusmaids-form-item-wrapper">
            <p class="form-error-message" id="div-check-domain"></p>
        </div>

        <div class="nusmaids-form-item-wrapper">
            <div class="form-create-header">
                <label class="create-form-group">Password</label>
            </div>
            <div class="form-create-input">
                <input type="password" class="form-control" id="input-password" >
            </div>
        </div>

        <div class="nusmaids-form-item-wrapper">
            <div class="form-create-header">
                <label class="create-form-group">Confirm Password</label>
            </div>
            <div class="form-create-input">
                <input type="password" name="registerPassword" class="form-control" id="input-password-confirm" onChange="checkPasswordMatch();">
            </div>
        </div>

        <div class="nusmaids-form-item-wrapper">
            <p class="form-error-message" id="div-check-match">Please type a password</p>
        </div>

        <div class="nusmaids-form-item-wrapper">
            <div class="form-create-header">
                <label class="create-form-group">Contact Number</label>
            </div>
            <div class="form-create-input">
                <input type="tel" name="registerContactNumber" class="form-control" id="input-contact-number" placeholder="90785634">
            </div>
        </div>

        <div class="nusmaids-form-item-wrapper">
            <div class="form-create-header">
                <label class="create-form-group">First Name</label>
            </div>
            <div class="form-create-input">
                <input type="text" name="registerName" class="form-control" id="input-name" placeholder="John Kevin">
            </div>
        </div>

        <button type="submit" name="registerSubmit" class="btn btn-primary btn-lg btn-success nusmaids-form-button" id="create-account-button">Create Account</button>

    </form>
</div>
