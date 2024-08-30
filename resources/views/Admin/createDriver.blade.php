<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

@include('Components.Admin.Header')

<body>


    <div class="page-wrapper default-version">

        @include('Components.Admin.Sidebar')
        <!-- sidebar end -->

        <!-- navbar-wrapper start -->
        <nav class="navbar-wrapper bg--dark d-flex flex-wrap">
            <div class="navbar__left">
                <button type="button" class="res-sidebar-open-btn me-3"><i class="las la-bars"></i></button>

            </div>
            <div class="navbar__right">
                <ul class="navbar__action-list">


                    <li class="dropdown d-flex profile-dropdown">
                        <button type="button" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="navbar-user">
                                <span class="navbar-user__thumb"><img
                                        src="Home/user-avatar-male-5.png"
                                        alt="image"></span>
                                <span class="navbar-user__info">
                                    <span class="navbar-user__name">Admin</span>
                                </span>
                                <span class="icon"><i class="fas fa-chevron-circle-down"></i></span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">


                            <a href="logout"
                                class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon fas fa-sign-out-alt"></i>
                                <span class="dropdown-menu__caption">Logout</span>
                            </a>
                        </div>
                        <button type="button" class="breadcrumb-nav-open ms-2 d-none">
                            <i class="fas fa-sliders-h"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
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
</head>
<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                        class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Name input -->
                        <div class="form-outline">
                            <input type="text" id="form1Example1" name="name" class="form-control form-control-lg" required />
                            <label class="form-label" for="form1Example1">Name</label>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email input -->
                        <div class="form-outline">
                            <input type="email" id="form1Example2" name="email" class="form-control form-control-lg" required />
                            <label class="form-label" for="form1Example2">Email address</label>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline">
                            <input type="password" id="form1Example3" name="password" class="form-control form-control-lg" required />
                            <label class="form-label" for="form1Example3">Password</label>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password input -->
                        <div class="form-outline">
                            <input type="password" id="form1Example4" name="password_confirmation" class="form-control form-control-lg" required />
                            <label class="form-label" for="form1Example4">Confirm Password</label>
                        </div>

                        <!-- Role selection -->
                        <div class="form-outline">
                            <select id="formRole" name="role" class="form-control form-control-lg" required>
                                <option value="" disabled selected>Select your role</option>
                                <option value="accounting">Accounting</option>
                                <option value="courier">Courier</option>
                                <option value="admin">Admin</option>
                            </select>
                            <label class="form-label" for="formRole">Role</label>
                            @error('role')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Conditional fields for couriers -->
                        <div id="courierFields" class="hidden">
                            <!-- Driver's License upload -->
                            <div class="form-outline">
                                <input type="file" id="form1Example5" name="driver_license" class="form-control form-control-lg" />
                                <label class="form-label" for="form1Example5">Upload Driver's License</label>
                                @error('driver_license')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Driver Image upload -->
                            <div class="form-outline">
                                <input type="file" id="form1Example9" name="driver_image" class="form-control form-control-lg" />
                                <label class="form-label" for="form1Example9">Upload Driver Image</label>
                                @error('driver_image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Driver's License Number -->
                            <div class="form-outline">
                                <input type="text" id="form1Example6" name="license_number" class="form-control form-control-lg" />
                                <label class="form-label" for="form1Example6">Driver's License Number</label>
                                @error('license_number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Contact Number -->
                            <div class="form-outline">
                                <input type="text" id="form1Example7" name="contact_number" class="form-control form-control-lg" />
                                <label class="form-label" for="form1Example7">Contact Number</label>
                                @error('contact_number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Address -->
                            <div class="form-outline">
                                <input type="text" id="form1Example8" name="address" class="form-control form-control-lg" />
                                <label class="form-label" for="form1Example8">Address</label>
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>

                        {{-- <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="{{ route('login') }}" role="button">
                            <i class="fas fa-sign-in-alt"></i> Already have an account?
                        </a> --}}

                    </form>

                </div>
            </div>
        </div>
    </section>

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
</body>
</html>
