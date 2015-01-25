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
            <div class="row">
                <div class="nusmaids-title-container">
                    <h1>Create A Job</h1>
                    <h3>Others are happy to do your jobs for you!</h3>
                </div>
                <div class="nusmaids-logo-container">
                    <img class="nusmaids-inline-logo" src="img/NUSMaids logo.png">
                </div>
            </div>
        </div>
        <hr>
        <div class="container form-create-container" id="create-form-container">
            <form class="form-horizontal" id="create-form-horizontal" action="add-job.php" method="post">

                <div class="form-create-header" id="create-job-type" name="inputJobType" >
                    <label class="create-form-group">Job type</label>
                </div>

                <div class="create-dropdown" id="create-dropdown">
                    <select class="form-control create-select" id="create-select-type" name="inputJobType">
                        <option value = 1>Cleaning</option>
                        <option value = 2>Repairs</option>
                        <option value = 3>Labour</option>
                        <option value = 4>Handicap Assistance</option>
                    </select>
                </div>
                <script> // this sets the selected element to the job that the user clicked on to get here
                    document.getElementById('create-select-type').selectedIndex=<?php echo $_GET["j"] - 1 ?>;
                </script>

                <div class="form-create-header">
                    <label class="create-form-group">Remuneration (in SGD)</label>
                </div>
                <div class="form-create-input">
                    <input type="text" class="form-control" id="inputRemuneration" placeholder="Expected pay" name="inputExpectedPay">
                </div>

                <div class="form-create-header">
                    <label class="create-form-group">Location</label>
                </div>
                <div class="form-create-input">
                    <input type="text" class="form-control" id="inputLocation" name="inputLocation" placeholder="Your job location">
                </div>

                <div class="form-create-header">
                    <label class="create-form-group">Starting from</label>
                </div>
                <div class="form-create-input">
                    <input type="text" class="form-control" id="inputStartDate" name="inputStartDate" placeholder="DD/MM/YYYY">
                </div>

                <div class="form-create-header">
                    <label class="create-form-group">Ending at</label>
                </div>
                <div class="form-create-input">
                    <input type="text" class="form-control" id="inputEndDate" name="inputEndDate" placeholder="DD/MM/YYYY">
                </div>

                <div class="form-create-header">
                    <label class="create-form-group">Description</label>
                </div>
                <div class="form-create-input">
                    <input type="text" class="form-control" id="inputDescription" name="inputDescription" placeholder="Your job description">
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-success nusmaids-form-button" id="createSubmitButton">Create Job</button>

            </form>
        </div>

    </div>

</body>

</html>
