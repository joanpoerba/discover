<?php
require_once "../databaseConnection.php";

function searchIng($connection, $keyword)
{
  $showQuery = "SELECT suku.* , user.id , user.username FROM suku INNER JOIN user ON user.id = suku.usersId WHERE namaSuku LIKE '%$keyword%'";
  $stmt = mysqli_stmt_init($connection);

  if (mysqli_stmt_prepare($stmt, $showQuery)) {
    mysqli_stmt_execute($stmt);
    return mysqli_stmt_get_result($stmt);
  }
}

if(isset($_POST["search"])){
  $keyword = htmlspecialchars(mysqli_real_escape_string($connection, $_POST["keyword"]));

  $sukuRows = searchIng($connection, $keyword);
}
?>