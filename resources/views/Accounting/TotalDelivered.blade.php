
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
    <h6 class="page-title">Delivered Courier</h6>
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
                                            <span>India</span><br>
                                            India staff
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Singapore
                                                                                            </span>
                                            <br>
                                                                                            FedEx Company
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $495.00
                                            </span>
                                            <span>M3WYPDQXJX8C</span>
                                        </td>
                                        <td>12 Nov 2022</td>
                                        <td>14 Nov 2022</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Delivery</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IlY5eXVEUmZFZjV4b2ZzeHdWVHpudkE9PSIsInZhbHVlIjoiMWFUZ0FYZFF5b2lTU3EySkNCdi9Zdz09IiwibWFjIjoiYTk1YTBjNWM0MGQwMWJkM2ZhNmYwZTc4MGQ0ZWE2Yjc0YTJkMTc4MGFkYmFmNjMzYmE4Y2E0MWE5MmJjNzdjMyIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IjBndmJNbkFIY29oZDVkRVY4NDUzN0E9PSIsInZhbHVlIjoiQnZLdDZQWGphbVNGcklyRER4TWVpUT09IiwibWFjIjoiN2ZhZmYzMTk0NzAzYzZmYTRkOGUyMWY4ZjdhMTI4Mjk0ZDUzYzQ4ODc3MmZiY2IyMzVkMGZmY2UyNDJhN2NlNiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>India</span><br>
                                            India staff
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Singapore
                                                                                            </span>
                                            <br>
                                                                                            winnie winnie
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $55.00
                                            </span>
                                            <span>ZF9JFY6DJH5A</span>
                                        </td>
                                        <td>24 Feb 2023</td>
                                        <td>28 Feb 2023</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Delivery</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IjVWTmVpVmZtUUZjWXFiSUo3VW11ZkE9PSIsInZhbHVlIjoiNEMybUhkTE9ZemE0NElXUGJ4U0F6UT09IiwibWFjIjoiMDgwMzUxNzRiODM2NGZlY2NhNDc4OWFiMDE2YjgyMWQ5MWU0NGI4NjI1NjkzNjU0NjVkMDE2MTFhNmExNTQ1YiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IlFrb1g0dEZIdnRtYnN6WjE0N1lPblE9PSIsInZhbHVlIjoiLzcybU9STDROcUxSZFgva0lvOVlqQT09IiwibWFjIjoiZjNmOTMwNmFiZmQ0MjNjZmI5YWI5ZDE0MmVjYzc4NWYzZjRhNmZjYTU0N2M5YWI4NDlhNmMxNTEyNGViNDIyNCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>India</span><br>
                                            India staff
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Singapore
                                                                                            </span>
                                            <br>
                                                                                            Khan Baba
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $5,000.00
                                            </span>
                                            <span>2R16SJ62Q4GY</span>
                                        </td>
                                        <td>10 Mar 2023</td>
                                        <td>11 Mar 2023</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Delivery</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IlZXeEtjMGMrenhMUjFPSVc2SmlDS3c9PSIsInZhbHVlIjoiRGpOeEllcE0xaXBUeVViSVE5U1BBZz09IiwibWFjIjoiOWMzNmNlYjczODdlYjBmMzUyZmRjODljMGE5YzY0OWQ2YzRmNWVjYzc5ZGRlNzg3YTg5ZDlhZWIyOGNmNTE1NSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6ImlWa2pmSktldCs5R1FHKyt6emcyNUE9PSIsInZhbHVlIjoiMGJGYmN4VXV4UTdwaU8yYWJ2VjN3QT09IiwibWFjIjoiMzU5YTY4NDc2MTVmMmZjMzYxOGI0ZWJlODE3MTk0N2IxNjE1ZjdlMTgxMTgwODkwZjMyNzIzN2MwYTAyZTYzMSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>India</span><br>
                                            India staff
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Singapore
                                                                                            </span>
                                            <br>
                                                                                            Khan Baba
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $1,000.00
                                            </span>
                                            <span>WTG1Q9ET1HBQ</span>
                                        </td>
                                        <td>10 Mar 2023</td>
                                        <td>12 Mar 2023</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Delivery</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IjZKUjYwdEthZlp4M29nK1RxcEs4TWc9PSIsInZhbHVlIjoiZFpDSDViLzdWTGlJWDFBUzEzbFJxUT09IiwibWFjIjoiM2E0MDJlZGU3Njk0Mjg1YzBlYzg4ZmU4MWI3NmQyYjIyMWFhNWEzM2Y2MWY5NzQwNDMwYWM2MTc0NmU1Y2U0NiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IlRZZ0Rza1g1L09yTVhxYnYxNVc2WWc9PSIsInZhbHVlIjoibTZodEo0dEY2aHpzQmxZcHV0TlFKdz09IiwibWFjIjoiYWVkM2M2MTE4YmFkN2Q5NzBlNDBmZDBlNWI1NThmNDg2Mzc5MjMxYTk0NGE3Y2I4ZmM0ZmJmMWY3N2NlYTQyZiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>India</span><br>
                                            India Daniel
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Singapore
                                                                                            </span>
                                            <br>
                                                                                            Khan Baba
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $9,000.00
                                            </span>
                                            <span>6Y9T49UUAMEK</span>
                                        </td>
                                        <td>10 Mar 2023</td>
                                        <td>10 Mar 2023</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Delivery</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6InA4bGxaSUpNSHhSbzdCYi94YmhWQ1E9PSIsInZhbHVlIjoiMVEzenh0Mk9Zek1sZmt3eDR4Y2dtdz09IiwibWFjIjoiOWYzNTBiM2NhZjEwYTBiNjVhMDVhZmFiY2VjYmJhZDIxMTU0YjM0N2QyMmU1MGEwOTY3NThiZTYzNmFhOGNhMiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IkVwejEwZUlLN0ZiSTBQSHFpQ2MzVVE9PSIsInZhbHVlIjoiQ3Iyb2c1MjlVc0JnNFNPeTQ1b2ZPdz09IiwibWFjIjoiMWMzZjg5MjY3NDk0NDEzN2MxN2ZmZmQ1Y2MxZTlhM2M1YjdmNDIwMzZjOWIzOWY5ODM0OTJkMWE1ZGZiZTdhZCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>India</span><br>
                                            India staff
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Singapore
                                                                                            </span>
                                            <br>
                                                                                            FedEx Company
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $110.00
                                            </span>
                                            <span>RTJG4VTASVA5</span>
                                        </td>
                                        <td>14 Mar 2023</td>
                                        <td>14 Mar 2023</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Delivery</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6Ii9adGNiWkl6NDlSczQzL0xWMXF3WFE9PSIsInZhbHVlIjoiVDRJWUREU2Z2RnZiZzFQZHRLQmk0dz09IiwibWFjIjoiMmU3MDQzNzc5YWM1Y2Q3ODk5ZDc3NDc2YWFhZDkyN2EyODEzYzI4Yzk5ZGRhZTEyMThiMDYwOTk0MWZmMWM0NSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IjZTUDgzdStQbTFQcnhCZ3M3MVQzRWc9PSIsInZhbHVlIjoicWVNbEdsQzhTakFHZ1J1WXJKN01wUT09IiwibWFjIjoiMTAxMjhlMDUyY2VkYjliMTA5OTNmZWFmZWM1NWE3MmExN2U1N2Q0ZDhiYmE4M2EzY2M2MTMwNGQzN2I4NGYzYiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>India</span><br>
                                            India staff
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Singapore
                                                                                            </span>
                                            <br>
                                                                                            FedEx Company
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $30.00
                                            </span>
                                            <span>GPEZ1SR6ZJDP</span>
                                        </td>
                                        <td>13 May 2023</td>
                                        <td>26 May 2023</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Delivery</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6Ii9sNUdhd2FxRXh0Y2lodEsxMkVkamc9PSIsInZhbHVlIjoiQ3RVMmorbmFQWXhVVmVkWHBLSHZyUT09IiwibWFjIjoiOTYyZjZkODA3NGI4Yzk2NWY3OGMwYWJkYTJkY2YxNzc1ZDNkMjJkODZkODc2ZTI1ZWY4OGFhOThlY2QyMjA3MCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6InJqRFQzYnJyTFZrTmtKY2xFdFBVRGc9PSIsInZhbHVlIjoibjBzTHNzUjBvU3J3ckFMc25iMGFuUT09IiwibWFjIjoiNWM4MDkwMzAzNjE1N2RkNTM1YzEyN2Y5ZjA2YmViNGZjMzViMTIzNGEyOThjYTQ2M2ZhYjRhNGFiMzljMmFmNSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>India</span><br>
                                            India staff
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Singapore
                                                                                            </span>
                                            <br>
                                                                                            FedEx Company
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $10.00
                                            </span>
                                            <span>VM58OC8C61EF</span>
                                        </td>
                                        <td>27 May 2023</td>
                                        <td>09 Jun 2023</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Delivery</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6ImVRWkl5bGVyeEtCTWJ0SjA3NmgrMHc9PSIsInZhbHVlIjoiaEljc1ExL2F5bkxNMGptOGlvMktWQT09IiwibWFjIjoiMTE2ZDA0Y2U4ZTI2YmI1ZjE5MzBmODQ4NjQ1OWQ0NDA1NWY2YWM0MTEzOGEwOTRjOGZjOWJjZjZjMTliMDE3OCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IlBTQkR0L0IxcDcxSWZRTnN4bE1ONlE9PSIsInZhbHVlIjoiMCtwVWxkcnJmWU16dlpOSEQzWC9XQT09IiwibWFjIjoiYzE3OGU5Mzc5M2NiNjc2NzNmNjRmNTFlM2MwN2NjNjg5ZDljZjg3N2Y2NDVmYTRkOGI5MWYyZGJkOWJmZjQyYyIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>India</span><br>
                                            India Daniel
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Singapore
                                                                                            </span>
                                            <br>
                                                                                            FedEx Company
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $100.00
                                            </span>
                                            <span>DA2T538P3VH4</span>
                                        </td>
                                        <td>29 May 2023</td>
                                        <td>31 May 2023</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Delivery</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IlJXaU9nVjBBTytQcWZKamNRZEtac2c9PSIsInZhbHVlIjoidjZtNEZlL3htTlNJN0lnbVA2djVpQT09IiwibWFjIjoiYjkyYmVlZDk2ZjZiY2E5YWFiODdkMzYwMDMzNTNlOTg4ODE1ZDc2Nzg3YmI2NDE3OWY1YTM2ZTIxZjlkNmZiYiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6ImhXYjVsQzREa3BKY2lidjRjM2pETEE9PSIsInZhbHVlIjoiSzNQWlFsb3BCQmdnb0dwVDJpZnJ4UT09IiwibWFjIjoiZDZhZjkzZWU5MTBiNGUxZjA2ZWNlN2I0M2EzM2YyYzY2NjBmMjUwMjgxMmM5OTY4OGU2ZTlmNDYxOWIyNGY0ZCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>India</span><br>
                                            India Daniel
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Singapore
                                                                                            </span>
                                            <br>
                                                                                            FedEx Company
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $130.50
                                            </span>
                                            <span>DWQFAZTYP898</span>
                                        </td>
                                        <td>30 May 2023</td>
                                        <td>29 May 2023</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Delivery</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6Iko1UTNHRnhMVEZMRFNvY3pMSmc4Nmc9PSIsInZhbHVlIjoiVUltUlAycVpzdGU3YjFaR0E4eW43QT09IiwibWFjIjoiOTAzOTYwYzk1ZTg3NTJlMzdiOTU2NmQ4OTk0YTk1MmMwZTMwMDI4ZDI5OTFiMDA3MWQzMTU0MjA2NjczMTE4ZSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6ImhhaVlhSWxGelZGdTdsc1RhMERoZ0E9PSIsInZhbHVlIjoibmxwTGZXcG5RcWZjZTh4cm5PYUV0UT09IiwibWFjIjoiYTZjNmFhNWQ5N2U3YmMxZWUxMGQxNDZkN2Y2OWUxODJlZjQyNGFiMGVlNTJlNTc2OTQ4NTBlMDhkZWY1YmEwZCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>India</span><br>
                                            India staff
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Singapore
                                                                                            </span>
                                            <br>
                                                                                            FedEx Company
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $9.00
                                            </span>
                                            <span>4TJ3HHEZB6UO</span>
                                        </td>
                                        <td>07 Jun 2023</td>
                                        <td>08 Jun 2023</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Delivery</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IlIxNGUzQUNOZEp5M3VkQ3FNdTM4ZWc9PSIsInZhbHVlIjoiYzVpMUJUSkpKa2xnWTlOMGtGRnd5dz09IiwibWFjIjoiOWJjYjM2NWRmOGFjYzdlMDQ0MGExMGFlNjViOTZiMzdkMTlkYjU3MGExMDUyYjIxYTIxMWFlNzA0ZGUzYzVkNyIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6InhXemlFSjBXYUthdk95aW1jT01PeFE9PSIsInZhbHVlIjoiYytJTGx3WDE1QzhWUldEVXp0M3JJUT09IiwibWFjIjoiZTVlZTZkNTljN2E5NzI0OTUzNDY4MmE2MjZiNmE2ZmIxMjVjZGMxMjI1OGU5YjIwM2Q5MjEwMDcwZDZlZDlmNCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>India</span><br>
                                            khan gul
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Singapore
                                                                                            </span>
                                            <br>
                                                                                            Gul Khan
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $900.00
                                            </span>
                                            <span>TF8CTVHWZMXZ</span>
                                        </td>
                                        <td>25 Jun 2023</td>
                                        <td>30 Jun 2023</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Delivery</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IjV5SjZjSDY4S3FsUEtJeWNkRDZNYWc9PSIsInZhbHVlIjoiRDlmTzdrandtVGlQYWordTFSWkNEQT09IiwibWFjIjoiMWE3NDY2NTg1MTBkNjk3MDdhNDBhZDdiYWRiODlhMTM3ZDg3ZjA4YmZkNzU3ZTFhODZhZDJkNTYzZjVlZGMzMyIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IjZSSmlGOWdSb1hhUnJzVkU5NXkwWVE9PSIsInZhbHVlIjoiN2FPaFZ0aVljcEY3Q0VRcXU4cVNGZz09IiwibWFjIjoiYjgwMDRjNjEyNzExYTUxOTgzZWI0M2NhOGQ5MmJkZGYzOTViNTVjZGVlZWMyNjhhNjI1M2YyMDFjOGQ1ZTg0MyIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>India</span><br>
                                            khan gul
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Singapore
                                                                                            </span>
                                            <br>
                                                                                            Gul Khan
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $22.50
                                            </span>
                                            <span>SOQOTUSVJEZ4</span>
                                        </td>
                                        <td>27 Jun 2023</td>
                                        <td>30 Jun 2023</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Delivery</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IjNkS0ZFcisyVGtQTllWT2FPSHMyanc9PSIsInZhbHVlIjoiSC85bm1WOHlzelRpUkFXWFN5bEVKQT09IiwibWFjIjoiY2EzNzEyZmViMGVlOWViZGQ0MTkyMGEyNTczMWZiMmFhMmM3YWRhYmIxMjQ4NzU5YjczNDYwYmU5MjBhNmRmYSIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6ImpVRVNuRnFoWTg0ZDY1LzFqWGhYTEE9PSIsInZhbHVlIjoiY2xpYnVEZllNN0hsRldLOEhEb0Nqdz09IiwibWFjIjoiMTZkOGU3NTJiZjZiNTY0NjZmYTlkNThiMTdmNzE1YmJhNDY1MDE3YWFlMjc4OGNhYTljNjJlMGZlYzg1NDkyNCIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>India</span><br>
                                            India staff
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Singapore
                                                                                            </span>
                                            <br>
                                                                                            FedEx Company
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $900.00
                                            </span>
                                            <span>KJY58RBOTSHR</span>
                                        </td>
                                        <td>04 Jul 2023</td>
                                        <td>15 Jul 2023</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Delivery</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IkZDRE1qR0xOR3pWS2c2U1JobHd3SEE9PSIsInZhbHVlIjoiMUZZUWtpaVFFMmVVczF6MWRjN1RzZz09IiwibWFjIjoiOTJkNGNjYzhmNGY1OTkwMGZmNmNlOWYxZjUyZjQzYjU5N2E2Y2UyYzZmOTRkMDAwMmRjMjY4OWI1MzNhYTJkZiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IlpqNG5iakNtKzJ5SGJaUW4yRkhXbEE9PSIsInZhbHVlIjoiYnFKRStTZlQyMU9MRW9oTFdQR0pwUT09IiwibWFjIjoiOTEyYjQ4ODQwOWFlYmU4ZWVjMTYwNjY0MDY0OTQ1OWU4ZTc1MTI3ZTg2OTZkODY2Y2JmZGQ2ODU5OGVjNmFkYiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-info-circle"></i> Details                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <span>India</span><br>
                                            India staff
                                        </td>
                                        <td>
                                            <span>
                                                                                                    Singapore
                                                                                            </span>
                                            <br>
                                                                                            FedEx Company
                                                                                    </td>
                                        <td>
                                            <span class="fw-bold d-block">
                                                $2,176.00
                                            </span>
                                            <span>YHCUE44RQSJF</span>
                                        </td>
                                        <td>22 Aug 2023</td>
                                        <td>22 Aug 2023</td>
                                        <td>
                                                                                            <span class="badge badge--success">Paid</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Delivery</span>
                                                                                    </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/invoice/eyJpdiI6IitKZndnNlpLMzk1RnczZStrR0Rjd0E9PSIsInZhbHVlIjoiZVJVR2VYUmh6UW9WK0N1Njl3MnZyUT09IiwibWFjIjoiYzY3NjY2MTczNzExZjkwODg1OThiY2I1MTg5OTczN2JhNTY0ODdmNjE4MzExMGFmNzg5NGEyNWY1ZWFiMWQ0MiIsInRhZyI6IiJ9"
                                                    title="" class="btn btn-sm btn-outline--info">
                                                    <i class="las la-file-invoice"></i> Invoice                                                </a>
                                                <a href="https://script.viserlab.com/courierlab/demo/staff/courier/details/eyJpdiI6IkNBRGg1Ky9VZllwYzFTejUwQWx2Wnc9PSIsInZhbHVlIjoiWkV1YWhtbWpEWDN2UFlVN1pGR2NMUT09IiwibWFjIjoiNzVmNGQzZTVjYTYxZjU0M2Y1YjgwY2VkM2JlN2E1NDY5ZDdiMjJjYTIyZTljNzFhMTNlODMwY2VlZDc2OGQxZiIsInRhZyI6IiJ9"
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
                        <a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/delivery/list/total?page=2" rel="next">›</a>
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
                    <span class="fw-semibold">28</span>
                    results
                </p>
            </div>

            <div>
                <ul class="pagination">
                    
                                            <li class="page-item disabled" aria-disabled="true" aria-label="‹">
                            <span class="page-link" aria-hidden="true">&lsaquo;</span>
                        </li>
                    
                    
                                            
                        
                        
                                                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                                                <li class="page-item"><a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/delivery/list/total?page=2">2</a></li>
                                                                                                        
                    
                                            <li class="page-item">
                            <a class="page-link" href="https://script.viserlab.com/courierlab/demo/staff/courier/delivery/list/total?page=2" rel="next" aria-label="›">&rsaquo;</a>
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
