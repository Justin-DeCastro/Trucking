<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<style>

</style>
@include('Components.Home.Header')

<style>
    .contact-list__item {
        display: flex;
        align-items: center;
    }

    .contact-list__item-icon {
        margin-right: 8px;
    }

    .contact-numbers a {
        margin-left: 15px;
        white-space: nowrap;
    }

    .bullet {
        margin: 0 10px;
        color: #2789FF;
    }

    .top-contact {
        justify-content: flex-end;
    }
</style>

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
                <div class="top-contact d-flex align-items-center">
                    <ul class="contact-list d-flex">
                        <li class="contact-list__item d-flex align-items-center mr-4">
                            <span class="contact-list__item-icon flex-center">
                                <i class="fas fa-envelope-open"></i>
                            </span>
                            <a class="contact-list__link" href="mailto:gdrlogisticinc@outlook.com">
                                gdrlogisticinc@outlook.com
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="top-contact d-flex align-items-center">
                    <ul class="contact-list d-flex">
                        <li class="contact-list__item d-flex align-items-center text-right">
                            <span class="contact-list__item-icon flex-center">
                                <i class="fas fa-phone"></i>
                            </span>
                            <div class="contact-numbers d-flex align-items-center">
                                <a class="contact-list__link" href="tel:0917-7166-132">0917-7166-132</a>
                                <span class="bullet">&bull;</span>
                                <a class="contact-list__link" href="tel:0919-345-5535">0919-345-5535</a>
                                <span class="bullet">&bull;</span>
                                <a class="contact-list__link" href="tel:0917-819-1571">0917-819-1571</a>
                            </div>
                        </li>
                    </ul>
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
                        <h2 class="breadcrumb__title">Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact py-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="section-heading style-left">
                        <h4 class="section-heading__title">Office Location</h4>
                        <p class="section-heading__desc">
                            We are strategically located to enhance our service and cater to your needs more effectively
                        </p>
                    </div>
                    <div class="maps-section">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d679210.3204244621!2d-106.17199977396204!3d48.31890268219341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5322d7d0ee4ea833%3A0x64bc3ea0742c4cc7!2zRm9ydCBQZWNrIEluZGlhbiBSZXNlcnZhdGlvbiwgRm9ydCBQZWNrIFJlc2VydmF0aW9uLCDgpq7gpqjgp43gpp_gpr7gpqjgpr4sIOCmruCmvuCmsOCnjeCmleCmv-CmqCDgpq_gp4HgppXgp43gpqTgprDgpr7gprfgp43gpp_gp43gprA!5e0!3m2!1sbn!2sbd!4v1706419877952!5m2!1sbn!2sbd"
                            style="border:0;" width="100%" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-heading style-left">
                        <h4 class="section-heading__title">Get In Touch</h4>
                        <p class="section-heading__desc">
                            Provides specialized delivery services for packages, documents, and other items from one
                            location.
                        </p>
                    </div>
                    <form  action="{{ route('contact.store') }}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <div class="input--group">
                                    <input class="form-control form--control" name="name" type="text" value=""
                                        placeholder="">
                                    <label class="form--label">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <div class="input--group">
                                    <input class="form-control form--control" name="email" type="email" value=""
                                        placeholder="">
                                    <label class="form--label">Enter Email Address</label>
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <div class="input--group">
                                    <input class="form-control form--control" name="subject" type="text" value=""
                                        placeholder="">
                                    <label class="form--label">Enter Your Subject</label>
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <div class="input--group">
                                    <textarea class="form-control form--control" name="message" wrap="off"
                                        placeholder=""></textarea>
                                    <label class="form--label textarea-label" for="your-message">Enter Your
                                        Message</label>
                                </div>
                            </div>
                            <div class="mb-3">




                            <div class="col-sm-12">
                                <button class="btn btn--base w-100" type="submit">
                                    <span class="btn--icon"><i class="icon-View-More"></i></span>
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
