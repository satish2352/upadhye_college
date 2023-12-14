@extends('website.layout.master')
 @section('content')       
<section>
<div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-start">
                    <div class="page-title">
                        <h3 class="title">Courses</h3>
                    </div>
                    <nav class="edu-breadcrumb-nav">
                        <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                            <li class="breadcrumb-item active" aria-current="page">All Courses</li>
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

<div class="edu-course-area edu-section-gap bg-color-white">
    <div class="container">
        <div class="row g-5">

            {{-- <div class="col-lg-6 col-md-6 col-12">
                <div class="short-by">
                    <p>Showing <span>1-16</span> Of <span>42</span> Results</p>
                </div>
            </div> --}}

            {{-- <div class="col-lg-6 col-md-6 col-12">
                <div class="edu-search-box-wrapper text-start text-md-end">
                    <div class="edu-search-box">
                        <form action="#">
                            <input type="text" placeholder="Search Course...">
                            <button class="search-button"><i class="icon-search-line"></i></button>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div>

        <div class="row g-5 mt--10">

            <!-- Start Single Card  -->
            <div class="col-12 col-sm-12 col-xl-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-card card-type-3 radius-small">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="course-details.html">
                                <img class="w-100" src="{{ asset('website/assets/images/course/course-01/11th12th.jpg')}}" alt="Course Thumb">
                            </a>
                            <div class="wishlist-top-right">
                                <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                            </div>
                            <div class="top-position status-group left-bottom">
                                <span class="eduvibe-status status-03">XI & XII SCIENCE</span>
                            </div>
                        </div>
                        <div class="content">
                            <div class="card-top">
                                <div class="author-meta">
                                    <div class="author-thumb">
                                        <a href="instructor-profile.html">
                                            {{-- <img src="{{ asset('website/assets/images/instructor/instructor-small/instructor-2.jpg')}}" alt="Author Images">
                                            <span class="author-title">Nancy Phipps</span> --}}
                                        </a>
                                    </div>
                                </div>
                                <ul class="edu-meta meta-02">
                                    {{-- <li><i class="icon-file-list-3-line"></i>29 Lessons</li> --}}
                                </ul>
                            </div>
                            <h6 class="title"><a href="#">XI SCIENCE</a>
                            </h6>
                            <div class="card-bottom">
                                <div class="price-list price-style-02">
                                    {{-- <div class="price current-price">$29.99</div>
                                    <div class="price old-price">$39.99</div> --}}
                                </div>
                                <div class="edu-rating rating-default">
                                    <div class="rating">
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                    </div>
                                    {{-- <span class="rating-count">(18)</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-hover-action">
                        <div class="hover-content">
                            <div class="content-top">
                                <div class="top-status-bar">
                                    {{-- <span class="eduvibe-status status-03">XI Class</span> --}}
                                </div>
                                <div class="top-wishlist-bar">
                                    {{-- <button class="wishlist-btn"><i class="icon-Heart"></i></button> --}}
                                </div>
                            </div>

                            {{-- <h6 class="title"><a href="course-details.html">XI Class</a></h6> --}}

                            <p class="description">Tutorials, Unit tests, term end, and Annual examination are conducted Examination
                                the pattern of XI class. (Vacation)
                                The result of the annual examination of XI will be declared (as per the rules of
                                Maharashtra board) by taking on the Average of Marks of terminal examination
                                (A) Marks of annual examination
                                (B) Average Marks = Minimum average marks for passing in each</p>

                            {{-- <div class="price-list price-style-02">
                                <div class="price current-price">$29.99</div>
                                <div class="price old-price">$39.99</div>
                            </div> --}}

                            <div class="hover-bottom-content">
                                <div class="read-more-btn">
                                    <a class="edu-btn btn-medium btn-white" href="#">Enroll Now<i class="icon-arrow-right-line-right"></i></a>
                                </div>
                                <div class="author-meta">
                                    <div class="author-thumb">
                                        <a href="instructor-profile.html">
                                            {{-- <img src="{{ asset('website/assets/images/instructor/instructor-small/instructor-2.jpg')}}" alt="Author Images">
                                            <span class="author-title">Nancy Phipps</span> --}}
                                        </a>
                                    </div>
                                </div>
                                <ul class="edu-meta meta-02">
                                    {{-- <li><i class="icon-file-list-3-line"></i>29 Lessons</li> --}}
                                </ul>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->

               <!-- Start Single Card  -->
               <div class="col-12 col-sm-12 col-xl-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-card card-type-3 radius-small">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="course-details.html">
                                <img class="w-100" src="{{ asset('website/assets/images/course/course-01/11TH12TH(1).jpg')}}" alt="Course Thumb">
                            </a>
                            <div class="wishlist-top-right">
                                <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                            </div>
                            <div class="top-position status-group left-bottom">
                                <span class="eduvibe-status status-03">XI & XII SCIENCE</span>
                            </div>
                        </div>
                        <div class="content">
                            <div class="card-top">
                                <div class="author-meta">
                                    <div class="author-thumb">
                                        <a href="instructor-profile.html">
                                            {{-- <img src="{{ asset('website/assets/images/instructor/instructor-small/instructor-2.jpg')}}" alt="Author Images">
                                            <span class="author-title">Nancy Phipps</span> --}}
                                        </a>
                                    </div>
                                </div>
                                <ul class="edu-meta meta-02">
                                    {{-- <li><i class="icon-file-list-3-line"></i>29 Lessons</li> --}}
                                </ul>
                            </div>
                            <h6 class="title"><a href="#">XII Class</a>
                            </h6>
                            <div class="card-bottom">
                                <div class="price-list price-style-02">
                                    {{-- <div class="price current-price">$29.99</div>
                                    <div class="price old-price">$39.99</div> --}}
                                </div>
                                <div class="edu-rating rating-default">
                                    <div class="rating">
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                    </div>
                                    {{-- <span class="rating-count">(18)</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-hover-action">
                        <div class="hover-content">
                            <div class="content-top">
                                <div class="top-status-bar">
                                    {{-- <span class="eduvibe-status status-03">XI Class</span> --}}
                                </div>
                                <div class="top-wishlist-bar">
                                    {{-- <button class="wishlist-btn"><i class="icon-Heart"></i></button> --}}
                                </div>
                            </div>

                            {{-- <h6 class="title"><a href="course-details.html">XII Class</a></h6> --}}

                            <p class="description">A) Annual examination is conducted by the Maharashtra State Board of Secondary and higher
                                Secondary Education.
                                B) Tutorials, Unit Tests, Term-end Examination and practicals’s and preliminary exams are
                                conducted by the college throughout the academic year.
                                All tests are compulsory. Terms will not be granted if the attendance is below 80% in the
                                year.</p>

                            {{-- <div class="price-list price-style-02">
                                <div class="price current-price">$29.99</div>
                                <div class="price old-price">$39.99</div>
                            </div> --}}

                            <div class="hover-bottom-content">
                                <div class="read-more-btn">
                                    <a class="edu-btn btn-medium btn-white" href="#">Enroll Now<i class="icon-arrow-right-line-right"></i></a>
                                </div>
                                <div class="author-meta">
                                    <div class="author-thumb">
                                        <a href="instructor-profile.html">
                                            {{-- <img src="{{ asset('website/assets/images/instructor/instructor-small/instructor-2.jpg')}}" alt="Author Images">
                                            <span class="author-title">Nancy Phipps</span> --}}
                                        </a>
                                    </div>
                                </div>
                                <ul class="edu-meta meta-02">
                                    {{-- <li><i class="icon-file-list-3-line"></i>29 Lessons</li> --}}
                                </ul>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->

               <!-- Start Single Card  -->
               <div class="col-12 col-sm-12 col-xl-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-card card-type-3 radius-small">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="course-details.html">
                                <img class="w-100" src="{{ asset('website/assets/images/course/course-01/3ENGINEERING.jpg')}}" alt="Course Thumb">
                            </a>
                            <div class="wishlist-top-right">
                                {{-- <button class="wishlist-btn"><i class="icon-Heart"></i></button> --}}
                            </div>
                            <div class="top-position status-group left-bottom">
                                <span class="eduvibe-status status-03">ENGINEERING</span>
                            </div>
                        </div>
                        <div class="content">
                            <div class="card-top">
                                <div class="author-meta">
                                    <div class="author-thumb">
                                        <a href="instructor-profile.html">
                                            {{-- <img src="{{ asset('website/assets/images/instructor/instructor-small/instructor-2.jpg')}}" alt="Author Images">
                                            <span class="author-title">Nancy Phipps</span> --}}
                                        </a>
                                    </div>
                                </div>
                                <ul class="edu-meta meta-02">
                                    {{-- <li><i class="icon-file-list-3-line"></i>29 Lessons</li> --}}
                                </ul>
                            </div>
                            <h6 class="title"><a href="#">IIT-JEE (ADVANCED) </a>
                            </h6>
                            <div class="card-bottom">
                                <div class="price-list price-style-02">
                                    {{-- <div class="price current-price">$29.99</div>
                                    <div class="price old-price">$39.99</div> --}}
                                </div>
                                <div class="edu-rating rating-default">
                                    <div class="rating">
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                    </div>
                                    {{-- <span class="rating-count">(18)</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-hover-action">
                        <div class="hover-content">
                            <div class="content-top">
                                <div class="top-status-bar">
                                    {{-- <span class="eduvibe-status status-03">XI Class</span> --}}
                                </div>
                                <div class="top-wishlist-bar">
                                    {{-- <button class="wishlist-btn"><i class="icon-Heart"></i></button> --}}
                                </div>
                            </div>

                            {{-- <h6 class="title"><a href="course-details.html">IIT-JEE (ADVANCED) </a></h6> --}}

                            <p class="description">Based on a written test that will be objective & the syllabus is Science & Maths of Class IX & X Board.

                                Upadhye Engineering Division helps students to develop a solid foundation for competitive examinations like JEE (Main + Advanced), SAT, BITSAT, VITEEE, etc. It is one of Nashik’s best IIT JEE Main & Advanced Coaching Classes.</p>

                            {{-- <div class="price-list price-style-02">
                                <div class="price current-price">$29.99</div>
                                <div class="price old-price">$39.99</div>
                            </div> --}}

                            <div class="hover-bottom-content">
                                <div class="read-more-btn">
                                    <a class="edu-btn btn-medium btn-white" href="#">Enroll Now<i class="icon-arrow-right-line-right"></i></a>
                                </div>
                                <div class="author-meta">
                                    <div class="author-thumb">
                                        <a href="instructor-profile.html">
                                            {{-- <img src="{{ asset('website/assets/images/instructor/instructor-small/instructor-2.jpg')}}" alt="Author Images">
                                            <span class="author-title">Nancy Phipps</span> --}}
                                        </a>
                                    </div>
                                </div>
                                <ul class="edu-meta meta-02">
                                    {{-- <li><i class="icon-file-list-3-line"></i>29 Lessons</li> --}}
                                </ul>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->

            <!-- Start Single Card  -->
            <div class="col-12 col-sm-12 col-xl-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-card card-type-3 radius-small">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-details.html">
                                    <img class="w-100" src="{{ asset('website/assets/images/course/course-01/1ENGINEERING.jpg')}}" alt="Course Thumb">
                                </a>
                                <div class="wishlist-top-right">
                                    {{-- <button class="wishlist-btn"><i class="icon-Heart"></i></button> --}}
                                </div>
                                <div class="top-position status-group left-bottom">
                                    <span class="eduvibe-status status-03">ENGINEERING</span>
                                </div>
                            </div>
                            <div class="content">
                                <div class="card-top">
                                    <div class="author-meta">
                                        <div class="author-thumb">
                                            <a href="instructor-profile.html">
                                                {{-- <img src="{{ asset('website/assets/images/instructor/instructor-small/instructor-2.jpg')}}" alt="Author Images">
                                                <span class="author-title">Nancy Phipps</span> --}}
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="edu-meta meta-02">
                                        {{-- <li><i class="icon-file-list-3-line"></i>29 Lessons</li> --}}
                                    </ul>
                                </div>
                                <h6 class="title"><a href="#">JEE (MAINS) </a>
                                </h6>
                                <div class="card-bottom">
                                    <div class="price-list price-style-02">
                                        {{-- <div class="price current-price">$29.99</div>
                                        <div class="price old-price">$39.99</div> --}}
                                    </div>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                        </div>
                                        {{-- <span class="rating-count">(18)</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="card-hover-action">
                            <div class="hover-content">
                                <div class="content-top">
                                    <div class="top-status-bar">
                                        {{-- <span class="eduvibe-status status-03">XI Class</span> --}}
                                    </div>
                                    <div class="top-wishlist-bar">
                                        {{-- <button class="wishlist-btn"><i class="icon-Heart"></i></button> --}}
                                    </div>
                                </div>
    
                                {{-- <h6 class="title"><a href="course-details.html">JEE (MAINS)</a></h6> --}}
    
                                <p class="description">Based on a written test that will be objective & the syllabus is Science & Maths of Class IX & X Board.
    
                                    Upadhye Engineering Division helps students to develop a solid foundation for competitive examinations like JEE (Main + Advanced), SAT, BITSAT, VITEEE, etc. It is one of Nashik’s best IIT JEE Main & Advanced Coaching Classes.</p>
    
                                {{-- <div class="price-list price-style-02">
                                    <div class="price current-price">$29.99</div>
                                    <div class="price old-price">$39.99</div>
                                </div> --}}
    
                                <div class="hover-bottom-content">
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-medium btn-white" href="#">Enroll Now<i class="icon-arrow-right-line-right"></i></a>
                                    </div>
                                    <div class="author-meta">
                                        <div class="author-thumb">
                                            <a href="instructor-profile.html">
                                                {{-- <img src="{{ asset('website/assets/images/instructor/instructor-small/instructor-2.jpg')}}" alt="Author Images">
                                                <span class="author-title">Nancy Phipps</span> --}}
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="edu-meta meta-02">
                                        {{-- <li><i class="icon-file-list-3-line"></i>29 Lessons</li> --}}
                                    </ul>
                                </div>
                                
    
                            </div>
                        </div>
                    </div>
            </div>
            <!-- End Single Card  -->
            <!-- Start Single Card  -->
            <div class="col-12 col-sm-12 col-xl-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-card card-type-3 radius-small">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="course-details.html">
                                <img class="w-100" src="{{ asset('website/assets/images/course/course-01/2ENGINEERING.jpg')}}" alt="Course Thumb">
                            </a>
                            <div class="wishlist-top-right">
                                {{-- <button class="wishlist-btn"><i class="icon-Heart"></i></button> --}}
                            </div>
                            <div class="top-position status-group left-bottom">
                                <span class="eduvibe-status status-03">ENGINEERING</span>
                            </div>
                        </div>
                        <div class="content">
                            <div class="card-top">
                                <div class="author-meta">
                                    <div class="author-thumb">
                                        <a href="instructor-profile.html">
                                            {{-- <img src="{{ asset('website/assets/images/instructor/instructor-small/instructor-2.jpg')}}" alt="Author Images">
                                            <span class="author-title">Nancy Phipps</span> --}}
                                        </a>
                                    </div>
                                </div>
                                <ul class="edu-meta meta-02">
                                    {{-- <li><i class="icon-file-list-3-line"></i>29 Lessons</li> --}}
                                </ul>
                            </div>
                            <h6 class="title"><a href="#">MHT-CET </a>
                            </h6>
                            <div class="card-bottom">
                                <div class="price-list price-style-02">
                                    {{-- <div class="price current-price">$29.99</div>
                                    <div class="price old-price">$39.99</div> --}}
                                </div>
                                <div class="edu-rating rating-default">
                                    <div class="rating">
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                    </div>
                                    {{-- <span class="rating-count">(18)</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-hover-action">
                        <div class="hover-content">
                            <div class="content-top">
                                <div class="top-status-bar">
                                    {{-- <span class="eduvibe-status status-03">XI Class</span> --}}
                                </div>
                                <div class="top-wishlist-bar">
                                    {{-- <button class="wishlist-btn"><i class="icon-Heart"></i></button> --}}
                                </div>
                            </div>

                            {{-- <h6 class="title"><a href="course-details.html">MHT-CET</a></h6> --}}

                            <p class="description">Based on a written test that will be objective & the syllabus is Science & Maths of Class IX & X Board.

                                Upadhye Engineering Division helps students to develop a solid foundation for competitive examinations like JEE (Main + Advanced), SAT, BITSAT, VITEEE, etc. It is one of Nashik’s best IIT JEE Main & Advanced Coaching Classes.</p>

                            {{-- <div class="price-list price-style-02">
                                <div class="price current-price">$29.99</div>
                                <div class="price old-price">$39.99</div>
                            </div> --}}

                            <div class="hover-bottom-content">
                                <div class="read-more-btn">
                                    <a class="edu-btn btn-medium btn-white" href="#">Enroll Now<i class="icon-arrow-right-line-right"></i></a>
                                </div>
                                <div class="author-meta">
                                    <div class="author-thumb">
                                        <a href="instructor-profile.html">
                                            {{-- <img src="{{ asset('website/assets/images/instructor/instructor-small/instructor-2.jpg')}}" alt="Author Images">
                                            <span class="author-title">Nancy Phipps</span> --}}
                                        </a>
                                    </div>
                                </div>
                                <ul class="edu-meta meta-02">
                                    {{-- <li><i class="icon-file-list-3-line"></i>29 Lessons</li> --}}
                                </ul>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->

            <!-- Start Single Card  -->
            <div class="col-12 col-sm-12 col-xl-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-3 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img class="w-100" src="{{ asset('website/assets/images/course/course-01/neet.jpg')}}" alt="Course Thumb">
                                    </a>
                                    <div class="wishlist-top-right">
                                        {{-- <button class="wishlist-btn"><i class="icon-Heart"></i></button> --}}
                                    </div>
                                    <div class="top-position status-group left-bottom">
                                        <span class="eduvibe-status status-03">MEDICAL</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="card-top">
                                        <div class="author-meta">
                                            <div class="author-thumb">
                                                <a href="instructor-profile.html">
                                                    {{-- <img src="{{ asset('website/assets/images/instructor/instructor-small/instructor-2.jpg')}}" alt="Author Images">
                                                    <span class="author-title">Nancy Phipps</span> --}}
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="edu-meta meta-02">
                                            {{-- <li><i class="icon-file-list-3-line"></i>29 Lessons</li> --}}
                                        </ul>
                                    </div>
                                    <h6 class="title"><a href="#">NEET / AIIMS / CET </a>
                                    </h6>
                                    <div class="card-bottom">
                                        <div class="price-list price-style-02">
                                            {{-- <div class="price current-price">$29.99</div>
                                            <div class="price old-price">$39.99</div> --}}
                                        </div>
                                        <div class="edu-rating rating-default">
                                            <div class="rating">
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                            </div>
                                            {{-- <span class="rating-count">(18)</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="card-hover-action">
                                <div class="hover-content">
                                    <div class="content-top">
                                        <div class="top-status-bar">
                                            {{-- <span class="eduvibe-status status-03">XI Class</span> --}}
                                        </div>
                                        <div class="top-wishlist-bar">
                                            {{-- <button class="wishlist-btn"><i class="icon-Heart"></i></button> --}}
                                        </div>
                                    </div>
        
                                    {{-- <h6 class="title"><a href="course-details.html">NEET / AIIMS / CET </a></h6> --}}
        
                                    <p class="description">Based on a written test that will be objective & syllabus is Science & Maths of Class IX & X Board.</p>
        
                                    {{-- <div class="price-list price-style-02">
                                        <div class="price current-price">$29.99</div>
                                        <div class="price old-price">$39.99</div>
                                    </div> --}}
        
                                    <div class="hover-bottom-content">
                                        <div class="read-more-btn">
                                            <a class="edu-btn btn-medium btn-white" href="#">Enroll Now<i class="icon-arrow-right-line-right"></i></a>
                                        </div>
                                        <div class="author-meta">
                                            <div class="author-thumb">
                                                <a href="instructor-profile.html">
                                                    {{-- <img src="{{ asset('website/assets/images/instructor/instructor-small/instructor-2.jpg')}}" alt="Author Images">
                                                    <span class="author-title">Nancy Phipps</span> --}}
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="edu-meta meta-02">
                                            {{-- <li><i class="icon-file-list-3-line"></i>29 Lessons</li> --}}
                                        </ul>
                                    </div>
                                    
        
                                </div>
                            </div>
                        </div>
            </div>
            <!-- End Single Card  -->
        
            
            <!-- Start Single Card  -->
            {{-- <div class="col-12 col-sm-12 col-xl-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-card card-type-3 radius-small">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="course-details.html">
                                <img class="w-100" src="{{ asset('website/assets/images/course/course-01/course-03.jpg')}}" alt="Course Thumb">
                            </a>
                            <div class="wishlist-top-right">
                                <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                            </div>
                            <div class="top-position status-group left-bottom">
                                <span class="eduvibe-status status-03">Language Learning</span>
                            </div>
                        </div>
                        <div class="content">
                            <div class="card-top">
                                <div class="author-meta">
                                    <div class="author-thumb">
                                        <a href="instructor-profile.html">
                                            <img src="{{ asset('website/assets/images/instructor/instructor-small/instructor-1.jpg')}}" alt="Author Images">
                                            <span class="author-title">David Reija</span>
                                        </a>
                                    </div>
                                </div>
                                <ul class="edu-meta meta-02">
                                    <li><i class="icon-file-list-3-line"></i>29 Lessons</li>
                                </ul>
                            </div>
                            <h6 class="title"><a href="#">Introduction to Javascript for The Beginners</a>
                            </h6>
                            <div class="card-bottom">
                                <div class="price-list price-style-02">
                                    <div class="price current-price">$67.99</div>
                                    <div class="price old-price">$109.99</div>
                                </div>
                                <div class="edu-rating rating-default">
                                    <div class="rating">
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                    </div>
                                    <span class="rating-count">(20)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-hover-action">
                        <div class="hover-content">
                            <div class="content-top">
                                <div class="top-status-bar">
                                    <span class="eduvibe-status status-03">Language Learning</span>
                                </div>
                                <div class="top-wishlist-bar">
                                    <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                </div>
                            </div>

                            <h6 class="title"><a href="course-details.html">Introduction to Javascript for The Beginners</a></h6>

                            <p class="description">There are many variations of passages of Lorem Ipsaums available, but the majority have suffered alteration. generators on the Internet tend to repeat.</p>

                            <div class="price-list price-style-02">
                                <div class="price current-price">$67.99</div>
                                <div class="price old-price">$109.99</div>
                            </div>

                            <div class="hover-bottom-content">
                                <div class="author-meta">
                                    <div class="author-thumb">
                                        <a href="instructor-profile.html">
                                            <img src="{{ asset('website/assets/images/instructor/instructor-small/instructor-1.jpg')}}" alt="Author Images">
                                            <span class="author-title">David Reija</span>
                                        </a>
                                    </div>
                                </div>
                                <ul class="edu-meta meta-02">
                                    <li><i class="icon-file-list-3-line"></i>29 Lessons</li>
                                </ul>
                            </div>
                            <div class="read-more-btn">
                                <a class="edu-btn btn-medium btn-white" href="course-details.html">Enroll Now<i class="icon-arrow-right-line-right"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- End Single Card  -->


            <div class="col-lg-12 mt--60">
                <nav>
                    <ul class="edu-pagination">
                        <li><a href="#"><i class="ri-arrow-drop-left-line"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#"><i class="ri-arrow-drop-right-line"></i></a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>

</section>
@endsection