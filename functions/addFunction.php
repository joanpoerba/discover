<?php
require_once "../databaseConnection.php";

$loginSatus = $_SESSION["login"];
$usersId = $_SESSION["usersId"];

if (!isset($loginSatus) && !isset($usersId)) {
  header("location: ../view/loginPage.php");
}

function fetchData($connection, $usersId)
{
  $selectQuery = "SELECT * FROM user WHERE uniqueId = ?";
  $stmt = mysqli_stmt_init($connection);

  if (mysqli_stmt_prepare($stmt, $selectQuery)) {
    mysqli_stmt_bind_param($stmt, "s", $usersId);
    mysqli_stmt_execute($stmt);
    $selectResult = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($selectResult);

    return $row;
  }
}

$row = fetchData($connection, $usersId);

function addData($connection, $usersId, $namaSuku, $gambarSuku, $deskripsiSuku, $asalSuku, $jumlahPenduduk, $namaMakananAdat, $gambarMakananAdat, $deskripsiMakananAdat, $namaPakaianAdat, $gambarPakaianAdat, $deskripsiPakaianAdat)
{
  $insertQuery =
    "INSERT INTO suku(usersId,                          /* 1 */
                    namaSuku,                         /* 2 */
                    gambarSuku,                       /* 3 */
                    deskripsiSuku,                    /* 4 */
                    asalSuku,                         /* 5 */
                    jumlahPenduduk,                   /* 6 */
                    namaMakananAdat,                  /* 7 */
                    gambarMakananAdat,                /* 8 */
                    deskripsiMakanan,                 /* 9 */
                    namaPakaianAdat,                  /* 10 */
                    gambarPakaianAdat,                /* 11 */
                    deskripsiPakaianAdat)             /* 12 */
  VALUE(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

  $validType = ["jpg", "jpeg", "png", "webp", "avif"];
  $gambarSukuType = explode("image/", $gambarSuku["gambarSukuType"]);
  $gambarMakananAdatType = explode("image/", $gambarMakananAdat["gambarMakananAdatType"]);
  $gambarPakaianAdatType = explode("image/", $gambarPakaianAdat["gambarPakaianAdatType"]);

  if (!in_array(end($gambarSukuType), $validType) && !in_array(end($gambarMakananAdatType), $validType) && !in_array(end($gambarPakaianAdatType), $validType)) {
    echo "
    <script>
      alert('sorry, we just accept image')
    </script>
    ";
  }

  $limitImageSize = 40_000_000;
  $gambarSukuSize = $gambarSuku["gambarSukuSize"];
  $gambarMakananSize = $gambarMakananAdat["gambarMakananAdatSize"];
  $gambarPakaianSize = $gambarPakaianAdat["gambarPakaianAdatSize"];

  if($gambarSukuSize > $limitImageSize && $gambarMakananSize > $limitImageSize && $gambarPakaianSize > $limitImageSize){
    echo "
    <script>
      alert('sorry, the file to big')
    </script>
    ";
  }

  $gambarSukuNewName = uniqid("", true);
  $gambarMakananNewName = uniqid("", true);
  $gambarPakaianNewName = uniqid("", true);

  $gambarSukuFileName = $gambarSukuNewName.".".end($gambarSukuType);
  $gambarMakananFileName = $gambarMakananNewName.".".end($gambarMakananAdatType);
  $gambarPakaianFileName = $gambarPakaianNewName.".".end($gambarPakaianAdatType);

  move_uploaded_file($gambarSuku["gambarSukuTmpName"], "../img/usersImgs/".$gambarSukuFileName);
  move_uploaded_file($gambarMakananAdat["gambarMakananAdatTmpName"], "../img/usersImgs/".$gambarMakananFileName);
  move_uploaded_file($gambarPakaianAdat["gambarPakaianAdatTmpName"], "../img/usersImgs/".$gambarPakaianFileName);

  $stmt = mysqli_stmt_init($connection);

  if(mysqli_stmt_prepare($stmt, $insertQuery)){
    mysqli_stmt_bind_param($stmt, "ssssssssssss",$usersId, $namaSuku, $gambarSukuFileName, $deskripsiSuku, $asalSuku, $jumlahPenduduk, $namaMakananAdat, $gambarMakananFileName, $deskripsiMakananAdat, $namaPakaianAdat, $gambarPakaianFileName, $deskripsiPakaianAdat);
    mysqli_stmt_execute($stmt);

    return mysqli_affected_rows($connection);
  }
}

if (isset($_POST["tambahkanButton"])) {
  $namaSuku = htmlspecialchars(mysqli_real_escape_string($connection, $_POST["namaSuku"]));
  $gambarSuku = [
    "gambarSukuName" => $_FILES["gambarSuku"]["name"],
    "gambarSukuType" => $_FILES["gambarSuku"]["type"],
    "gambarSukuSize" => $_FILES["gambarSuku"]["size"],
    "gambarSukuTmpName" => $_FILES["gambarSuku"]["tmp_name"]
  ];
  $deskripsiSuku = htmlspecialchars(mysqli_real_escape_string($connection, $_POST["deskripsiSuku"]));
  $asalSuku = htmlspecialchars(mysqli_real_escape_string($connection, $_POST["asalSuku"]));
  $jumlahPenduduk = htmlspecialchars(mysqli_real_escape_string($connection, $_POST["jumlahPenduduk"]));
  $namaMakananAdat = htmlspecialchars(mysqli_real_escape_string($connection, $_POST["namaMakananAdat"]));
  $gambarMakananAdat = [
    "gambarMakananAdatName" => $_FILES["gambarMakananAdat"]["name"],
    "gambarMakananAdatType" => $_FILES["gambarMakananAdat"]["type"],
    "gambarMakananAdatSize" => $_FILES["gambarMakananAdat"]["size"],
    "gambarMakananAdatTmpName" => $_FILES["gambarMakananAdat"]["tmp_name"]
  ];
  $deskripsiMakananAdat = htmlspecialchars(mysqli_real_escape_string($connection, $_POST["deskripsiMakananAdat"]));
  $namaPakaianAdat = htmlspecialchars(mysqli_real_escape_string($connection, $_POST["namaPakaianAdat"]));
  $gambarPakaianAdat = [
    "gambarPakaianAdatName" => $_FILES["gambarPakaianAdat"]["name"],
    "gambarPakaianAdatType" => $_FILES["gambarPakaianAdat"]["type"],
    "gambarPakaianAdatSize" => $_FILES["gambarPakaianAdat"]["size"],
    "gambarPakaianAdatTmpName" => $_FILES["gambarPakaianAdat"]["tmp_name"]
  ];
  $deskripsiPakaianAdat = htmlspecialchars(mysqli_real_escape_string($connection, $_POST["deskripsiPakaianAdat"]));

  if(addData($connection, $row["id"], $namaSuku, $gambarSuku, $deskripsiSuku, $asalSuku, $jumlahPenduduk, $namaMakananAdat, $gambarMakananAdat, $deskripsiMakananAdat, $namaPakaianAdat, $gambarPakaianAdat, $deskripsiPakaianAdat) > 0){
    header("location: ../view/culture.php");
  }
}
?>