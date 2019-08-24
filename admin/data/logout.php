<?php

session_start();
$_SESSION['user']['level'] == "admin";
unset($_SESSION['user']['level']);
session_unset();
session_destroy();
header("location:../../index.php")

?>