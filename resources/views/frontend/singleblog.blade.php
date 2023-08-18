@extends('frontend.layouts.app')
@section('main')
<main class="main">
            <!-- Start of Page Header -->
    
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="demo1.html">Home</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li>Blog Single</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content mb-8">
                <div class="container">
                    <div class="row gutter-lg">
                        <div class="main-content post-single-content">
                            <div class="post post-grid post-single">
                                <figure class="post-media br-sm">
                                    <img src="{{ url('img/post/' . $posts -> photo ) }}" alt="Blog" width="930" height="500">
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">{{ date('F d, Y ', strtotime($posts -> created_at))}}</a>
                                        <a href="#" class="post-comment"><i class="w-icon-comments"></i><span>0</span>Comments</a>
                                    </div>
                                    <h2 class="post-title"><a href="#">{{ $posts->title}}</a></h2>
                                    <div class="post-content">
                                        <p>{!! Str::of(htmlspecialchars_decode($posts -> content))!!}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post -->
                            <blockquote class="text-center mb-8">
                             
                            </blockquote>
                            <!-- End Blockquote -->
        
                            <div class="tags">
                                <label class="text-dark mr-2">Tags:</label>
                                <a href="#" class="tag">Fashion</a>
                                <a href="#" class="tag">Style</a>
                                <a href="#" class="tag">Travel</a>
                                <a href="#" class="tag">Women</a>
                            </div>
                            <!-- End Tag -->
             
                            <!-- End Social Links -->
                  
                            <!-- End Post Author Detail -->
                            <div class="post-navigation">
                                <div class="nav nav-prev">
                                    <a href="#" class="align-items-start text-left">
                                        <span><i class="w-icon-long-arrow-left"></i>previous post</span>
                                        <span class="nav-content mb-0 text-normal">Vivamus vestibulum ntulla nec ante</span>
                                    </a>
                                </div>
                                <div class="nav nav-next"> 
                                    <a href="#" class="align-items-end text-right">
                                        <span>next post<i class="w-icon-long-arrow-right"></i></span>
                                        <span class="nav-content mb-0 text-normal">Fusce lacinia arcuet nulla</span>
                                    </a>
                                </div>
                            </div>
                            <!-- End Post Navigation -->
                            <h4 class="title title-lg font-weight-bold mt-10 pt-1 mb-5">Related Posts</h4>
                            <div class="swiper">
                                <div class="post-slider swiper-container swiper-theme nav-top pb-2 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 1,
                                    'breakpoints': {
                                        '576': {
                                            'slidesPerView': 2
                                        },
                                        '768': {
                                            'slidesPerView': 3
                                        },
                                        '992': {
                                            'slidesPerView': 2
                                        },
                                        '1200': {
                                            'slidesPerView': 3
                                        }
                                    }
                                }">
                                    <div class="swiper-wrapper " id="swiper-wrapper-1bea272b22ffffde" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                        <div class="swiper-slide post post-grid swiper-slide-active" role="group" aria-label="1 / 4" style="width: 296.667px; margin-right: 20px;">
                                            <figure class="post-media br-sm">
                                                <a href="post-single.html">
                                                    <img src="assets/images/blog/single/2.jpg" alt="Post" width="296" height="190" style="background-color: #bcbcb4;">
                                                </a>
                                            </figure>
                                            <div class="post-details text-center">
                                                <div class="post-meta">
                                                    by <a href="#" class="post-author">Logan Cee</a>
                                                    - <a href="#" class="post-date">03.05.2021</a>
                                                </div>
                                                <h4 class="post-title mb-3"><a href="post-single.html">Fashion tell about who you are from...</a></h4>
                                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline font-weight-normal">Read More<i class="w-icon-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide post post-grid swiper-slide-next" role="group" aria-label="2 / 4" style="width: 296.667px; margin-right: 20px;">
                                            <figure class="post-media br-sm">
                                                <a href="post-single.html">
                                                    <img src="assets/images/blog/single/3.jpg" alt="Post" width="296" height="190" style="background-color: #cad2d1;">
                                                </a>
                                            </figure>
                                            <div class="post-details text-center">
                                                <div class="post-meta">
                                                    by <a href="#" class="post-author">Hilary Kreton</a>
                                                    - <a href="#" class="post-date">03.05.2021</a>
                                                </div>
                                                <h4 class="post-title mb-3"><a href="post-single.html">Comes a cool blog post with Images</a></h4>
                                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline font-weight-normal">Read More<i class="w-icon-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide post post-grid" role="group" aria-label="3 / 4" style="width: 296.667px; margin-right: 20px;">
                                            <figure class="post-media br-sm">
                                                <a href="post-single.html">
                                                    <img src="assets/images/blog/single/4.jpg" alt="Post" width="296" height="190" style="background-color: #ececec;">
                                                </a>
                                            </figure>
                                            <div class="post-details text-center">
                                                <div class="post-meta">
                                                    by <a href="#" class="post-author">Casper Dailn</a>
                                                    - <a href="#" class="post-date">03.05.2021</a>
                                                </div>
                                                <h4 class="post-title mb-3"><a href="post-single.html">Comes a cool blog post with Images</a></h4>
                                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline font-weight-normal">Read More<i class="w-icon-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide post post-grid" role="group" aria-label="4 / 4" style="width: 296.667px; margin-right: 20px;">
                                            <figure class="post-media br-sm">
                                                <a href="post-single.html">
                                                    <img src="assets/images/blog/single/5.jpg" alt="Post" width="296" height="190" style="background-color: #AFAFAF;">
                                                </a>
                                            </figure>
                                            <div class="post-details text-center">
                                                <div class="post-meta">
                                                    by <a href="#" class="post-author">John Doe</a>
                                                    - <a href="#" class="post-date">03.05.2021</a>
                                                </div>
                                                <h4 class="post-title mb-3"><a href="post-single.html">We want to be different and fashion gives to me that outlet</a></h4>
                                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline font-weight-normal">Read More<i class="w-icon-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="swiper-button-next" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-1bea272b22ffffde" aria-disabled="false"></button>
                                    <button class="swiper-button-prev swiper-button-disabled" disabled="" tabindex="-1" aria-label="Previous slide" aria-controls="swiper-wrapper-1bea272b22ffffde" aria-disabled="true"></button>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            </div>
                            <!-- End Related Posts -->
                            
                            <h4 class="title title-lg font-weight-bold pt-1 mt-10">3 Comments</h4>
                            <ul class="comments list-style-none pl-0">
                                <li class="comment">
                                    <div class="comment-body">
                                        <figure class="comment-avatar">
                                            <img src="assets/images/blog/single/1.png" alt="Avatar" width="90" height="90">
                                        </figure>
                                        <div class="comment-content">
                                            <h4 class="comment-author font-weight-bold">
                                                <a href="#">John Doe</a>
                                                <span class="comment-date">Aug 23, 2021 at 10:46 am</span>
                                            </h4>
                                            <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl.arcu fer
                                                ment umet, dapibus sed, urna.</p>
                                            <a href="#" class="btn btn-dark btn-link btn-underline btn-icon-right btn-reply">Reply<i class="w-icon-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="comment">
                                    <div class="comment-body">
                                        <figure class="comment-avatar">
                                            <img src="assets/images/blog/single/2.png" alt="Avatar" width="90" height="90">
                                        </figure>
                                        <div class="comment-content">
                                            <h4 class="comment-author font-weight-bold">
                                                <a href="#">Semi Colon</a>
                                                <span class="comment-date">Aug 24, 2021 at 13:25 am</span>
                                            </h4>
                                            <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales.</p>
                                            <a href="#" class="btn btn-dark btn-link btn-underline btn-icon-right btn-reply">Reply<i class="w-icon-long-arrow-right"></i></a>
                                        </div>  
                                    </div>
                                </li>
                                <li class="comment">
                                    <div class="comment-body">
                                        <figure class="comment-avatar">
                                            <img src="assets/images/blog/single/1.png" alt="Avatar" width="90" height="90">
                                        </figure>
                                        <div class="comment-content">
                                            <h4 class="comment-author font-weight-bold">
                                                <a href="#">John Doe</a>
                                                <span class="comment-date">Aug 23, 2021 at 10:46 am</span>
                                            </h4>
                                            <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl.arcu fer
                                                ment umet, dapibus sed, urna.</p>
                                            <a href="#" class="btn btn-dark btn-link btn-underline btn-icon-right btn-reply">Reply<i class="w-icon-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- End Comments -->
                            <form class="reply-section pb-4">
                                <h4 class="title title-md font-weight-bold pt-1 mt-10 mb-0">Leave a Reply</h4>
                                <p>Your email address will not be published. Required fields are marked</p>
                                <div class="row">
                                    <div class="col-sm-6 mb-4">
                                        <input type="text" class="form-control" placeholder="Enter Your Name" id="name">
                                    </div>
                                    <div class="col-sm-6 mb-4">
                                        <input type="text" class="form-control" placeholder="Enter Your Email" id="email_1">
                                    </div>
                                </div>
                                <textarea cols="30" rows="6" placeholder="Write a Comment" class="form-control mb-4" id="comment"></textarea>
                                <button class="btn btn-dark btn-rounded btn-icon-right btn-comment">Post Comment<i class="w-icon-long-arrow-right"></i></button>
                            </form>
                        </div>
                        <!-- End of Main Content -->
                        @include('frontend.section.sideber')
                    </div>
                </div>
            </div>
            <!-- End of Page Content -->
</main>

@endsection