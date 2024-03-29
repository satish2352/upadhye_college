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
@if(session('msg'))
    <div id="autoCloseAlert" class="alert alert-danger">
        {{ session('msg') }}
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                var alert = document.getElementById('autoCloseAlert');
                alert.style.display = 'none';
            }, 3000); // 5000 milliseconds = 5 seconds, adjust as needed
        });
    </script>
@endif



            <form class="login-form" action="{{ route('registration') }}" method="post">
                    @csrf
                    <div class="input-box mb--30">
                        <label for="">Select Course</label>
                        <select name="course_id" id="">
                            <option value="3">XI-XII SCIENCE</option>
                            <option value="1">ENGINEERING</option>
                            <option value="2">MEDICAL</option>
                        </select>
                    </div>
                    <div class="input-box mb--30">
                        <label for="">Select Admission Mode</label>
                        <select name="admission_mode" id="">
                            <option value="new-admission">New Admission</option>
                            <option value="register_student">Register Student</option>
                        </select>
                    </div>
                    <div class="input-box mb--30">
                        <input type="text" name="fullname" placeholder="Enter Full Name" />
                    </div>
                    <div class="input-box mb--30">
                        <input type="email" name="email" placeholder="Enter Email" />
                    </div>
                    <div class="input-box mb--30">
                        <input type="text" name="address" placeholder="Enter Address" />
                    </div>
                    <div class="input-box mb--30">
                        <input type="text" name="mobile_number" placeholder="Enter Mobile No" />
                    </div>
                    <div class="input-box">
                        <input id="checkbox-2" type="checkbox" name="agree_to_receive_sms_call" value="1" />
                        <label for="checkbox-2">I Agree to receive SMS/Call from Upadhye College</label>
                    </div>
                    <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                        <span>Register</span>
                    </button>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>

</section>

@endsection