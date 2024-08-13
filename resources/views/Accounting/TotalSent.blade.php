
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

@include('Components.Admin.Header')


<body>

        <div class="page-wrapper default-version">

        @include('Components.Accounting.Sidebar')

        <nav class="navbar-wrapper bg--dark d-flex flex-wrap">
    <div class="navbar__left">
        <button type="button" class="res-sidebar-open-btn me-3"><i class="las la-bars"></i></button>
        <form class="navbar-search">
            <input type="search" name="#0" class="navbar-search-field" id="searchInput" autocomplete="off"
                placeholder="Search here...">
            <i class="las la-search"></i>
            <ul class="search-list"></ul>
        </form>
    </div>
    <div class="navbar__right">
        <ul class="navbar__action-list">
            <li>
                <button type="button" class="primary--layer" data-bs-toggle="tooltip" data-bs-placement="bottom"
                    title="Visit Website">
                    <a href="https://script.viserlab.com/courierlab/demo" target="_blank"><i class="las la-globe"></i></a>
                </button>
            </li>
            <li class="dropdown d-flex profile-dropdown">
                <button type="button" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="navbar-user">
                        <span class="navbar-user__thumb"><img
                                src="https://script.viserlab.com/courierlab/demo/assets/images/user/profile/667fa67c7d5771719641724.png"
                                alt="image"></span>
                        <span class="navbar-user__info">
                            <span class="navbar-user__name">staff</span>
                        </span>
                        <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
                    <a href="https://script.viserlab.com/courierlab/demo/staff/profile"
                        class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                        <i class="dropdown-menu__icon las la-user-circle"></i>
                        <span class="dropdown-menu__caption">Profile</span>
                    </a>

                    <a href="https://script.viserlab.com/courierlab/demo/staff/password"
                        class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                        <i class="dropdown-menu__icon las la-key"></i>
                        <span class="dropdown-menu__caption">Password</span>
                    </a>

                    <a href="https://script.viserlab.com/courierlab/demo/staff/logout"
                        class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                        <i class="dropdown-menu__icon las la-sign-out-alt"></i>
                        <span class="dropdown-menu__caption">Logout</span>
                    </a>
                </div>
                <button type="button" class="breadcrumb-nav-open ms-2 d-none">
                    <i class="las la-sliders-h"></i>
                </button>
            </li>
        </ul>
    </div>
</nav>


        <div class="container-fluid px-3 px-sm-0">
            <div class="body-wrapper">
                <div class="bodywrapper__inner">

                    
                    <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
    <h6 class="page-title">Total Dispatch Courier</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            </div>
