<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

@include('Components.Home.Header')

<body>

     <div class="preloader">
        @include('Components.Home.Preloader')
    </div>


    <div class="body-overlay"></div>

    <div class="sidebar-overlay"></div>

    <a class="scroll-top"><i class="fas fa-angle-double-up"></i></a>

   
    @include('Components.Home.Navbar')


    <section class="breadcrumb bg-img mb-0"
      data-background-image="Home/gdr_header.png">
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

    <section class="tracking py-120">
        <div class="container">
            <div class="section-heading">
                <h3 class="section-heading__title">Order Tracking</h3>
                <p class="section-heading__desc">
                    Provides specialized delivery services for packages, documents, and other items from one location to
                    another.
                </p>
            </div>
            <div class="track-form">
            <form action="{{ route('track.booking') }}" method="get">
    <div class="input-group form-group flex-align mb-0">
        <input class="form-control form--control" name="trackingNumber" type="text" placeholder="Enter Your Tracking Number" required>
        <button class="input-group-text btn btn--base" type="submit">
            <span class="btn--icon"> <i class="icon-Product-Box"> </i> </span>
            Track Now
        </button>
    </div>
</form>

</div>

        </div>
    </section>


    @include('Components.Home.Footer')



@include('Components.Home.Script')
</body>

</html>