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
                    <h5 style="color: #223d54;"><b>ACCOUNTING</b></h5>

                </div>
            </div>


            <div class="sidebar__menu-wrapper">
                <ul class="sidebar__menu">
                    <li class="sidebar-menu-item active">
                        <a href="accountingdash" class="nav-link">
                            <i class="fas fa-tachometer-alt menu-icon"></i> <!-- Dashboard icon -->
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <!-- Updated Dropdown Menu for ManageReport -->
                    <li class="sidebar-menu-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="manageReportDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-chart-bar menu-icon"></i> <!-- Reports icon -->
                            <span class="menu-title">In House Reports</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="manageReportDropdown">
                            <li><a class="dropdown-item" href="rate-per-mile">Per Trip</a></li>
                            <li><a class="dropdown-item" href="rate-per-month">Per Month</a></li>
                            <li><a class="dropdown-item" href="rate-per-year">Per Year</a></li>
                        </ul>
                    </li>

                    <!-- Other Menu Items -->
                    <li class="sidebar-menu-item">
                        <a href="account-accounting" class="nav-link">
                            <i class="fas fa-user-cog menu-icon"></i> <!-- Accounts icon -->
                            <span class="menu-title">Accounts</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="loanamount" class="nav-link">
                            <i class="fas fa-money-bill-wave menu-icon"></i> <!-- Loan icon -->
                            <span class="menu-title">Consign</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="accounting-pms" class="nav-link">
                            <i class="fas fa-cogs menu-icon"></i> <!-- PMS icon -->
                            <span class="menu-title">PMS</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="calendar-acc" class="nav-link">
                            <i class="fas fa-calendar-alt menu-icon"></i> <!-- Calendar icon -->
                            <span class="menu-title">Calendar</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="requestbudget" class="nav-link">
                            <i class="fas fa-dollar-sign menu-icon"></i> <!-- Budget icon -->
                            <span class="menu-title">Request Budget</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="GDRAccounting" class="nav-link">
                            <i class="fas fa-file-invoice menu-icon"></i> <!-- GDR Account icon -->
                            <span class="menu-title">GDR ACCOUNT</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="receivable" class="nav-link">
                            <i class="fas fa-dollar-sign menu-icon"></i> <!-- Budget icon -->
                            <span class="menu-title">Receivable</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="financialreport" class="nav-link">
                            <i class="fas fa-file-alt menu-icon"></i> <!-- Financial Report icon -->
                            <span class="menu-title">Financial Report</span>
                        </a>
                    </li>




                </ul>
            </div>

        </div>
    </div>


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
