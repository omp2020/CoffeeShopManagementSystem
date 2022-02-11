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
    <title>Admin Dashboard | Add Employee</title>
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
            <h3 class="content-header-title">Add Product</h3>
          </div>
        </div>
        <div class="content-body">
<section id="striped-row-form-layouts">
	<div class="row">
	    <div class="col-md-12">
	        <div class="card">
	            <div class="card-header">
	                <h4 class="card-title" id="striped-row-layout-basic">Product Details</h4>
	                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
        			<div class="heading-elements">
	                    <ul class="list-inline mb-0">
	                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
	                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
	                    </ul>
	                </div>
	            </div>
	            <div class="card-content collpase show">
	                <div class="card-body">
	                    <form class="form form-horizontal striped-rows form-bordered">
	                    	<div class="form-body">
	                    		<h4 class="form-section"><i class="ft-user"></i>Product Info</h4>
			                    <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="name">Name</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="name" class="form-control" placeholder="Name" required>
		                            </div>
		                        </div>
		                        <div class="form-group row">
                              <label class="col-md-3 label-control" for="price">Price</label>
									              <div class="col-md-9">
	                            		<input type="text" id="price" class="form-control" placeholder="Price" required>
	                            	</div>
		                        </div>
		                        <div class="form-group row">
                              <label class="col-md-3 label-control" for="stock">Stock</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="stock" class="form-control" placeholder="Stock" required>
		                            </div>
		                        </div>
		                        <div class="form-group row">
                              <label class="col-md-3 label-control" for="desc">Description</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="desc" class="form-control" placeholder="Description" required>
		                            </div>
		                        </div>
                            </div>
	                        <div class="form-actions">
	                            <button type="button" class="btn btn-warning mr-1">
	                            	<i class="ft-x"></i> Cancel
	                            </button>
	                            <button id="addprod" class="btn btn-success">
	                                <i class="fa fa-check-square-o"></i> Save
	                            </button>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

</section>
<!-- // Striped row layout section end -->
        </div>
      </div>
    </div>
    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo temp ?>/assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo temp ?>/assets/app-assets/vendors/js/extensions/sweetalert.min.js"></script>
    <script src="<?php echo temp ?>/assets/app-assets/js/scripts/extensions/sweet-alerts.min.js"></script>
    <script>
      $('#addprod').click(function(e) {
        e.preventDefault();
        var name = $('#name').val();
        var price = $('#price').val();
        var stock = $('#stock').val();
        var desc = $('#desc').val();
        $.ajax({
        type: 'POST',
        url: '/miniproject/api',
        data:  {name: name, price: price, stock: stock, desc: desc, type: 'AddProd'},
        success: function(data){
          console.log(data);
            data = JSON.parse(data);
          if(data["error"] == 1) {
            swal({
              title: 'Something Went wrong in the transactions',
              icon: 'warning',
              text: 'I will close in 2 seconds.',
              button: true
            });       
          }
          else {
            swal("Product Added Successfully", {
                  icon: "success",
                  timer: 2000,
                  button: false
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
      });
    </script>
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
    <!-- END PAGE LEVEL JS-->
  </body>


</html>