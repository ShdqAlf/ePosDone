<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            <img src="{{ asset('assets/img/logoPos.png') }}" alt="" class="img-fluid mt-2 mb-2" width="100px">
        </a>
        <div class="sidebar-toggler">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav" id="sidebarNav">
            <li class="nav-item mb-3 mt-3">
                <a href="{{ route('dashboard.admin') }}" class="nav-link">
                    <i class="link-icon" data-feather="grid"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mb-3">
                <a class="nav-link" data-bs-toggle="collapse" href="#masterData" role="button" aria-expanded="false"
                    aria-controls="masterData">
                    <i class="link-icon" data-feather="folder"></i>
                    <span class="link-title">Mster Data</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" data-bs-parent="#sidebarNav" id="masterData">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('kelolauser') }}" class="nav-link">Data User</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Data Item</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Data Supplier</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Data Pelanggan</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Data Pendukung</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#settings" role="button" aria-expanded="false"
                    aria-controls="settings">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Pengaturan</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" data-bs-parent="#sidebarNav" id="settings">
                    <ul class="nav sub-menu">
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
