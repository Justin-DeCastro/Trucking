<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="" />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
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

    <style>
        .calendar-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        #calendar {
            flex: 1;
        }

        .calendar-legend {
            width: 200px;
            /* Adjust as needed */
            margin-left: 20px;
            /* Adjust spacing between calendar and legend */
        }

        .calendar-legend h5 {
            margin-bottom: 10px;
        }

        .legend-item {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .legend-color {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .legend-text {
            font-size: 14px;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    @include('Components.Admin.Navbar')
    @include('Components.Accounting.Sidebar')
    <!-- End Sidebar -->
    <div class="container-fluid px-3 px-sm-0">
        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <div class="main-panel">

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
                                                <h5 class="card-header">Transactions Calendar</h5>
                                            </div>
                                            <br>
                                            <div class="calendar-container">
                                                <div id='calendar'></div>
                                                <div class="calendar-legend">
                                                    <h5>Legend</h5>
                                                    <div class="legend-item">
                                                        <div class="legend-color" style="background-color: green;">
                                                        </div>
                                                        <div class="legend-text">Paid</div>
                                                    </div>
                                                    <div class="legend-item">
                                                        <div class="legend-color" style="background-color: orange;">
                                                        </div>
                                                        <div class="legend-text">Unpaid</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for displaying borrower details -->
                    <div class="modal fade" id="loanModal" tabindex="-1" aria-labelledby="loanModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="loanModalLabel">Borrower Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p style="font-size:15px; color:black"><strong>Borrower Name:</strong> <span
                                            id="borrowerName"></span></p>
                                    <p style="font-size:15px; color:black"><strong>Loan Amount:</strong> <span
                                            id="loanAmount"></span></p>
                                    <p style="font-size:15px; color:black"><strong>Interest Percentage:</strong> <span
                                            id="loanInterest"></span></p>
                                    <p style="font-size:15px; color:black"><strong>Payment Terms:</strong> <span
                                            id="paymentTerms"></span></p>
                                    <p style="font-size:15px; color:black"><strong>Payment Per Month:</strong> <span
                                            id="paymentPerMonth"></span></p>
                                    <p style="font-size:15px; color:black"><strong>Mode of Payment:</strong> <span
                                            id="modeOfPayment"></span></p>
                                    <p style="font-size:15px; color:black"><strong>Loan Date:</strong> <span
                                            id="loanDate"></span></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    @foreach ($loans as $loan)
                                        <form id="markAsPaidForm{{ $loan->id }}"
                                            action="{{ route('loans.markAsPaid', $loan->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-success"
                                                onclick="document.getElementById('markAsPaidForm{{ $loan->id }}').submit(); return false;">Mark
                                                as Paid</button>
                                        </form>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Calendar JS -->
    <script src='calendar/fullcalendar/packages/core/main.js'></script>
    <script src='calendar/fullcalendar/packages/interaction/main.js'></script>
    <script src='calendar/fullcalendar/packages/daygrid/main.js'></script>
    <script src="calendar/js/main.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            // Replace this array with your PHP data (only unpaid loans are passed here)
            var loans = @json($loans);

            // Function to format the loan amount with a peso sign and comma separator
            function formatCurrency(amount) {
                return new Intl.NumberFormat('en-PH', {
                    style: 'currency',
                    currency: 'PHP'
                }).format(amount);
            }

            // Function to format the date similar to Carbon's format('F d, Y')
            function formatDate(dateString) {
                var options = {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                };
                var date = new Date(dateString);
                return date.toLocaleDateString('en-PH', options);
            }

            // Mapping loan data into FullCalendar events
            var events = loans.map(function(loan) {
                var eventColor = loan.status === 'Unpaid' ? 'orange' :
                    ''; // Set color to orange if status is "Unpaid"

                return {
                    title: `${loan.borrower}`, // Borrower's name displayed as the event title
                    start: loan.date, // Date of the loan
                    backgroundColor: eventColor, // Set the background color to orange if unpaid
                    borderColor: eventColor, // Set the border color to orange if unpaid
                    extendedProps: {
                        id: loan.id,
                        borrower: loan.borrower,
                        initial_amount: loan.initial_amount,
                        interest_percentage: loan.interest_percentage,
                        payment_terms: loan.payment_terms,
                        payment_per_month: loan.payment_per_month,
                        mode_of_payment: loan.mode_of_payment,
                        date: loan.date, // Loan date
                        status: loan.status // Loan status
                    }
                };
            });

            // Initialize FullCalendar
            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['interaction', 'dayGrid', 'bootstrap'],
                themeSystem: 'bootstrap',
                initialView: 'dayGridMonth',
                editable: false,
                events: events,

                eventClick: function(info) {
                    var eventObj = info.event.extendedProps;

                    // Populate the modal with borrower information
                    document.getElementById('borrowerName').innerText = eventObj.borrower;
                    document.getElementById('loanAmount').innerText = formatCurrency(eventObj
                        .initial_amount);
                    document.getElementById('loanInterest').innerText = eventObj.interest_percentage +
                        '%';
                    document.getElementById('paymentTerms').innerText = eventObj.payment_terms +
                        ' months';
                    document.getElementById('paymentPerMonth').innerText = formatCurrency(eventObj
                        .payment_per_month);
                    document.getElementById('modeOfPayment').innerText = eventObj.mode_of_payment;
                    document.getElementById('loanDate').innerText = formatDate(eventObj
                        .date); // Format the loan date

                    // Show the modal
                    var myModal = new bootstrap.Modal(document.getElementById('loanModal'), {
                        keyboard: false
                    });
                    myModal.show();
                }
            });

            calendar.render();
        });
    </script>

    </div>
    </div>
</body>

</html>
