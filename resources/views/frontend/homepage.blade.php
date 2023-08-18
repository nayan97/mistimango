@extends('frontend.layouts.app')


@section('main')
<main class="main">
     
     <!-- Start of Breadcrumb -->

     <!-- End of Breadcrumb -->
     @php
                $posts = App\Models\Post::latest() -> take(4) -> get();

            @endphp
     <!-- Start of Page Content -->
     <div class="page-content">
         <div class="container">
             <div class="row gutter-lg mb-10">
                 <div class="main-content">

                 @foreach ($posts as $post )
                    <article class="post post-classic overlay-zoom mb-4">
                         <figure class="post-media br-sm">
                             <a href="{{ route('single.blog', $post-> slug)}}">
                                 <img src="{{ url('img/post/' . $post -> photo ) }}" width="930" height="500" alt="blog">
                             </a>
                         </figure>
                         <div class="post-details">
                             <div class="post-cats text-primary">
                                 <a href="#">Fashion</a>
                             </div>
                             <h4 class="post-title">
                                 <a href="{{ route('single.blog', $post-> slug)}}">{{ $post -> title}}</a>
                             </h4>
                             <div class="post-content">
                                 <p>{!! Str::of(htmlspecialchars_decode($post -> content)) -> words(40) !!}</p>
                                 <a href="{{ route('single.blog', $post-> slug)}}" class="btn btn-link btn-primary">(read more)</a>
                             </div>
                             <div class="post-meta">
                                 by <a href="#" class="post-author">abs</a>
                                 - <a href="#" class="post-date">{{ date('F d, Y ', strtotime($post -> created_at))}}</a>
                             </div>
                         </div>
                     </article>
                 @endforeach
                  
                     <ul class="pagination justify-content-center pb-2">
                         <li class="prev disabled">
                             <a href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                 <i class="w-icon-long-arrow-left"></i>Prev
                             </a>
                         </li>
                         <li class="page-item active">
                             <a class="page-link" href="#">1</a>
                         </li>
                         <li class="page-item">
                             <a class="page-link" href="#">2</a>
                         </li>
                         <li class="next">
                             <a href="#" aria-label="Next">
                                 Next<i class="w-icon-long-arrow-right"></i>
                             </a>
                         </li>
                     </ul>
                 </div>
             
                 @include('frontend.section.sideber')
             </div>
         </div>
     </div>
     <!-- End of Page Content -->
 </main>
@endsection