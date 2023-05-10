<?php
require_once "../databaseConnection.php";

$loginSatus = $_SESSION["login"];
$usersId = $_SESSION["usersId"];

if(!$loginSatus && !isset($usersId)){
  header("location: ../view/loginPage.php");
}

function fetchData($connection, $usersId){
  $selectQuery = "SELECT * FROM user WHERE uniqueId = ?";
  $stmt = mysqli_stmt_init($connection);

  if(mysqli_stmt_prepare($stmt, $selectQuery)){
    mysqli_stmt_bind_param($stmt, "s", $usersId);
    mysqli_stmt_execute($stmt);
    $selectResult = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($selectResult);

    return $row;
  }
}

$row = fetchData($connection, $usersId);
?>