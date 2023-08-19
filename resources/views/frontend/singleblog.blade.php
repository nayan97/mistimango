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
                                <h1> @if (session()->has('message'))
                                         [{{ Session::get('message') }}]
                                     @endif</h1>
                                <figure class="post-media br-sm">
                                    <img src="{{ url('img/post/' . $post -> photo ) }}" alt="Blog" width="930" height="500">
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">{{ date('F d, Y ', strtotime($post -> created_at))}}</a>
                                        <a href="#" class="post-comment"><i class="w-icon-comments"></i><span>0</span>Comments</a>
                                    </div>
                                    <h2 class="post-title"><a href="#">{{ $post->title}}</a></h2>
                                    <div class="post-content">
                                        <p>{!! Str::of(htmlspecialchars_decode($post -> content))!!}</p>
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
              
                            @php
                            $repost = App\Models\Post::latest() -> take(3) -> get();
            
                            @endphp


                            <h4 class="title title-lg font-weight-bold mt-10 pt-1 mb-5">Recent Posts</h4>
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
                                        @foreach ( $repost as $item)
                                            
                                      
                                        <div class="swiper-slide post post-grid swiper-slide-active" role="group" aria-label="1 / 4" style="width: 296.667px; margin-right: 20px;">
                                            <figure class="post-media br-sm">
                                                <a href="{{ route('single.blog', $item-> slug)}}">
                                                    <img src=" {{ url('img/post/'.$item-> photo)}}" alt="Post" width="296" height="190" style="background-color: #bcbcb4;">
                                                </a>
                                            </figure>
                                            <div class="post-details text-center">
                                                <div class="post-meta">
                                                    by <a href="#" class="post-author">Logan Cee</a>
                                                    - <a href="#" class="post-date">{{ date('F d, Y ', strtotime($item -> created_at))}}</a>
                                                </div>
                                                <h4 class="post-title mb-3"><a href="{{ route('single.blog', $item-> slug)}}">{{$item->title}}...</a></h4>
                                                <a href="{{ route('single.blog', $item-> slug)}}" class="btn btn-link btn-dark btn-underline font-weight-normal">Read More<i class="w-icon-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <button class="swiper-button-next" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-1bea272b22ffffde" aria-disabled="false"></button>
                                    <button class="swiper-button-prev swiper-button-disabled" disabled="" tabindex="-1" aria-label="Previous slide" aria-controls="swiper-wrapper-1bea272b22ffffde" aria-disabled="true"></button>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            </div>
                            <!-- End Related Posts -->

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
                            
                            
                            <h4 class="title title-lg font-weight-bold pt-1 mt-10">Comments</h4>
                            <ul class="comments list-style-none pl-0">
                                <li class="comment">
                                    
                                        
                                    @forelse ($post ->comments as $comment )
                                    <div class="comment-body">
                                        <div class="comment-content">

                                            <h4 class="comment-author font-weight-bold">
                                                <a href="#">John Doe</a>
                                                <span class="comment-date">{{ date('F d, Y ', strtotime($comment -> created_at))}}</span>
                                            </h4>
                                            <p>{{$comment -> comments}}</p>
                                            <a href="javascript::void(0);" onclick="reply(this)" class="btn btn-dark btn-link btn-underline btn-icon-right btn-reply">Reply<i class="w-icon-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    @empty
                                    @endforelse()
                                </li>
                     
                         
                            <!-- End Comments -->
                            <div style="display:none;" class="replySec">
                                <form method="post" action="{{ route('reply.add')}}" class="reply-section pb-4">
                                    <h4 class="title title-md font-weight-bold pt-1 mt-10 mb-0">Leave a Reply</h4>
                                    @csrf
                                        <div class="form-group">
                                            <textarea name="comments" id="" cols="22" rows="10"></textarea>
                                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                                            {{-- <input type="hidden" name="comment_id" value="{{ $comment->id }}" /> --}}
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <button style="background-color:#336699; type="submit" class="btn btn-dark btn-rounded btn-icon-right btn-comment">Post Comment<i class="w-icon-long-arrow-right"></i></button>
                                        </div>
                                </form>
                            </div>
                            <form method="post" action="{{ route('comment.add')}}" class="reply-section pb-4">
                                <h4 class="title title-md font-weight-bold pt-1 mt-10 mb-0">Leave a comment</h4>
                                @csrf
                                    <div class="form-group">
                                        <textarea name="comments" id="" cols="20" rows="10"></textarea>
                                        <input type="hidden" name="post_id" value="{{ $post->id }}"/>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <button style="background-color:#336699;" type="submit" class="btn btn-dark btn-rounded btn-icon-right btn-comment">Post Comment<i class="w-icon-long-arrow-right"></i></button>
                                    </div>
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