</div>

                        <div class="row">
        <div class="col-lg-12">
            <div class="show-filter mb-3 text-end">
                <button type="button" class="btn btn-outline--primary showFilterBtn btn-sm"><i class="las la-filter"></i>
                    Filter</button>
            </div>
            <div class="card responsive-filter-card  mb-3">
                <div class="card-body">
                    <form>
                        <div class="d-flex flex-wrap gap-4">
                            <div class="flex-grow-1">
                                <label>Search</label>
                                <input type="text" name="search" value="" class="form-control"
                                    placeholder="Order Number">
                            </div>
                                                        <div class="flex-grow-1">
                                <label>Date</label>
                                <input name="date" type="search"
                                    class="datepicker-here form-control bg--white pe-2 date-range"
                                    placeholder="Start Date - End Date" autocomplete="off" value="">
                            </div>
                            <div class="flex-grow-1 align-self-end">
                                <button class="btn btn--primary w-100 h-45"><i class="fas fa-filter"></i>
                                    Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card  ">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light style--two">
                            <thead>
                                <tr>
                                    <th>Sender Branch - Staff</th>
                                    <th>Receiver Branch - Staff</th>
                                    <th>Amount - Order Number</th>
                                    <th>Creations Date</th>
                                    <th>Estimate Delivery Date</th>
                                    <th>Payment Status</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    India
                                                                                            </span>
                                            <br>
                                                                                            FedEx Company
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $100.00
                                            </span>
                                            <span>JGQMZSFNUZNS</span>
                                        </td>
                                        <td>28 Jun 2024</td>
                                        <td>28 Jun 2024</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Delivery</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IjQ5cmVpNng2aEdRVFFqNlFOaGN5R2c9PSIsInZhbHVlIjoiOFlsdDlCQUd0ei96U05CV2ZXNkZjUT09IiwibWFjIjoiMmE1MTM1OTVkYjhhZGRhNTkyOGEyZmI3NWQxNDJmM2ViMTk5NDgxOGNhYzMwNzE5MzcwY2UxODE4OGVkMmE3MSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IjVHZkMxRXk5SFoyREFNYXlBcTJOeFE9PSIsInZhbHVlIjoieWVQalV0NStib2JRekZvZ2lpSTdzdz09IiwibWFjIjoiYjlkNzNhNDM2OWM0ZDM1MWYyYjM1ODAyZGNlMmExYWRkZjBhMmRlMmQ3M2E1M2NmYWM2M2E4MjVlYzM4NTJiYSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Curran
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $35.00
                                            </span>
                                            <span>C6P6CFUIFOUY</span>
                                        </td>
                                        <td>28 Jun 2024</td>
                                        <td>28 Jun 2024</td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                                                                                                                                <span class="badge badge--warning">Dispatch</span>
                                                                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IldhUGNBV2c4UXkyVTVrMFkzUHJ1L2c9PSIsInZhbHVlIjoiZjZxdmVLdU9MaVpPYnFVUnNubWMxdz09IiwibWFjIjoiOTUzZmMxNjY0ZmZkNzQwNDY2ZmIxMjJkMzkwODRmY2Q1NTg1ZDRlZmZmZDM3MDhmOTBlOTRjNzk4YTQ0Y2YyMSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6InZWaEpYQ2x3QUZPSzAvVW1jbU1JWGc9PSIsInZhbHVlIjoiT3BYcEVYcXlhT0MrRUhRR2J4SVlodz09IiwibWFjIjoiNTQ0YTU5ZTU2NjlhYzg1YzgzNDZjZDc2NmRhNzQ1NjFhODA3OGQzMTFmNmI3NzE5MjA0ZTYxZTE1YmNjMmQ3NiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    India
                                                                                            </span>
                                            <br>
                                                                                            FedEx Company
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $90.00
                                            </span>
                                            <span>PPK4LNPOZ38A</span>
                                        </td>
                                        <td>27 Jun 2024</td>
                                        <td>27 Jun 2024</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Delivery</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6InRTWDRXUWlBT2RsbllhSWI4YnBHaGc9PSIsInZhbHVlIjoiNjZxamRWNDRTdzd2aE8zWjZKaERSdz09IiwibWFjIjoiOGMyZmY3NDQwM2EwZWUwNDcwMDQ1ZGMyMGQ5OTBkZDdkOTM4NDgxOWE5NDIwMTE5YzUzYTg5NDkwZDc4MGU4YiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IlJtQXpqekhiYkl6U0J2UkRnRHJOdHc9PSIsInZhbHVlIjoiOGJpNXNzUmtLdE4zbm44bHZKb0xZdz09IiwibWFjIjoiNWM4ZmU3ZmQ4MWQwNzlkOTM4YjI4ODYzMTM3NTA2MGE0NTYxYzBiMzQ1ZTQ2ZjFjMmEwM2U1MjU2ZGVjZTdhNiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    India
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $580.00
                                            </span>
                                            <span>RU1QNW18SFUE</span>
                                        </td>
                                        <td>12 Jun 2024</td>
                                        <td>12 Jun 2024</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                                                                                <span class="badge badge--warning">Dispatch</span>
                                                                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6Ik9GTmFId21PM0JUWmg1MVIvcGxRemc9PSIsInZhbHVlIjoiQk81VWluRkxKT1VHR21RNk0rNERBUT09IiwibWFjIjoiZmYwOThjMDgxMzY4NDIxMjE5NDIzOTcyNTlhMTk2YmFlOWFlMzIxZjhlZWQ4OWZlYzUyY2QyZDZiYWUxYTcyYSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IkN6Qks1SUZlMVFJcWtOa1M1ZU5sb1E9PSIsInZhbHVlIjoiN0daVStaR2lUb0hUeTRITmx1ZXFTdz09IiwibWFjIjoiMzkzY2M2YjJmMjkzZmE2NmNjZjRhNDg0NDRhY2FmMTM3ZTYwY2YzODRmN2FmNjQ3OGU4Yzg0NDJlZDI2YzM4YyIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Curran
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $15.00
                                            </span>
                                            <span>BU75FKM7B1KW</span>
                                        </td>
                                        <td>08 Jun 2024</td>
                                        <td>08 Jun 2024</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                                                                                <span class="badge badge--warning">Dispatch</span>
                                                                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IkFwYXdQRThTTURDSk5mMUg2Q2JRYmc9PSIsInZhbHVlIjoiOWRKbnJJVHg1WWkrVk5hK3JpQmFIQT09IiwibWFjIjoiMTczZDIwNDNiNWVmNDhmMWVkY2Q5NjQwNzkwZTEyNGU1NzJlMGEyNGI2MzcxZGU0MzQ5MWU5M2NlOGZkZGQwZSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IlltOFBrL0ZoM21WaTNqcWpOSk5GZ3c9PSIsInZhbHVlIjoiUkpWN3lyREt2TWZGc2F1SzMwcWdBUT09IiwibWFjIjoiMWNhOWM3ZGZlNjdiOGMwYWZiYmE4MTBlZTVmMTFhMjZlZTZkNDE1NTA2YTBlYjNlMjc5NDQ0ZDkxYWQ2Y2ZlZSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Curran
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $23,560.00
                                            </span>
                                            <span>HXM5NG9G4JXP</span>
                                        </td>
                                        <td>06 Jun 2024</td>
                                        <td>11 Jun 2024</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                                                                                <span class="badge badge--warning">Dispatch</span>
                                                                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6Ik14VllGcEtwREVoRjBINENPYnZCeWc9PSIsInZhbHVlIjoiUGttV21DcUx5cS92Y3E5U0p6WjlUdz09IiwibWFjIjoiZTMwNTliNTM0ZmUzMTBlMzIxY2RjM2JmMDM0MTk2MzgwNjdkMDRkYjQ1ZjU5ZTg0NTZiNjA2ZThkNjljMjU2ZiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IjB2UDE2eFEyRlNqMU1XeDI5dlI3T3c9PSIsInZhbHVlIjoiWk5KaENQcWhwUFFtbHlNNkxPejVudz09IiwibWFjIjoiNTMyZDc2NTU5ZWQxNjhhNDQ3ZWRjMjhmZDY4YTI2NWUzZDM3MDlhZGM5YmNhY2M5ZmU5Y2QyZTJjMGQ0ZjU0NSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Curran
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $9.30
                                            </span>
                                            <span>YHFDRAPWFQF8</span>
                                        </td>
                                        <td>25 May 2024</td>
                                        <td>25 May 2024</td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                                                                                                                                <span class="badge badge--warning">Dispatch</span>
                                                                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6Ii9ML2xNUXV6TktEbTZQVHVLQXZwWGc9PSIsInZhbHVlIjoiWmxFU084VkxKQVVTN3JoVlZmZElQQT09IiwibWFjIjoiZWRmMDMzYTJjNzA3OTc4NzU0NTJlOTdjMDAyYzJmMzY4NWM1ZGY3NWE2MjhhYjM2YzQ5ZDdkYTA5MjkwNWIzOCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6InhQa2t6K0JYUFJLa1FDM2FQVm43cWc9PSIsInZhbHVlIjoiUGI2TVc1NU5NYk5KZkxhbHB5WWlpdz09IiwibWFjIjoiMzMyMGIzZTUwNWI5NTEyZTkzMmI4OWU4OTRiOGQyNjMxMWY1NTg4MjIxZmM1MWI5MGRhYzFmNDMxMGU0MTk0ZiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    India
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $20.00
                                            </span>
                                            <span>6F5BO9YER4YV</span>
                                        </td>
                                        <td>25 May 2024</td>
                                        <td>29 May 2024</td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--danger">Delivery in queue</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6InI3N2NLcGhONkEvZ0F5UmtYc2hiSlE9PSIsInZhbHVlIjoid1ZqWGRlbDRseDdIclR4a0VGR25MZz09IiwibWFjIjoiOTQ3YjczMGVmYTcwNGM3ZjdmNmE0MjU5YTcyYjBhODRhOTZmNWUxZGE3NTZhMmZiNmY1N2E0MDg4ZWQ2YWU4NiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6Im1zY0NFemU0U3NLSHM1VTVNS2tWQlE9PSIsInZhbHVlIjoiY0VwSE15U25xR1Jud3BXRVhJdWlSQT09IiwibWFjIjoiZTNkZmNmMTBiYTVkNTcwODI1YTNiMTYwZjQzYjBkYzdjZDAwYzhmOGUyYmE1ZWIxOWMyNWY0NGUxYmRkY2M4ZiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Curran
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $9.30
                                            </span>
                                            <span>AX9XB6FAHEAM</span>
                                        </td>
                                        <td>12 May 2024</td>
                                        <td>25 May 2024</td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                                                                                                                                <span class="badge badge--warning">Dispatch</span>
                                                                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IkZiVUd4VmU5YnlGOGx4WGZxUW85c0E9PSIsInZhbHVlIjoibkdqaXY4Q2RSd3lsQUpSaHZRUEYxQT09IiwibWFjIjoiOTBkYTVlNDI5YjY3MDdlYzEzMjRiZjQ5ZmUxMjc4YWQxYjBmN2I5NWJkNDg2ZTQxZDAxMjcyNjk0MmI2ZTdmNyIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IkNKRFc0SGtBWnRvNVhCZEVhaTRZeXc9PSIsInZhbHVlIjoidTMvNHlmNlNmemRWNTl1Ui9DdzJNdz09IiwibWFjIjoiMDUyMDA3YjdmZmIxMTBmNDdkYWUyOGQzOGRiZWZmZTA5MzdlOTg2YTFlZjBmMjY2YjQ5ZGJlYjQ0NmZiYWU3YiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    India
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $90.00
                                            </span>
                                            <span>51PWRRT3N5XE</span>
                                        </td>
                                        <td>12 May 2024</td>
                                        <td>12 May 2024</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--danger">Delivery in queue</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IjBvWDhLcWJTVzVzRXhXVWEveUkvbnc9PSIsInZhbHVlIjoiV0JwTXYyVVdoSlNybXpjMUdHZFplUT09IiwibWFjIjoiODUwN2ExMGFiNWNlNTcxYmUzNTdmZWUyYzQwYWIxYWI5NmE0ZTI0MTc5Nzg2ZjVhMzg5ODBhYWE5ZGY2NDJkZiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6Ind4S3IyQTdpV2JYNm9zeWx0MkJ0bUE9PSIsInZhbHVlIjoiL3lzVG1XUzhNcnhxYm9VZWMvRHJudz09IiwibWFjIjoiMWRjNDVkMzNkYTEzOGVhNjI1YjQzNzJjNmI1NmFlZmI3ZmQ5MGJjYTYzODhmNTM5ZmRmMDRiMjVjZTg0Njk3OSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Srilanka
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $9.30
                                            </span>
                                            <span>D97T8SGOGYHC</span>
                                        </td>
                                        <td>11 May 2024</td>
                                        <td>16 May 2024</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                                                                                <span class="badge badge--warning">Dispatch</span>
                                                                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6ImxCQ3FYSlBaNG02Z1lqcW84OWN5ZFE9PSIsInZhbHVlIjoiZ01QSGpNMnBza0loZkhac1RrL0p1UT09IiwibWFjIjoiYmQxOWQ5MTRiMzBlOWU3NGU4ZWE4Yjc0ZmVjOTViYzhiYWU1MDY0NmQyNWM4ZGQ5M2JhNWU5MjljYzU2ZmFjYyIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IkV0OVJSRGc4Z05sSmU2VzZBZGwza0E9PSIsInZhbHVlIjoiWkkwOS81a2ltNTY5ZWlVbytXak1zdz09IiwibWFjIjoiN2RmZjQwZDhjOTE3YzY4OTMxY2RjNzUzNWQxNmZmYWVmMmMyNmEyOWFiOWEyY2VlZmM2ZWZhY2JjOThhOTVhNSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    India
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $9.50
                                            </span>
                                            <span>JQB69A13VQS3</span>
                                        </td>
                                        <td>11 May 2024</td>
                                        <td>18 May 2024</td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                                                                                                                                <span class="badge badge--warning">Dispatch</span>
                                                                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6InRwdHo5Qkt6TGg1eDVvWTVnQ1ZQZWc9PSIsInZhbHVlIjoiOTQzK0lrYUpzbEw5ckk0bVRVTndEdz09IiwibWFjIjoiNmQ2NzZkNTFiMzRiYjIzMTgxZjUzY2RhNzNkMTNjMzYxOGE1ODU2OWE4YWYyYWZlOTE1ZDZkNDU3MDE3NGMzOSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6Imo4anV3LzJGRnZsTkgvWlQ4aW9JS1E9PSIsInZhbHVlIjoiZUxjamkxMWJkNmcxdWVjVmpUWDJwUT09IiwibWFjIjoiNjIxNmQzMTc0ODZjYWY4ZTFiZTAzYTc4M2Y3ZjllNDY5NmZjNmFhNGI5ZjMyNTI0Mjg4ZWZhYmE3NDA0OGY1MSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    India
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $30.00
                                            </span>
                                            <span>QCENTTKPQPD2</span>
                                        </td>
                                        <td>09 May 2024</td>
                                        <td>18 May 2024</td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--danger">Delivery in queue</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IkZ6WG9rcFVPZEliSXNVZWFLNHZYUkE9PSIsInZhbHVlIjoiUnp6Mjk0SFM4N1dYRWlvbWlHbjZSZz09IiwibWFjIjoiMzU4NDEyNWZkYWEyM2MwZGI2ZjdjYmU3YjQxMzc3YzgxYjM5MjU1ZmNlNzljZmUyM2UwYTJhZDg1NGZlMzk5MiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IitEYldvYis2Qm1wQi9DbVBCc3JoUEE9PSIsInZhbHVlIjoiYVBFd09FMTVJM1dYcG1sNEZMZm1QQT09IiwibWFjIjoiYzZlNmE4OGE1ZDExY2FkNTRjZDIxYjFiYmRjNzQxNzZlYTU5MjgyNzQ3MjhiYzZhMzYyOTRiMmI2NTBkYTgxNiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    India
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $13.60
                                            </span>
                                            <span>EHHKR1ZN8YS8</span>
                                        </td>
                                        <td>08 May 2024</td>
                                        <td>16 May 2024</td>
                                        <td>
                                                                                            <span class="badge badge--danger">Unpaid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--danger">Delivery in queue</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6Img4TU5YMzRGREt4djh3N2hSMjRzb3c9PSIsInZhbHVlIjoiY2VPbFZpemw5NEQ1YjNDTVB3c0tYUT09IiwibWFjIjoiNGVlMjY4MTE2NjljOTE3N2Q1MjVjZmYyY2M0MGFmMzg3NDRmYjc4Y2FjYjVmODYwY2JiZmJlNWUwODcxNjFmZCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IjBmTkx1L01hWmNvODFLRDNOUkJYNHc9PSIsInZhbHVlIjoiMEY5ZFRYZDhpN0hudFVENVFoM1JLQT09IiwibWFjIjoiODk0ZTNhMGYyNzI0YzZkMGM4MGIxNmZmYjYzOTc3NTA2NzllZDkxOTliZGE0MGE3ODNmMTI1OTQwYTY3ODFiZiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>Singapore</span><br>
                                            FedEx Company
                                        </td>
                                        <td>
                                            <span>
                                                                                                    India
                                                                                            </span>
                                            <br>
                                                                                            <span>N/A</span>
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $3.40
                                            </span>
                                            <span>YH18E8W6O1FY</span>
                                        </td>
                                        <td>08 May 2024</td>
                                        <td>17 May 2024</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                                                                                <span class="badge badge--warning">Dispatch</span>
                                                                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6Inh4M1F1WllCWkFEc3J6eEUrZEwreFE9PSIsInZhbHVlIjoiSUFIOStZb2Fqb3A2bUEzZHREcjVEQT09IiwibWFjIjoiNDRmMDBmNTgyNDczODNmMGRhOWU4MTFiYTMxMzZmYjZjZmQzYTc2ODgyZDdjNmU3NTMyYzE3ZTEzZGQ3NDc5MiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IkZNWXZXTkQ4RDN5L1VCaDN1NW1pU2c9PSIsInZhbHVlIjoiazFEaGhuTDUrTlFyK0tURnBBVHdkQT09IiwibWFjIjoiYTU1Yjk5MmEyNDBlMDEzN2JjMTRhMWY3ZjljNTY3YWI5ZWM5OTU4YjM3NGY4YjczYjA3NTgzY2MwNjZiOTdiMyIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                            </tbody>
                        </table>
                    </div>
                </div>

                                    <div class="card-footer py-4">
                        <nav class="d-flex justify-items-center justify-content-between">
        <div class="d-flex justify-content-between flex-fill d-sm-none">
            <ul class="pagination">
                
                                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">‹</span>
                    </li>
                
                
                                    <li class="page-item">
                        <a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/send/list?page=2" rel="next">›</a>
                    </li>
                            </ul>
        </div>

        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
            <div>
                <p class="small text-muted">
                    Showing
                    <span class="fw-semibold">1</span>
                    to
                    <span class="fw-semibold">15</span>
                    of
                    <span class="fw-semibold">384</span>
                    results
                </p>
            </div>

            <div>
                <ul class="pagination">
                    
                                            <li class="page-item disabled" aria-disabled="true" aria-label="‹">
                            <span class="page-link" aria-hidden="true">&lsaquo;</span>
                        </li>
                    
                    
                                            
                        
                        
                                                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/send/list?page=2">2</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/send/list?page=3">3</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/send/list?page=4">4</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/send/list?page=5">5</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/send/list?page=6">6</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/send/list?page=7">7</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/send/list?page=8">8</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/send/list?page=9">9</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/send/list?page=10">10</a></li>
                                                                                                                                
                                                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                        
                        
                                                                    
                        
                        
                                                                                                                        <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/send/list?page=25">25</a></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/send/list?page=26">26</a></li>
                                                                                                        
                    
                                            <li class="page-item">
                            <a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/send/list?page=2" rel="next" aria-label="›">&rsaquo;</a>
                        </li>
                                    </ul>
            </div>
        </div>
    </nav>

                    </div>
                            </div>
        </div>
    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/jquery-3.7.1.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/vendor/bootstrap-toggle.min.js"></script>

    <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast.min.css" rel="stylesheet">
