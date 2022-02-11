<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
                <a href="<?php echo temp.'/admin' ?>">
                  <i class="icon-home"></i>
                  <span class="menu-title" data-i18n="nav.dash.main">Dashboard</span>
                </a>
            </li>
            <li class=" nav-item has-sub">
              <a href="#"><i class="ft-users"></i>
                <span class="menu-title" data-i18n="nav.category.tables">Employee</span>
              </a>
              <ul class="menu-content">
                <li class="menu-item">
                  <a class="menu-item" href="<?php echo temp.'/admin/addemp' ?>" data-i18n="nav.bootstrap_tables.main">Add Employees</a>                  
                </li>
                <li>
                  <a class="menu-item" href="<?php echo temp.'/admin/listemp' ?>" data-i18n="nav.table_jsgrid.main">Show Employees</a>
                </li>
                <li>
                  <a class="menu-item" href="<?php echo temp.'/admin/updateemp' ?>" data-i18n="nav.table_jsgrid.main">Update Employees</a>
                </li>
              </ul>
            </li>
            <li class=" nav-item has-sub">
              <a href="#"><i class="icon-cup"></i>
                <span class="menu-title" data-i18n="nav.category.tables">Product</span>
              </a>
              <ul class="menu-content">
                <li class="menu-item">
                  <a class="menu-item" href="<?php echo temp.'/admin/addprod' ?>" data-i18n="nav.bootstrap_tables.main">Add Product</a>                  
                </li>
                <li>
                  <a class="menu-item" href="<?php echo temp.'/admin/listprod' ?>" data-i18n="nav.table_jsgrid.main">Show Product</a>
                </li>
                <li>
                  <a class="menu-item" href="<?php echo temp.'/admin/updateprod' ?>" data-i18n="nav.table_jsgrid.main">Update Product</a>
                </li>
              </ul>
            </li>
            <!-- <li class=" nav-item">
                <a href="<?php echo temp.'/admin/addemp' ?>">
                  <i class="icon-user-follow"></i>
                  <span class="menu-title" data-i18n="nav.templates.main">Add Employees</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="<?php echo temp.'/admin/listemp' ?>">
                  <i class="icon-note"></i>
                  <span class="menu-title" data-i18n="nav.templates.main">Show Employees</span>
                </a>
            </li> -->
            <li class=" nav-item has-sub">
              <a href="#"><i class="icon-cup"></i>
                <span class="menu-title" data-i18n="nav.category.tables">Customer</span>
              </a>
              <ul class="menu-content">
                <li class="menu-item">
                  <a class="menu-item" href="<?php echo temp.'/admin/addcust' ?>" data-i18n="nav.bootstrap_tables.main">Add Customers</a>                  
                </li>
                <li>
                  <a class="menu-item" href="<?php echo temp.'/admin/updatecust' ?>" data-i18n="nav.table_jsgrid.main">Update Customer</a>
                </li>
              </ul>
            </li>
            <!-- <li class=" nav-item">
              <a href="<?php echo temp.'/admin/addprod' ?>">
                <i class="icon-note"></i>
                <span class="menu-title" data-i18n="nav.templates.main">Add Product</span>
              </a>
            </li>
            <li class=" nav-item">
              <a href="<?php echo temp.'/admin/listprod' ?>">
                <i class="icon-note"></i>
                <span class="menu-title" data-i18n="nav.templates.main">Show Product</span>
              </a>
            </li> -->
            <li class=" nav-item has-sub">
              <a href="#"><i class="icon-book-open"></i>
                <span class="menu-title" data-i18n="nav.category.tables">Order</span>
              </a>
              <ul class="menu-content">
                <li class="menu-item">
                  <a class="menu-item" href="<?php echo temp.'/admin/addorder' ?>" data-i18n="nav.bootstrap_tables.main">Add Order</a>                  
                </li>
              </ul>
            </li>
            <li class=" nav-item has-sub">
              <a href="#"><i class="icon-list"></i>
                <span class="menu-title" data-i18n="nav.category.tables">Reports</span>
              </a>
              <ul class="menu-content">
                <li class="menu-item">
                  <a class="menu-item" href="<?php echo temp.'/admin/listcust' ?>" data-i18n="nav.bootstrap_tables.main">Customer Report</a>                  
                </li>
                <li>
                  <a class="menu-item" href="<?php echo temp.'/admin/listorder' ?>" data-i18n="nav.table_jsgrid.main">Orders Report</a>
                </li>
              </ul>
            </li>
        </ul>
    </div>
</div>