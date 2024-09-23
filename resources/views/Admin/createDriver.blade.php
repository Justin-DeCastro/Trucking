<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<head>
    @include('Components.Admin.Header')
</head>
<style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }

    .form-outline {
        position: relative;
        margin-bottom: 1.5rem;
    }

    .form-control {
        border-radius: 0.5rem;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        transition: box-shadow 0.2s ease-in-out;
    }

    .form-control:focus {
        box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.5);
    }

    .form-label {
        margin-bottom: 0.5rem;
        font-weight: 500;
    }

    .text-danger {
        font-size: 0.875rem;
        color: #dc3545;
        margin-top: 0.25rem;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 0.5rem;
        padding: 0.75rem 1.25rem;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-block {
        display: block;
        width: 100%;
    }

    .container {
        max-width: 1200px;
    }

    .vh-100 {
        min-height: 100vh;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .hidden {
        display: none;
    }
</style>

<body>

    @include('Components.Admin.Navbar')
    @include('Components.Admin.Sidebar')
    <!-- sidebar end -->

    <div class="container py-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="text-center mb-3">
                <img src="{{ asset('Home/GDR Logo.png') }}" alt="Shopee Xpress Logo" style="width: 20%; height: auto;">
            </div>
            <div class="text-center">
                <h4> Create an Account</h4>
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5">
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf

                    <!-- Name input -->
                    <div class="form-outline">
                        <label class="form-label" for="form1Example1">Name</label>
                        <input type="text" id="form1Example1" name="name" class="form-control form-control-lg"
                            required />

                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email input -->
                    <div class="form-outline">
                        <label class="form-label" for="form1Example2">Email address</label>
                        <input type="email" id="form1Example2" name="email" class="form-control form-control-lg"
                            required />

                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div class="form-outline">
                        <label class="form-label" for="form1Example3">Password</label>
                        <input type="password" id="form1Example3" name="password" class="form-control form-control-lg"
                            required />

                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Confirm Password input -->
                    <div class="form-outline">
                        <label class="form-label" for="form1Example4">Confirm Password</label>
                        <input type="password" id="form1Example4" name="password_confirmation"
                            class="form-control form-control-lg" required />

                    </div>

                    <!-- Role selection -->
                    <div class="form-outline">
                        <label class="form-label" for="formRole">Role</label>
                        <select id="formRole" name="role" class="form-control form-control-lg" required>
                            <option value="" disabled selected>Select your role</option>
                            <option value="accounting">Accounting</option>
                            <option value="courier">Driver</option>
                            {{-- <option value="admin">Admin</option> --}}
                        </select>

                        @error('role')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Conditional fields for couriers -->
                    <div id="courierFields" class="hidden">
                        <!-- Driver's License upload -->
                        <div class="form-outline">
                            <label class="form-label" for="form1Example5">Upload Driver's License</label>
                            <input type="file" id="form1Example5" name="driver_license"
                                class="form-control form-control-lg" />

                            @error('driver_license')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Driver Image upload -->
                        <div class="form-outline">
                            <label class="form-label" for="form1Example6">Upload Driver Image</label>
                            <input type="file" id="form1Example6" name="driver_image"
                                class="form-control form-control-lg" />

                            @error('driver_image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Driver's License Number -->
                        <div class="form-outline">
                            <label class="form-label" for="form1Example10">Driver's License Number</label>
                            <input type="text" id="form1Example10" name="license_number"
                                class="form-control form-control-lg" />

                            @error('license_number')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-outline">
                            <label class="form-label" for="form1Example7">License Expiration Date</label>
                            <input type="date" id="form1Example7" name="license_expiration"
                                class="form-control form-control-lg" />

                            @error('license_number')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Contact Number -->
                        <div class="form-outline">
                            <label class="form-label" for="form1Example8">Contact Number</label>
                            <input type="text" id="form1Example8" name="contact_number"
                                class="form-control form-control-lg" />

                            @error('contact_number')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Address -->
                        <div class="form-outline">
                            <label class="form-label" for="form1Example9">Address</label>
                            <input type="text" id="form1Example9" name="address"
                                class="form-control form-control-lg" />

                            @error('address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>

                </form>


            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script>
        document.getElementById('formRole').addEventListener('change', function() {
            var role = this.value;
            var courierFields = document.getElementById('courierFields');

            if (role === 'courier') {
                courierFields.classList.remove('hidden');
            } else {
                courierFields.classList.add('hidden');
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>

</body>

</html>
