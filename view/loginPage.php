<?php require_once "../functions/loginFunction.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "../utils/meta.php" ?>

  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">

  <link rel="stylesheet" href="../style/loginPage.css" />

  <link rel="preload" href="../img/purpelLogo.png" />
  <link rel="preload" href="../img/welcomeBack_illustrasion.png" />
</head>

<body class="container-fluid">
  <div class="row justify-content-around align-items-center">
    <div class="formWrapper col-xxl-3 col-xl-3 col-lg-3 col-md-5 col-sm-6">
      <div>
        <h1 class="fw-normal fs-1">Login to</h1>
      </div>
      <div class="d-flex flex-row align-items-center mt-3">
        <div class="logoWrapper">
          <img src="../img/purpelLogo.png" alt="" />
        </div>
        <div class="ms-3">
          <h1 class="title fw-bold">Discover</h1>
        </div>
      </div>
      <?php if ($information == "wrongBoth") : ?>
        <p class="position-absolute text-danger fst-italic">Please enter the correct username</p>
      <?php endif; ?>
      <form action="" method="post" class="mt-4 d-flex">
        <ul class="w-100">
          <li class="list-unstyled">
            <label for="username">Username</label><br />
            <input class="border-0 ps-3 py-2 fw-light w-100 rounded-3" type="text" id="username" name="username" placeholder="Masukkan nama anda" autocomplete="off" autofocus required />
            <?php if ($information == "wrongUsername") : ?>
              <p class="position-absolute text-danger fst-italic">Please enter the correct username</p>
            <?php endif; ?>
          </li>
          <li class="list-unstyled mt-4">
            <label for="password">Password</label><br />
            <div class="d-flex flex-row align-items-center">
              <input id="passwordInput" class="border-0 ps-3 py-2 fw-light w-100 rounded-3" type="password" id="password" name="password" placeholder="Masukkan password anda" autocomplete="off" required />
              <i style="cursor: pointer;" class="eye bi bi-eye fs-3 d-flex justify-content-center align-items-center ms-3"></i>
            </div>
            <a class="float-end mt-4" href="forgotPassword.php">Forgot your password?</a>
            <?php if ($information == "wrongPassword") : ?>
              <p class="position-absolute text-danger fst-italic">Please enter the correct password</p>
            <?php endif; ?>
          </li>
          <li class="list-unstyled mt-5 form-check d-flex flex-row justify-content-start align-items-center">
            <input class="form-check-input" type="checkbox" id="remember" name="remember" />
            <label style="color: #373737" class="ms-2" for="remember">Remember me</label>
          </li>
          <li class="list-unstyled mt-3">
            <button class="btn rounded-3 py-1 fs-5 text-light w-100" name="loginBtn">Login</button>
            <p class="mt-2">don't have an account? <a href="../index.php">Register</a></p>
          </li>
        </ul>
      </form>
    </div>
    <div class="illustrasionWrapper col-xxl-6 col-xl-6 col-lg-6 d-xxl-flex d-xl-flex d-lg-flex d-md-none d-sm-none justify-content-center align-items-center">
      <div>
        <img class="w-100" src="../img/welcomeBack_illustrasion.png" alt="" />
      </div>
    </div>
  </div>
  <script src="../js/showPassword.js"></script>
</body>

</html>