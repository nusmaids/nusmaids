<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include("layout/head-template.php");
    ?>

</head>

<body>
    <?php
    include("layout/login-redirect.php");
    include("layout/navbar.php");
    ?>

    <div class="jumbotron">

        <div class="container">
            <h1>Find A Maid</h1>
            <h3>Let them do the right thing for you!</h3>
        </div>
        <hr>
        <div class="container confirm-create-container" id="create-confirm-container">


            <div class="confirm-create-header" id="create-job-type-confirm">
                <label class="create-confirm-group">Job type</label>
            </div>
            <div class="confirm-create-input" id="create-job-type-input">
                <p id="confirm-create-input-field">
                    <?php
                    echo $_POST['inputJobType'];
                    ?>
                </p>
            </div>


            <div class="confirm-create-header">
                <label class="create-confirm-group">Remuneration (in SGD)</label>
            </div>
            <div class="confirm-create-input" id="create-remuneration-input">
                <p id="confirm-create-input-field">
                    <?php
                    echo $_POST['inputExpectedPay'];
                    ?>
                </p>
            </div>

            <div class="confirm-create-header">
                <label class="create-confirm-group">Location</label>
            </div>
            <div class="confirm-create-input" id="create-location-input">
                <p id="confirm-create-input-field">
                    <?php
                    echo $_POST['inputLocation'];
                    ?>
                </p>
            </div>

            <div class="confirm-create-header">
                <label class="create-confirm-group">Starting from</label>
            </div>
            <div class="confirm-create-input" id="create-start-input">
                <p id="confirm-create-input-field">
                    <?php
                    echo $_POST['inputStartDate'];
                    ?>
                </p>
            </div>

            <div class="confirm-create-header">
                <label class="create-confirm-group">Ending at</label>
            </div>
            <div class="confirm-create-input" id="create-start-input">
                <p id="confirm-create-input-field">
                    <?php
                    echo $_POST['inputEndDate'];
                    ?>
                </p>
            </div>

            <div class="confirm-create-header">
                <label class="create-confirm-group">Description</label>
            </div>
            <div class="confirm-create-input" id="create-start-input">
                <p id="confirm-create-input-field">
                    <?php
                    echo $_POST['inputDescription'];
                    ?>
                </p>
            </div>

            <div>
                <a class="btn btn-primary btn-lg btn-success nusmaids-form-button" href="add-job.php" role="button" id="confirmButton">Confirm</a>
            </div>


        </div>

    </div>

</body>

</html>
