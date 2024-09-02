<nav class="navbar-wrapper bg--dark d-flex flex-wrap">

    <div class="navbar__right">
        <ul class="navbar__action-list">



            <li class="dropdown d-flex profile-dropdown">
                <button type="button" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="navbar-user">
                        <span class="navbar-user__thumb"><img
                                src="Home/user-avatar-male-5.png"
                                alt="image"></span>
                        <span class="navbar-user__info">
                            <span class="navbar-user__name">admin</span>
                        </span>
                        <span class="icon"><i class="fas fa-chevron-circle-down"></i></span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">

                    <a href="logout"
                        class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                        <i class="dropdown-menu__icon fas fa-sign-out-alt"></i>
                        <span class="dropdown-menu__caption">Logout</span>
                    </a>
                </div>
                <button type="button" class="breadcrumb-nav-open ms-2 d-none">
                    <i class="fas fa-sliders-h"></i>
                </button>
            </li>
        </ul>
    </div>
</nav>
