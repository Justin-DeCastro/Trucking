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


    @include('Components.Admin.Navbar')
    @include('Components.Admin.Driver_Sidebar')

                <div class="body-wrapper">
                    <div class="bodywrapper__inner">
                        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                            <h6 class="page-title p-2">Delay Report</h6>
                            <div
                                class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                            </div>
                        </div>
                        <section>
                            <div
                                style="max-width: 900px; margin: 0 auto; padding: 20px; background: #ffffff; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
                               <div style="text-align: center; margin-bottom: 40px;">
                                <!-- Logo -->
                                <img src="Home/GDR logo.png" alt="Logo" style="max-width: 150px; margin-bottom: 20px;">

                                <h3 style="margin-top: 0; color: #333; font-size: 28px; font-weight: bold;">Delay Form</h3>
                                <p style="color: #666; font-size: 16px;">Fill out the form below to arrange for the transportation of your goods.</p>
                            </div>
                                @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                                <form action="{{ route('delay.submit') }}" method="post" enctype="multipart/form-data"
                                    id="myForm">
                                    @csrf

                                    <!-- Delay Report Information -->
                                    <div style="display: flex; flex-direction: column; gap: 20px; margin-bottom: 30px;">
                                        <!-- Top Section: Trip Ticket, Driver Name, Plate Number -->
                                        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
                                            <!-- Trip Ticket -->
                                            <div style="flex: 1; min-width: 220px;">
                                                <label for="trip_ticket"
                                                    style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">
                                                    Trip Ticket
                                                </label>
                                                <input
                                                    style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                    id="trip_ticket" name="trip_ticket" type="text"
                                                    placeholder="Enter Trip Ticket Number" required>
                                            </div>

                                            <!-- Driver Name (Read-only) -->
                                            <div style="flex: 1; min-width: 220px;">
                                                <label for="driver_name"
                                                    style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">
                                                    Driver Name
                                                </label>
                                                <input
                                                    style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                    id="driver_name" name="driver_name" type="text"
                                                    value="{{ auth()->user()->name }}" readonly>
                                            </div>

                                            <!-- Plate Number -->
                                            <div style="flex: 1; min-width: 220px;">
                                                <label for="plate_number"
                                                    style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">
                                                    Plate Number
                                                </label>
                                                <input
                                                    style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                    id="plate_number" name="plate_number" type="text"
                                                    placeholder="Enter Plate Number" required>
                                            </div>

                                            <!-- Date -->
                                            <div style="flex: 1; min-width: 220px;">
                                                <label for="date"
                                                    style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Date</label>
                                                <input
                                                    style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                    id="date" name="date" type="datetime-local"
                                                    placeholder="Enter Date" readonly>
                                            </div>
                                        </div>

                                        <!-- Delay Details -->
                                        <!-- Delay Duration -->
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="delay_duration"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">
                                                Delay Duration
                                            </label>
                                            <input
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                id="delay_duration" name="delay_duration" type="text"
                                                placeholder="Enter Delay Duration (e.g., 2 hours)" required>
                                        </div>

                                        <!-- Cause of Delay -->
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="delay_cause"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">
                                                Cause of Delay
                                            </label>
                                            <select id="delay_cause" name="delay_cause"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                onchange="showOtherField()">
                                                <option value="">Select Cause of Delay</option>
                                                <option value="Traffic">Traffic</option>
                                                <option value="Road Construction">Road Construction</option>
                                                <option value="Accidents">Accidents</option>
                                                <option value="Mechanical Breakdown">Mechanical Breakdown</option>
                                                <option value="Weather Conditions">Weather Conditions</option>
                                                <option value="Fuel Shortages">Fuel Shortages</option>
                                                <option value="Driver Fatigue">Driver Fatigue</option>
                                                <option value="Vehicle Inspections">Vehicle Inspections</option>
                                                <option value="Tire Issues">Tire Issues</option>
                                                <option value="Paperwork Problems">Paperwork Problems</option>
                                                <option value="Overloading">Overloading</option>
                                                <option value="Weight Restrictions">Weight Restrictions</option>
                                                <option value="Other">Other</option>
                                            </select>

                                            <!-- <div style="flex: 1; min-width: 220px;">
                                                <label for="delay_cause"
                                                    style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">
                                                    Cause of Delay
                                                </label>
                                                <textarea id="delay_cause" name="delay_cause" rows="4" placeholder="Enter Cause of Delay"
                                                    style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"></textarea>
                                            </div> -->


                                            <!-- Hidden text field that appears when 'Other' is selected -->
                                            <input type="text" id="other_cause" name="other_cause"
                                                placeholder="Enter Other Cause of Delay"
                                                style="display: none; margin-top: 10px; width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" />
                                        </div>
                                        <!-- Additional Notes -->
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="additional_notes"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">
                                                Additional Notes
                                            </label>
                                            <textarea id="additional_notes" name="additional_notes" rows="4" placeholder="Enter any additional notes"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"></textarea>
                                        </div>

                                        <!-- Submit Button -->
                                        <div style="margin-top: 20px;">
                                            <button type="submit"
                                                style="padding: 12px 20px; border-radius: 6px; border: none; background-color: #007bff; color: #fff; font-weight: bold; cursor: pointer;">
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
    document.addEventListener('DOMContentLoaded', function() {
        // Set the date input to today's date and make it non-editable
        var today = new Date().toISOString().slice(0, 16); // Format date as yyyy-mm-ddThh:mm
        document.getElementById('date').value = today;
    });
</script>

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

<script>
    function showOtherField() {
        var delayCause = document.getElementById("delay_cause");
        var otherCauseField = document.getElementById("other_cause");

        // Show the text field when 'Other' is selected
        if (delayCause.value === "Other") {
            otherCauseField.style.display = "block";
        } else {
            otherCauseField.style.display = "none";
        }
    }
</script>

</html>