<link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast_custom.css" rel="stylesheet">
<script src="https://script.viserlab.com/courierlab/demo/assets/global/js/iziToast.min.js"></script>

<script>
    "use strict";
    const colors = {
        success: '#28c76f',
        error: '#eb2222',
        warning: '#ff9f43',
        info: '#1e9ff2',
    }

    const icons = {
        success: 'fas fa-check-circle',
        error: 'fas fa-times-circle',
        warning: 'fas fa-exclamation-triangle',
        info: 'fas fa-exclamation-circle',
    }

    const notifications = [];
    const errors = [];


    const triggerToaster = (status, message) => {
        iziToast[status]({
            title: status.charAt(0).toUpperCase() + status.slice(1),
            message: message,
            position: "topRight",
            backgroundColor: '#fff',
            icon: icons[status],
            iconColor: colors[status],
            progressBarColor: colors[status],
            titleSize: '1rem',
            messageSize: '1rem',
            titleColor: '#474747',
            messageColor: '#a2a2a2',
            transitionIn: 'obunceInLeft'
        });
    }

    if (notifications.length) {
        notifications.forEach(element => {
            triggerToaster(element[0], element[1]);
        });
    }

    if (errors.length) {
        errors.forEach(error => {
            triggerToaster('error', error);
        });
    }

    function notify(status, message) {
        if (typeof message == 'string') {
            triggerToaster(status, message);
        } else {
            $.each(message, (i, val) => triggerToaster(status, val));
        }
    }
