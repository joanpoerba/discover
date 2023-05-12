<?php
require_once "../databaseConnection.php";
$_SESSION["username"] = "default";

function verifyUsername($connection, $username)
{
  $checkQuery = "SELECT username FROM user WHERE username = ?";
  $stmt = mysqli_stmt_init($connection);

  if (mysqli_stmt_prepare($stmt, $checkQuery)) {
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $row = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($row) == 1) {
      $_SESSION["username"] = "ada";
      $_SESSION["usernameData"] = $username;
    } else {
      $_SESSION["username"] = "gada";
    }
  }
}

function changePassword($connection, $password)
{
  $changeQuery = "UPDATE user SET password = ? WHERE username = ?";
  $stmt = mysqli_stmt_init($connection);

  if(mysqli_stmt_prepare($stmt, $changeQuery)){
    mysqli_stmt_bind_param($stmt, "ss", password_hash($password, PASSWORD_BCRYPT), $_SESSION["usernameData"]);
    mysqli_stmt_execute($stmt);

    return mysqli_affected_rows($connection);
  }
}

if (isset($_POST["submitBtn"])) {
  $username = htmlspecialchars(mysqli_real_escape_string($connection, $_POST["username"]));

  $information = verifyUsername($connection, $username);
}

if(isset($_POST["changeBtn"])){
  $password = htmlspecialchars(mysqli_real_escape_string($connection, $_POST["password"]));

  if(changePassword($connection, $password) > 0){
    header("location: ../view/loginPage.php");
  }
}
?>