<link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<!-- Other CSS files -->
<div class="page-wrapper default-version">

    <div class="sidebar bg--dark">
        <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
        <div class="sidebar__inner">

            <div class="sidebar__logo"
            style="text-align: center; display: flex; flex-direction: column; align-items: center;">
           <img src="proofs/GDR.png" alt="Logo"
                style="border-radius: 0; width: 100px; height: 100px;
                       filter: drop-shadow(0 0 30px rgba(0, 127, 255, 1));">
           <h3 style="margin-top: 10px; color: #1F8FFF;"><b>ADMIN</b></h3>
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
                                        <i class="fa fa-dot-circle menu-icon"></i>
                                        <span class="menu-title">Branch Employee</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item <?php echo $currentPage == 'branchmanager' ? 'active' : ''; ?>">
                                    <a href="branchmanager" class="nav-link">
                                        <i class="fa fa-dot-circle menu-icon"></i>
                                        <span class="menu-title">Branch Manager</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item <?php echo $currentPage == 'branchincome' ? 'active' : ''; ?>">
                                    <a href="branchincome" class="nav-link">
                                        <i class="fa fa-dot-circle menu-icon"></i>
                                        <span class="menu-title">Branch Income</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-menu-item <?php echo $currentPage == 'addsubcon' ? 'active' : ''; ?>">
                        <a href="addsubcon" class="nav-link ">
                            <i class="fa fa-bus menu-icon"></i>
                            <span class="menu-title">Add Subcontractor</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item <?php echo $currentPage == 'add-driver' ? 'active' : ''; ?>">
                        <a href="add-driver" class="nav-link ">
                            <i class="fa fa-user menu-icon"></i>
                            <span class="menu-title">Manage Driver</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item <?php echo $currentPage == 'addtruck' ? 'active' : ''; ?>">
                        <a href="addtruck" class="nav-link ">
                            <i class="fa fa-bus menu-icon"></i>
                            <span class="menu-title">Add Vehicle</span>
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

                            <span class="menu-title">Customer Feedback</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="version-info text-center text-uppercase">
                <span class="text--primary">Infinitech Advertising Corporation</span>
                <span class="text--success">V1.1 </span>
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
