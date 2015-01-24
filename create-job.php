<!DOCTYPE html>
<html>
<head lang="en">
    <link type="text/css" rel="stylesheet" href="css/nusstyles.css" />
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
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

            <button type="submit" class="btn btn-submit" id="createSubmitButton">Submit Form</button>
        </form>
    </div>
</body>
</html>
