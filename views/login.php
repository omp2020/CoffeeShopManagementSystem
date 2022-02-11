<?php 
  session_start();
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  
<!-- Mirrored from pixinvent.com/bootstrap-admin-template/robust/html/ltr/vertical-compact-menu-template/login-with-bg-image.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jan 2022 07:59:41 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Login</title>
    <link rel="apple-touch-icon" href="<?php echo temp ?>/assets/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/bootstrap-admin-template/robust/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/css/app.min.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/css/core/menu/menu-types/vertical-compact-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/css/pages/login-register.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-compact-menu 1-column  bg-full-screen-image menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-compact-menu" data-col="1-column">
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-body">
          <section class="flexbox-container">
            <div class="col-12 d-flex align-items-center justify-content-center">
              <div class="col-md-4 col-10 box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                  <div class="card-header border-0">
                    <div class="card-title text-center">
                      <h2>Coffee Shop Management System</h2>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="card-body">
                      <form class="form-horizontal">
                        <fieldset class="form-group position-relative has-icon-left">
                            <input name="email" type="email" value="omp@gmail.com" class="form-control form-control-lg" id="email" placeholder="Username">
                            <div class="form-control-position">
                                <i class="ft-user"></i>
                            </div>
                        </fieldset>
                        <fieldset class="form-group position-relative has-icon-left">
                            <input name="password" type="password" value="test" class="form-control form-control-lg" id="password" placeholder="Password">
                            <div class="form-control-position">
                                <i class="fa fa-key"></i>
                            </div>
                        </fieldset>
                        <button id="login" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Login</button>
                      </form>
                    </div>
                    <!-- <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>New to this website?</span></p>
                    <div class="card-body">
                        <a href="<?php echo temp.'/register'; ?>" class="btn btn-outline-danger btn-block"><i class="ft-user"></i> Register</a>
                    </div> -->
                  </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo temp ?>/assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo temp ?>/assets/app-assets/vendors/js/extensions/sweetalert.min.js"></script>
    <script src="<?php echo temp ?>/assets/app-assets/js/scripts/extensions/sweet-alerts.min.js"></script>
    <script>
    $('#login').click(function(e){
      // var valid = this.form.checkValidity();
      // if(valid){
        var username = $('#email').val();
        var password = $('#password').val();
      // }
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: '/miniproject/api',
        data:  {username: username, password: password, type: 'LoginAUTH'},
        success: function(data){
          console.log(data);
            data = JSON.parse(data);

          if(data["error"] == 1) {
            swal({
              title: 'Wrong Credentials',
              icon: 'warning',
              text: 'I will close in 2 seconds.',
              // timer: 2000,
              button: true
            });       
          }
          else {
            swal("Login Successful. You will be redirected to Home Page in 2 seconds", {
                  icon: "success",
                  timer: 2000,
                  button: false
                }).then(() => {
                  window.location.href = "admin";
                });
          }
        },
        error: function(data){
          swal({
              title: 'Error in sending Request',
              icon: 'warning',
              // text: 'I will close in 2 seconds.',
              timer: 2000,
              button: false
            });
        }
      });
});
  </script>
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo temp ?>/assets/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="<?php echo temp ?>/assets/app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="<?php echo temp ?>/assets/app-assets/js/core/app-menu.min.js"></script>
    <script src="<?php echo temp ?>/assets/app-assets/js/core/app.min.js"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?php echo temp ?>/assets/app-assets/js/scripts/forms/form-login-register.min.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>

<!-- Mirrored from pixinvent.com/bootstrap-admin-template/robust/html/ltr/vertical-compact-menu-template/login-with-bg-image.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jan 2022 07:59:42 GMT -->
</html>