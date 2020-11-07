 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="{{ asset('theme/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('theme/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/services/daily" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Sales Record</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/services/expense/daily" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Expenses Record</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/services/report/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sales & Expenses
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/services/report/commission" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Commission
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/services" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Services Offered
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/services/staff" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service Staff
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/services/assign" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service Assignment
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/services/expense" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Expense Items
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"
            onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
              <i class="fas fa-power-off nav-icon"></i>
              <p>Sign out</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>