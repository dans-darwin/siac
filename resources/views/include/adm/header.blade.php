<header class="main-header">

  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">AP</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Admin</b>Panel</span>
  </a>

  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="{{ url('nimda/logout')}}">
            <span class="hidden-xs">Logout</span>
          </a>
        </li>
      </ul>
    </div>

  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active">
        <a href="{{ url('nimda/home') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="{{ url('nimda/orders') }}">
          <i class="fa fa-list"></i> <span>List Order</span>
        </a>
      </li>
      <li>
        <a href="{{ url('nimda/keluhan') }}">
          <i class="fa fa-inbox"></i> <span>List Keluhan</span>
        </a>
      </li>
      <li>
        <a href="{{ url('nimda/paket') }}">
          <i class="fa fa-dollar"></i> <span>List Paket Harga</span>
        </a>
      </li>
      <li>
        <a href="{{ url('nimda/report') }}">
          <i class="fa fa-book"></i> <span>Report</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i>
          <span>Customer</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('nimda/customer/index')}}"><i class="fa fa-circle-o"></i> List Users</a></li>
          <li><a href="{{ url('nimda/customer/create')}}"><i class="fa fa-circle-o"></i> Create Users</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pencil"></i>
          <span>Admin</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('nimda/admin/index')}}"><i class="fa fa-circle-o"></i> List Admin</a></li>
          <li><a href="{{ url('nimda/admin/create')}}"><i class="fa fa-circle-o"></i> Create Admin</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>