<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link ms-2 active" href="/home/mahasiswa/dashboard">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ms-2" href="/home/mahasiswa/dispensasi">Dispensasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ms-2" href="/home/mahasiswa/beasiswa">Beasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ms-2" href="/home/mahasiswa/pkm">PKM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ms-2" href="/home/mahasiswa/kkm">KKM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ms-2" data-bs-toggle="modal" data-bs-target="#profile"  href="profile">Profile</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                {{ $module }}
            </li>
        </ul>
      </div>
    </div>
  </nav>