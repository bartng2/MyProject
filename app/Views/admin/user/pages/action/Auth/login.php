<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="<?= base_url() ?>">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <title></title>
</head>
<body>
 <?php if (session()->getFlashdata('message')) : ?>
        <div><?= session()->getFlashdata('message'); ?></div>
    <?php endif; ?>
  <!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            Hệ thống quản lí <br />
            <span class="text-primary">Hồ sơ sinh viên</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            Đăng nhập | 
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form method="POST" action="<?= $url = route_to('login_post') ?>">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input name="MaUsers" type="text" class="form-control" />
                  <label class="form-label" for="form3Example3">Mã đăng nhập</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input name="MatKhauDangNhap" type="text" class="form-control" />
                  <label class="form-label" for="form3Example4">Mật khẩu</label>
                </div>

                <!-- Checkbox -->

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Đăng nhập
                </button>

                <!-- Register buttons -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
<!-- Pills content -->
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>