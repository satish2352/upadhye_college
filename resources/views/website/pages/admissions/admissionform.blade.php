@extends('website.layout.master')
 @section('content')       
<section>
<div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-start">
                    <div class="page-title">
                        <h3 class="title">Admission</h3>
                    </div>
                    <nav class="edu-breadcrumb-nav">
                        <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                            <li class="breadcrumb-item active" aria-current="page">Admission Form</li>
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

<div class="login-register-page-wrapper edu-section-gap bg-color-white">
    <div class="container checkout-page-style">
        <div class="row g-5">
            {{-- <div class="col-lg-6">
                <div class="login-form-box">
                    <h3 class="mb-30">Login</h3>
                    <form class="login-form" action="#">
                        <div class="input-box mb--30">
                            <input type="text" placeholder="Username or Email" />
                        </div>
                        <div class="input-box mb--30">
                            <input type="password" placeholder="Password" />
                        </div>
                        <div class="comment-form-consent input-box mb--30">
                            <input id="checkbox-1" type="checkbox" />
                            <label for="checkbox-1">Remember Me</label>
                        </div>
                        <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                            <span>Login</span>
                        </button>
                        <div class="input-box">
                            <a href="#" class="lost-password">Lost your password?</a>
                        </div>

                    </form>
                </div>
            </div> --}}
           
        </div>
    </div>
</div>


</section>
@endsection