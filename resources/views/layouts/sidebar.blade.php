 <!-- Sidebar Menu -->
 <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item has-treeview menu-open">
        <a href="{{ url('/') }}" class="nav-link" target="_blank">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Frontend Page
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
      </li>


      <li class="nav-item has-treeview menu-open">
        <a href="{{ route('home') }}" class="nav-link @yield('dashboard')">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('getcoupon.index') }}" class="nav-link @yield('getcoupon')">
          <i class="nav-icon fas fa-th"></i>
          <p>
            GetCoupon
          </p>
        </a>
      </li>


      <li class="nav-item">
        <a href="{{ route('contact.index') }}" class="nav-link @yield('contact')">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Contact
          </p>
        </a>
      </li>



      <li class="nav-item">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="nav-link">
            <div class="br-menu-item">
              <i class="icon ion-power"></i> 
              <span class="menu-item-label">Sign Out</span>
            </div><!-- menu-item -->
          </a><!-- br-menu-link -->
          <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
          </form>
      </li>




     



    </ul>
  </nav>
  <!-- /.sidebar-menu -->