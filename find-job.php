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
                    <h1>Be A Maid</h1>
                    <h3>Farm karma by doing jobs for others!</h3>
                </div>
                <div class="nusmaids-logo-container">
                    <img class="nusmaids-inline-logo" src="img/NUSMaids logo.png">
                </div>
            </div>
        </div>

        <hr>

        <div class="container" id="form-wrapper">

            <p class="nusmaids-form-title">Filter jobs by</p>

            <div class="container" id="nusmaids-job-selector-div">

                <form>
                    <select class="form-control" id="job-type">
                        <option value="1">Cleaning</option>
                        <option value="2">Repairs</option>
                        <option value="3">Labour</option>
                        <option value="4">Handicap Assistance</option>
                    </select>
                    <input id="filter-button" type="submit" class="btn btn-primary btn-lg btn-success nusmaids-form-button">
                </form>

                <script> // this sets the selected element to the job that the user clicked on to get here
                    document.getElementById('job-type').selectedIndex=<?php echo $_GET["j"] - 1 ?>;
                </script>

            </div>

        </div>

        <div id="search-results-wrapper" class="container">

            <p>put the table of search results here.<br>
            the table has to be generated by the php.<br>
            on page load, there should be php code to do search and display the db.</p>

        </div>

    </div>

</body>

</html>
