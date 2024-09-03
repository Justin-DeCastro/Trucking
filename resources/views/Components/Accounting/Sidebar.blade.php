<div class="sidebar bg--dark">
    <button class="res-sidebar-close-btn"><i class="fas fa-times"></i></button>
    <div class="sidebar__inner">
        <div class="sidebar__logo"
            style="text-align: center; display: flex; flex-direction: column; align-items: center;">
           <img src="proofs/GDR.png" alt="Logo"
                style="border-radius: 0; width: 100px; height: 100px;
                       filter: drop-shadow(0 0 30px rgba(0, 127, 255, 1));">
           <h3 style="margin-top: 10px; color: #1F8FFF;"><b>ADMIN</b></h3>
       </div>


        <div class="sidebar__menu-wrapper">
            <ul class="sidebar__menu">
                <li class="sidebar-menu-item active">
                    <a href="accountingdash" class="nav-link">
                        <i class="fas fa-home menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>

                <!-- Updated Dropdown Menu for ManageReport -->
                <li class="sidebar-menu-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="manageReportDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-chart-line menu-icon"></i>
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
                        <i class="fas fa-user menu-icon"></i>
                        <span class="menu-title">Accounts</span>
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="loanamount" class="nav-link">
                        <i class="fas fa-user menu-icon"></i>
                        <span class="menu-title">Loan</span>
                    </a>
                </li>


            </ul>
        </div>
        <div class="version-info text-center text-uppercase">
            <span class="text--primary">Infinitech Advertising</span>
            <span class="text--success">V1.1</span>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
