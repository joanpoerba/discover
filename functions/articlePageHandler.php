<?php
require_once "../databaseConnection.php";

$loginSatus = $_SESSION["login"];
$usersId = $_SESSION["usersId"];

if (!isset($loginSatus) && !isset($usersId)) {
  header("location: ../view/loginPage.php");
}

function fetchDatas($connection, $id){
  $fetchQuery = "SELECT * FROM suku WHERE id = ?";
  $stmt = mysqli_stmt_init($connection);

  if(mysqli_stmt_prepare($stmt, $fetchQuery)){
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    return mysqli_stmt_get_result($stmt);
  }
}

$datas = fetchDatas($connection, $_GET["id"]);
?>