</script>

        <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/moment.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/daterangepicker.min.js"></script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/nicEdit.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/select2.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>

    
    <script>
        "use strict";
        bkLib.onDomLoaded(function() {
            $(".nicEdit").each(function(index) {
                $(this).attr("id", "nicEditor" + index);
                new nicEditor({
                    fullPanel: true
                }).panelInstance('nicEditor' + index, {
                    hasPanel: true
                });
            });
        });

        (function($) {
            $(document).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain', function() {
                $('.nicEdit-main').focus();
            });

            $('.breadcrumb-nav-open').on('click', function() {
                $(this).toggleClass('active');
                $('.breadcrumb-nav').toggleClass('active');
            });

            $('.breadcrumb-nav-close').on('click', function() {
                $('.breadcrumb-nav').removeClass('active');
            });

            if ($('.topTap').length) {
                $('.breadcrumb-nav-open').removeClass('d-none');
            }

            $('.table-responsive').on('click', 'button[data-bs-toggle="dropdown"]', function(e) {
                const {
                    top,
                    left
                } = $(this).next(".dropdown-menu")[0].getBoundingClientRect();
                $(this).next(".dropdown-menu").css({
                    position: "fixed",
                    inset: "unset",
                    transform: "unset",
                    top: top + "px",
                    left: left + "px",
                });
            });
        })(jQuery);
    </script>

        <script>
        (function($) {
            "use strict";

            const datePicker = $('.date-range').daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear'
                },
                showDropdowns: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 15 Days': [moment().subtract(14, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(30, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month')
                        .endOf('month')
                    ],
                    'Last 6 Months': [moment().subtract(6, 'months').startOf('month'), moment().endOf('month')],
                    'This Year': [moment().startOf('year'), moment().endOf('year')],
                },
                maxDate: moment()
            });
            const changeDatePickerText = (event, startDate, endDate) => {
                $(event.target).val(startDate.format('MMMM DD, YYYY') + ' - ' + endDate.format('MMMM DD, YYYY'));
            }

            $('.date-range').on('apply.daterangepicker', (event, picker) => changeDatePickerText(event, picker
                .startDate, picker.endDate));


            if ($('.date-range').val()) {
                let dateRange = $('.date-range').val().split(' - ');
                $('.date-range').data('daterangepicker').setStartDate(new Date(dateRange[0]));
                $('.date-range').data('daterangepicker').setEndDate(new Date(dateRange[1]));
            }

            let url = new URL(window.location).searchParams;
            if (url.get('status') != undefined && url.get('status') != '') {
                $('select[name=status]').find(`option[value=${url.get('status')}]`).attr('selected', true).change();
            }
            if (url.get('payment_status') != undefined && url.get('payment_status') != '') {
                $('select[name=payment_status]').find(`option[value=${url.get('payment_status')}]`).attr('selected',
                    true).change();
            }
        })(jQuery)
    </script>
