<?php
require_once "../databaseConnection.php";

if(isset($_GET['id']))
{
  $usersId = $_GET["id"];

  function deleteUser($connection, $usersId)
  {
    $deleteQuery = "DELETE FROM suku WHERE id = ?";
    $stmt = mysqli_stmt_init($connection);

    if (mysqli_stmt_prepare($stmt, $deleteQuery)) {
      mysqli_stmt_bind_param($stmt, "i", $usersId);
      mysqli_stmt_execute($stmt);

      return mysqli_affected_rows($connection);
    }
  }

  if (deleteUser($connection, $usersId) > 0) {
    header("location: ../view/adminSuku.php");
    echo "
    <scirpt>
      alert('data sudah dihapus')
    </scirpt>
  ";
  }
}
