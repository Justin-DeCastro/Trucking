<div class="sidebar bg--dark">
    <button class="res-sidebar-close-btn"><i class="fas fa-times"></i></button>
    <div class="sidebar__inner">
        <div class="sidebar__logo">
            <a href="https://script.viserlab.com/courierlab/demo/staff/dashboard" class="sidebar__main-logo">
                <img src="https://script.viserlab.com/courierlab/demo/assets/images/logo_icon/logo.png" alt="image">
            </a>
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
                        <span class="menu-title">Manage Report</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="manageReportDropdown">
                        <li><a class="dropdown-item" href="depositamount">IN/OUT</a></li>
                        <li><a class="dropdown-item" href="loanamount">Loan</a></li>
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
                    <a href="sendcourier" class="nav-link">
                        <i class="fas fa-shipping-fast menu-icon"></i>
                        <span class="menu-title">Send Courier</span>
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="sentInQueue" class="nav-link">
                        <i class="fas fa-hourglass-start menu-icon"></i>
                        <span class="menu-title">Sent In Queue</span>
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="shippingcourier" class="nav-link">
                        <i class="fas fa-sync menu-icon"></i>
                        <span class="menu-title">Shipping Courier</span>
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="deliveryqueue" class="nav-link">
                        <i class="fas fa-accessible-icon menu-icon"></i>
                        <span class="menu-title">Delivery In Queue</span>
                    </a>
                </li>
                <li class="sidebar-menu-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="manageCourierDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-sliders-h menu-icon"></i>
                        <span class="menu-title">Manage Courier</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="manageCourierDropdown">
                        <li><a class="dropdown-item" href="totalsent">
                            <i class="fas fa-dot-circle menu-icon"></i>
                            <span class="menu-title">Total Sent</span>
                        </a></li>
                        <li><a class="dropdown-item" href="totaldelivered">
                            <i class="fas fa-dot-circle menu-icon"></i>
                            <span class="menu-title">Total Delivered</span>
                        </a></li>
                        <li><a class="dropdown-item" href="allcourier">
                            <i class="fas fa-dot-circle menu-icon"></i>
                            <span class="menu-title">All Courier</span>
                        </a></li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a href="branchlist" class="nav-link">
                        <i class="fas fa-university menu-icon"></i>
                        <span class="menu-title">Branch List</span>
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="cashcollection" class="nav-link">
                        <i class="fas fa-wallet menu-icon"></i>
                        <span class="menu-title">Cash Collection</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="version-info text-center text-uppercase">
            <span class="text--primary">courierlab</span>
            <span class="text--success">V3.0</span>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
