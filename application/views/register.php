<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/login/fonts/icomoon/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/login/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/login/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="<?= base_url() ?>/assets/login/css/style.css"> -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/registrasi/css/registrasi.css">
  <title>Register</title>
</head>

<body>

  <!-- Main Content -->
  <div class="container-fluid">
    <div class="row main-content bg-success text-center">
      <div class="col-md-4 text-center company__info">
        <h4 class="logo">
          <img src="<?= base_url() ?>/assets/login/images/selamat.png" alt="Image" class="img-fluid">
          <br>
          <br>
          <br>
          <img src="<?= base_url() ?>/assets/login/images/Yoo!.png" alt="Image" class="img-fluid">
        </h4>
      </div>
      <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
        <div class="container-fluid">
          <div class="row">
            <h2>Daftar </h2>
          </div>
          <div class="row">
            <div class="form-group first">
              <div class="col">
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form__input" placeholder="Nama lengkap">
              </div>
            </div>
            <div class="form-group last">
              <div class="col">
                <input type="text" name="username" id="username" class="form__input" placeholder="Username">
              </div>
            </div>
            <div class="form-group last">
              <div class="col">
                <input type="password" name="password" id="password" class="form__input" placeholder="Password">
              </div>
            </div>
            <div class="form-group last ">
              <div class="col">

              </div>
            </div>
          </div>
          <div class="form-group last">
            <div class="col">
              <input type="submit" value="Sign Up" id="btnLogin" class="btn">
            </div>
          </div>
          <div class="form-group last">
            <div class="col">
              <p>Sudah punya Akun? <a href="<?= base_url() ?>login" class="link-primary text-center">Sign In</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>



    <script src="<?= base_url() ?>/assets/login/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>/assets/login/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/login/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/login/js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
<script>
$(document).ready(function() {

  $('#btnLogin').click(function(e) {
    var username = $('#username').val();
    var password = $('#password').val();
    var nama_lengkap = $('#nama_lengkap').val();
    if (username == "" || password == "" || nama_lengkap == "") {
      Swal.fire(
        'Sorry!',
        "Mohon Isi Data Yang Di Perlukan!",
        'error'
      )
    } else {
      $.ajax({
        type: "post",
        url: "<?= base_url() ?>/Chat/process_register",
        data: {
          username,
          password,
          nama_lengkap
        },
        dataType: "json",
        success: function(e) {
          console.log(e)
          if (e.status) {
            Swal.fire(
              'Good job!',
              e.pesan,
              'success'
            )
            setTimeout(() => {
              location.href = '<?= base_url() ?>Chat/login';
            }, 1600);
          } else {
            Swal.fire(
              'Sorry!',
              e.pesan,
              'error'
            )
          }
        }
      });
    }

  });

});
</script>

</html>