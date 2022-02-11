<?php 
  session_start();
  if(!isset($_SESSION["login"])) {
    header('Location: '. temp, true);
    exit();
  }
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin Dashboard | List Employee</title>
    <link rel="apple-touch-icon" href="<?php echo temp ?>/assets/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/bootstrap-admin-template/robust/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/vendors/css/forms/icheck/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/vendors/css/weather-icons/climacons.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/css/app.min.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/css/core/menu/menu-types/vertical-compact-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/css/core/colors/palette-climacon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/css/pages/users.min.css">
    <!-- END Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/fonts/feather/style.min.css">
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">

    <!-- fixed-top-->
    <?php
      $name = "Om Patel"; include '_navbar.php'; include '_sidebar.php';?>
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">Details of Employee</h3>
          </div>
        </div>
        <div class="row" id="header-styling">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Employee</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            </div>
            <div class="card-content collapse show">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-success white">
                            <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Address</th>
                              <th>Mobile</th>
                              <th>Date of Join</th>
                              <th>Date of Birth</th>
                              <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sql = "SELECT * FROM employee";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                if($_SESSION['id'] == $row['id']) { continue; }
                                else {
                                  ?>
                              <tr id="<?php echo $row['id']?>">
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['email']?></td>
                                <td><?php echo $row['address']?></td>
                                <td><?php echo $row['mobile']?></td>
                                <td><?php echo $row['doj']?></td>
                                <td><?php echo $row['dob']?></td>
                                <td>
                                    <button class="btn btn-danger delete">Delete</button>
                                </td>
                              </tr>
                          <?php    }
                              }
                            }
                            else {
                              echo '<td colspan="6">No Customer data available</td>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>
      </div>
    </div>
    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo temp ?>/assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo temp ?>/assets/app-assets/vendors/js/extensions/sweetalert.min.js"></script>
    <script src="<?php echo temp ?>/assets/app-assets/js/scripts/extensions/sweet-alerts.min.js"></script>
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo temp ?>/assets/app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
    <script src="<?php echo temp ?>/assets/app-assets/vendors/js/extensions/jquery.knob.min.js"></script>
    <script src="<?php echo temp ?>/assets/app-assets/vendors/js/charts/raphael-min.js"></script>
    <script src="<?php echo temp ?>/assets/app-assets/vendors/js/charts/morris.min.js"></script>
    <script src="<?php echo temp ?>/assets/app-assets/vendors/js/extensions/unslider-min.js"></script>
    <script src="<?php echo temp ?>/assets/app-assets/vendors/js/charts/echarts/echarts.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="<?php echo temp ?>/assets/app-assets/js/core/app-menu.min.js"></script>
    <script src="<?php echo temp ?>/assets/app-assets/js/core/app.min.js"></script>
    <script src="<?php echo temp ?>/assets/app-assets/js/scripts/customizer.min.js"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?php echo temp ?>/assets/app-assets/js/scripts/pages/dashboard-fitness.min.js"></script>
    <script>
      $('.delete').on('click',function(){
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this !!",
            icon: "warning",
            buttons: {
                    cancel: {
                        text: "No, cancel this!",
                        value: null,
                        visible: true,
                        className: "",
                        closeModal: false,
                    },
                    confirm: {
                        text: "Yes, delete it!",
                        value: true,
                        visible: true,
                        className: "",
                        closeModal: false
                    }
            }
        })
        .then((isConfirm) => {
            if (isConfirm) {
              var id = $(this).closest('tr').attr('id');
              $.ajax({
                  type: 'POST',
                  url: '/miniproject/api',
                  data:  {id: id, type: 'DelEmp'},
                  success: function(data){
                    console.log(data);
                    data = JSON.parse(data);
                    if(data["error"] == 1) {
                      swal({
                        title: 'Error in deleting data',
                        icon: 'warning',
                        text: 'I will close in 2 seconds.',
                        button: true
                      });       
                    }
                    else {
                      swal("Deleted!", "The details are deleted successfully", "success").then(() => {
                        document.location.reload();
                      });
                    }
                  },
                  error: function(data){
                    swal({
                        title: 'Error in sending Request',
                        icon: 'warning',
                        timer: 2000,
                        button: false
                      });
                  }
                });
            } else {
                swal("Cancelled", "The details are not deleted", "error");
            }
        });

      });
    </script>
    <!-- END PAGE LEVEL JS-->
  </body>


</html>
