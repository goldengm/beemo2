<ul class="sidebar-menu" data-widget="tree">
  
  <!--<li class="header">Main Navigation</li>-->
  <?php     
    echo ($page->menu).'   ';
    echo ($page->submenu);
  ?>
  <li <?php echo ($page->menu=='dashboard')?'class="active"':'' ?>>
    <a href="<?php echo url('/dashboard') ?>">
      <i class="fa fa-home"></i> <span>Dashboard</span>
    </a>
  </li>

  <?php if (hasPermissions('users_list')): ?>
    <li class="treeview <?php echo ($page->menu=='recharge')?'active':'' ?>">
      <a href="#<?php //echo url('users') ?>">
        <i class="fa fa-user"></i> <span>Recharge Agent</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li <?php echo ($page->submenu=='recharge_agent')?'class="active"':'' ?>>
          <a href="<?php echo url('recharge/agent') ?>">
            <i class="fa fa-circle-o"></i> Agent
          </a>
        </li>

        <li <?php echo ($page->submenu=='recharge_commission')?'class="active"':'' ?>>
          <a href="<?php echo url('recharge/commission') ?>">
            <i class="fa fa-circle-o"></i> Commission Setup
          </a>
        </li>

        <li <?php echo ($page->submenu=='recharge_history')?'class="active"':'' ?>>
          <a href="<?php echo url('recharge/history') ?>">
            <i class="fa fa-circle-o"></i> Transaction History
          </a>
        </li>
      </ul>
    </li>
  <?php endif ?>

  <?php if (hasPermissions('activity_log_list')): ?>
  <li class="treeview <?php echo ($page->menu=='delivery')?'active':'' ?>">
    <a href="#<?//php echo url('activity_logs') ?>">
      <i class="fa fa-truck"></i><span>Delivery Agent</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li <?php echo ($page->submenu=='delivery_agent')?'class="active"':'' ?>>
        <a href="<?php echo url('delivery/agent') ?>">
          <i class="fa fa-circle-o"></i> Agent
        </a>
      </li>

      <li <?php echo ($page->submenu=='delivery_package')?'class="active"':'' ?>>
        <a href="<?php echo url('delivery/package') ?>">
          <i class="fa fa-circle-o"></i> Package Settings
        </a>
      </li>

      <li <?php echo ($page->submenu=='delivery_settings')?'class="active"':'' ?>>
        <a href="<?php echo url('delivery/settings') ?>">
          <i class="fa fa-circle-o"></i> Delivery Settings
        </a>
      </li>

      <li <?php echo ($page->submenu=='delivery_history')?'class="active"':'' ?>>
        <a href="<?php echo url('delivery/history') ?>">
          <i class="fa fa-circle-o"></i> Transaction History
        </a>
      </li>
    </ul>
  </li>
  <?php endif ?>

  <?php if (hasPermissions('roles_list')): ?>
  <li class="treeview <?php echo ($page->menu=='roles')?'active':'' ?>">
    <a href="<?php echo url('roles') ?>">
      <i class="fa fa-dashboard"></i><span>Services</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li <?php echo ($page->submenu=='company')?'class="active"':'' ?>>
        <a href="#<?php //echo url('recharge_agent') ?>">
          <i class="fa fa-circle-o"></i> Service Type
        </a>
      </li>

      <li <?php echo ($page->submenu=='login_theme')?'class="active"':'' ?>>
        <a href="#<?php //echo url('recharge_commission') ?>">
          <i class="fa fa-circle-o"></i> Services
        </a>
      </li>

      <li <?php echo ($page->submenu=='login_theme')?'class="active"':'' ?>>
        <a href="#<?php //echo url('recharge_history') ?>">
          <i class="fa fa-circle-o"></i> Services Providers
        </a>
      </li>
    </ul>
  </li>
  <?php endif ?>

  <?php if (hasPermissions('permissions_list')): ?>
  <li class="treeview <?php echo ($page->menu=='permissions')?'active':'' ?>">
    <a href="<?php echo url('permissions') ?>">
      <i class="fa fa-users"></i><span>User Accounts</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li <?php echo ($page->submenu=='company')?'class="active"':'' ?>>
        <a href="#<?php //echo url('recharge_agent') ?>">
          <i class="fa fa-circle-o"></i> Customers
        </a>
      </li>
      <li <?php echo ($page->submenu=='login_theme')?'class="active"':'' ?>>
        <a href="#<?php //echo url('recharge_commission') ?>">
          <i class="fa fa-circle-o"></i> Sellers
        </a>
      </li>
    </ul>
  </li>
  <?php endif ?>

  <?php if (hasPermissions('backup_db')): ?>
  <li class="treeview <?php echo ($page->menu=='backup')?'active':'' ?>">
    <a href="<?php echo url('backup') ?>">
      <i class="fa fa-cogs"></i><span>Interface</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li <?php echo ($page->submenu=='company')?'class="active"':'' ?>>
        <a href="#<?php //echo url('recharge_agent') ?>">
          <i class="fa fa-circle-o"></i> Home Page
        </a>
      </li>
      <li <?php echo ($page->submenu=='login_theme')?'class="active"':'' ?>>
        <a href="#<?php //echo url('recharge_commission') ?>">
          <i class="fa fa-circle-o"></i> Beemo Mall
        </a>
      </li>
      <li <?php echo ($page->submenu=='company')?'class="active"':'' ?>>
        <a href="#<?php //echo url('recharge_agent') ?>">
          <i class="fa fa-circle-o"></i> Giftcards
        </a>
      </li>
      <li <?php echo ($page->submenu=='login_theme')?'class="active"':'' ?>>
        <a href="#<?php //echo url('recharge_commission') ?>">
          <i class="fa fa-circle-o"></i> Mobile Top-Up
        </a>
      </li>
      <li <?php echo ($page->submenu=='company')?'class="active"':'' ?>>
        <a href="#<?php //echo url('recharge_agent') ?>">
          <i class="fa fa-circle-o"></i> Bill Payments
        </a>
      </li>
      <li <?php echo ($page->submenu=='login_theme')?'class="active"':'' ?>>
        <a href="#<?php //echo url('recharge_commission') ?>">
          <i class="fa fa-circle-o"></i> Book Travel
        </a>
      </li>
      <li <?php echo ($page->submenu=='company')?'class="active"':'' ?>>
        <a href="#<?php //echo url('recharge_agent') ?>">
          <i class="fa fa-circle-o"></i> Book Events
        </a>
      </li>
      <li <?php echo ($page->submenu=='login_theme')?'class="active"':'' ?>>
        <a href="#<?php //echo url('recharge_commission') ?>">
          <i class="fa fa-circle-o"></i> Beemo On-Demand
        </a>
      </li>
    </ul>
  </li>
  <?php endif ?>

  <?php if ( hasPermissions('company_settings') ): ?>
  <li class="treeview <?php echo ($page->menu=='settings')?'active':'' ?>">
    <a href="#">
      <i class="fa fa-shopping-cart"></i> <span>Marketplace</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li <?php echo ($page->submenu=='company')?'class="active"':'' ?>>
        <a href="#<?php //echo url('recharge_agent') ?>">
          <i class="fa fa-circle-o"></i> Products
        </a>
      </li>

      <li <?php echo ($page->submenu=='login_theme')?'class="active"':'' ?>>
        <a href="#<?php //echo url('recharge_commission') ?>">
          <i class="fa fa-circle-o"></i> Orders
        </a>
      </li>
    </ul>
  </li>
  <li <?php echo ($page->submenu=='company')?'class="active"':'' ?>>
    <a href="<?php echo url('settings/company') ?>">
      <i class="fa fa-edit"></i> Support Staff
    </a>
  </li>

  <li <?php echo ($page->submenu=='login_theme')?'class="active"':'' ?>>
    <a href="<?php echo url('settings/login_theme') ?>">
      <i class="fa fa-mobile"></i> Mobile App
    </a>
  </li>

  <li <?php echo ($page->submenu=='login_theme')?'class="active"':'' ?>>
    <a href="<?php echo url('settings/login_theme') ?>">
      <i class="fa fa-book"></i> Coupons
    </a>
  </li>

  <li <?php echo ($page->submenu=='login_theme')?'class="active"':'' ?>>
    <a href="<?php echo url('settings/login_theme') ?>">
      <i class="fa fa-line-chart"></i> Reports
    </a>
  </li>
  <?php endif ?>


  <!-- // ADMINLTE // -->
