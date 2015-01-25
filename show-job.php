<?php
echo var_dump($_GET);
if (isset($_GET["id"])) {
    include("connect.php");
    $id = intval(pg_escape_string($_GET["id"]));
    $sql = "SELECT * FROM nusmaids.jobs WHERE id = '" . $id . "'";
    $result = pg_fetch_assoc(pg_query($db, $sql));
    echo 1;
} else if (!isset($_POST)) {
    echo "Post is not defined.\n";
    exit;
} else {
    echo 3;
}
var_dump($result);
?>