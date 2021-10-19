<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Dashboard Petugas') ? 'active' : ' ' }}" aria-current="page" href="#">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Order') ? 'active' : ' ' }}" href="/order">
            <span data-feather="file"></span>
            Orders
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Daftar Buku' || $title === 'Kategori') ? 'active' : ' ' }}">
            <span data-feather="book"></span>
            Daftar Buku
          </a>
          <ul>
            <li class="nav-item">
              <a class="nav-link {{ ($title === 'Kategori' || $title === 'Tambah Kategori') ? 'active' : ' ' }}" href="/buku/kategori">
                <span data-feather="book"></span>
                Kategori
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === 'Daftar Buku' || $title === 'Tambah Buku') ? 'active' : ' ' }}" href="/buku">
                <span data-feather="book"></span>
                Buku
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Data Pelanggan') ? 'active' : ' ' }}" href="/customer">
            <span data-feather="users"></span>
            Data Pelanggan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Laporan Petugas') ? 'active' : ' ' }}" href="#">
            <span data-feather="bar-chart-2"></span>
            Laporan
          </a>
        </li>
      </ul>
    </div>
  </nav>
