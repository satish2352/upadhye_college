@extends('website.layout.master')
@section('content')       
<section>
<div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-start">
                    <div class="page-title">
                        <h3 class="title">Contact Me</h3>
                    </div>
                    <nav class="edu-breadcrumb-nav">
                        <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Me</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="{{ asset('website/assets/images/shapes/shape-11-07.png')}}" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-2">
                    <img src="{{ asset('website/assets/images/shapes/shape-01-02.png')}}" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-3">
                    <img src="{{ asset('website/assets/images/shapes/shape-03.png')}}" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-4">
                    <img src="{{ asset('website/assets/images/shapes/shape-13-12.png')}}" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-5">
                    <img src="{{ asset('website/assets/images/shapes/shape-36.png')}}" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-6">
                    <img src="{{ asset('website/assets/images/shapes/shape-05-07.png')}}" alt="Shape Thumb" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="edu-contact-me-area eduvibe-contact-me-top about-me-1 edu-section-gap bg-color-white">
    <div class="container eduvibe-animated-shape">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="pr--75 pr_lg--0 pr_md--0 pr_sm--0" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="thumbnail">
                        <img class="w-100" src="{{ asset('website/assets/images/contact/contact-me/contact-1.jpg')}}" alt="About Images">
                        <div class="content-overlay">
                            <h4 class="title">Don’t Be Hesitate To <br /> Contact With Me</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title text-start mb--45" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">Contact Us</span>
                    <h3 class="title">Send Us A Message</h3>
                </div>

                <form class="rnt-contact-form rwt-dynamic-form row" id="contact-form" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="Name*">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Email*">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" name="subject" id="subject" placeholder="Subject">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" placeholder="Your comment"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button class="rn-btn edu-btn" type="submit">
                            <span>Submit Now</span><i class="icon-arrow-right-line-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-image shape-image-1">
                <img src="{{ asset('website/assets/images/shapes/shape-03-11.png')}}" alt="Shape Thumb">
            </div>
            <div class="shape-image shape-image-2">
                <img src="{{ asset('website/assets/images/shapes/shape-15-06.png')}}" alt="Shape Thumb">
            </div>
            <div class="shape-image shape-image-3">
                <img src="{{ asset('website/assets/images/shapes/shape-09-03.png')}}" alt="Shape Thumb">
            </div>
            <div class="shape-image shape-image-4">
                <img src="{{ asset('website/assets/images/shapes/shape-03-02.png')}}" alt="Shape Thumb">
            </div>
        </div>
    </div>
</div>


<div class="edu-contact-address eduvibe-contact-me-bottom contact-address-bottom-shape edu-section-gapBottom">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">LOCATIONS</span>
                    <h3 class="title">Our Offices Locations</h3>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--20">

            <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="contact-address-card-2">
                    <div class="inner">
                        <div class="icon">
                            <img src="{{ asset('website/assets/images/icons/whatsapp.png')}}" alt="Icon Images">
                        </div>
                        <div class="content">
                            <h6 class="title">Contact</h6>
                            <p><span class="subtitle">Mobile: </span><a href="tel:(+88)-1990-6886"> (+88) - 1990 - 6886</a></p>
                            <p><span class="subtitle">Hotline: </span><a href="tel:1800-1102">1800 - 1102</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                <div class="contact-address-card-2">
                    <div class="inner">
                        <div class="icon">
                            <img src="{{ asset('website/assets/images/icons/house.png')}}" alt="Icon Images">
                        </div>
                        <div class="content">
                            <h6 class="title">Address</h6>
                            <p>1800 Abbot Kinney Blvd. <br /> Unit D & E Venice</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                <div class="contact-address-card-2">
                    <div class="inner">
                        <div class="icon">
                            <img src="{{ asset('website/assets/images/icons/linkedin.png')}}" alt="Icon Images">
                        </div>
                        <div class="content">
                            <h6 class="title">Working Hours</h6>
                            <p><span class="subtitle">Monday - Friday: </span><span class="text">09:00 - 20:00</span></p>
                            <p><span class="subtitle">Sunday & Saturday: </span><span class="text">10:30 - 22:00</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-image shape-image-1">
                <img src="{{ asset('website/assets/images/shapes/shape-03-01.png')}}" alt="Shape Thumb">
            </div>
            <div class="shape-image shape-image-2">
                <img src="{{ asset('website/assets/images/shapes/shape-05-06.png')}}" alt="Shape Thumb">
            </div>
            <div class="shape-image shape-image-3">
                <img src="{{ asset('website/assets/images/shapes/shape-14-03.png')}}" alt="Shape Thumb">
            </div>
            <div class="shape-image shape-image-4">
                <img src="{{ asset('website/assets/images/shapes/shape-05-03.png')}}" alt="Shape Thumb">
            </div>
            <div class="shape-image shape-image-5">
                <img src="{{ asset('website/assets/images/shapes/shape-01-03.png')}}" alt="Shape Thumb">
            </div>
        </div>
    </div>
    <div class="bg-shape-image d-none d-lg-block">
        <img src="{{ asset('website/assets/images/contact/contact-me/bg-image-27.jpg')}}" alt="Shape Images">
    </div>
</div>
</section>
@endsection