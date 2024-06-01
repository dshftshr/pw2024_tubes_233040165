<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>admin</title>
    <!-- Bostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- logis.css -->
    <link rel="stylesheet" href="admin.css" />

    <!-- boostrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  </head>

  <body>
    <header class="">
      <div class="kiri border-end border-4">
        <div class="logo mt-2">
          <p>movie</p>
        </div>

        <div class="kiri_menu">
          <div class="mn d-flex">
            <div class="icn me-3">
            <i class="bi bi-film"></i>
            </div>
            <a href="admin.php">
              <p class="">movie</p>
            </a>
          </div>

          <div class="mn d-flex">
            <div class="icn me-3">
            <i class="bi bi-person"></i>
            </div>
            <a href="user.php">
              <p>Users</p>
            </a>
          </div>

          <div class="mn d-flex">
            <div class="icn me-3">
            <i class="bi bi-box-arrow-left"></i>
            </div>
            <a href="login.php">
              <p>Sign Out</p>
            </a>
          </div>
        </div>
      </div>

      <div class="tengah mx-auto">
        <div class="cari py-3 text-light">
          <form class="">
            <input class="form-control me-2 rounded-pill text-light bg-secondary" type="search" placeholder="Search" aria-label="Search" />
            <div class="icon">
            <i class="bi bi-search"></i>
            </div>
          </form>
        </div>

      

        <div class="data mt-4">
          <table class="table table-light table-hover">
            <thead class="">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">password</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1;
            // foreach ($music as $mu) : ?>
              <tr>
                <th><?= $i++; ?></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

                <td></td>
              </tr>

              // php endforach dsinii
            </tbody>
          </table>
        </div>
      </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
