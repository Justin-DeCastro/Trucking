
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
            <h3 style="margin-top: 0; color: #333; font-size: 28px; font-weight: bold;">Trucking Booking Form</h3>
            <p style="color: #666; font-size: 16px;">Fill out the form below to arrange for the transportation of your goods.</p>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
    @csrf

    <!-- Sender Information -->
    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
        <div style="flex: 1; min-width: 220px;">
            <label for="sender-name" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Sender Name</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="sender-name" name="sender_name" type="text" placeholder="Enter Sender's Name" required>
        </div>
        <div style="flex: 1; min-width: 220px;">
            <label for="pickup-address" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Pickup Address</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="pickup-address" name="pickup_address" type="text" placeholder="Enter Pickup Address" required>
        </div>
        <div style="flex: 1; min-width: 220px;">
            <label for="sender-phone" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Sender Phone Number</label>
            <input
                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                id="sender-phone"
                name="sender_phone"
                type="number"
                placeholder="Enter Sender's Phone Number"
                required
                maxlength="11"
                pattern="\d{11}"
                title="Please enter exactly 11 digits."
            >
        </div>
    </div>

    <!-- Item List and Weight -->
    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
        <div style="flex: 1; min-width: 220px;">
            <label for="item-list" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Item List (Picture)</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="item-list" name="item_list" type="file" accept="image/*" required>
        </div>
        <div style="flex: 1; min-width: 220px;">
            <label for="weight" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Est. Weight</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="weight" name="weight" type="number" step="0.01" placeholder="Enter Weight (kg)" required>
        </div>
        <div style="flex: 1; min-width: 220px;">
            <label for="quantity" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Quantity</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="quantity" name="quantity" type="number" step="0.01" placeholder="Enter Quantity" required>
        </div>
    </div>

    <!-- List of Products -->
    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
        <div style="flex: 1; min-width: 220px;">
            <label for="list-of-products" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">List of Products</label>
            <textarea style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="list-of-products" name="list_of_products" placeholder="Enter List of Products" rows="4" required></textarea>
        </div>
    </div>

    <!-- Receiver Information -->
    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
        <div style="flex: 1; min-width: 220px;">
            <label for="receiver-name" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Receiver Name</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="receiver-name" name="receiver_name" type="text" placeholder="Enter Receiver's Name" required>
        </div>
        <div style="flex: 1; min-width: 220px;">
            <label for="receiver-email" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Receiver Email</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="receiver-email" name="receiver_email" type="email" placeholder="Enter Receiver's Email" required>
        </div>
        <div style="flex: 1; min-width: 220px;">
            <label for="receiver-phone" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Receiver Phone Number</label>
            <input
                style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);"
                id="receiver-phone"
                name="receiver_phone"
                type="number"
                placeholder="Enter Receiver's Phone Number"
                required
                maxlength="11"
                pattern="\d{11}"
                title="Please enter exactly 11 digits."
            >
        </div>
    </div>

    <!-- Drop-off Address -->
    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
        <div style="flex: 1; min-width: 220px;">
            <label for="dropoff-address" style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Drop-off Address</label>
            <input style="width: 100%; padding: 12px; border-radius: 6px; border: 1px solid #ddd; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);" id="dropoff-address" name="dropoff_address" type="text" placeholder="Enter Drop-off Address" required>
        </div>
    </div>

    <!-- Truck Type -->
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
