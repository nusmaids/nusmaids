<!DOCTYPE html>
<html>
<head lang="en">
    <link type="text/css" rel="stylesheet" href="css/nusstyles.css" />
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="css/custom.css" />
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand nusmaids-navbar-item nusmaids-brand" href="index.html">NUSMaids</a>

            </div>

            <div id="navbar" class="navbar-collapse collapse">

                <div class="navbar-right">
                    <a class="btn btn-primary btn-lg btn-success nusmaids-navbar-item" href="#" role="button">Sign up</a>
                    <a class="btn btn-primary btn-lg nusmaids-navbar-item" href="#" role="button">Sign in</a>
                </div>

            </div>

        </div>
    </nav>

    <div class="jumbotron">

        <div class="container">
            <h1>Find A Maid</h1>
            <h3>Let them do the right thing for you!</h3>
        </div>
        <hr>
        <div class="container form-create-container" id="create-form-container">
            <form class="form-horizontal" id="create-form-horizontal">

                <div class="form-create-header" id="create-job-type">
                    <label class="create-form-group">Job type</label>
                </div>

                <div class="create-dropdown" id="create-dropdown">
                    <select class="form-control create-select" id="create-select-type">
                        <option>Cleaning</option>
                        <option>Repairs</option>
                        <option>Labour</option>
                        <option>Handicap Assistance</option>
                    </select>
                </div>
                <script> // this sets the selected element to the job that the user clicked on to get here
                    document.getElementById('create-select-type').selectedIndex=<?php echo $_GET["j"] - 1 ?>;
                </script>

                <div class="form-create-header">
                    <label class="create-form-group">Remuneration (in SGD)</label>
                </div>
                <div class="form-create-input">
                    <input type="text" class="form-control" id="inputRemuneration" placeholder="Expected pay">
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

                <button type="submit" class="btn btn-primary btn-lg btn-success" id="createSubmitButton">Submit Form</button>

            </form>
        </div>

    </div>

</body>

</html>
