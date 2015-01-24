<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand nusmaids-navbar-item nusmaids-brand" href="/">NUSMaids</a>

        </div>

        <div id="navbar" class="navbar-collapse collapse">

            <div class="navbar-right" id="navbar-right-null">
                <a class="btn btn-primary btn-lg btn-success nusmaids-navbar-item" href="register.php" role="button" id="registerButton">Register</a>
                <a class="btn btn-primary btn-lg nusmaids-navbar-item" href="login.php" role="button" id="logInButton">Login</a>
            </div>

            <div class="navbar-right" id="navbar-right-session">
                <a class="btn btn-primary btn-lg btn-success nusmaids-navbar-item" href="profile.php" role="button" id="usernameButton"></a>
                <a class="btn btn-primary btn-lg nusmaids-navbar-item" href="logout.php" role="button" id="logOutButton">Logout</a>
            </div>
        </div>

    </div>
    <?php if (isSet($_SESSION["emailAddress"])) : ?>
        <script>
        $("#navbar-right-null").remove();
        $("#usernameButton").html($_SESSION['emailAddress']);
    </script>

    <?php else : ?>
    <script>
        $("#navbar-right-session").remove();
    </script>

    <?php endif ; ?>

</nav>
