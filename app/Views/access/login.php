<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="<?= base_url() ?>">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
      <link rel="stylesheet" href="css/style.css" />
  <title>Đăng nhập</title>
</head>
<body>
    <!-- Section: Design Block -->
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
            Đăng nhập | Vui lòng điền đúng thông tin để đăng nhập
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <hr>
              <form>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control" />
                  <label class="form-label" for="form3Example3">Mã đăng nhập</label>
                </div>
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control" />
                  <label class="form-label" for="form3Example4">Mật khẩu</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                    Nhớ mật khẩu
                  </label>
                </div>
                <hr>
                <!-- Submit button -->
                <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Đăng nhập
                </button>
              </div>
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
<!-- Section: Design Block -->
<script type="text/javascript" src="bootstrap/js/bootstrap.js"> </script>
</body>
</html>