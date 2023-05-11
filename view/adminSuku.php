<?php
require_once "../databaseConnection.php";
require_once "../functions/delete.php";

$adminLoginStatus = $_SESSION["login"];

if (!$adminLoginStatus) {
  header("location: ../view/loginPage.php");
}

if (isset($_POST["userBtn"])) {
  header("location: adminUser.php");
}

function fetchData($connection)
{
  $selectQuery = "SELECT * FROM suku";
  $stmt = mysqli_stmt_init($connection);

  if (mysqli_stmt_prepare($stmt, $selectQuery)) {
    mysqli_stmt_execute($stmt);
    return mysqli_stmt_get_result($stmt);
  }
}

$rows = fetchData($connection);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Discover Dashboard</title>
  <link rel="stylesheet" href="../style/adminSuku.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="container-fluid">
  <div class="arrowWrapper rounded-5 p-2">
    <i class="arrow" data-feather="chevron-right"></i>
  </div>
  <aside class="h-100 shadow-sm bg-light py-3">
    <div class="d-flex flex-row align-items-center ms-3">
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
    <form class="mt-4" action="" method="post">
      <nav>
        <ul>
          <li>
            <button name="userBtn" class="border-0 w-100 py-1 bg-transparent text-dark fs-5 fw-medium">
              User
            </button>
          </li>
          <li class="mt-4">
            <button class="border-0 w-100 py-1 text-light fs-5 fw-medium">
              Suku
            </button>
          </li>
        </ul>
      </nav>
    </form>
  </aside>
  <main class="container-fluid h-100 d-flex justify-content-center align-items-start py-5">
    <section class="my-5">
      <table class="table">
        <thead>
          <tr>
            <th class="py-2 px-5" scope="col">No</th>
            <th class="py-2 px-5" scope="col">Hapus</th>
            <th class="py-2 px-5" scope="col">Id</th>
            <th class="py-2 px-5" scope="col">usersId</th>
            <th class="py-2 px-5" scope="col">namaSuku</th>
            <th class="py-2 px-5" scope="col">gambarSuku</th>
            <th class="py-2 px-5" scope="col">deskripsiSuku</th>
            <th class="py-2 px-5" scope="col">asalSuku</th>
            <th class="py-2 px-5" scope="col">jumlahPenduduk</th>
            <th class="py-2 px-5" scope="col">namaMakananAdat</th>
            <th class="py-2 px-5" scope="col">gambarMakananAdat</th>
            <th class="py-2 px-5" scope="col">deskripsiMakanan</th>
            <th class="py-2 px-5" scope="col">namaPakaianAdat</th>
            <th class="py-2 px-5" scope="col">gambarPakaianAdat</th>
            <th class="py-2 px-5" scope="col">deskripsiPakaianAdat</th>
          </tr>
        </thead>
        <tbody>
          <?php $num = 1; ?>
          <?php foreach ($rows as $row) : ?>
            <tr>
              <th class="py-2 px-5" scope="row"><?= $num++ ?></th>
              <th class="py-2 px-5">
                <a class="text-danger" href="../functions/delete.php?id=<?= $row["id"]; ?>">
                  <i data-feather="trash-2"></i>
                </a>
              </th>
              <td class="py-2 px-5"><?= $row["id"]; ?></td>
              <td class="py-2 px-5"><?= $row["usersId"]; ?></td>
              <td class="py-2 px-5"><?= $row["namaSuku"]; ?></td>
              <td class="py-2 px-5"><?= $row["gambarSuku"]; ?></td>
              <td class="py-2 px-5"><?= $row["deskripsiSuku"]; ?></td>
              <td class="py-2 px-5"><?= $row["asalSuku"]; ?></td>
              <td class="py-2 px-5"><?= $row["jumlahPenduduk"]; ?></td>
              <td class="py-2 px-5"><?= $row["namaMakananAdat"]; ?></td>
              <td class="py-2 px-5"><?= $row["gambarMakananAdat"]; ?></td>
              <td class="py-2 px-5"><?= $row["deskripsiMakanan"]; ?></td>
              <td class="py-2 px-5"><?= $row["namaPakaianAdat"]; ?></td>
              <td class="py-2 px-5"><?= $row["gambarPakaianAdat"]; ?></td>
              <td class="py-2 px-5"><?= $row["deskripsiPakaianAdat"]; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </section>
  </main>
  <script>
    feather.replace();

    const humberger = document.querySelector(".humbergerWrapper");
    const header = document.querySelector("header");

    humberger.addEventListener("click", () => {
      header.classList.toggle("sidebarOn");
    });

    const body = document.body;
    const arrow = document.querySelector(".arrowWrapper");

    arrow.addEventListener("click", () => {
      body.classList.toggle("onSidebar");
    });
  </script>
</body>

</html>