<script>
    if ($('li').hasClass('active')) {
        $('#sidebar__menuWrapper').animate({
            scrollTop: eval($(".active").offset().top - 320)
        }, 500);
    }
</script>
    <script>
        "use strict";
        var routes = [{"admin.branch.manager.staff.list":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/staff\/{id}"},{"admin.branch.manager.staff":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/staff\/dashboard\/{id}"},{"admin.staff.index":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/staff"},{"manager.staff.create":"https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/create"},{"manager.staff.index":"https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/list"},{"manager.staff.store":"https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/store"},{"manager.staff.edit":"https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/edit\/{id}"},{"manager.staff.status":"https:\/\/script.viserlab.com\/courierlab\/demo\/manager\/staff\/status\/{id}"},{"staff.login":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff"},{"staff.":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff"},{"staff.logout":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/logout"},{"staff.password.request":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/reset"},{"staff.password.email":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/email"},{"staff.password.code.verify":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/code-verify"},{"staff.password.verify.code":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/verify-code"},{"staff.password.reset.form":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/password\/reset\/{token}"},{"staff.password.change":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/password\/reset\/change"},{"staff.dashboard":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/dashboard"},{"staff.password":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password"},{"staff.profile":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/profile"},{"staff.profile.update.data":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/profile\/update"},{"staff.password.update.data":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/password\/update"},{"staff.ticket.delete":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/delete\/{id}"},{"staff.branch.index":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/branch\/list"},{"staff.branch.income":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/branch\/income"},{"staff.courier.create":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/send"},{"staff.courier.store":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/store"},{"staff.courier.update":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/update\/{id}"},{"staff.courier.edit":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/edit\/{id}"},{"staff.courier.invoice":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/invoice\/{id}"},{"staff.courier.delivery.list":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/delivery\/list"},{"staff.courier.details":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/details\/{id}"},{"staff.courier.payment":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/payment"},{"staff.courier.delivery":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/delivery\/store"},{"staff.courier.manage.list":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/list"},{"staff.courier.date.search":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/date\/search"},{"staff.courier.search":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/search"},{"staff.courier.manage.sent.list":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/send\/list"},{"staff.courier.received.list":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/received\/list"},{"staff.courier.sent.queue":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/sent\/queue"},{"staff.courier.dispatch.all":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/dispatch-all"},{"staff.courier.dispatch":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/dispatch"},{"staff.courier.dispatched":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/status\/{id}"},{"staff.courier.upcoming":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/upcoming"},{"staff.courier.receive":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/receive\/{id}"},{"staff.courier.delivery.queue":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/delivery\/queue"},{"staff.courier.manage.delivered":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/courier\/delivery\/list\/total"},{"staff.cash.courier.income":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/cash\/collection"},{"staff.search.customer":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/customer\/search"},{"staff.ticket.index":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket"},{"staff.ticket.open":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/new"},{"staff.ticket.store":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/create"},{"staff.ticket.view":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/view\/{ticket}"},{"staff.ticket.reply":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/reply\/{ticket}"},{"staff.ticket.close":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/close\/{ticket}"},{"staff.ticket.download":"https:\/\/script.viserlab.com\/courierlab\/demo\/staff\/ticket\/download\/{ticket}"}];
        var settingsData = Object.assign({}, {"dashboard":{"keyword":["Dashboard","Home","Panel","staff","Control center","Overview","Main hub","Management hub","Central hub","Command center","Centralized interface","staff console","Management dashboard","Main screen","Command dashboard","staff control panel"],"title":"Dashboard","icon":"las la-home","route_name":"staff.dashboard","menu_active":"staff.dashboard"},"send_courier":{"keyword":["send courier"],"title":"Send Courier","icon":"las la-shipping-fast","route_name":"staff.courier.create","menu_active":"staff.courier.create"},"sent_in_queue":{"keyword":["sent in queue"],"title":"Sent In Queue","icon":"las la-hourglass-start","route_name":"staff.courier.sent.queue","menu_active":"staff.courier.sent.queue"},"shipping_courier":{"keyword":["shipping","shipping courier"],"title":"Shipping Courier","icon":"las la-sync","route_name":"staff.courier.dispatch","menu_active":"staff.courier.dispatch"},"upcoming_courier":{"keyword":["upcoming","upcoming courier"],"title":"Upcoming Courier","icon":"las la-history","route_name":"staff.courier.upcoming","menu_active":"staff.courier.upcoming","counter":"upcomingCount"},"delivery_in_queue":{"keyword":["delivery","delivery in queue","delivery courier"],"title":"Delivery In Queue","icon":"lab la-accessible-icon","route_name":"staff.courier.delivery.queue","menu_active":"staff.courier.delivery.queue"},"manage_courier":{"title":"Manage Courier","icon":"las la-sliders-h","menu_active":["staff.courier.manage*"],"submenu":[{"keyword":["total sent","total sent querier"],"title":"Total Sent","route_name":"staff.courier.manage.sent.list","menu_active":"staff.courier.manage.sent.list"},{"keyword":["total delivered"],"title":"Total Delivered","route_name":"staff.courier.manage.delivered","menu_active":"staff.courier.manage.delivered"},{"keyword":["all courier"],"title":"All Courier","route_name":"staff.courier.manage.list","menu_active":"staff.courier.manage.list"}]},"branch_list":{"keyword":["branch","branch list"],"title":"Branch List","icon":"las la-university","route_name":"staff.branch.index","menu_active":"staff.branch.index"},"cash_collection":{"keyword":["cash","cash collection"],"title":"Cash Collection","icon":"las la-wallet","route_name":"staff.cash.courier.income","menu_active":"staff.cash.courier.income"},"support_ticket":{"keyword":["ticket","support ticket"],"title":"Support Ticket","icon":"las la-ticket-alt","route_name":"staff.ticket.index","menu_active":"ticket*"}});
        $('.navbar__action-list .dropdown-menu').on('click', function(event) {
            event.stopPropagation();
        });
    </script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/search.js"></script>

    <script>
        "use strict";

        function getEmptyMessage() {
            return `<li class="text-muted">
                <div class="empty-search text-center">
                    <img src="https://script.viserlab.com/courierlab/demo/assets/images/empty_list.png" alt="empty">
                    <p class="text-muted">No search result found</p>
                </div>
            </li>`
        }
    </script>
</body>

</html>
