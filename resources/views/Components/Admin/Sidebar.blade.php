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
                    <h3 style="color: #223d54;"><b>ADMIN</b></h3>

                </div>
            </div>


            <?php
            $currentPage = basename($_SERVER['REQUEST_URI']);
            ?>
            <div class="sidebar__menu-wrapper">
                <ul class="sidebar__menu">
                    <li class="sidebar-menu-item <?php echo $currentPage == 'admindash' ? 'active' : ''; ?>">
                        <a href="admindash" class="nav-link ">
                            <i class="fa fa-home menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <!-- <li class="sidebar-menu-item ">
            <a href="map" class="nav-link ">
            <i class="fa fa-map menu-icon"></i>
                <span class="menu-title">Map</span>
            </a>
        </li> -->
                    <li class="sidebar-menu-item <?php echo $currentPage == 'salary' ? 'active' : ''; ?>">
                        <a href="salary" class="nav-link ">
                            <i class="fa fa-dollar menu-icon"></i>
                            <span class="menu-title">Driver Salary</span>
                        </a>
                    </li>
                    <!-- <li class="sidebar-menu-item ">
            <a href="adminside" class="nav-link ">
            <i class="fa fa-users menu-icon"></i>
                <span class="menu-title">Admin</span>
            </a>
        </li> -->
                    <!-- <li class="sidebar-menu-item ">
            <a href="waybill" class="nav-link ">
            <i class="fa fa-receipt menu-icon"></i>
                <span class="menu-title">Waybill</span>
            </a>
        </li> -->
                    <li class="sidebar-menu-item <?php echo $currentPage == 'reference' ? 'active' : ''; ?>">
                        <a href="reference" class="nav-link ">
                            <i class="fa fa-receipt menu-icon"></i>
                            <span class="menu-title">Booking Form</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item <?php echo $currentPage == 'rubix_details' ? 'active' : ''; ?>">
                        <a href="rubix_details" class="nav-link ">
                            <i class="fa fa-info menu-icon"></i>
                            <span class="menu-title">Waybill Details</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item sidebar-dropdown <?php echo in_array($currentPage, ['managebranch', 'branchmanager', 'branchincome']) ? 'active' : ''; ?>">
                        <a href="javascript:void(0)" class="">
                            <i class="fa fa-code-branch menu-icon"></i>
                            <span class="menu-title">Branch Control</span>
                        </a>
                        <div class="sidebar-submenu  ">
                            <ul>
                                <li class="sidebar-menu-item <?php echo $currentPage == 'managebranch' ? 'active' : ''; ?>">
                                    <a href="employee-details" class="nav-link">
                                        <i class="fa-solid fa-user-tie"></i>
                                        <span class="menu-title" style = "padding-left: 17px">Branch Employee</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item <?php echo $currentPage == 'create-driver' ? 'active' : ''; ?>">
                                    <a href="create-driver" class="nav-link">
                                        <i class="fa-solid fa-users-gear"></i>
                                        <span class="menu-title" style = "padding-left: 17px">Add Driver</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-menu-item <?php echo $currentPage == 'addsubcon' ? 'active' : ''; ?>">
                        <a href="addsubcon" class="nav-link ">
                            <i class="fa-solid fa-users"></i>
                            <span class="menu-title" style = "padding-left: 17px">Add Subcontractor</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item <?php echo $currentPage == 'add-driver' ? 'active' : ''; ?>">
                        <a href="add-driver" class="nav-link ">
                            <i class="fa-solid fa-id-card"></i>
                            <span class="menu-title" style = "padding-left: 17px">Manage Driver</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item <?php echo $currentPage == 'addtruck' ? 'active' : ''; ?>">
                        <a href="addtruck" class="nav-link ">
                            <i class="fa-solid fa-truck-monster"></i>
                            <span class="menu-title" style = "padding-left: 17px">Add Vehicle</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item <?php echo $currentPage == 'driverbooking-count' ? 'active' : ''; ?>">
                        <a href="driverbooking-count" class="nav-link ">
                            <i class="fa-solid fa-truck"></i>
                            <span class="menu-title" style = "padding-left: 17px">Bookings Per Driver</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item <?php echo $currentPage == 'plate-number-counts' ? 'active' : ''; ?>">
                        <a href="plate-number-counts" class="nav-link ">
                            <i class="fa fa-bus menu-icon"></i>
                            <span class="menu-title">Bookings Per Plate No.</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item <?php echo $currentPage == 'preventive-maintenance' ? 'active' : ''; ?>">
                        <a href="preventive-maintenance" class="nav-link ">
                            <i class="fa fa-wrench menu-icon"></i>

                            <span class="menu-title">Preventive Maintenance</span>
                        </a>
                    </li>

                    <li class="sidebar-menu-item <?php echo $currentPage == 'feedback' ? 'active' : ''; ?>">
                        <a href="feedback" class="nav-link ">
                            <i class="fas fa-message"></i>
                            <span class="menu-title" style = "padding-left: 17px">Customer Feedback</span>
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
