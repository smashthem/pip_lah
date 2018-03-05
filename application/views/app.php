<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
      <?=config('app_name');?> - <?=address($this->uri->segment(1));?>
    </title>
    <meta name="description" content="Pendaftaran Ujian Online">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="<?=base_url('assets/vendor/bootstrap/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/vendor/font-awesome/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="<?=base_url('assets/vendor/bootstrap-select/css/bootstrap-select.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/vendor/owl.carousel/assets/owl.carousel.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/vendor/owl.carousel/assets/owl.theme.default.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/style.blue.css');?>" id="theme-stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/css/datepicker.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/daterangepicker.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/custom.css');?>">
    <link rel="shortcut icon" href="<?=base_url('assets/img/favicon.ico');?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?=base_url('assets/img/apple-touch-icon.png');?>">
    <link rel="apple-touch-icon" sizes="57x57" href="<?=base_url('assets/img/apple-touch-icon-57x57.png');?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url('assets/img/apple-touch-icon-72x72.png');?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('assets/img/apple-touch-icon-76x76.png');?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url('assets/img/apple-touch-icon-114x114.png');?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=base_url('assets/img/apple-touch-icon-120x120.png');?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=base_url('assets/img/apple-touch-icon-144x144.png');?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=base_url('assets/img/apple-touch-icon-152x152.png');?>">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <script src="<?=base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?=base_url('assets/vendor/popper.js/umd/popper.min.js');?>"> </script>
    <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?=base_url('assets/js/moment.min.js');?>"></script>
    <script src="<?=base_url('assets/js/daterangepicker.js');?>"></script>
    <script src="<?=base_url('assets/js/datepicker.js');?>"></script>
    <script src="<?=base_url('assets/vendor/input-mask/jquery.inputmask.js');?>"></script>
    <script src="<?=base_url('assets/vendor/input-mask/jquery.inputmask.date.extensions.js');?>"></script>
    <script src="<?=base_url('assets/vendor/input-mask/jquery.inputmask.extensions.js');?>"></script>
  </head>
  <body>
    <div id="all">
      <!-- Top bar-->
      <div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <p>Hubungi kami <?=config('email');?></p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <!-- <div class="login">
                  <a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn">
                    <i class="fa fa-sign-in"></i>
                    <span class="d-none d-md-inline-block">Masuk</span>
                  </a>
                  <a href="<?=base_url('register');?>" class="signup-btn">
                    <i class="fa fa-user"></i>
                    <span class="d-none d-md-inline-block">Daftar</span>
                  </a>
                </div> -->
                <ul class="social-custom list-inline">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top bar end-->
      <!-- Login Modal-->
      <?php $this->load->view('login');?>
      <!-- Login modal end-->
      <!-- Navbar Start-->
      <?php $this->load->view('menu');?>
      <!-- Navbar End-->
      
      <!-- KONTEN -->
      <?=$contents;?>
      <!-- END KONTEN -->

      <!-- FOOTER -->
      <?php $this->load->view('footer');?>
      <!-- END FOOTER -->
    </div>

    <script src="<?=base_url('assets/vendor/jquery.cookie/jquery.cookie.js');?>"> </script>
    <script src="<?=base_url('assets/vendor/waypoints/lib/jquery.waypoints.min.js');?>"> </script>
    <script src="<?=base_url('assets/vendor/jquery.counterup/jquery.counterup.min.js');?>"> </script>
    <script src="<?=base_url('assets/vendor/owl.carousel/owl.carousel.min.js');?>"></script>
    <script src="<?=base_url('assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js');?>"></script>
    <script src="<?=base_url('assets/js/jquery.parallax-1.1.3.js');?>"></script>
    <script src="<?=base_url('assets/vendor/bootstrap-select/js/bootstrap-select.min.js');?>"></script>
    <script src="<?=base_url('assets/vendor/jquery.scrollto/jquery.scrollTo.min.js');?>"></script>
    <script src="<?=base_url('assets/js/front.js');?>"></script>
    
  </body>
</html>