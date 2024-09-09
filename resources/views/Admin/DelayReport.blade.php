<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.lineicons.com/1.0/LineIcons.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
@include('Components.Admin.Header')


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

    .logout-btn {
        background-color: transparent;
        border: none;
        color: #333;
        font-size: 24px;
        cursor: pointer;
        padding: 10px;
        border-radius: 50%;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .logout-btn:hover {
        background-color: #ff6b6b;
        color: #fff;
    }

    .logout-btn:focus {
        outline: none;
        box-shadow: 0 0 0 4px rgba(255, 107, 107, 0.4);
    }

    .res-sidebar-open-btn {
        background-color: #1258a0;
        border: none;
        color: #fff;
        font-size: 20px;
        padding: 10px 15px;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .res-sidebar-open-btn:hover {
        background-color: #0e4b8a;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .res-sidebar-open-btn:focus {
        outline: none;
        box-shadow: 0 0 0 4px rgba(18, 88, 160, 0.4);
    }

    .res-sidebar-open-btn i {
        margin-right: 5px;
    }

    .navbar-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;

        padding: 10px;
    }

    .navbar__left,
    .navbar__right {
        display: flex;
        align-items: center;
    }

    @media (max-width: 768px) {

        .navbar__left,
        .navbar__right {
            flex: 1;
        }

        .res-sidebar-open-btn,
        .logout-btn {
            font-size: 20px;
            padding: 10px;
        }

        .navbar__right {
            justify-content: flex-end;
        }

        .profile-dropdown {
            margin-left: auto;
        }
    }

</style>

<body>

    <div class="page-wrapper default-version">
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
                            <h3 style="color: #223d54;"><b>Courier</b></h3>

                        </div>
                    </div>



                    <div class="sidebar__menu-wrapper">
                        <ul class="sidebar__menu">
                            <li class="sidebar-menu-item ">
                                <a href="courierdash" class="nav-link ">
                                    <i class="menu-icon fas fa-clipboard-list"></i>
                                    <span class="menu-title">Courier Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a href="order-for-courier" class="nav-link">
                                    <i class="fa-solid fa-boxes-stacked"></i>
                                    <span class="menu-title" style="padding-left: 17px">Manage Order</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a href="return-items" class="nav-link">
                                    <i class="fa-solid fa-boxes-stacked"></i>
                                    <span class="menu-title" style="padding-left: 17px">Return Items</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a href="delay" class="nav-link">
                                    <i class="fa-solid fa-boxes-stacked"></i>
                                    <span class="menu-title" style="padding-left: 17px">Delay Report</span>
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>

            <!-- sidebar end -->

            <!-- navbar-wrapper start -->
            <nav class="navbar-wrapper d-flex flex-wrap">
                <div class="navbar__left">
                    <button type="button" class="res-sidebar-open-btn me-3">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>

                <div class="navbar__right">
                    <ul class="navbar__action-list">
                        <li class="dropdown d-flex profile-dropdown">
                            <a href="logout" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon fas fa-sign-out-alt"></i>
                                <span class="dropdown-menu__caption">Logout</span>
                            </a>

                        </li>
                    </ul>
                </div>
            </nav>
            <!-- navbar-wrapper end -->


            <div class="container-fluid px-3 px-sm-0">
                <div class="body-wrapper">
                    <div class="bodywrapper__inner">
                        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                            <h6 class="page-title p-2">Delay Report</h6>
                            <div
                                class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                            </div>
                        </div>




    <section style="padding: 60px 0;">
        <div
            style="max-width: 900px; margin: 0 auto; padding: 20px; background: #ffffff; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
            <div style="text-align: center; margin-bottom: 40px;">
                <h3 style="margin-top: 0; color: #333; font-size: 28px; font-weight: bold;">Booking Form
                </h3>
                <p style="color: #666; font-size: 16px;">Fill out the form below to arrange for the
                    transportation of your goods.</p>
            </div>
            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('delay.submit') }}" method="post" enctype="multipart/form-data" id="myForm">
            @csrf

            <!-- Delay Report Information -->
            <div style="display: flex; flex-direction: column; gap: 20px; margin-bottom: 30px;">
                <!-- Top Section: Trip Ticket, Driver Name, Plate Number -->
                <div style="display: flex; flex-wrap: wrap; gap: 20px;">
                    <!-- Trip Ticket -->
                    <div style="flex: 1; min-width: 220px;">
                        <label for="trip_ticket" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">
                            Trip Ticket
                        </label>
                        <input
                            style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                            id="trip_ticket" name="trip_ticket" type="text" placeholder="Enter Trip Ticket Number" required>
                    </div>

                    <!-- Driver Name (Read-only) -->
                    <div style="flex: 1; min-width: 220px;">
                        <label for="driver_name" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">
                            Driver Name
                        </label>
                        <input
                            style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                            id="driver_name" name="driver_name" type="text" value="{{ auth()->user()->name }}" readonly>
                    </div>

                    <!-- Plate Number -->
                    <div style="flex: 1; min-width: 220px;">
                        <label for="plate_number" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">
                            Plate Number
                        </label>
                        <input
                            style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                            id="plate_number" name="plate_number" type="text" placeholder="Enter Plate Number" required>
                    </div>

                    <!-- Date -->
                    <div style="flex: 1; min-width: 220px;">
                        <label for="date" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Date</label>
                        <input
                            style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                            id="date" name="date" type="datetime-local" placeholder="Enter Date" required>
                    </div>
                </div>

                <!-- Delay Details -->
                <!-- Delay Duration -->
                <div style="flex: 1; min-width: 220px;">
                    <label for="delay_duration" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">
                        Delay Duration
                    </label>
                    <input
                        style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                        id="delay_duration" name="delay_duration" type="text" placeholder="Enter Delay Duration (e.g., 2 hours)" required>
                </div>

                <!-- Cause of Delay -->
                <div style="flex: 1; min-width: 220px;">
                    <label for="delay_cause" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">
                        Cause of Delay
                    </label>
                    <textarea id="delay_cause" name="delay_cause" rows="4" placeholder="Enter Cause of Delay"
                        style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"></textarea>
                </div>

                <!-- Additional Notes -->
                <div style="flex: 1; min-width: 220px;">
                    <label for="additional_notes" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">
                        Additional Notes
                    </label>
                    <textarea id="additional_notes" name="additional_notes" rows="4" placeholder="Enter any additional notes"
                        style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"></textarea>
                </div>

                <!-- Submit Button -->
                <div style="margin-top: 20px;">
                    <button type="submit" style="padding: 12px 20px; border-radius: 6px; border: none; background-color: #007bff; color: #fff; font-weight: bold; cursor: pointer;">
                        Submit
                    </button>
                </div>
            </div>
        </form>



    </div>



        </div>
    </section>

    @include('Components.Admin.Footer')

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.2.2/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {
        $('#returnTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
</html>
