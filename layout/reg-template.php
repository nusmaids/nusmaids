<div class="container">
    <h1>Register</h1>
    <h3>The right things need doing!</h3>
</div>

<hr>

<script src="js/checkpass.js"></script>
<div class="container form-create-container" id="create-form-container">
    <form class="form-horizontal" id="create-form-horizontal" method="post">

        <div class="nusmaids-form-item-wrapper">
            <div class="form-create-header">
                <label class="create-form-group">NUS Email</label>
            </div>
            <div class="form-create-input">
                <input type="email" name="registerEmail" class="form-control" id="input-nus-email" placeholder="a1234567@nus.edu.sg">
            </div>
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
                <input type="text" name="registerFirstName" class="form-control" id="input-first-name" placeholder="John">
            </div>
        </div>

        <div class="nusmaids-form-item-wrapper">
            <div class="form-create-header">
                <label class="create-form-group">Last Name</label>
            </div>
            <div class="form-create-input">
                <input type="text" name="registerLastName" class="form-control" id="input-last-name" placeholder="Smith">
            </div>
        </div>

        <button type="submit" name="registerSubmit" class="btn btn-primary btn-lg btn-success nusmaids-form-button" id="create-account-button">Create Account</button>

    </form>
</div>
