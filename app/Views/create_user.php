<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    html,
    body {
      height: 100%;
    }

    .form-signin {
      max-width: 330px;
      padding: 1rem;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>
</head>

<body>
  <main class="form-signin w-100 m-auto">
    <form method="POST" action="<?= base_url('/user/store') ?>">
      <h1 class="h3 mt-5 mb-3 fw-normal">Let's sign up</h1>
      <div class="form-floating">
        <input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama" name="nama" value="<?= old('nama') ?>">
        <label for="floatingName">Nama</label>
        <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
          <div class="invalid-feedback">
            <?= session('validation')->getError('nama'); ?>
          </div>
        <?php endif; ?>
      </div>
      </div>
      <div class="form-floating">
        <input type="number" class="form-control mt-2 <?= session('validation') ? 'is-invalid' : '' ?>" id="floatingNpm" placeholder="NPM" name="npm" value="<?= old('npm') ?>">
        <label for="floatingNpm">NPM</label>
        <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
          <div class="invalid-feedback">
            <?= session('validation')->getError('npm'); ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="form-floating">
        <select class="form-select mt-2" aria-label="Default select example" name="kelas">
          <option value="" selected disabled>Pilih Kelas</option>
          <?php
          foreach ($kelas as $item) {
          ?>
            <option value="<?= $item['id'] ?>"><?= $item['nama_kelas'] ?></option>
          <?php } ?>
        </select>
      </div>


      <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Insert it</button>
    </form>
  </main>
</body>

</html>