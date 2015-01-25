<div class="container">
    <h1>Login</h1>
    <h3>Start doing the right thing!</h3>
</div>

<hr>

<div class="container form-create-container" id="create-form-container">
    <form class="form-horizontal" id="create-form-horizontal" > <!--needs to run a scrpit to check the user/pass and display error msg below if fail-->

        <div class="nusmaids-form-item-wrapper">
            <p class="form-error-message" id="div-check-auth">Invalid username and password combination! Please try again.</p>
        </div>

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

        <button type="submit" class="btn btn-primary btn-lg btn-success nusmaids-form-button" id="create-account-button">Login</button>

    </form>
</div>
