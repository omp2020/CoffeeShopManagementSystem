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
    <link rel="stylesheet" type="text/css" href="<?php echo temp ?>/assets/app-assets/css/plugins/forms/wizard.min.css">
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
            <h3 class="content-header-title">Add Order</h3>
          </div>
        </div>
        <div class="content-body">
<section id="striped-row-form-layouts">
	<div class="row">
	    <div class="col-md-12">
	        <div class="card">
	            <div class="card-header">
	                <h4 class="card-title" id="striped-row-layout-basic">Order Details</h4>
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
                  <div class="card-body">
                      <form action="#" class="number-tab-steps wizard-circle">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="customer">Customer</label>
                                        <select class="form-control" id="customer">
                                          <option disabled selected>Select Option</option>
                                          <?php $sql = "SELECT * FROM customer";
                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                            ?>
                                                <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
                                          <?php }
                                                }
                                                else {
                                                echo '<td colspan="6">No Product data available</td>';
                                                }
                                            ?>
                                        </select>
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="mobile">Mobile:</label>
                                          <input type="text" class="form-control" id="mobile" disabled>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="email">Email :</label>
                                          <input type="text" class="form-control" id="email" disabled>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="address">Address :</label>
                                          <input type="text" class="form-control" id="address" disabled>
                                      </div>
                                  </div>
                              </div>
                          <!-- Step 2 -->
                              <div class="row">
                                  <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="coffee">Coffee</label>
                                        <select class="form-control" id="coffee">
                                          <option disabled selected>Select Option</option>
                                          <?php $sql = "SELECT * FROM product";
                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                            ?>
                                                <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
                                          <?php }
                                                }
                                                else {
                                                echo '<td colspan="6">No Product data available</td>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="price">Price / Unit</label>
                                        <input type="text" class="form-control" id="price" disabled>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="quantity">Quantity</label>
                                        <input type="text" class="form-control" id="pass" placeholder="Enter Quantity">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group text-center mt-2">
                                    <button id="addcoffee" type="button" class="btn btn-secondary"> <i class="ft-+"></i>Add</button>
                                    </div>
                                </div>
                                <table class="table">
                                  <thead class="bg-secondary white">
                                      <tr>
                                        <th>Id</th>
                                        <th>Coffee Name</th>
                                        <th>Price/Unit</th>
                                        <th>Quantity</th>
                                        <th>Final Price</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  </tbody>
                                </table>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="fprice">Final Price :</label>
                                          <input type='text' class="form-control datetime" id="fprice" value="0" disabled/>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group m-2">
                                          <button class="btn btn-success" id="placeorder">Place Order</button>
                                      </div>
                                  </div>
                              </div>
                        </form>
                    </div>
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
      var id = 1;
      $('#addcoffee').on('click', function () {
        var quantity = $('#pass').val();
        if(quantity == '' || quantity == 0){
          swal('Please Enter Quantity');
          $("#coffee").val('');
          $("#price").val('');
          $("#pass").val('');
        }
        if($('#coffee option:selected').text() == 'Select Option') {
          swal('Please Select Coffee');
          $("#coffee").val('');
          $("#price").val('');
          $("#pass").val('');
        }
        else {
          var price = $('#price').val()*quantity;
          markup = "<tr id="+$("#coffee").val()+">"+
                  "<td>"+id+"</td>"+
                  "<td>"+$('#coffee option:selected').text()+"</td>"+
                  "<td>"+$('#price').val()+"</td>"+
                  "<td>"+$('#pass').val()+"</td>"+
                  "<td>"+parseFloat(price).toFixed(2)+"</td>"+
                "</tr>";
          tableBody = $("table tbody");
          var fprice = $("#fprice").val();
          fprice = parseFloat(fprice)+parseFloat(price);
          $("#fprice").val(parseFloat(fprice).toFixed(2));
          $("#coffee").val('');
          $("#price").val('');
          $("#pass").val('');
          tableBody.append(markup);
          id++;
        }
      });
      $('#coffee').change(function() {
        var id = $('#coffee').val(); 
        $.ajax({
            type: 'POST',
            url: '/miniproject/api',
            data:  {id: id, type: 'SelProd'},
            success: function(data){
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
                $('#price').val(data.price);
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
      $('#customer').change(function() {
        var id = $('#customer').val();    
        $.ajax({
            type: 'POST',
            url: '/miniproject/api',
            data:  {id: id, type: 'SelCust'},
            success: function(data){
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
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#mobile').val(data.mobile);
                $('#address').val(data.address);
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
      $('#placeorder').click(function(e) {
        e.preventDefault();
        var custid = $('#customer').val();
        var totalprice = $("#fprice").val();
        var myTableArray = [];
        $("table tr").each(function() {
            var arrayOfThisRow = [];
            var tableData = $(this).find('td');
            if (tableData.length > 0) {
                tableData.each(function() { arrayOfThisRow.push($(this).text()); });
                arrayOfThisRow.push($(this).attr('id'));
                myTableArray.push(arrayOfThisRow);
            }
        });
        $.ajax({
        type: 'POST',
        url: '/miniproject/api',
        data:  {custid: custid, data: myTableArray, totalprice: totalprice, type: 'AddOrder'},
        success: function(data){
          alert(data);
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
            $('form').each(function(){
              this.reset();
            });
            $('table tbody').empty();
            swal("Order Placed Successfully", {
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