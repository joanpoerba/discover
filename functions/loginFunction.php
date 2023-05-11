<?php
require_once "../databaseConnection.php";
$information = null;

function login($connection, $username, $password)
{
  if (isset($_COOKIE["login"])) {
    if ($_COOKIE["login"] == password_verify("login", $_COOKIE["login"])) {
      $_SESSION["login"] = true;
      $_SESSION["uniqueId"] = $_COOKIE["uniqueId"];
    }
  }

  if (isset($_SESSION["login"])) {
    header("location: ../view/home.php");
  }

  $checkQuery = "SELECT * FROM user WHERE username = ?";
  $stmt = mysqli_stmt_init($connection);

  if (mysqli_stmt_prepare($stmt, $checkQuery)) {
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $checkResult = mysqli_stmt_get_result($stmt);


    if (mysqli_num_rows($checkResult) == 1) {
      $row = mysqli_fetch_assoc($checkResult);
      $hashedPassword = $row["password"];

      if (!password_verify($password, $hashedPassword)) {
        $error = "wrongPassword";
        return $error;
      } else {
        $_SESSION["login"] = true;
        $_SESSION["usersId"] = $row["uniqueId"];
        header("location: home.php");
      }
    } else {
      global $hashedPassword;

      if (!password_verify($password, $hashedPassword)) {
        $error = "wrongBoth";
      } else {
        $error = "wrongUsername";
      }

      return $error;
    }
  }

  if (isset($_POST["remember"])) {
    setcookie("st", password_hash("login", PASSWORD_BCRYPT), time() + 60);
    setcookie("dt", $row["uniqueId"], time() + 60);
  }
}

if (isset($_POST["loginBtn"])) {
  $username = htmlspecialchars(mysqli_real_escape_string($connection, $_POST["username"]));
  $password = htmlspecialchars(mysqli_real_escape_string($connection, $_POST["password"]));

  $information = login($connection, $username, $password);

  if ($username == "admin" && $password == "frogtel") {
    $_SESSION["adminLogin"] = true;
    header("location: ../view/adminUser.php");
  }
}
