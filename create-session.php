<?php
$_SESSION['user_id'] = $result['id'];
$_SESSION['email'] = $result['address'];
$_SESSION['name'] = $result['name'];
$_SESSION['logged'] = true;
header("Location: index.php");
exit();
?>