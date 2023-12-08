@extends('website.layout.master')
 @section('content')       
<section>
<div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-start">
                    <div class="page-title">
                        <h3 class="title">Course Sidebar</h3>
                    </div>
                    <nav class="edu-breadcrumb-nav">
                        <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                            <li class="breadcrumb-item active" aria-current="page">Course Sidebar</li>
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
            <div class="col-lg-4 order-2 oder-lg-1">
                <aside class="edu-course-sidebar">
                    <!-- Start Widget Wrapper  -->
                    <div class="edu-course-widget widget-shortby">
                        <div class="inner">
                            <h5 class="widget-title">Sort By</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <input type="radio" id="short-check1" name="courseDateSort">
                                    <label for="short-check1">Newest</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="radio" id="short-check2" name="courseDateSort">
                                    <label for="short-check2">Oldest</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="radio" id="short-check3" name="courseDateSort">
                                    <label for="short-check3">Popular Courses</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="radio" id="short-check4" name="courseDateSort">
                                    <label for="short-check4">Featured On This Month</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget Wrapper  -->

                    <!-- Start Widget Wrapper  -->
                    <div class="edu-course-widget widget-category mt--40">
                        <div class="inner">
                            <h5 class="widget-title">Categories</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check1">
                                    <label for="cat-check1">Art & Design <span>(24)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check2">
                                    <label for="cat-check2">Web Development <span>(12)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check3">
                                    <label for="cat-check3">Business Management <span>(8)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check4">
                                    <label for="cat-check4">Digital Marketing <span>(3)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check5">
                                    <label for="cat-check5">Music & Fashion <span>(13)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check6">
                                    <label for="cat-check6">Financial Management <span>(25)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check7">
                                    <label for="cat-check7">Sports <span>(19)</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget Wrapper  -->

                    <!-- Start Widget Wrapper  -->
                    <div class="edu-course-widget widget-shortby mt--40">
                        <div class="inner">
                            <h5 class="widget-title">Level</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <input type="checkbox" id="level-check1">
                                    <label for="level-check1">All Skill</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="level-check2">
                                    <label for="level-check2">Beginner</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="level-check3">
                                    <label for="level-check3">Intermediate</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="level-check4">
                                    <label for="level-check4">High</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget Wrapper  -->

                    <!-- Start Widget Wrapper  -->
                    <div class="edu-course-widget widget-shortby mt--40">
                        <div class="inner">
                            <h5 class="widget-title">Price</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <input type="radio" id="price-check1" name="coursePriceSort">
                                    <label for="price-check1">All Prices</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="radio" id="price-check2" name="coursePriceSort">
                                    <label for="price-check2">Price: Low to High</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="radio" id="price-check3" name="coursePriceSort">
                                    <label for="price-check3">Price: High to Low</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="radio" id="price-check4" name="coursePriceSort">
                                    <label for="price-check4">Free Paid</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget Wrapper  -->

                    <!-- Start Widget Wrapper  -->
                    <div class="edu-course-widget widget-shortby mt--40">
                        <div class="inner">
                            <h5 class="widget-title">Short By Rating</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check1">
                                    <label for="rating-check1">
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                    </label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check2">
                                    <label for="rating-check2">
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                    </label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check3">
                                    <label for="rating-check3">
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                    </label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check4">
                                    <label for="rating-check4">
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                    </label>
                                </div>

                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check5">
                                    <label for="rating-check5">
                                        <span class="on icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Widget Wrapper  -->

                    <!-- Start Widget Wrapper  -->
                    <div class="edu-course-widget widget-shortby mt--40">
                        <div class="inner">
                            <h5 class="widget-title">Filter By Price</h5>
                            <div class="content">
                                <div class="price_filter s-filter clear">
                                    <form action="#" method="GET">
                                        <div id="slider-range"></div>
                                        <div class="slider__range--output">
                                            <div class="price__output--wrap">
                                                <div class="price--output">
                                                    <span>Price :</span><input type="text" id="amount" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget Wrapper  -->

                </aside>
            </div>
            <div class="col-lg-8 order-1 oder-lg-2">
                <div class="row g-5">
                    <!-- Start Single Card  -->
                    <div class="col-12 col-sm-12 col-xl-6 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-1 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img class="w-100" src="{{ asset('website/assets/images/course/course-01/course-01.jpg')}}" alt="Course Meta">
                                    </a>
                                    <div class="top-position status-group left-top">
                                        <span class="eduvibe-status status-01">Intermediate</span>
                                    </div>
                                    <div class="wishlist-top-right">
                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="edu-meta meta-01">
                                        <li><i class="icon-file-list-4-line"></i>29 Lessons</li>
                                        <li><i class="icon-time-line"></i>19h 15m 26s</li>
                                    </ul>
                                    <h6 class="title"><a href="course-details.html">Competitive Strategy law for all students</a>
                                    </h6>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(56 Review)</span>
                                    </div>
                                    <div class="card-bottom">
                                        <div class="price-list price-style-03">
                                            <div class="price current-price">$45.00</div>
                                        </div>
                                        <ul class="edu-meta meta-01">
                                            <li><i class="icon-account-circle-line"></i>85 Students</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-12 col-sm-12 col-xl-6 col-md-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-1 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img class="w-100" src="{{ asset('website/assets/images/course/course-01/course-02.jpg')}}" alt="Course Meta">
                                    </a>
                                    <div class="top-position status-group left-top">
                                        <span class="eduvibe-status status-01">Beginner</span>
                                    </div>
                                    <div class="wishlist-top-right">
                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="edu-meta meta-01">
                                        <li><i class="icon-file-list-4-line"></i>35 Lessons</li>
                                        <li><i class="icon-time-line"></i>14h 58m 43s</li>
                                    </ul>
                                    <h6 class="title"><a href="course-details.html">Machine Learning A-Z: Hands-On Python and java</a>
                                    </h6>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(87 Review)</span>
                                    </div>
                                    <div class="card-bottom">
                                        <div class="price-list price-style-03">
                                            <div class="price current-price">$35.00</div>
                                            <div class="price old-price">$45.00</div>
                                        </div>
                                        <ul class="edu-meta meta-01">
                                            <li><i class="icon-account-circle-line"></i>59 Students</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-12 col-sm-12 col-xl-6 col-md-6" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-1 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img class="w-100" src="{{ asset('website/assets/images/course/course-01/course-03.jpg')}}" alt="Course Meta">
                                    </a>
                                    <div class="top-position status-group left-top">
                                        <span class="eduvibe-status status-01">Advanced</span>
                                    </div>
                                    <div class="wishlist-top-right">
                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="edu-meta meta-01">
                                        <li><i class="icon-file-list-4-line"></i>82 Lessons</li>
                                        <li><i class="icon-time-line"></i>13h 20m 20s</li>
                                    </ul>
                                    <h6 class="title"><a href="course-details.html">Achieving Advanced in Insights with Big</a>
                                    </h6>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(87 Review)</span>
                                    </div>
                                    <div class="card-bottom">
                                        <div class="price-list price-style-03">
                                            <div class="price current-price">$29.00</div>
                                            <div class="price old-price">$39.00</div>
                                        </div>
                                        <ul class="edu-meta meta-01">
                                            <li><i class="icon-account-circle-line"></i>75 Students</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-12 col-sm-12 col-xl-6 col-md-6" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-1 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img class="w-100" src="{{ asset('website/assets/images/course/course-01/course-04.jpg')}}" alt="Course Meta">
                                    </a>
                                    <div class="top-position status-group left-top">
                                        <span class="eduvibe-status status-01">Intermediate</span>
                                    </div>
                                    <div class="wishlist-top-right">
                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="edu-meta meta-01">
                                        <li><i class="icon-file-list-4-line"></i>18 Lessons</li>
                                        <li><i class="icon-time-line"></i>13h 20m 20s</li>
                                    </ul>
                                    <h6 class="title"><a href="course-details.html">Education Makes A Person A Responsible Citizen</a>
                                    </h6>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(14 Review)</span>
                                    </div>
                                    <div class="card-bottom">
                                        <div class="price-list price-style-03">
                                            <div class="price current-price">$35.00</div>
                                            <div class="price old-price">$39.00</div>
                                        </div>
                                        <ul class="edu-meta meta-01">
                                            <li><i class="icon-account-circle-line"></i>57 Students</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-12 col-sm-12 col-xl-6 col-md-6" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-1 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img class="w-100" src="{{ asset('website/assets/images/course/course-01/course-05.jpg')}}" alt="Course Meta">
                                    </a>
                                    <div class="top-position status-group left-top">
                                        <span class="eduvibe-status status-01">Advanced</span>
                                    </div>
                                    <div class="wishlist-top-right">
                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="edu-meta meta-01">
                                        <li><i class="icon-file-list-4-line"></i>15 Lessons</li>
                                        <li><i class="icon-time-line"></i>13h 20m 20s</li>
                                    </ul>
                                    <h6 class="title"><a href="course-details.html">Building A Better World One Student At A Time</a>
                                    </h6>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(49 Review)</span>
                                    </div>
                                    <div class="card-bottom">
                                        <div class="badge-transparent">Free</div>
                                        <ul class="edu-meta meta-01">
                                            <li><i class="icon-account-circle-line"></i>86 Students</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-12 col-sm-12 col-xl-6 col-md-6" data-sal-delay="400" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-1 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img class="w-100" src="{{ asset('website/assets/images/course/course-01/course-06.jpg')}}" alt="Course Meta">
                                    </a>
                                    <div class="top-position status-group left-top">
                                        <span class="eduvibe-status status-01">Intermediate</span>
                                    </div>
                                    <div class="wishlist-top-right">
                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="edu-meta meta-01">
                                        <li><i class="icon-file-list-4-line"></i>36 Lessons</li>
                                        <li><i class="icon-time-line"></i>13h 20m 20s</li>
                                    </ul>
                                    <h6 class="title"><a href="course-details.html">Education is About Forming Faithful Disciples</a>
                                    </h6>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(25 Review)</span>
                                    </div>
                                    <div class="card-bottom">
                                        <div class="price-list price-style-03">
                                            <div class="price current-price">$89.00</div>
                                            <div class="price old-price">$99.00</div>
                                        </div>
                                        <ul class="edu-meta meta-01">
                                            <li><i class="icon-account-circle-line"></i>47 Students</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-12 col-sm-12 col-xl-6 col-md-6" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-1 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img class="w-100" src="{{ asset('website/assets/images/course/course-01/course-07.jpg')}}" alt="Course Meta">
                                    </a>
                                    <div class="top-position status-group left-top">
                                        <span class="eduvibe-status status-01">Advanced</span>
                                    </div>
                                    <div class="wishlist-top-right">
                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="edu-meta meta-01">
                                        <li><i class="icon-file-list-4-line"></i>24 Lessons</li>
                                        <li><i class="icon-time-line"></i>13h 20m 20s</li>
                                    </ul>
                                    <h6 class="title"><a href="course-details.html">Competitive Strategy law for all students</a>
                                    </h6>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(73 Review)</span>
                                    </div>
                                    <div class="card-bottom">
                                        <div class="badge-transparent">Free</div>
                                        <ul class="edu-meta meta-01">
                                            <li><i class="icon-account-circle-line"></i>86 Students</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-12 col-sm-12 col-xl-6 col-md-6" data-sal-delay="500" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-1 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img class="w-100" src="{{ asset('website/assets/images/course/course-01/course-08.jpg')}}" alt="Course Meta">
                                    </a>
                                    <div class="top-position status-group left-top">
                                        <span class="eduvibe-status status-01">Intermediate</span>
                                    </div>
                                    <div class="wishlist-top-right">
                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="edu-meta meta-01">
                                        <li><i class="icon-file-list-4-line"></i>74 Lessons</li>
                                        <li><i class="icon-time-line"></i>13h 20m 20s</li>
                                    </ul>
                                    <h6 class="title"><a href="course-details.html">Education is About Preparing Students for College</a>
                                    </h6>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(92 Review)</span>
                                    </div>
                                    <div class="card-bottom">
                                        <div class="badge-transparent">Free</div>
                                        <ul class="edu-meta meta-01">
                                            <li><i class="icon-account-circle-line"></i>86 Students</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                </div>

                <div class="row">
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
    </div>
</div>
</section>
@endsection