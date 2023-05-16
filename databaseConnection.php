<?php
session_start();

define("home", "localhost");
define("username", "root");
define("password", "");
define("database", "discover");

$connection = mysqli_connect(home, username, password, database);
?>