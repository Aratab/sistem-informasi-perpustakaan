<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Dashboard Anggota') ? 'active' : ' ' }}" aria-current="page" href="/anggota/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Orders Anggota') ? 'active' : ' ' }}" href="/order">
            <span data-feather="file"></span>
            Orders
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Laporan Anggota') ? 'active' : ' ' }}" href="#">
            <span data-feather="bar-chart-2"></span>
            Laporan
          </a>
        </li>
      </ul>
    </div>
  </nav>
