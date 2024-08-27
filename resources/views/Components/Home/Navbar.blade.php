<header class="header" id="header">
    <div class="container">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand logo" href="/">
                    <img src="Home/GDR_Logo.jpg" alt="Logo" style="border-radius: 50%; width: 80px; height: 90px;">
                </a>
                <button class="navbar-toggler header-button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" type="button" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span id="hiddenNav"><i class="las la-bars"></i></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-menu align-items-lg-center ms-auto">
                        <li class="nav-item d-block d-lg-none">
                            <div class="top-button d-flex justify-content-between align-items-center flex-wrap">
                                <div class="top-button d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="language-box">
                                        <div class="custom--dropdown">
                                            <div class="custom--dropdown__selected dropdown-list__item">
                                                <div class="thumb">
                                                    <img src="https://script.viserlab.com/courierlab/demo/placeholder-image/50x50"
                                                        alt="image">
                                                </div>
                                            </div>
                                            <ul class="dropdown-list">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <a class="nav-button flex-align btn btn--base"
                                    href="https://script.viserlab.com/courierlab/demo/order-tracking"
                                    aria-current="page">
                                    <span class="icon"><i class="icon-Product-Box"></i></span>
                                    Order Tracking </a>
                            </div>
                        </li>
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="/" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                            <a class="nav-link" href="about" aria-current="page">About</a>
                        </li>
                        <li class="nav-item {{ Request::is('service') ? 'active' : '' }}">
                            <a class="nav-link" href="service" aria-current="page">Service</a>
                        </li>
                        <li class="nav-item {{ Request::is('team') ? 'active' : '' }}">
                            <a class="nav-link" href="team" aria-current="page">Team</a>
                        </li>
                        <li class="nav-item {{ Request::is('blog') ? 'active' : '' }}">
                            <a class="nav-link" href="blog" aria-current="page">Blog</a>
                        </li>
                        <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>
                        <li class="nav-item {{ Request::is('appointment') ? 'active' : '' }}">
                            <a class="nav-link" href="appointment">Book Now</a>
                        </li>
                        <li class="nav-item d-lg-block d-none {{ Request::is('ordertracking') ? 'active' : '' }}">
                            <a class="nav-button flex-align btn btn--base" href="ordertracking" aria-current="page">
                                <span class="icon"><i class="icon-Product-Box"></i></span>
                                Order Tracking
                            </a>
                        </li>
                        <li class="nav-item d-lg-block d-none {{ Request::is('download') ? 'active' : '' }}">
                            <a class="nav-button flex-align btn btn--base" href="download" aria-current="page">
                                <span class="icon"><i class="icon-Product-Box"></i></span>
                                Download App
                            </a>
                        </li>

                    </ul>

                </div>
            </nav>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const currentLocation = window.location.pathname;
        const menuItems = document.querySelectorAll('.nav-item a');

        menuItems.forEach(menuItem => {
            if(menuItem.getAttribute('href') === currentLocation){
                menuItem.parentElement.classList.add('active');
            }
        });
    });
</script>

