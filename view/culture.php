<?php
require_once "../functions/culturePageHandler.php";
require_once "../functions/searchingFunction.php";
require_once "../functions/logOutFunction.php";

$usersId = $_SESSION["usersId"];

if ($_SESSION["login"] !== true) {
  header("location: ../view/loginPage.php");
};

if (isset($_POST["add"])) {
  header("location: ../view/add.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "../utils/meta.php"; ?>

  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">

  <link rel="preload" href="../img/greenLogo.png" />
  <link rel="stylesheet" href="../style/culture.css" />
</head>

<body class="container-fluid">
  <div class="landingPage container-fluid h-100">
    <header class="container-fluid shadow-sm d-flex justify-content-center align-items-center py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-3 p-xxl-0 px-lg-0 p-lg-0 p-md-3 p-sm-3 ps-md-3 ps-sm-3 position-fixed">
      <section class="container-lg d-flex flex-xxl-row flex-xl-row flex-lg-row flex-md-column flex-sm-column justify-content-xxl-between justify-content-xl-between justify-content-lg-between align-items-xxl-center align-items-xl-center align-items-lg-center align-items-md-start align-items-sm-start h-100">
        <div class="d-flex flex-row justify-content-center align-items-center">
          <div class="logoWrapper">
            <img src="../img/greenLogo.png" alt="" />
          </div>
          <div class="ms-2">
            <h1 class="title fw-bold">Discover</h1>
          </div>
          <div class="humbergerWrapper d-xxl-none d-xl-none d-lg-none d-md-block d-sm-block flex-column justify-content-center align-items-center">
            <div class="humbergerLine"></div>
          </div>
        </div>
        <nav class="w-25 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-4 mt-sm-4 ms-xxl-0 ms-xl-0 ms-lg-0 ms-md-4 ms-md-4 ms-sm-4">
          <ul class="d-flex flex-xxl-row flex-xl-row flex-lg-row flex-md-column flex-sm-column justify-content-between align-items-xxl-center align-items-xl-center align-items-lg-center align-items-md-start align-items-sm-start">
            <li class="list-unstyled">
              <a class="d-flex flex-row justify-content-around align-items-center" href="home.php">
                <i class="bi bi-house-fill icon d-xxl-none d-xl-none d-lg-none d-md-block d-sm-block fs-2"></i>
                <span>Home</span></a>
            </li>
            <li class="list-unstyled">
              <a class="d-flex flex-row justify-content-around align-items-center" href="about.php">
                <i class="bi bi-person-hearts icon d-xxl-none d-xl-none d-lg-none d-md-block d-sm-block fs-2"></i>
                <span>About</span></a>
            </li>
            <li class="list-unstyled">
              <a class="d-flex flex-row justify-content-around align-items-center" href="purpose.php">
                <i class="bi bi-search-heart-fill icon d-xxl-none d-xl-none d-lg-none d-md-block d-sm-block fs-2"></i>
                <span>Purpose</span></a>
            </li>
          </ul>
        </nav>
        <div class="d-xxl-flex d-xl-flex d-lg-flex justify-content-center align-items-center">
          <a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B6281262156159&text=Halo+FrogTel&type=phone_number&app_absent=0" class="btn d-xxl-block d-xl-block d-lg-block d-md-none d-sm-none py-2 px-4 text-light fw-bold">Contact</a>
          <form action="" method="post" class="logOutWrapper ms-xxl-5 ms-xl-5 ms-lg-5 ms-md-0 ms-sm-0">
            <button class="btn bg-transparent shadow-none" name="logOutBtn">
              <i class="bi bi-box-arrow-in-right fs-1"></i>
            </button>
          </form>
        </div>
      </section>
    </header>
    <a style=" z-index: 80; bottom: 10px !important; right: 10px !important;" class="waWrapper img-fluid d-xxl-none d-xl-none d-lg-none d-md-block d-sm-block position-fixed" target="_blank" href="https://api.whatsapp.com/send/?phone=%2B6281262156159&text=Halo+FrogTel&type=phone_number&app_absent=0">
      <img style="width: 50px;" src="../img/whatsapp.png" alt="">
    </a>
    <main class="container-fluid h-100 d-flex justify-content-center align-items-center">
      <article class="h-100">
        <div class="d-flex flex-row justify-content-center align-items-center">
          <form class="w-100" action="" method="post">
            <ul>
              <li class="list-unstyled d-flex flex-row justify-content-center align-items-center">
                <input type="text" class="border-0 ps-3 py-2 fw-light rounded-3 w-100" name="keyword" placeholder="Cari suku mu..." autocomplete="off" autofocus required />
                <button class="bg-transparent border-0 mx-3" name="search">
                  <i class="searchBarIcon bi bi-search fs-2" style="cursor: pointer;"></i>
                </button>
              </li>
            </ul>
          </form>
          <form action="" method="post" enctype="multipart/form-data">
            <ul>
              <li class="list-unstyled d-flex flex-row justify-content-center align-items-center">
                <button class="bg-transparent border-0" name="add">
                  <i class="searchBarIcon bi bi-plus-square fs-2" style="cursor: pointer"></i>
                </button>
              </li>
            </ul>
          </form>
        </div>
        <?php foreach ($sukuRows as $sukuRow) : ?>
          <section class="rounded-3 mt-4 p-3">
            <div>
              <img style="width: 300px; height: 200px; object-fit: cover;" class="fotoSuku img-fluid" src="../img/usersImgs/<?= $sukuRow["gambarSuku"]; ?>" alt="" />
            </div>
            <div class="w-50">
              <div>
                <h2><b><?= $sukuRow["namaSuku"]; ?></b></h2>
              </div>
              <div class="mt-2">
                <p>Berasal dari <?= $sukuRow["asalSuku"]; ?></p>
              </div>
              <div class="mt-2">
                <p>Dengan jumlah penduduk <?= $sukuRow["jumlahPenduduk"]; ?></p>
              </div>
              <div class="mt-2">
                <p><b>Oleh <?= $sukuRow["username"]; ?></b></p>
              </div>
              <div class="mt-2">
                <a href="article.php?id=<?= $sukuRow["id"]; ?>" class="btn py-2 text-center fw-light text-light w-100">Lihat suku <?= $sukuRow["namaSuku"]; ?></a>
              </div>
            </div>
          </section>
        <?php endforeach; ?>
      </article>
    </main>
  </div>
  <script src="../js/humberger.js"></script>
</body>

</html>