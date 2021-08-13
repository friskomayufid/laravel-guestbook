<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('index') }}">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item nav-category">Eksport Data</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-floor-plan"></i>
        <span class="menu-title">Excel</span>
        <i class="menu-arrow"></i> 
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item nav-category">Form</li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('guest') }}" aria-controls="form-elements">
        <i class="menu-icon mdi mdi-card-text-outline"></i>
        <span class="menu-title">Buat Kunjungan</span>
      </a>
    </li>
    <li class="nav-item">
      <form action="{{ route('logout')}}" method="post">
        @csrf
        <button type="submit" class="nav-link" style="border: none; background: no-repeat;">
          <i class="menu-icon mdi mdi-power"></i>
          <span class="menu-title">Logout</span>
        </a>
      </form>
    </li>
  </ul>
</nav>