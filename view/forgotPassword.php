<?php
require_once "../functions/forgotPasswordFunction.php";
?>
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <link rel="stylesheet" href="../style/forgotPassword.css" />
  <link rel="icon" href="../img/icon.ico">
</head>

<body class="container-fluid">
  <div class="row justify-content-around align-items-center">
    <div class="formWrapper col-xxl-3 col-xl-3 col-lg-3 col-md-5 col-sm-6">
      <div>
        <?php if ($_SESSION["username"] == "default" || $_SESSION["username"] == "gada") : ?>
          <h1 class="fw-normal fs-2">Verify username</h1>
        <?php else : ?>
          <h1 class="fw-normal fs-2">Change your password</h1>
        <?php endif; ?>
      </div>
      <form action="" method="post" class="mt-4 d-flex">
        <ul class="w-100">
          <?php if ($_SESSION["username"] == "default") : ?>
            <li class="list-unstyled">
              <label for="username">Username</label><br />
              <input class="border-0 ps-3 py-2 fw-light w-100 rounded-3" type="text" id="username" name="username" placeholder="Masukkan nama anda" autocomplete="off" autofocus required />
            </li>
            <li class="list-unstyled mt-5">
              <button class="btn rounded-3 py-1 fs-5 text-light w-100" name="submitBtn">Submit</button>
            </li>
          <?php endif; ?>
          <?php if ($_SESSION["username"] == "gada") : ?>
            <li class="list-unstyled">
              <label for="username">Username</label><br />
              <input class="border-0 ps-3 py-2 fw-light w-100 rounded-3" type="text" id="username" name="username" placeholder="Masukkan nama anda" autocomplete="off" autofocus required />
              <p class="position-absolute text-danger fst-italic">Username not found</p>
            </li>
            <li class="list-unstyled mt-5">
              <button class="btn rounded-3 py-1 fs-5 text-light w-100" name="submitBtn">Submit</button>
            </li>
          <?php endif; ?>
          <?php if ($_SESSION["username"] == "ada") : ?>
            <li class="list-unstyled">
              <label for="password">Password</label><br />
              <div class="d-flex flex-row align-items-center">
                <input id="passwordInput" class="border-0 ps-3 py-2 fw-light w-100 rounded-3" type="password" id="password" name="password" placeholder="Ganti password anda" autocomplete="off" autofocus required />
                <i style="cursor: pointer;" class="eye bi bi-eye fs-3 d-flex justify-content-center align-items-center ms-3"></i>
              </div>
            </li>
            <li class="list-unstyled mt-5">
              <button class="btn rounded-3 py-1 fs-5 text-light w-100" name="changeBtn">Change</button>
            </li>
          <?php endif; ?>
        </ul>
      </form>
    </div>
    <div class="illustrasionWrapper col-xxl-3 col-xl-4 col-lg-4 d-xxl-flex d-xl-flex d-lg-flex d-md-none d-sm-none justify-content-center align-items-center">
      <div>
        <img class="w-100" src="../img/verify.svg" alt="" />
      </div>
    </div>
  </div>
  <script>
    const body = document.body
    const eye = document.querySelector(".eye")
    const input = document.getElementById("passwordInput")

    eye.addEventListener("click", () => {
      body.classList.toggle("showPassword")

      if (body.classList.contains("showPassword")) {
        eye.setAttribute("class", "eye bi bi-eye-slash fs-3 d-flex justify-content-center align-items-center ms-3")
        input.setAttribute("type", "text")
      } else {
        eye.setAttribute("class", "eye bi bi-eye fs-3 d-flex justify-content-center align-items-center ms-3")
        input.setAttribute("type", "password")
      }
    })
  </script>
</body>

</html>