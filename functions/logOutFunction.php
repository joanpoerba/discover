<?php
function logOut()
{
  $_SESSION["sessionDestroy"] = true;
}

if (isset($_POST["logOutBtn"])) {
  logOut();

  if (isset($_SESSION["sessionDestroy"])) {
    if ($_SESSION["sessionDestroy"] == true) {
      session_destroy();
      header("location: ../index.php");
    }
  }
}
?>