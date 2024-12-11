<nav class="main-nav--bg">
    <div class="main-nav">
        <div class="main-nav-start">
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                        fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                    </svg>
                </span>
            </button>
        </div>
        <div class="main-nav-end">
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle--gray" aria-hidden="true"></span>
            </button>
            <div class="notification-wrapper">
                <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
                    <span class="sr-only">To messages</span>
                    <span class="icon notification active" aria-hidden="true">
                        <img src="{{ asset('assets/img/svg/Bulk/Notification-gray.svg') }}" alt="">
                    </span>
                </button>
                <ul class="users-item-dropdown notification-dropdown dropdown">
                    <li>
                        <a href="##">
                            <div class="notification-dropdown-icon info">
                                <i data-feather="check"></i>
                            </div>
                            <div class="notification-dropdown-text">
                                <span class="notification-dropdown__title">Notifikasi Sukses</span>
                                <span class="notification-dropdown__subtitle">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, ea.
                                </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="link-to-page" href="##">Ke Halaman Notifikasi</a>
                    </li>
                </ul>
            </div>
            <div class="nav-user-wrapper">
                <button href="##" class="nav-user-btn dropdown-btn" title="My profile"
                    type="button">
                    <span class="sr-only">Profile</span>
                    <span class="nav-user-img">
                        <picture>
                            <source srcset="{{ asset('assets/img/avatar/avatar-illustrated-03.webp') }}"
                                type="image/webp">
                            <img src="{{ asset('assets/img/avatar/avatar-illustrated-03.png') }}" alt="User name"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </picture>
                    </span>
                </button>
                <ul class="users-item-dropdown nav-user-dropdown dropdown">
                    <li><a href="##">
                            <i data-feather="user" aria-hidden="true"></i>
                            <span>Profile</span>
                        </a></li>
                    <li><a class="danger" href="##">
                            <i data-feather="log-out" aria-hidden="true"></i>
                            <span>Keluar</span>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
