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
                        <h2 class="breadcrumb__title">Blogs</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog py-120">
    <div class="container">
        <div class="row gy-4 justify-content-center">
            <!-- Blog Item 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-item section-bg">
                    <div class="blog-item__thumb">
                        <a class="blog-item__thumb-link"
                            href="https://gdrlogistics.ph/blog/optimizing-trucking-efficiency-with-gdr-logistics">
                            <img class="fit-image"
                                src="Home/logistics.webp"
                                alt="Optimizing Trucking Efficiency">
                        </a>
                    </div>
                    <div class="blog-item__content">
                        <ul class="text-list flex-between gap-3">
                            <li class="text-list__item fs-14">
                                <span class="text-list__item-icon text--base me-1">
                                    <i class="las la-clock"></i>
                                </span>
                                1 month ago
                            </li>
                        </ul>
                        <h6 class="blog-item__title">
                            <a class="blog-item__title-link border-effect"
                                href="https://gdrlogistics.ph/blog/optimizing-trucking-efficiency-with-gdr-logistics">
                                Optimizing Trucking Efficiency with GDR Logistics
                            </a>
                        </h6>
                        <div class="blog-item__btn">
                            <a href="https://gdrlogistics.ph/blog/optimizing-trucking-efficiency-with-gdr-logistics"
                                class="blog-item__btn-link">
                                Read More <span class="blog-item__icon">
                                    <i class="las la-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Item 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-item section-bg">
                    <div class="blog-item__thumb">
                        <a class="blog-item__thumb-link"
                            href="https://gdrlogistics.ph/blog/sustainable-trucking-practices-at-gdr-logistics">
                            <img class="fit-image"
                                src="Home/logistics.webp"
                                alt="Sustainable Trucking Practices">
                        </a>
                    </div>
                    <div class="blog-item__content">
                        <ul class="text-list flex-between gap-3">
                            <li class="text-list__item fs-14">
                                <span class="text-list__item-icon text--base me-1">
                                    <i class="las la-clock"></i>
                                </span>
                                2 months ago
                            </li>
                        </ul>
                        <h6 class="blog-item__title">
                            <a class="blog-item__title-link border-effect"
                                href="https://gdrlogistics.ph/blog/sustainable-trucking-practices-at-gdr-logistics">
                                Sustainable Trucking Practices at GDR Logistics
                            </a>
                        </h6>
                        <div class="blog-item__btn">
                            <a href="https://gdrlogistics.ph/blog/sustainable-trucking-practices-at-gdr-logistics"
                                class="blog-item__btn-link">
                                Read More <span class="blog-item__icon">
                                    <i class="las la-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Item 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-item section-bg">
                    <div class="blog-item__thumb">
                        <a class="blog-item__thumb-link"
                            href="https://gdrlogistics.ph/blog/technology-and-innovation-in-trucking">
                            <img class="fit-image"
                                src="Home/logistics.webp"
                                alt="Technology and Innovation">
                        </a>
                    </div>
                    <div class="blog-item__content">
                        <ul class="text-list flex-between gap-3">
                            <li class="text-list__item fs-14">
                                <span class="text-list__item-icon text--base me-1">
                                    <i class="las la-clock"></i>
                                </span>
                                3 months ago
                            </li>
                        </ul>
                        <h6 class="blog-item__title">
                            <a class="blog-item__title-link border-effect"
                                href="https://gdrlogistics.ph/blog/technology-and-innovation-in-trucking">
                                Technology and Innovation in Trucking at GDR Logistics
                            </a>
                        </h6>
                        <div class="blog-item__btn">
                            <a href="https://gdrlogistics.ph/blog/technology-and-innovation-in-trucking"
                                class="blog-item__btn-link">
                                Read More <span class="blog-item__icon">
                                    <i class="las la-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Item 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-item section-bg">
                    <div class="blog-item__thumb">
                        <a class="blog-item__thumb-link"
                            href="https://gdrlogistics.ph/blog/the-future-of-trucking-in-the-philippines">
                            <img class="fit-image"
                                src="Home/logistics.webp"
                                alt="The Future of Trucking">
                        </a>
                    </div>
                    <div class="blog-item__content">
                        <ul class="text-list flex-between gap-3">
                            <li class="text-list__item fs-14">
                                <span class="text-list__item-icon text--base me-1">
                                    <i class="las la-clock"></i>
                                </span>
                                4 months ago
                            </li>
                        </ul>
                        <h6 class="blog-item__title">
                            <a class="blog-item__title-link border-effect"
                                href="https://gdrlogistics.ph/blog/the-future-of-trucking-in-the-philippines">
                                The Future of Trucking in the Philippines
                            </a>
                        </h6>
                        <div class="blog-item__btn">
                            <a href="https://gdrlogistics.ph/blog/the-future-of-trucking-in-the-philippines"
                                class="blog-item__btn-link">
                                Read More <span class="blog-item__icon">
                                    <i class="las la-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Item 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-item section-bg">
                    <div class="blog-item__thumb">
                        <a class="blog-item__thumb-link"
                            href="https://gdrlogistics.ph/blog/understanding-trucking-regulations-in-the-philippines">
                            <img class="fit-image"
                                src="Home/logistics.webp"
                                alt="Understanding Trucking Regulations">
                        </a>
                    </div>
                    <div class="blog-item__content">
                        <ul class="text-list flex-between gap-3">
                            <li class="text-list__item fs-14">
                                <span class="text-list__item-icon text--base me-1">
                                    <i class="las la-clock"></i>
                                </span>
                                5 months ago
                            </li>
                        </ul>
                        <h6 class="blog-item__title">
                            <a class="blog-item__title-link border-effect"
                                href="https://gdrlogistics.ph/blog/understanding-trucking-regulations-in-the-philippines">
                                Understanding Trucking Regulations in the Philippines
                            </a>
                        </h6>
                        <div class="blog-item__btn">
                            <a href="https://gdrlogistics.ph/blog/understanding-trucking-regulations-in-the-philippines"
                                class="blog-item__btn-link">
                                Read More <span class="blog-item__icon">
                                    <i class="las la-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Item 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-item section-bg">
                    <div class="blog-item__thumb">
                        <a class="blog-item__thumb-link"
                            href="https://gdrlogistics.ph/blog/efficiency-and-safety-in-modern-trucking">
                            <img class="fit-image"
                                src="Home/logistics.webp"
                                alt="Efficiency and Safety">
                        </a>
                    </div>
                    <div class="blog-item__content">
                        <ul class="text-list flex-between gap-3">
                            <li class="text-list__item fs-14">
                                <span class="text-list__item-icon text--base me-1">
                                    <i class="las la-clock"></i>
                                </span>
                                6 months ago
                            </li>
                        </ul>
                        <h6 class="blog-item__title">
                            <a class="blog-item__title-link border-effect"
                                href="https://gdrlogistics.ph/blog/efficiency-and-safety-in-modern-trucking">
                                Efficiency and Safety in Modern Trucking
                            </a>
                        </h6>
                        <div class="blog-item__btn">
                            <a href="https://gdrlogistics.ph/blog/efficiency-and-safety-in-modern-trucking"
                                class="blog-item__btn-link">
                                Read More <span class="blog-item__icon">
                                    <i class="las la-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="pt-60" aria-label="Page navigation example">
    </nav>
</section>



    @include('Components.Home.Footer')



    @include('Components.Home.Script')
</body>

</html>
