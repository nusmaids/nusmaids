<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include("layout/head-template.php");
    ?>

</head>

<body>
    <?php
        include("layout/navbar.php");
    ?>

    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="nusmaids-title-container">
                    <h1>NUSMaids</h1>
                    <h3>The platform that solves your odd-job problems</h3>
                </div>
                <div class="nusmaids-logo-container">
                    <img class="nusmaids-inline-logo" src="img/NUSMaids logo.png">
                </div>
            </div>
        </div>
        <hr>
        <div class="container" id="selection-container">
            <div class="row">

                <div class="col-md-6 nusmaids-selection-box" id="find-jobs-box">

                    <h3>Be A Maid</h3>
                    <a href="find-job.php?j=1"><div class="btn btn-default nusmaids-selection-link">Cleaning</div></a><br>
                    <a href="find-job.php?j=2"><div class="btn btn-default nusmaids-selection-link">Repairs</div></a><br>
                    <a href="find-job.php?j=3"><div class="btn btn-default nusmaids-selection-link">Labour</div></a><br>
                    <a href="find-job.php?j=4"><div class="btn btn-default nusmaids-selection-link">Handicap Assistance</div></a>

                </div>

                <div class="col-md-6 nusmaids-selection-box" id="create-jobs-box">

                    <h3>Create A Job</h3>
                    <a href="create-job.php?j=1"><div class="btn btn-default nusmaids-selection-link">Cleaning</div></a>
                    <a href="create-job.php?j=2"><div class="btn btn-default nusmaids-selection-link">Repairs</div></a>
                    <a href="create-job.php?j=3"><div class="btn btn-default nusmaids-selection-link">Labour</div></a>
                    <a href="create-job.php?j=4"><div class="btn btn-default nusmaids-selection-link">Handicap Assistance</div></a>

                </div>

            </div>
        </div>

    </div>

</body>

</html>
