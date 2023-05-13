<?php
session_start();
date_default_timezone_set("Asia/Jakarta");

define("home", "localhost");
define("username", "root");
define("password", "");
define("database", "ekstensi");

$connection = mysqli_connect(home, username, password, database);
?>