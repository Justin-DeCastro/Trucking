<style>
    .wrapper {
        position: fixed;
        right: 20px;
        /* Positioned 20px from the right edge */
        top: 50%;
        /* Positioned 50% from the top of the viewport */
        transform: translateY(-50%);
        /* Center vertically */
        z-index: 1000;
    }

    .wrapper a:nth-child(1) {
        background-color: #3b5998;
        /* Facebook Blue */
    }

    .wrapper a:nth-child(2) {
        background-color: #1da1f2;
        /* Twitter Blue */
    }

    .wrapper a:nth-child(3) {
        background-color: #0077b5;
        /* LinkedIn Blue */
    }

    .wrapper a:nth-child(4) {
        background-color: #F72659;
        /* Instagram Purple */
    }

    .wrapper a:nth-child(3) {
        animation: 0.7s ease-out 0s 1 FadeIn;
        transition: all 0.3s;
    }

    .wrapper a:hover:nth-child(3) {
        background-color: #ff0000;
        /* Red on hover */
    }

    @keyframes FadeIn {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .social {
        height: 60px;
        /* Adjusted size for better visibility */
        width: 60px;
        padding: 10px;
        display: flex;
        flex-direction: row;
        border-radius: 50%;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        color: #fff;
        margin: 5px;
        /* Increased margin for spacing */
        font-size: 20px;
        /* Adjust font size */
    }

    .navbar-hidden {
        transform: translateY(-100%);
        transition: transform 0.3s ease;
    }


    /* Style for navbar content inside SVG */
    .navbar-content {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        padding: 0 30px;
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .navbar-visible {
        transform: translateY(0);
        opacity: 1;
    }

    /* Logo Styling */
    .navbar-brand.logo img {
        width: 100px;
        height: 50px;
    }

    /* Adjust button and menu styles as needed */
    .navbar-toggler.header-button {
        margin: 0;
    }

    /* Navbar collapse style */
    .navbar-collapse {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-end;
    }

    /* Navbar item style */
    .nav-menu .nav-item {
        margin-left: 20px;
    }

    /* Adjust font size for navbar links */
    .nav-menu .nav-link {
        font-size: 14px;
        /* Reduced font size */
    }

    /* Style for profile image */
    .nav-link.dropdown-toggle .profile-image {
        width: 40px;
        /* Adjust the size as needed */
        height: 40px;
        border-radius: 50%;
        /* Make the image circular */
        object-fit: cover;
        /* Maintain aspect ratio */
    }

    /* Style for the dropdown menu */
    .nav-item.dropdown .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        right: 0;
        z-index: 1000;
        margin: 0;
        padding: 0.5rem 0;
        list-style: none;
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
    }

    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: 0.25rem 1.5rem;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        background-color: transparent;
        border: 0;
        transition: background-color 0.15s ease-in-out, color 0.15s ease-in-out;
    }

    .dropdown-item:hover {
        background-color: #f8f9fa;
        color: #16181b;
    }

    
</style>
<header class="header" id="header">
    <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light">
            <span class="img">
                <img src="Home/navbar2.png" alt="foot" style="width: 100vw; height: auto; object-fit: cover;">
            </span>

            <div class="navbar-content">
                <a class="navbar-brand logo" href="/">
                    <img src="Home/GDR Logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler header-button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" type="button" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span id="hiddenNav"><i class="fas fa-bars" style ="font-size:30px; color: #1F8FFF"></i></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-menu align-items-lg-center ms-auto">
                        <!-- Existing menu items -->
                        <li class="nav-item d-block d-lg-none">
                            <div class="top-button d-flex justify-content-between align-items-center flex-wrap">

                                <a class="nav-button flex-align btn btn--base"
                                    href="https://script.viserlab.com/courierlab/demo/order-tracking"
                                    aria-current="page">
                                    <span class="icon"><i class="icon-Product-Box"></i></span>
                                    Order Tracking
                                </a>
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
                        <!-- Uncomment if needed
                            <li class="nav-item {{ Request::is('team') ? 'active' : '' }}">
                                <a class="nav-link" href="team" aria-current="page">Team</a>
                            </li>
                            <li class="nav-item {{ Request::is('blog') ? 'active' : '' }}">
                                <a class="nav-link" href="blog" aria-current="page">Blog</a>
                            </li>
                            -->
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
                        <!-- Profile item with dropdown -->
                        <li class="nav-item dropdown {{ Request::is('login') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="Home/user-avatar-male-5.png" alt="Profile" class="profile-image">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                <li>
                                    <a class="dropdown-item login-button" href="login">Login</a>
                                </li>
                                {{-- <li><a class="dropdown-item" href="register">Register</a></li> --}}
                                <!-- Add more items if needed -->
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
            </foreignObject>
            </svg>
        </nav>
    </div>
</header>
<div class="wrapper">
    <a class="social" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
    <a class="social" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
    <a class="social" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    <a class="social" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const currentLocation = window.location.pathname;
        const menuItems = document.querySelectorAll('.nav-item a');

        menuItems.forEach(menuItem => {
            if (menuItem.getAttribute('href') === currentLocation) {
                menuItem.parentElement.classList.add('active');
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar-content');
        let lastScrollTop = 0;
        let isScrolling;

        window.addEventListener('scroll', function() {
            if (isScrolling) {
                window.clearTimeout(isScrolling);
            }

            isScrolling = setTimeout(function() {
                const currentScrollTop = window.pageYOffset || document.documentElement
                    .scrollTop;

                if (currentScrollTop > lastScrollTop) {
                    // Scrolling down
                    navbar.classList.remove('navbar-visible');
                    navbar.classList.add('navbar-hidden');
                } else if (currentScrollTop === 0) {
                    // Scrolled to the top
                    navbar.classList.remove('navbar-hidden');
                    navbar.classList.add('navbar-visible');
                }

                lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop;
            }, 100);
        });

        // Initially ensure the navbar is visible when the page loads at the top
        navbar.classList.add('navbar-visible');
    });
</script>
