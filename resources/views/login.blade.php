<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title>Trucking Management System in Cabuyao, Philippines</title>
    <meta name="description" content="Efficient trucking management system in Cabuyao, Philippines, specializing in inbound and outbound logistics, real-time tracking, and operational efficiency.">
    <meta name="keywords" content="Trucking Management System, Cabuyao, Philippines, inbound logistics, outbound logistics, transportation, tracking, fleet management">
    <meta name="author" content="GDR Trucking System">
    <link rel="icon" href="Home/GDR Logo.png" type="image/png">
    <!-- Include SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.8); /* Add a slight white background for better readability */
            padding: 20px;
            border-radius: 10px;
        }
        .form-container img {
            max-width: 70%;
            height: auto;
            margin-bottom: 50px; /* Adjust as needed */
        }
        .form-container form {
            width: 70%;
        }
    </style>
</head>

<body>
    <section class="vh-100 d-flex align-items-center">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6 form-container">
                    <img src="Home/GDR logo.png"
                        class="img-fluid" alt="Phone image">

                        <h6> Welcome! Sign in to your account. </h6>
                        <br>
                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form1Example13" name="email" class="form-control form-control-lg" required />
                            <label class="form-label" for="form1Example13">Email address</label>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form1Example23" name="password" class="form-control form-control-lg" required />
                            <label class="form-label" for="form1Example23">Password</label>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block" style="background-color: #283891">Sign in</button>

                        <!-- Sign up link -->
                        <!-- <div class="text-center mt-4">
                            <p>Don't have an account? <a href="{{ route('register') }}" class="btn btn-outline-primary">Sign up</a></p>
                        </div> -->
                    </form>

                </div>
            </div>
        </div>
    </section>
    @if (session('swal'))
    <script>
        Swal.fire({
            title: "{{ session('swal.title') }}",
            text: "{{ session('swal.text') }}",
            icon: "{{ session('swal.icon') }}"
        });
    </script>
@endif


    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</body>
</html>
