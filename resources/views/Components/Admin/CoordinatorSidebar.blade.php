<link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .logo-container {
        position: relative;
        display: inline-block;
    }

    .logo-container::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 90%;
        background: linear-gradient(to top, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
        filter: blur(15px);
        z-index: -1;

    }

    .logo {
        border-radius: 0;
        width: 70%;
        height: 60px;
        position: relative;
        z-index: 1;
    }

    .res-sidebar-close-btn {
        background-color: transparent;
        border: none;
        color: #fff;
        font-size: 24px;
        cursor: pointer;
        padding: 10px;
        position: absolute;
        top: 15px;
        right: 15px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .res-sidebar-close-btn:hover {
        background-color: rgba(255, 255, 255, 0.2);
        color: #ff6b6b;
    }

    .res-sidebar-close-btn:focus {
        outline: none;
        box-shadow: 0 0 0 4px rgba(255, 107, 107, 0.4);
    }
</style>

<!-- Other CSS files -->
<div class="page-wrapper default-version">

    <div class="sidebar bg--dark">
        <button class="res-sidebar-close-btn">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div class="sidebar__inner">

            <div class="logo-container">
                <div class="sidebar__logo"
                    style="text-align: center; display: flex; flex-direction: column; align-items: center;">
                    <img src="Home/GDR logo.png" alt="Logo" class="logo">
                    <h5 style="color: #223d54;"><b>COORDINATOR</b></h5>
                </div>
            </div>

            <?php
            $currentPage = basename($_SERVER['REQUEST_URI']);
            ?>
            <div class="sidebar__menu-wrapper">
                <ul class="sidebar__menu">
                    <li class="sidebar-menu-item <?php echo $currentPage == 'coordinatordash' ? 'active' : ''; ?>">
                        <a href="coordinatordash" class="nav-link ">
                            <i class="fa fa-home menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-menu-item <?php echo $currentPage == 'reference' ? 'active' : ''; ?>">
                        <a href="reference-form" class="nav-link ">
                            <i class="fa fa-receipt menu-icon"></i>
                            <span class="menu-title">Booking Form</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item <?php echo $currentPage == 'rubix_details' ? 'active' : ''; ?>">
                        <a href="booking_details" class="nav-link ">
                            <i class="fa fa-info menu-icon"></i>
                            <span class="menu-title">Booking History</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item <?php echo $currentPage == 'rubix_details' ? 'active' : ''; ?>">
                        <a href="trips-get" class="nav-link ">
                            <i class="fa fa-info menu-icon"></i>
                            <span class="menu-title">POD Returned</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item <?php echo $currentPage == 'rubix_details' ? 'active' : ''; ?>">
                        <a href="coordinatorReturnItems" class="nav-link ">
                            <i class="fa fa-info menu-icon"></i>
                            <span class="menu-title">Return Items</span>
                        </a>
                    </li>



                </ul>
            </div>


        </div>
    </div>
    <!-- sidebar end -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the current page URL
            var currentUrl = window.location.pathname.split("/").pop();

            // Select all menu items
            var menuItems = document.querySelectorAll(".sidebar-menu-item a");

            menuItems.forEach(function(item) {
                var link = item.getAttribute("href");

                // Check if the href matches the current URL
                if (link === currentUrl) {
                    item.parentElement.classList.add("active");
                }
            });
        });
    </script>
