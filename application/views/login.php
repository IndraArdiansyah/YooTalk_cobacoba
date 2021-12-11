<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendor/fontawesomefree/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/login/fonts/icomoon/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/login/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/login/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/login/css/login.css">
  <!-- <link rel="stylesheet" href="<?= base_url() ?>/assets/login/css/style.css"> -->
  <title>Login YooTalk</title>
</head>
<style>
.gambar {
  width: 30%;
  display: flex;
  justify-content: center;
  margin: auto;
  /* border-radius: 50%; */
  /* box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaa7, -8px -8px 15px #fff; */



}
</style>

<body>

  <div class="wrapper">
    <div class="gambar align-items-center">
      <img src="<?= base_url() ?>/assets/login/images/Yoo!.png" alt="Image" class="img-fluid ">
    </div>
    <!-- <div class="logo"> <img src="<?= base_url() ?>/assets/login/images/pesan.jpg" alt="Image" class="img-fluid">
    </div> -->
    <div class="text-center mt-4 name"> YooTalk</div>
    <hr>
    <br>
    <div class="form-field d-flex align-items-center">
      <input type="text" class="form-control" id="username" placeholder="Username">
    </div>
    <div class="form-field d-flex align-items-center">

      <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <br>
    <input type="submit" value="Log In" id="btnLogin" class="btn mt-3"></input>

    <div class="text-center fs-6"> Belum memiliki akun ? <a href="<?= base_url() ?>register"
        class="link-primary text-center">Sign up</a> </div>
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
    $.ajax({
      type: "post",
      url: "<?= base_url() ?>/Chat/process_login",
      data: {
        username,
        password
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
            location.href = '<?= base_url() ?>Chat/Menu';
          }, 1000);
        } else {
          Swal.fire(
            'Sorry!',
            e.pesan,
            'error'
          )
        }
      }
    });

  });

});
</script>

</html>