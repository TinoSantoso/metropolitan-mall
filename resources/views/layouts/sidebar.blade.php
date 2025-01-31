<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #38877f;"  id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="far fa-address-book"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Mall Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('tenant')}}">
        <i class="fas fa-user-friends"></i>
        <span>Tenant</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('promo')}}">
        <i class="fas fa-user-friends"></i>
        <span>Events & Promotions</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('news')}}">
        <i class="fas fa-user-friends"></i>
        <span>Article</span></a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="{{ route('magazines') }}">
        <i class="fas fa-user-friends"></i>
        <span>Magazines</span>
    </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/profile">
        <i class="fas fa-user-circle"></i>
        <span>Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


  </ul>
