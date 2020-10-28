<aside class="main-sidebar sidebar-dark-primary elevation-4 fixed">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ $user['name'] ?? "Admin" }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 ">
        <ul class="nav nav-pills  nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.account')}}" class="nav-link {{ request()->routeIs('admin.account') ? 'active' : '' }}">
              <i class="nav-icon fas fa fa-user"></i>
              <p>
              Account
              </p>
            </a>
          </li>

          <li class="nav-item">
                <a href="#" class="nav-link {{ request()->routeIs('#') ? 'active' : '' }}" >
                  <i class="nav-icon fa fa-ticket-alt "></i>
                  Bookings
                </a>
              </li>

          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->routeIs('#') ? 'active' : '' }}">
              <i class="nav-icon fa fa-users "></i>
              <p>
              Users
              </p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.custodians')}}" class="nav-link {{ request()->routeIs('admin.custodians') ? 'active' : '' }}">
                  <i class="far fa-user nav-icon"></i>
                  <p>Custodians</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ request()->routeIs('#') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Students</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.hostels')}}" class="nav-link {{ request()->routeIs('admin.hostels') ? 'active' : '' }}">
              <i class="nav-icon fa fa-home"></i>
              <p>
              Hostels
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" class="nav-link {{ request()->routeIs('logout') ? 'active' : '' }}">
              <i class="nav-icon fa fa-window-close "></i>
              <p>
              Logout
              </p>
            </a>
          </li>

        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>