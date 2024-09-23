<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

@include('Components.Admin.Header')
<style>
     .btn-custom {
        background-color: #007bff; /* Custom background color */
        color: #fff; /* White text color */
        border: none; /* Remove border */
        border-radius: 6px; /* Rounded corners */
        padding: 12px 20px; /* Padding for button */
        font-size: 16px; /* Font size */
        font-weight: bold; /* Bold text */
        margin: 0 10px; /* Horizontal margin between buttons */
        transition: background-color 0.3s ease, transform 0.2s ease; /* Smooth transition for color and transform */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow effect */
    }

    .btn-custom:hover {
        background-color: #0056b3; /* Darker background color on hover */
        transform: scale(1.05); /* Slightly enlarge the button */
    }

    .btn-custom:focus {
        outline: none; /* Remove focus outline */
    }
     .card-custom {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .card-custom:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        transform: translateY(-4px);
    }

    .card-header-custom {
        background-color: #007bff;
        color: #ffffff;
        padding: 15px;
        border-bottom: 1px solid #0056b3;
        border-radius: 8px 8px 0 0;
    }

    .card-body-custom {
        padding: 20px;
    }

    .card-title-custom {
        font-size: 1.25rem;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .card-text-custom {
        font-size: 1rem;
        color: #333;
    }

    .card-custom img {
        max-width: 100%;
        height: auto;
        border-bottom: 1px solid #e0e0e0;
        border-radius: 8px 8px 0 0;
    }

    .btn-custom {
        background-color: #007bff;
        color: #ffffff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        font-size: 1rem;
        cursor: pointer;
    }

    .btn-custom:hover {
        background-color: #0056b3;
    }

    .radio-custom {
        position: absolute;
        top: 15px;
        left: 15px;
        background-color: #ffffff;
        border: 2px solid #007bff;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        cursor: pointer;
    }

    .radio-custom:checked {
        background-color: #007bff;
        border-color: #007bff;
    }
</style>


<body>

    <div class="page-wrapper default-version">

        @include('Components.Admin.CoordinatorSidebar')
        @include('Components.Admin.Navbar')

        <div class="container-fluid px-3 px-sm-0">
            <div class="body-wrapper">
                <div class="bodywrapper__inner">
                    <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                        <header class="card-header">
                            <h1 class="page-title"><strong></strong></h1>
                        </header>

                        <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        </div>
                    </div>

                    <section style="padding: 60px 0;">
                        <div
                            style="max-width: 900px; margin: 0 auto; padding: 20px; background: #ffffff; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
                            <div style="text-align: center; margin-bottom: 40px;">
                                <div style="text-align: right;">
                                    <button type="button" onclick="downloadForm()" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">
                                        Download Form
                                    </button>
                                </div>
                                <!-- Logo -->
                                <img src="{{ asset('Home/GDR logo.png') }}" alt="Logo" style="max-width: 150px; margin-bottom: 20px;">

                                <h3 style="margin-top: 0; color: #333; font-size: 28px; font-weight: bold;">Booking Form</h3>
                                <p style="color: #666; font-size: 16px;">Fill out the form below to arrange for the transportation of your goods.</p>
                            </div>
                            <form action="{{ route('booking.submit') }}" method="post" enctype="multipart/form-data" id="myForm">
                                @csrf

                                <!-- Sender Information -->
                                <div style="display: flex; flex-direction: column; gap: 20px; margin-bottom: 30px;">
                                    <!-- Top Section: Trip Ticket, Driver Name, and Plate Number -->
                                    <div style="display: flex; flex-wrap: wrap; gap: 20px;">


                                        <!-- Driver Name -->
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="driver_name" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">
                                                Driver Name
                                            </label>
                                            <select id="driver_name" name="driver_name"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
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
                                            <label for="Date" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Date</label>
                                            <input
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                id="date" name="date" type="datetime-local" placeholder="Enter Date" required>
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="accountName"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Account Name</label>
                                            <input
                                                type="text"
                                                id="accountName"
                                                name="sender_name"
                                                list="accountNames"
                                                placeholder="Type or select an account name"
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                required
                                            >
                                            <datalist id="accountNames">
                                                @foreach ($senderNames as $name)
                                                    <option value="{{ $name }}">
                                                @endforeach
                                            </datalist>
                                        </div>


                                        </div>

                                    <div style="flex: 1; min-width: 220px;">
                                        <label for="product_name"
                                            style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Product
                                            Name</label>
                                        <textarea id="product_name" name="product_name" rows="4" placeholder="Enter Product Name"
                                            style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"></textarea>
                                    </div>
                                    <!-- Bottom Section: Client Name, Transport Mode, Shipping Type -->
                                    <div style="display: flex; flex-wrap: wrap; gap: 20px;">


                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="transport-mode" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">
                                                Transport Mode
                                            </label>
                                            <select id="transport-mode" name="transport_mode" style="padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1); width: 100%;">
                                                <option value="Land Transport" selected>Land Transport</option>
                                                <option value="Water Transport">Water Transport</option>
                                            </select>
                                        </div>





                                    </div>
                                </div>


                                <!-- Item List and Weight -->
                                <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
                                    <!-- Delivery Type Dropdown -->
                                    <div style="flex: 1; min-width: 220px;">
                                        <label for="delivery_type" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Delivery Type</label>
                                        <select style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="delivery_type" name="delivery_type" required>
                                            <option value="">Select delivery type</option>
                                            <option value="Direct Delivery">Direct Delivery</option>
                                            <option value="Warehouse Transfer">Warehouse Transfer</option>
                                            <option value="Backload">Backload</option>
                                        </select>
                                    </div>

                                    <!-- Journey Type Dropdown -->
                                    <div style="flex: 1; min-width: 220px;">
                                        <label for="journey_type" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Journey Type</label>
                                        <select style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="journey_type" name="journey_type" required>
                                            <option value="">Select journey type</option>
                                            <option value="Interisland">Interisland</option>
                                            <option value="Local">Local</option>
                                        </select>
                                    </div>
                                </div>


                                    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="destination"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Destination
                                               </label>
                                            <input
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                id="destination" name="destination" type="text"
                                                placeholder="Enter Destination Address" required>
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="origin"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Origin</label>
                                            <input
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                id="origin" name="origin" type="text"
                                                placeholder="Enter Origin Address" required>
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="eta"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">ETA
                                               </label>
                                            <input
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                id="ceta" name="eta" type="text"
                                                placeholder="Enter Estimated Travel  Arrival" required>
                                        </div>

                                    </div>


                                <div style="margin-bottom: 40px;">
                                    <h4 style="color: #333; font-size: 24px; font-weight: bold; margin-bottom: 20px;">
                                       Consignee Information</h4>
                                    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="consignee_name"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Consignee
                                                Name</label>
                                            <input
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                id="consignee_name" name="consignee_name" type="text"
                                                placeholder="Enter Consignee's Name" required>
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="consignee_address"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Address</label>
                                            <input
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                id="consignee_address" name="consignee_address" type="text"
                                                placeholder="Enter Consignee Address" required>
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="consignee_email"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Consignee
                                                Email</label>
                                            <input
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                id="consignee_email" name="consignee_email" type="email"
                                                placeholder="Enter Consignee Email" required>
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="consignee_mobile"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Consignee
                                                Mobile</label>
                                            <input
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                id="consignee_mobile" name="consignee_mobile" type="tel"
                                                placeholder="Enter Consignee Mobile Number" required>
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="consignee_city"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">City</label>
                                            <input
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                id="consignee_city" name="consignee_city" type="text"
                                                placeholder="Enter City" required>
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="consignee_province"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Province</label>
                                            <input
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                id="consignee_province" name="consignee_province" type="text"
                                                placeholder="Enter Province" required>
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="consignee_barangay"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Barangay</label>
                                            <input
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                id="consignee_barangay" name="consignee_barangay" type="text"
                                                placeholder="Enter Barangay" required>
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="consignee_building_type"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Building
                                                Type</label>
                                            <input
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                id="consignee_building_type" name="consignee_building_type"
                                                type="text" placeholder="Enter Building Type" required>
                                        </div>
                                    </div>
                                </div>


                                <!-- Merchant Information -->
                                <div style="margin-bottom: 40px;">
                                    <h4 style="color: #333; font-size: 24px; font-weight: bold; margin-bottom: 20px;">
                                        Merchant Information</h4>
                                    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="merchant_name"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Merchant
                                                Name</label>
                                            <input
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                id="merchant_name" name="merchant_name" type="text"
                                                placeholder="Enter Merchant's Name" required>
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="merchant_address"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Address</label>
                                            <input
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                id="merchant_address" name="merchant_address" type="text"
                                                placeholder="Enter Merchant Address" required>
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="merchant_email"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Merchant
                                                Email</label>
                                            <input
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                id="merchant_email" name="merchant_email" type="email"
                                                placeholder="Enter Merchant Email" required>
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="merchant_mobile"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Merchant
                                                Mobile</label>
                                            <input
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                id="merchant_mobile" name="merchant_mobile" type="tel"
                                                placeholder="Enter Merchant Mobile Number" required>
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="merchant_city"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">City</label>
                                            <input
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                id="merchant_city" name="merchant_city" type="text"
                                                placeholder="Enter City" required>
                                        </div>
                                        <div style="flex: 1; min-width: 220px;">
                                            <label for="merchant_province"
                                                style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Province</label>
                                            <input
                                                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                                                id="merchant_province" name="merchant_province" type="text"
                                                placeholder="Enter Province" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="container mt-4">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">Select Truck Type</label>
                                            <div id="checkboxContainer" class="form-check">
                                                <!-- Checkboxes will be dynamically inserted here -->
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <!-- Container for displaying data in card format -->
                                            <div id="dataContainer" class="row">
                                                <!-- Cards will be dynamically inserted here -->
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- Submit Button -->
                                <div style="text-align: center;">
                                    <button
                                        style="padding: 12px 24px; background-color: #007bff; color: #fff; border: none; border-radius: 6px; cursor: pointer; font-size: 16px; font-weight: bold; transition: background-color 0.3s ease;"
                                        type="submit">
                                        Submit Booking
                                    </button>
                                </div>

                            </form>



                        </div>
                    </section>

                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
   <script>
   document.addEventListener('DOMContentLoaded', () => {
    const checkboxContainer = document.getElementById('checkboxContainer');
    const dataContainer = document.getElementById('dataContainer');

    const companyVehicles = @json($vehicles->map(function ($vehicle) {
        return [
            'id' => $vehicle->id,
            'name' => $vehicle->truck_name,
            'description' =>'Capacity: ' . $vehicle->truck_capacity . ' Available: ' . $vehicle->quantity
        ];
    }));

    // Group subcontractors by company_name
    const subcontractors = @json($subcontractors->map(function ($sub) {
        return [
            'id' => $sub->id,
            'name' => $sub->company_name,
            'description' =>'Capacity: '. $sub->truck_capacity . ' Plate Number: ' . $sub->plate_number
        ];
    }));

    const groupedSubcontractors = subcontractors.reduce((acc, sub) => {
        if (!acc[sub.name]) acc[sub.name] = [];
        acc[sub.name].push(sub); // Add subcontractors under the same company name
        return acc;
    }, {});

    // Create checkboxes
    const options = [
        { value: 'company-vehicles', label: 'Company Vehicles' },
        { value: 'subcontractors', label: 'Subcontractors' }
    ];

    options.forEach(option => {
        const checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.className = 'form-check-input';
        checkbox.id = option.value;
        checkbox.value = option.value;
        checkbox.addEventListener('change', handleCheckboxChange);

        const label = document.createElement('label');
        label.className = 'form-check-label';
        label.htmlFor = option.value;
        label.innerText = option.label;

        const div = document.createElement('div');
        div.className = 'form-check';
        div.id = option.value + '-container'; // Unique container for each checkbox
        div.appendChild(checkbox);
        div.appendChild(label);

        // Append a placeholder div for showing subcontractors' names when selected
        const subcontractorList = document.createElement('div');
        subcontractorList.id = option.value + '-list';
        subcontractorList.style.display = 'none'; // Hidden by default
        subcontractorList.className = 'ms-3 mt-2'; // Some margin for positioning

        div.appendChild(subcontractorList);

        checkboxContainer.appendChild(div);
    });

    function handleCheckboxChange(event) {
        const selectedCheckbox = event.target.value;
        const subcontractorList = document.getElementById('subcontractors-list');

        if (selectedCheckbox === 'subcontractors') {
            if (event.target.checked) {
                // Show the list of unique company names below the Subcontractor checkbox
                subcontractorList.innerHTML = Object.keys(groupedSubcontractors).map(companyName => `
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="selected_company" value="${companyName}">
                        <label class="form-check-label">${companyName}</label>
                    </div>
                `).join('');
                subcontractorList.style.display = 'block';

                // Add event listener to the company name checkboxes
                subcontractorList.querySelectorAll('input').forEach(companyCheckbox => {
                    companyCheckbox.addEventListener('change', function () {
                        if (this.checked) {
                            // Clear the dataContainer and display the subcontractors under the selected company name
                            const selectedCompanySubcontractors = groupedSubcontractors[this.value];
                            dataContainer.innerHTML = generateCards(selectedCompanySubcontractors, 'subcontractor');
                        }
                    });
                });
            } else {
                // Hide the list and clear data container if unchecked
                subcontractorList.style.display = 'none';
                dataContainer.innerHTML = '';
            }
        } else if (selectedCheckbox === 'company-vehicles') {
            if (event.target.checked) {
                // Display company vehicles directly
                dataContainer.innerHTML = generateCards(companyVehicles, 'vehicle');
            } else {
                // Clear data if unchecked
                dataContainer.innerHTML = '';
            }
        }
    }

    function generateCards(items, type) {
        return items.map(item => `
            <div class="col-md-4 mb-4">
                <div class="card position-relative" style="width: 100%;">
                    <input class="form-check-input position-absolute top-0 end-0 m-2" type="radio" name="truck_type" id="${type}-${item.id}" value="${item.id}">
                    <div class="card-body">
                        <h5 class="card-title">${item.name}</h5>
                        <p class="card-text">
                            ${item.description}
                        </p>
                    </div>
                </div>
            </div>
        `).join('');
    }
});


   </script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/jquery-3.7.1.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/vendor/bootstrap-toggle.min.js"></script>

    <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast.min.css" rel="stylesheet">
    <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast_custom.css" rel="stylesheet">
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/iziToast.min.js"></script>


    <script>
        function downloadForm() {
            // Get the form element
            const form = document.getElementById('myForm');

            // Capture the form's HTML content
            const formHtml = form.outerHTML;

            // Capture the links to external stylesheets
            const stylesheets = Array.from(document.querySelectorAll('link[rel="stylesheet"]'))
                .map(link => `<link rel="stylesheet" href="${link.href}">`)
                .join('\n');

            // Construct the full HTML content
            const fullHtml = `
                <html>
                <head>
                    ${stylesheets}
                </head>
                <body>${formHtml}</body>
                </html>
            `;

            // Create a Blob (file) with the HTML content
            const blob = new Blob([fullHtml], { type: 'text/html' });
            const link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.download = 'form.html'; // The file name

            // Trigger the download
            link.click();
        }
    </script>


    <!-- Your other script inclusions -->

    <script>
        document.getElementById('delivery_type').addEventListener('change', function() {
            var vehicleChoices = document.getElementById('vehicleChoices');
            if (this.value === 'Backload') {
                vehicleChoices.style.display = 'none';
            } else {
                vehicleChoices.style.display = 'flex';
            }
        });
    </script>




    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/moment.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/daterangepicker.min.js"></script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/nicEdit.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/select2.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>



 <script>
    document.getElementById('delivery_type').addEventListener('change', function() {
        var vehicleChoices = document.getElementById('vehicleChoices');
        if (this.value === 'Backload') {
            vehicleChoices.style.display = 'none';
        } else {
            vehicleChoices.style.display = 'flex';
        }
    });
</script>

    <script>
        if ($('li').hasClass('active')) {
            $('#sidebar__menuWrapper').animate({
                scrollTop: eval($(".active").offset().top - 320)
            }, 500);
        }
    </script>
    <script>
        document.getElementById('accountName').addEventListener('change', function() {
            var account = this.value;

            if (account) {
                // Fetch data based on the selected account
                fetch(`/api/getAccountData?account=${account}`)
                    .then(response => response.json())
                    .then(data => {
                        // Clear previous entries
                        var form = document.getElementById('myForm');

                        // Populate form fields for each entry
                        data.forEach(item => {
                            // Set values for various fields

                            document.getElementById('driver_name').value = item.driver_name || '';
                            document.getElementById('plate_number').value = item.plate_number || '';
                            document.getElementById('date').value = item.date || '';
                            document.getElementById('product_name').value = item.product_name || '';
                            document.getElementById('delivery_type').value = item.delivery_type || '';
                            document.getElementById('journey_type').value = item.journey_type || '';
                            // Populate other fields similarly

                            document.getElementById('consignee_name').value = item.consignee_name || '';
                            document.getElementById('consignee_address').value = item.consignee_address || '';
                            document.getElementById('consignee_email').value = item.consignee_email || '';
                            document.getElementById('consignee_mobile').value = item.consignee_mobile || '';
                            document.getElementById('consignee_city').value = item.consignee_city || '';
                            document.getElementById('consignee_province').value = item.consignee_province || '';
                            document.getElementById('consignee_barangay').value = item.consignee_barangay || '';
                            document.getElementById('consignee_building_type').value = item.consignee_building_type || '';
                            document.getElementById('merchant_name').value = item.merchant_name || '';
                            document.getElementById('merchant_address').value = item.merchant_address || '';
                            document.getElementById('merchant_email').value = item.merchant_email || '';
                            document.getElementById('merchant_mobile').value = item.merchant_mobile || '';
                            document.getElementById('merchant_city').value = item.merchant_city || '';
                            document.getElementById('merchant_province').value = item.merchant_province || '';
                            document.getElementById('truck_type').value = item.truck_type || '';
                            // Populate other fields similarly
                        });
                    })
                    .catch(error => console.error('Error fetching data:', error));
            }
        });
        </script>



    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/search.js"></script>


</body>

</html>
