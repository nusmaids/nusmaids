<div class="container">
    <h1>Register</h1>
    <h3>The right things need doing!</h3>
</div>

<hr>

<div class="container form-create-container" id="create-form-container">
    <form class="form-horizontal" id="create-form-horizontal" >

        <div class="nusmaids-form-item-wrapper">
            <div class="form-create-header">
                <label class="create-form-group">NUS Email</label>
            </div>
            <div class="form-create-input">
                <input type="email" class="form-control" id="input-nus-email" placeholder="a1234567@nus.edu.sg">
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
                <input type="password" class="form-control" id="input-password-confirm" onChange="checkPasswordMatch();">
            </div>
        </div>

        <div class="nusmaids-form-item-wrapper">
            <p class="form-error-message" id="div-check-match"></p>
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-success nusmaids-form-button" id="create-account-button">Create Account</button>

    </form>
</div>
