<!DOCTYPE html>
<html>
<head lang="en">
    <link type="text/css" rel="stylesheet" href="nusstyles.css" />
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div class="container" id="create-form-container">
        <form class="form-horizontal" id="create-form-horizontal">
            <div class="radio-type" id="create-radio-type">
                <label class="radio-inline">
                    <input type="radio" id="radioCleaning" value="option1">Cleaning
                </label>
                <label class="radio-inline">
                    <input type="radio" id="radioRepairs" value="option2">Repairs
                </label>
                <label class="radio-inline">
                    <input type="radio" id="radioLabour" value="option3">Labour
                </label>
                <label class="radio-inline">
                    <input type="radio" id="radioHandicap" value="option4">Handicap Assistance
                </label>
            </div>
            <div class="form-create">
                <label class="form-group">Location</label>
                <input type="text" class="form-control" id="inputLocation" placeholder="Your job location">
            </div>
            <div class="form-create">
                <label class="form-group">Starting from</label>
                <div></div>
                <input class="datePicker" date-date-format="dd/mm/yyyy"/>
            </div>
            <div class="form-create">
                <label class="form-group">Ending at</label>
                <div></div>
                <input class="datePicker" date-date-format="dd/mm/yyyy"/>
            </div>
            <div class="form-create">
                <label class="form-group">Description</label>
                <input type="text" class="form-control" id="inputDescription" placeholder="Your job description">
            </div>
            <button type="submit" class="btn btn-submit">Submit Form</button>
        </form>
    </div>
</body>
</html>