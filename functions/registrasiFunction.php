<?php
require_once "databaseConnection.php";
date_default_timezone_set("Asia/Jakarta");

$information = null;

if (!mysqli_connect_error()) {
  function register($connection, $username, $password)
  {
    $checkQuery = "SELECT * FROM user";
    $stmt = mysqli_stmt_init($connection);

    if (mysqli_stmt_prepare($stmt, $checkQuery)) {
      mysqli_stmt_execute($stmt);
      $checkResult = mysqli_stmt_get_result($stmt);
      $row = mysqli_fetch_assoc($checkResult);

      if ($username == $row["username"]) {
        return true;
      } else {
        $insertQuery = "INSERT INTO user(uniqueId, username, password) VALUES(?, ?, ?)";
        $uniqueId = uniqid("", true);
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        if (mysqli_stmt_prepare($stmt, $insertQuery)) {
          mysqli_stmt_bind_param($stmt, "sss", $uniqueId, $username, $hashedPassword);
          mysqli_stmt_execute($stmt);

          $_SESSION["login"] = true;
          $_SESSION["usersId"] = $uniqueId;
          header("location: view/home.php");
        }
      }
    }
  }

  if (isset($_POST["registerBtn"])) {
    $username = htmlspecialchars(mysqli_real_escape_string($connection, $_POST["username"]));
    $password = htmlspecialchars(mysqli_real_escape_string($connection, $_POST["password"]));

    $information = register($connection, $username, $password);
  }
}
