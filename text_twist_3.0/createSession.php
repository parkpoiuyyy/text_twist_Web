<?php

$q = $_REQUEST["q"];

session_start();
if (!isset($_SESSION["username"])){
    $_SESSION["username"] = $q;

}

?>