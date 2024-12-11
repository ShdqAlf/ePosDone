<aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon" style="padding: 0 30px;" aria-hidden="true">
                    <img src="{{ asset('assets/img/logoPos.png') }}" alt="" width="100%" height="100%">
                </span>
            </a>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="/">
                        <span class="icon" aria-hidden="true">
                            <img src="{{ asset('assets/img/svg/icon/menu.svg') }}" alt="">
                        </span>
                        <span class="mt-1">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon user-3" aria-hidden="true">
                            <img src="{{ asset('assets/img/svg/icon/setting.svg') }}" alt="">
                        </span>
                        <span class="mt-1">Settings</span>
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="{{ route('kelolauser') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="4" fill="#0B2447" />
                                </svg>
                                Kelola User
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</aside>
