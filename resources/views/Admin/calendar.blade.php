<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="" />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link href="calendar/https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="calendar/https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="calendar/fonts/icomoon/style.css">
    <link href='calendar/fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='calendar/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
    <link rel="stylesheet" href="calendar/css/bootstrap.min.css">
    <link rel="stylesheet" href="calendar/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="Admin/assets/js/plugin/webfont/webfont.min.js"></script>
    @include('Components.admin.header')
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('Components.admin.sidebar')
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="../index.html" class="logo">
                            <img src="Admin/assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20">
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
            </div>

            <!-- Layout wrapper -->
            <div class="layout-wrapper layout-content-navbar">
                <div class="layout-container">
                    <div class="layout-page">
                        <div class="content-wrapper">
                            <div class="container-xxl flex-grow-1 container-p-y">
                                <h4 class="py-3 mb-4">CALENDAR</h4>
                                <hr class="my-5" />
                                <div class="card">
                                    <div class="card-header flex-column flex-md-row">
                                        <h5 class="card-header">Calendar Schedule</h5>
                                    </div>
                                    <div class="content" style="margin-top: -50px">
                                        <div id='calendar'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-backdrop fade"></div>
                    </div>
                </div>
            </div>

            <!-- Core JS Files -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="Admin/assets/js/core/jquery-3.7.1.min.js"></script>
            <script src="Admin/assets/js/core/popper.min.js"></script>
            <script src="Admin/assets/js/core/bootstrap.min.js"></script>

            <!-- jQuery Scrollbar -->
            <script src="Admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
            <!-- Moment JS -->
            <script src="Admin/assets/js/plugin/moment/moment.min.js"></script>

            <!-- Chart JS -->
            <script src="Admin/assets/js/plugin/chart.js/chart.min.js"></script>

            <!-- jQuery Sparkline -->
            <script src="Admin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

            <!-- Chart Circle -->
            <script src="Admin/assets/js/plugin/chart-circle/circles.min.js"></script>

            <!-- Datatables -->
            <script src="Admin/assets/js/plugin/datatables/datatables.min.js"></script>

            <!-- Bootstrap Notify -->
            <script src="Admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

            <!-- jQuery Vector Maps -->
            <script src="Admin/assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
            <script src="Admin/assets/js/plugin/jsvectormap/world.js"></script>

            <!-- Sweet Alert -->
            <script src="Admin/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

            <!-- Kaiadmin JS -->
            <script src="Admin/assets/js/kaiadmin.min.js"></script>

            <!-- Kaiadmin DEMO methods, don't include it in your project! -->
            <script src="Admin/assets/js/setting-demo2.js"></script>

            <!-- Calendar JS -->
            <script src='calendar/fullcalendar/packages/core/main.js'></script>
            <script src='calendar/fullcalendar/packages/interaction/main.js'></script>
            <script src='calendar/fullcalendar/packages/daygrid/main.js'></script>
            <script src="calendar/js/main.js"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var calendarEl = document.getElementById('calendar');
                    // Placeholder for interviews data
                    var interviews = []; // Replace with actual data when available

                    var events = interviews.map(function(interview) {
                        return {
                            title: interview.name || 'No Title',
                            start: interview.date || '',
                            job_name: interview.position || 'No Position',
                            job_category: interview.address || 'No Address',
                            extendedProps: {
                                id: interview.id || '',
                                name: interview.name || '',
                                phone: interview.phone || '',
                                email: interview.email || ''
                            }
                        };
                    });

                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        plugins: ['interaction', 'dayGrid', 'bootstrap'],
                        themeSystem: 'bootstrap',
                        defaultView: 'dayGridMonth',
                        editable: false,
                        events: events,
                    });

                    calendar.render();
                });
            </script>
        </div>
    </div>
</body>

</html>
