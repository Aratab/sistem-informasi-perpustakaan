<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Petugas") ? 'active' : ''}} " aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file"></span>
            Orders
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Daftar Buku") ? 'active' : ''}} " href="/dashboard/book">
            <span data-feather="shopping-cart"></span>
            Daftar Buku
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Data Pelanggan") ? 'active' : ''}} {{ ($title === "Tambah Pelanggan") ? 'active' : ''}}" href="/dashboard/customer">
            <span data-feather="users"></span>
            Data Pelanggan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="bar-chart-2"></span>
            Laporan
          </a>
        </li>
      </ul>
    </div>
  </nav>