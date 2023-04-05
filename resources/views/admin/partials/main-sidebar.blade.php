<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img
        src="{{ asset('admin/img/logoNguyen.jpg') }}"
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        style="opacity: 0.8"
      />
      <span class="brand-text font-weight-light">TRÍ VIỆT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img
            style="border-radius:50px;width:50px;margin-top:2vh"
            src="{{ asset('images/nhanvien').'/'.Auth::user()->avatar}}"
            alt="User Image"
          />
        </div>
        <div class="info">
          <a href="#" class="d-block" style="font-weight:700">{{Auth::user()->fullname}}</a> 
          <em href="#" class="d-block" style="color:white">{{Auth::user()->email}}</em> 
          <a class="btn btn-outline-warning" href="{{route('logout')}}">Logout</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input
            class="form-control form-control-sidebar"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul
          class="nav nav-pills nav-sidebar flex-column"
          data-widget="treeview"
          role="menu"
          data-accordion="false"
        >
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('admin.categories.index')}}" class="nav-link">
              <i class="nav-icon fas fa-mug-hot"></i>
              <p>
                Danh mục
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.products.index')}}" class="nav-link">
              <i class="nav-icon fas fa-solid fa-list"></i>
              <p>
                Sản phẩm
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.users.index')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Nhân viên
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>