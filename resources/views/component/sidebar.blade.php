 <div>
        <div class="brand-logo shadow d-flex align-items-center justify-content-between" >
          <a href="./index.html" class="text-nowrap fs-5" style="font-family: italic">
            <img src="{{ asset('image/logo.jpeg') }}" width="50" class="rounded-circle" alt=""> 
            <b class="text-dark mx-2" style="font-size: 1.5rem;">E-DESA LG</b>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link {{ $menu == 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link {{ $menu == 'kepalarumah' ? 'active' : '' }}" href="{{ route('kepalaRumah/kepalarumah') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-users"></i>
                </span>
                <span class="hide-menu">Kepala Rumah</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Bantuan Sosial</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link {{ $menu == 'bansos' ? 'active' : '' }}" href="{{ route('bansos') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-shopping-cart"></i>
                </span>
                <span class="hide-menu">Data Bansos</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>