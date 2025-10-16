<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm border-bottom">
  <div class="container">
    <a class="navbar-brand fw-bold text-success" href="#">
      Tugas Web Lanjut
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <!-- Menu Create User -->
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('user.create') ? 'active fw-bold text-success' : 'text-dark' }}" 
             href="{{ route('user.create') }}">
            Create User
          </a>
        </li>

        <!-- Menu List User -->
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('user.index') ? 'active fw-bold text-success' : 'text-dark' }}" 
             href="{{ route('user.index') }}">
            List User
          </a>
        </li>

        <!-- Menu Daftar Mata Kuliah -->
        <li class="nav-item">
          <a class="nav-link {{ request()->is('matakuliah') ? 'active fw-bold text-success' : 'text-dark' }}" 
             href="{{ url('/matakuliah') }}">
            Daftar Mata Kuliah
          </a>
        </li>

        <!-- Menu Tambah Mata Kuliah -->
        <li class="nav-item">
          <a class="nav-link {{ request()->is('matakuliah/create') ? 'active fw-bold text-success' : 'text-dark' }}" 
             href="{{ url('/matakuliah/create') }}">
            Tambah Mata Kuliah
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
