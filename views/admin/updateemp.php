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
            <h3 class="content-header-title">Update Employee Details</h3>
          </div>
        </div>
        <div class="row" id="header-styling">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Select Employee</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="name">Employee</label>
                        <div class="col-md-9">
                            <select id="updateprodselect" class="form-control" id="basicSelect">
                              <option disabled selected>Select Option</option>
                              <!-- <option>Option 1</option>
                              <option>Option 2</option>
                              <option>Option 3</option>
                              <option>Option 4</option>
                              <option>Option 5</option> -->
                              <?php $sql = "SELECT * FROM Employee";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                    ?>
                                    <option value="<?php echo $row['id']?>"><?php echo $row['name']?> | <?php echo $row['email']?> | <?php echo $row['mobile']?></option>
                                <?php }
                                    }
                                    else {
                                    echo '<td colspan="6">No Employee data available</td>';
                                    }
                                    ?>
                            </select>
                        </div>
                    </div>
                      <form class="form form-horizontal striped-rows form-bordered" style="display: none">
	                    	<div class="form-body">
	                    		<h4 class="form-section"><i class="ft-user"></i>Personal Info</h4>
			                    <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="fname">First Name</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="fname" class="form-control" placeholder="First Name">
		                            </div>
		                        </div>
		                        <div class="form-group row">
                              <label class="col-md-3 label-control" for="lname">Last Name</label>
									              <div class="col-md-9">
	                            		<input type="text" id="lname" class="form-control" placeholder="Last Name">
	                            	</div>
		                        </div>
		                        <div class="form-group row">
                              <label class="col-md-3 label-control" for="email">E-mail</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="email" class="form-control" placeholder="E-mail">
		                            </div>
		                        </div>
		                        <div class="form-group row">
                              <label class="col-md-3 label-control" for="phone">Contact Number</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="phone" class="form-control" placeholder="Phone">
		                            </div>
		                        </div>
                            <div class="form-group row last">
		                            <label class="col-md-3 label-control" for="address">Address</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="address" class="form-control" placeholder="Address">
		                            </div>
		                        </div>
                            <div class="form-group row last">
		                            <label class="col-md-3 label-control" for="dob">Date of Birth</label>
		                            <div class="col-md-9">
		                            	<input type="date" id="dob" class="form-control" placeholder="--/--/----">
		                            </div>
		                        </div>
                            <div class="form-group row last">
		                            <label class="col-md-3 label-control" for="doj">Date of Join</label>
		                            <div class="col-md-9">
		                            	<input type="date" id="doj" class="form-control" placeholder="--/--/----">
		                            </div>
		                        </div>
                            <div class="form-group row last">
		                            <label class="col-md-3 label-control" for="isAdmin">The employee is Admin</label>
		                            <div class="col-md-9">
		                            	<input type="checkbox" id="isAdmin" class="form-control" placeholder="--/--/----">
		                            </div>
		                        </div>
							            </div>
	                        <div class="form-actions">
	                            <button type="button" class="btn btn-warning mr-1">
	                            	<i class="ft-x"></i> Cancel
	                            </button>
	                            <button id="updateemp" class="btn btn-success">
	                                <i class="fa fa-check-square-o"></i> Save
	                            </button>
	                        </div>
	                    </form>
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
      $('#updateprodselect').change(function() {
        var id = $('#updateprodselect').val();
        $('form').css({"display": "block"});        
        $.ajax({
            type: 'POST',
            url: '/miniproject/api',
            data:  {id: id, type: 'SelEmp'},
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
              //     Logic -> data.name.split()
              var arr = data.name.split(' ');
              var fname = arr[0];
              var lname =  arr[1];
              $('#fname').val(fname);
              $('#lname').val(lname);
              $('#email').val(data.email);
              $('#phone').val(data.mobile);
              $('#address').val(data.address);
              $('#dob').val(data.dob);
              $('#doj').val(data.doj);
              if(data.isAdmin==1)
                $('#isAdmin').prop('checked', true);
              else
                $('#isAdmin').prop('checked', false);
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
    //   Update Employee button on click # TODO
      $('#updateemp').click(function(e) {
        var id = $('#updateprodselect').val();
        e.preventDefault();
        var firstName = $('#fname').val();
        var lastName = $('#lname').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var address = $('#address').val();
        var dob = $('#dob').val();
        var doj = $('#doj').val();
        var isAdmin = $('#isAdmin').is(":checked");
        console.log(isAdmin);
        var name = firstName + ' ' + lastName;
        $.ajax({
        type: 'POST',
        url: '/miniproject/api',
        data:  {id, id,name: name, email: email, phone: phone, address: address, dob: dob, doj: doj, isAdmin: isAdmin, type: 'UpdateEmp'},
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
            swal("Employee Updated Successfully", {
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
    <!-- END PAGE LEVEL JS-->
  </body>


</html>
