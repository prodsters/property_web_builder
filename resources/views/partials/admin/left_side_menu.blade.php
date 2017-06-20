<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('assets/admin/img/avatar5.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="{{route('admin.dashboard.index')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="header">PROPERTIES</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Properties</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="{{route('admin.property.index')}}">
                <i class="fa fa-eye"></i> <span>View Properties</span>
              </a>
            </li>
            <li>
              <a href="{{route('admin.property.add')}}">
                <i class="fa fa-plus-square"></i> <span>Add Property</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="header">USERS</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Manage Users</span>
          </a>
        </li>
        <li class="header">WEBSITE</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Features</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Property Types</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Property States</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Currency</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Site Contents</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> About Content</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Terms and Conditions</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Contact</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Footer</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>