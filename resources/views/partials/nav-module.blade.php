<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link ms-2 {{ $module == 'Dashboard Mahasiswa' ? 'active' : '' }}"
                        href="/home/mahasiswa/dashboard">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-2 {{ $module == 'History Dispensasi' ? 'active' : '' }}"
                        href="/home/mahasiswa/dispensasi">Dispensasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-2 {{ $module == 'History Beasiswa' ? 'active' : '' }}"
                        href="/home/mahasiswa/beasiswa">Beasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-2 {{ $module == 'PKM' ? 'active' : '' }}" href="/home/mahasiswa/pkm">PKM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-2 {{ $module == 'Kredit Keaktifan Mahasiswa' ? 'active' : '' }}"
                        href="/home/mahasiswa/kkm">KKM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-2 " data-bs-toggle="modal" data-bs-target="#profile"
                        href="profile" id="profileAccount">Profile</a>
                </li>
            </ul>
            
        </div>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
              {{ $module }}
          </li>
      </ul>
    </div>
</nav>
