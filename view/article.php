<?php
require_once "../functions/articlePageHandler.php";
require_once "../functions/logOutFunction.php";

$usersId = $_SESSION["usersId"];

if ($_SESSION["login"] !== true) {
  header("location: ../view/loginPage.php");
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "../utils/meta.php"; ?>

  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">

  <link rel="preload" href="../img/greenLogo.png" />
  <link rel="stylesheet" href="../style/article.css" />
</head>

<body class="container-fluid">
  <div class="landingPage container-fluid h-100">
    <header class="container-fluid shadow-sm d-flex justify-content-center align-items-center py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-3 p-xxl-0 px-lg-0 p-lg-0 p-md-3 p-sm-3 ps-md-3 ps-sm-3 position-fixed bg-light">
      <section class="container-lg d-flex flex-xxl-row flex-xl-row flex-lg-row flex-md-column flex-sm-column justify-content-xxl-between justify-content-xl-between justify-content-lg-between align-items-xxl-center align-items-xl-center align-items-lg-center align-items-md-start align-items-sm-start h-100">
        <div class="d-flex flex-row justify-content-center align-items-center bg-light">
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
    <main class="container-fluid d-flex justify-content-center">
      <?php foreach ($datas as $data) : ?>
        <article class="bg-light shadow-sm">
          <div>
            <h1><b><?= $data["namaSuku"]; ?></b></h1>
          </div>
          <div class="my-3">
            <hr class="w-100">
          </div>
          <div>
            <p><?= $data["deskripsiSuku"]; ?></p>
          </div>
          <div class="my-3">
            <img src="../img/usersImgs/<?= $data["gambarSuku"]; ?>" alt="">
          </div>
          <div>
            <h4><b><?= $data["namaMakananAdat"]; ?></b></h4>
          </div>
          <div class="my-3">
            <img src="../img/usersImgs/<?= $data["gambarMakananAdat"]; ?>" alt="">
          </div>
          <div>
            <p><?= $data["deskripsiMakanan"]; ?></p>
          </div>
          <div class="my-3">
            <h4><b><?= $data["namaPakaianAdat"]; ?></b></h4>
          </div>
          <div>
            <p><?= $data["deskripsiPakaianAdat"]; ?></p>
          </div>
          <div class="mt-3">
            <img src="../img/usersImgs/<?= $data["gambarPakaianAdat"]; ?>" alt="">
          </div>
        </article>
      <?php endforeach; ?>
    </main>
  </div>
  <script src="../js/humberger.js"></script>
</body>

</html>