<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="a platform to knowing and add your culture to the world" />
  <meta name="autor" content="FrogTel" />
  <title>Discover</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
  <link rel="preload" href="../img/yellowLogo.png" />
  <link rel="preload" href="../img/bannerPurposePage.jpg" />
  <link rel="preload" href="../img/school.png" />
  <link rel="preload" href="../img/backgroundAboutPage.jpg" />
  <link rel="stylesheet" href="../style/purpose.css" />
  <link rel="icon" href="../img/icon.ico">
  <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="container-fluid">
  <div class="landingPage container-fluid h-100">
    <header class="container-fluid shadow-sm d-flex justify-content-center align-items-center py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-3 p-xxl-0 px-lg-0 p-lg-0 p-md-3 p-sm-3 ps-md-3 ps-sm-3 position-fixed">
      <section class="container-lg d-flex flex-xxl-row flex-xl-row flex-lg-row flex-md-column flex-sm-column justify-content-xxl-between justify-content-xl-between justify-content-lg-between align-items-xxl-center align-items-xl-center align-items-lg-center align-items-md-start align-items-sm-start h-100">
        <div class="d-flex flex-row justify-content-center align-items-center">
          <div class="logoWrapper">
            <img src="../img/yellowLogo.png" alt="" />
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
                <i class="icon d-xxl-none d-xl-none d-lg-none d-md-block d-sm-block" data-feather="home"></i>
                <span>Home</span></a>
            </li>
            <li class="list-unstyled">
              <a class="d-flex flex-row justify-content-around align-items-center" href="about.php">
                <i class="icon d-xxl-none d-xl-none d-lg-none d-md-block d-sm-block" data-feather="users"></i>
                <span>About</span></a>
            </li>
            <li class="list-unstyled">
              <a class="d-flex flex-row justify-content-around align-items-center" href="">
                <i class="icon d-xxl-none d-xl-none d-lg-none d-md-block d-sm-block" data-feather="minimize-2"></i>
                <span>Purpose</span></a>
            </li>
          </ul>
        </nav>
        <div class="d-xxl-block d-xl-block d-lg-block d-md-none d-sm-none">
          <a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B6281262156159&text=Halo+FrogTel&type=phone_number&app_absent=0" class="btn py-2 px-4 text-light fw-bold">Contact</a>
        </div>
      </section>
    </header>
    <img style="width: 50px; z-index: 80; bottom: 10px; right: 10px;" class="waWrapper img-fluid d-xxl-none d-xl-none d-lg-none d-md-block d-sm-block position-absolute" src="../img/whatsapp.png" alt="">
    <main class="container-fluid h-100">
      <section class="container-fluid h-50"></section>
      <article class="row d-flex flex-xxl-row flex-xl-row flex-lg-row flex-md-column flex-sm-column justify-content-xxl-evenly justify-content-xl-evenly justify-content-lg-evenly justify-content-md-center justify-content-sm-center align-items-xxl-center align-items-xl-center align-items-lg-center align-items-md-center align-items-sm-center">
        <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-7 col-sm-11 d-flex flex-column">
          <div>
            <h2 class="fw-bold fst-italic"><q>membangkitkan, memahami, membantu budaya sekitar agar tetap hidup</q></h2>
          </div>
          <div class="mt-3">
            <p>Adalah Tujuan kami membuat program <span class="fw-bold">Discover</span> ini mungkin terdengar sepele, tapi kami yakin, bersama-sama dengan kalian, kita dapat merubah dan memahami pandangan sosial kita terhadap budaya Indonesia.</p>
          </div>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-3 d-xxl-block d-xl-block d-lg-block d-md-none d-sm-none text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-5 mt-sm-5">
          <img class="img-fluid" src="../img/indianPeople_illustrasion.png" alt="" />
        </div>
      </article>
    </main>
  </div>
  <script>
    feather.replace();

    const humberger = document.querySelector(".humbergerWrapper");
    const header = document.querySelector("header");

    humberger.addEventListener("click", () => {
      header.classList.toggle("sidebarOn");
    });
  </script>
</body>

</html>