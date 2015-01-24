<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="img/icon.ico" rel="favicon">
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-1.11.2.js"></script>

    <title>
        NUSMaids
    </title>

</head>

<body>
    <?php
        include("layout/navbar.php");
    ?>

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

    <div class="jumbotron">
        <div class="container">
            <h1>NUSMaids</h1>
            <h3>Be a maid, do the right thing!</h3>
        </div>
        <hr>
        <div class="container" style="border: 1px solid black">

            <div class="container-fluid nusmaids-selection-box" id="find-jobs-box">

                <h3>Be A Maid</h3>
                <a href="find-job.php?j=1"><div class="nusmaids-selection-link">Cleaning</div></a>
                <a href="find-job.php?j=2"><div class="nusmaids-selection-link">Repairs</div></a>
                <a href="find-job.php?j=3"><div class="nusmaids-selection-link">Labour</div></a>
                <a href="find-job.php?j=4"><div class="nusmaids-selection-link">Handicap Assistance</div></a>

            </div>

            <div class="container-fluid nusmaids-selection-box" id="create-jobs-box">

                <h3>Create A Job</h3>
                <a href="create-job.php?j=1"><div class="nusmaids-selection-link">Cleaning</div></a>
                <a href="create-job.php?j=2"><div class="nusmaids-selection-link">Repairs</div></a>
                <a href="create-job.php?j=3"><div class="nusmaids-selection-link">Labour</div></a>
                <a href="create-job.php?j=4"><div class="nusmaids-selection-link">Handicap Assistance</div></a>

            </div>

        </div>
    </div>

</body>

</html>
