<?php
if (isset($_POST["logOutBtn"])) {
  session_destroy();
  header("location: ../index.php");
}
