<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-text mx-3">Paradise Island System</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-1">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider my-1">
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('cottage') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Cottage and Lodge Rent</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('customer') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Customer's Info</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('rental') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Rental Info</span></a>
  </li>


</br>
  <!-- Divider -->
  <hr class="sidebar-divider my-1">

  @if (auth()->user()->role == 'Admin')
  <li class="nav-item">
    <a class="nav-link" href="{{ route('admin') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Users</span></a>
  </li>
  @endif
  
  <li class="nav-item">
    <a class="nav-link" href="/profile">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Profile</span></a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>