<!--
  <li class="header">AdminLTE Components</li>
  <li class="treeview">
  <a href="#">
    <i class="fa fa-files-o"></i>
    <span>Layout Options</span>
    <span class="pull-right-container">
      <span class="label label-primary pull-right">4</span>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php //echo url('adminlte/') ?>layout/top_nav"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>layout/boxed"><i class="fa fa-circle-o"></i> Boxed</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>layout/fixed"><i class="fa fa-circle-o"></i> Fixed</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>layout/collapsed_sidebar"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
  </ul>
  </li>
  <li>
  <a href="<?php //echo url('adminlte/') ?>widgets">
    <i class="fa fa-th"></i> <span>Widgets</span>
    <span class="pull-right-container">
      <small class="label pull-right bg-green">new</small>
    </span>
  </a>
  </li>
  <li class="treeview">
  <a href="#">
    <i class="fa fa-pie-chart"></i>
    <span>Charts</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php //echo url('adminlte/') ?>charts/chartjs"><i class="fa fa-circle-o"></i> ChartJS</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>charts/morris"><i class="fa fa-circle-o"></i> Morris</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>charts/flot"><i class="fa fa-circle-o"></i> Flot</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>charts/inline"><i class="fa fa-circle-o"></i> Inline charts</a></li>
  </ul>
  </li>
  <li class="treeview">
  <a href="#">
    <i class="fa fa-laptop"></i>
    <span>UI Elements</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php //echo url('adminlte/') ?>ui/general"><i class="fa fa-circle-o"></i> General</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>ui/icons"><i class="fa fa-circle-o"></i> Icons</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>ui/buttons"><i class="fa fa-circle-o"></i> Buttons</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>ui/sliders"><i class="fa fa-circle-o"></i> Sliders</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>ui/timeline"><i class="fa fa-circle-o"></i> Timeline</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>ui/modals"><i class="fa fa-circle-o"></i> Modals</a></li>
  </ul>
  </li>
  <li class="treeview">
  <a href="#">
    <i class="fa fa-edit"></i> <span>Forms</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php //echo url('adminlte/') ?>forms/general"><i class="fa fa-circle-o"></i> General Elements</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>forms/advanced"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>forms/editors"><i class="fa fa-circle-o"></i> Editors</a></li>
  </ul>
  </li>
  <li class="treeview">
  <a href="#">
    <i class="fa fa-table"></i> <span>Tables</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php //echo url('adminlte/') ?>tables/simple"><i class="fa fa-circle-o"></i> Simple tables</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>tables/data"><i class="fa fa-circle-o"></i> Data tables</a></li>
  </ul>
  </li>
  <li>
  <a href="<?php //echo url('adminlte/') ?>calendar">
    <i class="fa fa-calendar"></i> <span>Calendar</span>
    <span class="pull-right-container">
      <small class="label pull-right bg-red">3</small>
      <small class="label pull-right bg-blue">17</small>
    </span>
  </a>
  </li>
  <li>
  <a href="<?php //echo url('adminlte/') ?>mailbox/mailbox">
    <i class="fa fa-envelope"></i> <span>Mailbox</span>
    <span class="pull-right-container">
      <small class="label pull-right bg-yellow">12</small>
      <small class="label pull-right bg-green">16</small>
      <small class="label pull-right bg-red">5</small>
    </span>
  </a>
  </li>
  <li class="treeview">
  <a href="#">
    <i class="fa fa-folder"></i> <span>Examples</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php //echo url('adminlte/') ?>examples/invoice"><i class="fa fa-circle-o"></i> Invoice</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>examples/profile"><i class="fa fa-circle-o"></i> Profile</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>examples/login"><i class="fa fa-circle-o"></i> Login</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>examples/register"><i class="fa fa-circle-o"></i> Register</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>examples/lockscreen"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>examples/error404"><i class="fa fa-circle-o"></i> 404 Error</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>examples/error500"><i class="fa fa-circle-o"></i> 500 Error</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>examples/blank"><i class="fa fa-circle-o"></i> Blank Page</a></li>
    <li><a href="<?php //echo url('adminlte/') ?>examples/pace"><i class="fa fa-circle-o"></i> Pace Page</a></li>
  </ul>
  </li>
  <li class="treeview">
  <a href="#">
    <i class="fa fa-share"></i> <span>Multilevel</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
    <li class="treeview">
      <a href="#"><i class="fa fa-circle-o"></i> Level One
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-circle-o"></i> Level Two
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
  </ul>
  </li>
  <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
  <li class="header">LABELS</li>
  <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
  <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
  <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
  -->
</ul>