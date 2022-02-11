<?php 
  session_start();
  if(!isset($_SESSION["login"])) {
    header('Location: '. temp, true);
    exit();
  }
?>
<?php 
    $sql = "SELECT COUNT(*) as cnt FROM employee";
    $result = $conn->query($sql);
    $empCnt = 0;
    $custCnt = 0;
    $orderCnt = 0;
    $prodCnt = 0;
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $empCnt = $row['cnt'];
    }
    $sql = "SELECT COUNT(*) as cnt FROM customer";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $custCnt = $row['cnt'];
    }
    $sql = "SELECT COUNT(*) as cnt FROM product";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $prodCnt = $row['cnt'];
    }
    $sql = "SELECT COUNT(*) as cnt FROM ordertime";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $orderCnt = $row['cnt'];
    }
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin Dashboard</title>
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
      $name = "Om Patel"; include '_navbar.php'; include '_sidebar.php' ?>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-grey border-right-lighten-3 clearfix">
                            <div class="float-left pl-2">
                                <span class="grey darken-1 block">Total Employees</span>
                                <span class="font-large-3 line-height-1 text-bold-300"><?php echo $empCnt ?></span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-grey border-right-lighten-3 clearfix">
                            <div class="float-left pl-2">
                                <span class="grey darken-1 block">Total Customers</span>
                                <span class="font-large-3 line-height-1 text-bold-300"><?php echo $custCnt ?></span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-grey border-right-lighten-3 clearfix">
                            <div class="float-left pl-2">
                                <span class="grey darken-1 block">Total Orders</span>
                                <span class="font-large-3 line-height-1 text-bold-300"><?php echo $orderCnt ?></span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-grey border-right-lighten-3 clearfix">
                            <div class="float-left pl-2">
                                <span class="grey darken-1 block">Total Products</span>
                                <span class="font-large-3 line-height-1 text-bold-300"><?php echo $prodCnt ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fitness stats-->

<!-- activity charts -->
<div class="row match-height">
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header no-border-bottom">
                <h4 class="card-title">Product by Order</h4>
                <a class="heading-elements-toggle"><i class="ft-more-horizontal font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div id="bar-chart" class="height-250"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header no-border-bottom">
                <h4 class="card-title">Order Placed by Employees</h4>
                <a class="heading-elements-toggle"><i class="ft-more-horizontal font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div id="donut-chart" class="height-250"></div>
                </div>
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
        var data = [];
        <?php 
            $sql = "SELECT t1.sm, t2.name FROM (SELECT SUM(quantity) as sm, productid FROM orderdetails GROUP BY productid) as t1
            INNER JOIN product as t2
            WHERE t1.productid = t2.id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) { ?>
                    data.push({"y": "<?php echo $row["name"] ?>", "a": "<?php echo $row["sm"] ?>"});
               <?php }
            }
        ?>
        Morris.Bar({
            element: "bar-chart",
            data: data,
            xkey: "y",
            ykeys: ["a"],
            labels: ["Count"],
            barGap: 6,
            barSizeRatio: 0.35,
            smooth: !0,
            gridLineColor: "#e3e3e3",
            numLines: 5,
            gridtextSize: 14,
            fillOpacity: 0.4,
            resize: !0,
            barColors: ["#00A5A8"],
        });
        data = [];
        <?php 
            $sql = "SELECT t1.cnt, t2.name FROM (SELECT COUNT(id) as cnt, empid FROM ordertime GROUP BY empid) as t1
            INNER JOIN employee as t2
            WHERE t1.empid = t2.id;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) { ?>
                    data.push({"label": "<?php echo $row["name"] ?>", "value": "<?php echo $row["cnt"] ?>"});
               <?php }
            }
        ?>
        Morris.Donut({
            element: "donut-chart",
            data: data,
            resize: !0,
            // colors: ["#00A5A8", "#FF7D4D", "#FF4558", "#626E82"],
        });
    </script>
    <!-- END PAGE LEVEL JS-->
  </body>


</html>