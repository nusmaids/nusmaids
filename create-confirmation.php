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
            <form class="confirm-horizontal" id="create-confirm-horizontal">

                <div class="confirm-create-header" id="create-job-type-confirm">
                    <label class="create-confirm-group">Job type</label>
                </div>
                <div class="confirm-create-input" id="create-job-type-input">
                    <p id="confirm-create-input-field">
                        <?php
                            echo $_POST['inputjobtype'];
                        ?>
                    </p>
                </div>


                <div class="confirm-create-header">
                    <label class="create-confirm-group">Remuneration (in SGD)</label>
                </div>
                <div class="confirm-create-input" id="create-job-type-input">
                    <p id="confirm-create-input-field">
                        <?php
                            echo $_POST['inputjobtype'];
                        ?>
                    </p>
                </div>

                <div class="form-create-header">
                    <label class="create-form-group">Location</label>
                </div>
                <div class="form-create-input">
                    <input type="text" class="form-control" id="inputLocation" placeholder="Your job location">
                </div>

                <div class="form-create-header">
                    <label class="create-form-group">Starting from</label>
                </div>
                <div class="form-create-input">
                    <input type="text" class="form-control" id="inputStartDate" placeholder="DD/MM/YYYY">
                </div>

                <div class="form-create-header">
                    <label class="create-form-group">Ending at</label>
                </div>
                <div class="form-create-input">
                    <input type="text" class="form-control" id="inputEndDate" placeholder="DD/MM/YYYY">
                </div>

                <div class="form-create-header">
                    <label class="create-form-group">Description</label>
                </div>
                <div class="form-create-input">
                    <input type="text" class="form-control" id="inputDescription" placeholder="Your job description">
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-success nusmaids-form-button" id="createSubmitButton">Create Job</button>

            </form>
        </div>

    </div>

</body>

</html>
