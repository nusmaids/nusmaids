<!DOCTYPE html>
<html lang="en">

<body>

<?php
include("connect.php");
echo var_dump($_POST);
$inputJobType = intval(pg_escape_string($_POST['inputJobType']));
$inputExpectedPay = pg_escape_string($_POST['inputExpectedPay']);
$inputLocation =  pg_escape_string($_POST['inputLocation']);
$inputStartDate= pg_escape_string($_POST['inputStartDate']);
$inputEndDate = pg_escape_string($_POST['inputEndDate']);
$inputDescription = pg_escape_string($_POST['inputDescription']);
#$inputEmployerId = $_SESSION['userId'];
$inputEmployerId = 1;

$sql = "INSERT INTO nusmaids.jobs (type, location, employer_id, cost, workflow_state, description, start_date, end_date)
VALUES ('" . $inputJobType . "', '" . $inputLocation . "',
    '" . $inputEmployerId . "', '" . $inputExpectedPay . "',
     '1', '" . $inputDescription . "', '" . $inputStartDate . "',
    '" . $inputEndDate . "')
    RETURNING *;
";

$result = pg_fetch_assoc(pg_query($db, $sql));

if (!$db) {
    echo "An error occurred.\n";
    exit;
}

include("show-job.php");
?>

</body>
</html>
