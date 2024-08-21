
<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


@include('Components.Home.Header')

<body>
    
    <div class="preloader">
        <div class="loader-p"></div>
    </div>

    <div class="body-overlay"></div>

    <div class="sidebar-overlay"></div>

    <a class="scroll-top"><i class="fas fa-angle-double-up"></i></a>

        <div class="header-top d-lg-block d-none">
    <div class="container">
        <div class="top-header-wrapper d-flex justify-content-between align-items-center flex-wrap">
            <div class="top-contact">
                <ul class="contact-list">
                    <li class="contact-list__item flex-align">
                        <span class="contact-list__item-icon flex-center">
                            <i class="las la-envelope-open"></i>                        </span>
                        <a class="contact-list__link" href="/cdn-cgi/l/email-protection#e1929491918e9395a1828e94938884938d8083cf828e8c">
                            <span class="__cf_email__" data-cfemail="8bf8fefbfbe4f9ffcbe8e4fef9e2eef9e7eae9a5e8e4e6">[email&#160;protected]</span>
                        </a>
                    </li>
                    <li class="contact-list__item flex-align">
                        <span class="contact-list__item-icon flex-center">
                            <i class="las la-phone"></i>                        </span>
                        <a class="contact-list__link" href="tel:+44 123 1217">
                            +44 123 1217
                        </a>
                    </li>
                </ul>
            </div>
                            <div class="top-button d-flex justify-content-between align-items-center flex-wrap">
                    <div class="top-button d-flex justify-content-between align-items-center flex-wrap">
                        <div class="language-box">
    <div class="custom--dropdown">
        <div class="custom--dropdown__selected dropdown-list__item">
                                                <div class="thumb">
                        <img src="https://script.viserlab.com/courierlab/demo/placeholder-image/50x50" alt="image">
                    </div>
                    <span class="text">English</span>
                                                                                                                        </div>
        <ul class="dropdown-list">
                                                                            <li class="dropdown-list__item langSel" data-value="hn">
                        <div class="thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/placeholder-image/50x50" alt="image">
                        </div>
  in                  <span class="text">Hindi</span>
                    </li>
                                                                <li class="dropdown-list__item langSel" data-value="bn">
                        <div class="thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/placeholder-image/50x50" alt="image">
                        </div>
                        <span class="text">Bangla</span>
                    </li>
                                                                <li class="dropdown-list__item langSel" data-value="sp">
                        <div class="thumb">
                            <img src="https://script.viserlab.com/courierlab/demo/placeholder-image/50x50" alt="image">
                        </div>
                        <span class="text">Spanish</span>
                    </li>
                                    </ul>
    </div>
</div>
                    </div>
                </div>
                    </div>
    </div>
</div>
@include('Components.Home.Navbar')


            <section class="breadcrumb bg-img mb-0"
    data-background-image="https://script.viserlab.com/courierlab/demo/assets/images/frontend/breadcrumb/6652bfd4ad66b1716699092.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb__wrapper">
                    <h2 class="breadcrumb__title">Order Tracking</h2>
                </div>
            </div>
        </div>
    </div>
</section>
    
<section style="padding: 60px 0; background: #f9f9f9;">
    <div style="max-width: 900px; margin: 0 auto; padding: 20px; background: #ffffff; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
        <div style="text-align: center; margin-bottom: 40px;">
            <h3 style="margin-top: 0; color: #333; font-size: 28px; font-weight: bold;">RUBIX Form</h3>
            <p style="color: #666; font-size: 16px;">Fill out the form below to arrange for the transportation of your goods.</p>
        </div>
        <form action="{{ route('booking.submit') }}" method="post" enctype="multipart/form-data">
    @csrf

    <!-- Sender Information -->
    <div style="display: flex; flex-direction: column; gap: 20px; margin-bottom: 30px;">
        <!-- Top Section: Driver Name and Plate Number -->
        <div style="display: flex; gap: 20px;">
            <div style="flex: 1; min-width: 220px;">
                <label for="driver_name" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Driver Name</label>
                <select id="driver_name" name="driver_name" style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div style="flex: 1; min-width: 220px;">
                <label for="plate_number" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Plate Number</label>
                <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="plate_number" name="plate_number" type="text" placeholder="Enter Plate Number" required>
            </div>
            <div style="flex: 1; min-width: 220px;">
                <label for="plate_number" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Date</label>
                <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="date" name="date" type="datetime-local" placeholder="Enter Date" required>
            </div>
        </div>

        <!-- Bottom Section: Client Name, Transport Mode, Shipping Type -->
        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
            <div style="flex: 1; min-width: 220px;">
                <label for="sender_name" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Client Name</label>
                <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="sender_name" name="sender_name" type="text" placeholder="Enter Sender's Name" required>
            </div>
            <div style="flex: 1; min-width: 220px;">
                <label for="transport_mode" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Transport Mode</label>
                <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="transport_mode" name="transport_mode" type="text" placeholder="Enter transport mode" required>
            </div>
            <div style="flex: 1; min-width: 220px;">
                <label for="shipping_type" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Shipping Type</label>
                <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="shipping_type" name="shipping_type" type="text" placeholder="Enter shipping type" required>
            </div>
        </div>
    </div>


    <!-- Item List and Weight -->
    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
    <div style="flex: 1; min-width: 220px;">
            <label for="pickup-address" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Delivery Type</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="delivery_type" name="delivery_type" type="text" placeholder="Enter delivery type" required>
        </div>

        <div style="flex: 1; min-width: 220px;">
            <label for="quantity" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Journey Type</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="journey_type" name="journey_type" type="text" placeholder="Enter journey type" required>
        </div>
    </div>

    <div style="margin-bottom: 40px;">
                <h4 style="color: #333; font-size: 24px; font-weight: bold; margin-bottom: 20px;">Consignee Information</h4>
                <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
                    <div style="flex: 1; min-width: 220px;">
                        <label for="consignee_name" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Consignee Name</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="consignee_name" name="consignee_name" type="text" placeholder="Enter Consignee's Name" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="consignee_address" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Address</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="consignee_address" name="consignee_address" type="text" placeholder="Enter Consignee Address" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="consignee_email" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Consignee Email</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="consignee_email" name="consignee_email" type="email" placeholder="Enter Consignee Email" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="consignee_mobile" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Consignee Mobile</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="consignee_mobile" name="consignee_mobile" type="tel" placeholder="Enter Consignee Mobile Number" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="consignee_city" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">City</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="consignee_city" name="consignee_city" type="text" placeholder="Enter City" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="consignee_province" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Province</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="consignee_province" name="consignee_province" type="text" placeholder="Enter Province" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="consignee_barangay" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Barangay</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="consignee_barangay" name="consignee_barangay" type="text" placeholder="Enter Barangay" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="consignee_building_type" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Building Type</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="consignee_building_type" name="consignee_building_type" type="text" placeholder="Enter Building Type" required>
                    </div>
                </div>
            </div>

            <!-- Merchant Information -->
            <div style="margin-bottom: 40px;">
                <h4 style="color: #333; font-size: 24px; font-weight: bold; margin-bottom: 20px;">Merchant Information</h4>
                <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
                    <div style="flex: 1; min-width: 220px;">
                        <label for="merchant_name" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Merchant Name</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="merchant_name" name="merchant_name" type="text" placeholder="Enter Merchant's Name" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="merchant_address" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Address</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="merchant_address" name="merchant_address" type="text" placeholder="Enter Merchant Address" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="merchant_email" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Merchant Email</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="merchant_email" name="merchant_email" type="email" placeholder="Enter Merchant Email" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="merchant_mobile" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Merchant Mobile</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="merchant_mobile" name="merchant_mobile" type="tel" placeholder="Enter Merchant Mobile Number" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="merchant_city" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">City</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="merchant_city" name="merchant_city" type="text" placeholder="Enter City" required>
                    </div>
                    <div style="flex: 1; min-width: 220px;">
                        <label for="merchant_province" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Province</label>
                        <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="merchant_province" name="merchant_province" type="text" placeholder="Enter Province" required>
                    </div>
                </div>
            </div>
            <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; padding: 20px;">
    @foreach($vehicles as $vehicle)
        <div style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; width: calc(33.333% - 20px); box-sizing: border-box; text-align: center; position: relative;">
            <!-- Radio Input -->
            <input type="radio" id="truck-{{ $vehicle->id }}" name="truck_type" value="{{ $vehicle->id }}" style="position: absolute; top: 10px; right: 10px; width: 20px; height: 20px; cursor: pointer;" required>

            <!-- Card Content -->
            <label for="truck-{{ $vehicle->id }}" style="display: block; cursor: pointer; padding-right: 30px;">
                <!-- Conditional Image -->
                @php
                    $imagePath = 'Home/icons8-truck-48.png'; // Default image

                    if ($vehicle->truck_name === '6 Wheeler tractor heads') {
                        $imagePath = 'Home/tractorhead-removebg-preview.png';
                    } elseif ($vehicle->truck_name === '6 Wheeler closed vans') {
                        $imagePath = 'Home/closedvans-removebg-preview.png';
                    } elseif ($vehicle->truck_name === '10 Wheeler Aluminum wing van') {
                        $imagePath = 'Home/10wheeler-removebg-preview.png';
                    }
                @endphp
                <img src="{{ asset($imagePath) }}" alt="Truck Moving" style="width: 150px; height: auto; margin-bottom: 10px;">

                <!-- Truck Details -->
                <h3 style="font-size: 1.2em; margin-bottom: 10px; color: #333;">{{ $vehicle->truck_name }}</h3>
                <p style="font-size: 1em; color: #666;">{{ $vehicle->truck_capacity }}</p>
                <p style="font-size: 1em; color: #666; margin-top: 10px;">Available: {{ $vehicle->quantity }}</p>
            </label>
        </div>
    @endforeach
</div>
    <!-- Submit Button -->
    <div style="text-align: center;">
        <button style="padding: 12px 24px; background-color: #007bff; color: #fff; border: none; border-radius: 6px; cursor: pointer; font-size: 16px; font-weight: bold; transition: background-color 0.3s ease;" type="submit">
            Submit Booking
        </button>
    </div>
</form>


    </div>
</section>





    

   
    
    
   
@if(session('success'))
    <script>
        Swal.fire({
            imageUrl: "Home/GDR.jpg",
            imageHeight: 100,
            imageAlt: "A tall image",
            title: 'Success!',
            text: '{{ session('success') }}'
        });
    </script>
    @endif
    @include('Components.Home.Footer')
    @include('Components.Home.Script')
</body>

</html>
