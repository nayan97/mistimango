<!DOCTYPE html>

<html lang="en" class="wf-poppins-n4-active wf-poppins-n6-active wf-poppins-n5-active wf-poppins-n7-active wf-active"><!-- Mirrored from portotheme.com/html/wolmart/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jan 2022 07:31:37 GMT --><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Wolmart eCommmerce Marketplace HTML Template</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template">
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="frontend/assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script src="frontend/assets/js/webfont.js" async=""></script><script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700'] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[0];
            wf.src = 'frontend/assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>

    <link rel="preload" href="frontend/assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="frontend/assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="frontend/assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="frontend/assets/fonts/wolmart87d5.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="frontend/assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="frontend/assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="frontend/assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="frontend/assets/css/style.min.css"><link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Poppins:400,500,600,700" media="all">
</head>

<body class="loaded">
    <div class="page-wrapper">
        <!-- Start of Header -->
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg">Welcome to Wolmart Store message or remove it!</p>
                    </div>
                    <div class="header-right">
                        <div class="dropdown">
                            <a href="#currency">USD</a>
                            <div class="dropdown-box">
                                <a href="#USD">USD</a>
                                <a href="#EUR">EUR</a>
                            </div>
                        </div>
                        <!-- End of DropDown Menu -->

                        <div class="dropdown">
                            <a href="#language"><img src="frontend/assets/images/flags/eng.png" alt="ENG Flag" width="14" height="8" class="dropdown-image"> ENG</a>
                            <div class="dropdown-box">
                                <a href="#ENG">
                                    <img src="frontend/assets/images/flags/eng.png" alt="ENG Flag" width="14" height="8" class="dropdown-image">
                                    ENG
                                </a>
                                <a href="#FRA">
                                    <img src="frontend/assets/images/flags/fra.png" alt="FRA Flag" width="14" height="8" class="dropdown-image">
                                    FRA
                                </a>
                            </div>
                        </div>
                        <!-- End of Dropdown Menu -->
                        <span class="divider d-lg-show"></span>
                        <a href="blog.html" class="d-lg-show">Blog</a>
                        <a href="contact-us.html" class="d-lg-show">Contact Us</a>
                        <a href="my-account.html" class="d-lg-show">My Account</a>
                        @if (Route::has('login'))
                            @auth
                                <x-app-layout>

                                </x-app-layout>

                            @else
                                <a href="{{ route('login') }}" class="btn btn-sm btn-primary"><i class="w-icon-account"></i>Sign In</a><a href="{{ route('register') }}" class="btn btn-sm btn-primary">Register</a>
                            @endauth   
                        @endif
                 
                    </div>
                </div>
            </div>
            <!-- End of Header Top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left mr-md-4">
                        <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                        </a>
                        <a href="demo1.html" class="logo ml-lg-0">
                            <img src="frontend/assets/images/logo.png" alt="logo" width="144" height="45">
                        </a>
                        <form method="get" action="#" class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                            <div class="select-box">
                                <select id="category" name="category">
                                    <option value="">All Categories</option>
                                    <option value="4">Fashion</option>
                                    <option value="5">Furniture</option>
                                    <option value="6">Shoes</option>
                                    <option value="7">Sports</option>
                                    <option value="8">Games</option>
                                    <option value="9">Computers</option>
                                    <option value="10">Electronics</option>
                                    <option value="11">Kitchen</option>
                                    <option value="12">Clothing</option>
                                </select>
                            </div>
                            <input type="text" class="form-control" name="search" id="search" placeholder="Search in..." required="">
                            <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-right ml-4">
                        <div class="header-call d-xs-show d-lg-flex align-items-center">
                            <a href="tel:#" class="w-icon-call"></a>
                            <div class="call-info d-lg-show">
                                <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                                    <a href="mailto:#" class="text-capitalize">Live Chat</a> or :</h4>
                                <a href="tel:#" class="phone-number font-weight-bolder ls-50">0(800)123-456</a>
                            </div>
                           
                        </div>
                        <div>
             
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Header Middle -->

            <div class="sticky-content-wrapper" style=""><div class="header-bottom sticky-content fix-top sticky-header" style="">
                <div class="container">
                    <div class="inner-wrap">
                        <div class="header-left">
                        
                            <nav class="main-nav">
                                <ul class="menu active-underline">
                                    <li>
                                        <a href="demo1.html">Home</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="shop-banner-sidebar.html">Shop</a>

                                        <!-- Start of Megamenu -->
                                        <ul class="megamenu">
                                            <li>
                                                <h4 class="menu-title">Shop Pages</h4>
                                                <ul>
                                                    <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                                    <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Full Width Banner</a></li>
                                                    <li><a href="shop-horizontal-filter.html">Horizontal Filter<span class="tip tip-hot">Hot</span></a></li>
                                                    <li><a href="shop-off-canvas.html">Off Canvas Sidebar<span class="tip tip-new">New</span></a></li>
                                                    <li><a href="shop-infinite-scroll.html">Infinite Ajax Scroll</a>
                                                    </li>
                                                    <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a href="shop-both-sidebar.html">Both Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Shop Layouts</h4>
                                                <ul>
                                                    <li><a href="shop-grid-3cols.html">3 Columns Mode</a></li>
                                                    <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                                    <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                                    <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                                    <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                                    <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                                    <li><a href="shop-list.html">List Mode</a></li>
                                                    <li><a href="shop-list-sidebar.html">List Mode With Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Product Pages</h4>
                                                <ul>
                                                    <li><a href="product-variable.html">Variable Product</a></li>
                                                    <li><a href="product-featured.html">Featured &amp; Sale</a></li>
                                                    <li><a href="product-accordion.html">Data In Accordion</a></li>
                                                    <li><a href="product-section.html">Data In Sections</a></li>
                                                    <li><a href="product-swatch.html">Image Swatch</a></li>
                                                    <li><a href="product-extended.html">Extended Info</a>
                                                    </li>
                                                    <li><a href="product-without-sidebar.html">Without Sidebar</a></li>
                                                    <li><a href="product-video.html">360<sup>o</sup> &amp; Video<span class="tip tip-new">New</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Product Layouts</h4>
                                                <ul>
                                                    <li><a href="product-default.html">Default<span class="tip tip-hot">Hot</span></a></li>
                                                    <li><a href="product-vertical.html">Vertical Thumbs</a></li>
                                                    <li><a href="product-grid.html">Grid Images</a></li>
                                                    <li><a href="product-masonry.html">Masonry</a></li>
                                                    <li><a href="product-gallery.html">Gallery</a></li>
                                                    <li><a href="product-sticky-info.html">Sticky Info</a></li>
                                                    <li><a href="product-sticky-thumb.html">Sticky Thumbs</a></li>
                                                    <li><a href="product-sticky-both.html">Sticky Both</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- End of Megamenu -->
                                    </li>
                                    <li class="has-submenu">
                                        <a href="vendor-dokan-store.html">Vendor</a>
                                        <ul class="submenu">
                                            <li class="has-submenu">
                                                <a href="vendor-dokan-store-list.html">Store Listing</a>
                                                <ul class="submenu">
                                                    <li><a href="vendor-dokan-store-list.html">Store listing 1</a></li>
                                                    <li><a href="vendor-wcfm-store-list.html">Store listing 2</a></li>
                                                    <li><a href="vendor-wcmp-store-list.html">Store listing 3</a></li>
                                                    <li><a href="vendor-wc-store-list.html">Store listing 4</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-submenu">
                                                <a href="vendor-dokan-store.html">Vendor Store</a>
                                                <ul class="submenu">
                                                    <li><a href="vendor-dokan-store.html">Vendor Store 1</a></li>
                                                    <li><a href="vendor-wcfm-store-product-grid.html">Vendor Store 2</a>
                                                    </li>
                                                    <li><a href="vendor-wcmp-store-product-grid.html">Vendor Store 3</a>
                                                    </li>
                                                    <li><a href="vendor-wc-store-product-grid.html">Vendor Store 4</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="active has-submenu">
                                        <a href="blog.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Classic</a></li>
                                            <li><a href="blog-listing.html">Listing</a></li>
                                            <li class="has-submenu">
                                                <a href="blog-grid-3cols.html">Grid</a>
                                                <ul class="submenu">
                                                    <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                                    <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                                    <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                                    <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-submenu">
                                                <a href="blog-masonry-3cols.html">Masonry</a>
                                                <ul class="submenu">
                                                    <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                                    <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                                    <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                                    <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-submenu">
                                                <a href="blog-mask-grid.html">Mask</a>
                                                <ul class="submenu">
                                                    <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                                    <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="post-single.html">Single Post</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="about-us.html">Pages</a>
                                        <ul class="submenu">

                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="become-a-vendor.html">Become A Vendor</a></li>
                                            <li><a href="contact-us.html">Contact Us</a></li>
                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="error-404.html">Error 404</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="compare.html">Compare</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="elements.html">Elements</a>
                                        <ul class="submenu">
                                            <li><a href="element-accordions.html">Accordions</a></li>
                                            <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                                            <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                            <li><a href="element-buttons.html">Buttons</a></li>
                                            <li><a href="element-cta.html">Call to Action</a></li>
                                            <li><a href="element-icons.html">Icons</a></li>
                                            <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                            <li><a href="element-instagrams.html">Instagrams</a></li>
                                            <li><a href="element-categories.html">Product Category</a></li>
                                            <li><a href="element-products.html">Products</a></li>
                                            <li><a href="element-tabs.html">Tabs</a></li>
                                            <li><a href="element-testimonials.html">Testimonials</a></li>
                                            <li><a href="element-titles.html">Titles</a></li>
                                            <li><a href="element-typography.html">Typography</a></li>

                                            <li><a href="element-vendors.html">Vendors</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                  
                    </div>
                </div>
            </div></div>
        </header>
        <!-- End of Header -->


        <!-- Start of Main -->
        <main class="main">
     
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-6">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.html">Home</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li>Classic</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content">
                <div class="container">
                    <div class="row gutter-lg mb-10">
                        <div class="main-content">
                            <article class="post post-classic overlay-zoom mb-4">
                                <figure class="post-media br-sm">
                                    <a href="post-single.html">
                                        <img src="frontend/assets/images/blog/classic/1.jpg" width="930" height="500" alt="blog">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-cats text-primary">
                                        <a href="#">Fashion</a>
                                    </div>
                                    <h4 class="post-title">
                                        <a href="post-single.html">New found the men dress for summer</a>
                                    </h4>
                                    <div class="post-content">
                                        <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, 
                                        eget blandit nunc tortor eu nibh. Suspendisse potenti.Sed egstas, ant at 
                                        vulputate volutpat, uctus metus libero eu augue, vitae luctus…</p>
                                        <a href="post-single.html" class="btn btn-link btn-primary">(read more)</a>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">03.05.2021</a>
                                    </div>
                                </div>
                            </article>
                            <article class="post post-classic overlay-zoom mb-4">
                                <figure class="post-media br-sm">
                                    <a href="post-single.html">
                                        <img src="frontend/assets/images/blog/classic/2.jpg" width="930" height="500" alt="blog">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-cats text-primary">
                                        <a href="#">Others</a>,
                                        <a href="#">Technology</a>
                                    </div>
                                    <h4 class="post-title">
                                        <a href="post-single.html">Recognitory the needs is primary condition  for design</a>
                                    </h4>
                                    <div class="post-content">
                                        <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, 
                                        eget blandit nunc tortor eu nibh. Suspendisse potenti.Sed egstas, ant at 
                                        vulputate volutpat, uctus metus libero eu augue, vitae luctus…</p>
                                        <a href="post-single.html" class="btn btn-link btn-primary">(read more)</a>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">03.05.2021</a>
                                    </div>
                                </div>
                            </article>
                            <article class="post post-classic overlay-zoom mb-4">
                                <figure class="post-media br-sm">
                                    <a href="post-single.html">
                                        <img src="frontend/assets/images/blog/classic/3.jpg" width="930" height="500" alt="blog">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-cats text-primary">
                                        <a href="#">Clothes</a>
                                    </div>
                                    <h4 class="post-title">
                                        <a href="post-single.html">New found the women’s shirt  for summer season</a>
                                    </h4>
                                    <div class="post-content">
                                        <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, 
                                        eget blandit nunc tortor eu nibh. Suspendisse potenti.Sed egstas, ant at 
                                        vulputate volutpat, uctus metus libero eu augue, vitae luctus…</p>
                                        <a href="post-single.html" class="btn btn-link btn-primary">(read more)</a>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">03.05.2021</a>
                                    </div>
                                </div>
                            </article>
                            <article class="post post-classic overlay-zoom mb-4">
                                <figure class="post-media br-sm">
                                    <a href="post-single.html">
                                        <img src="frontend/assets/images/blog/classic/4.jpg" width="930" height="500" alt="blog">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-cats text-primary">
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <h4 class="post-title">
                                        <a href="post-single.html">We want to be different and fashion gives to me that outlet</a>
                                    </h4>
                                    <div class="post-content">
                                        <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, 
                                        eget blandit nunc tortor eu nibh. Suspendisse potenti.Sed egstas, ant at 
                                        vulputate volutpat, uctus metus libero eu augue, vitae luctus…</p>
                                        <a href="post-single.html" class="btn btn-link btn-primary">(read more)</a>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">03.05.2021</a>
                                    </div>
                                </div>
                            </article>
                            <article class="post post-classic overlay-zoom mb-4">
                                <figure class="post-media br-sm">
                                    <a href="post-single.html">
                                        <img src="frontend/assets/images/blog/classic/5.jpg" width="930" height="500" alt="blog">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-cats text-primary">
                                        <a href="#">Entertainment</a>,
                                        <a href="#">Lifestyle</a>,
                                        <a href="#">Others</a>
                                    </div>
                                    <h4 class="post-title">
                                        <a href="post-single.html">Comes a cool blog post with Images</a>
                                    </h4>
                                    <div class="post-content">
                                        <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, 
                                        eget blandit nunc tortor eu nibh. Suspendisse potenti.Sed egstas, ant at 
                                        vulputate volutpat, uctus metus libero eu augue, vitae luctus…</p>
                                        <a href="post-single.html" class="btn btn-link btn-primary">(read more)</a>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">03.05.2021</a>
                                    </div>
                                </div>
                            </article>
                            <article class="post post-classic overlay-zoom mb-2">
                                <figure class="post-media br-sm">
                                    <a href="post-single.html">
                                        <img src="frontend/assets/images/blog/classic/6.jpg" width="930" height="500" alt="blog">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-cats text-primary">
                                        <a href="#">Fashion</a>,
                                        <a href="#">Technology</a>
                                    </div>
                                    <h4 class="post-title">
                                        <a href="post-single.html">Fusce lacinia arcuet nulla</a>
                                    </h4>
                                    <div class="post-content">
                                        <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, 
                                        eget blandit nunc tortor eu nibh. Suspendisse potenti.Sed egstas, ant at 
                                        vulputate volutpat, uctus metus libero eu augue, vitae luctus…</p>
                                        <a href="post-single.html" class="btn btn-link btn-primary">(read more)</a>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">03.05.2021</a>
                                    </div>
                                </div>
                            </article>
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
                        <aside class="sidebar right-sidebar blog-sidebar sidebar-fixed sticky-sidebar-wrapper">
                            <div class="sidebar-overlay">
                                <a href="#" class="sidebar-close">
                                    <i class="close-icon"></i>
                                </a>
                            </div>
                            <a href="#" class="sidebar-toggle">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <div class="sidebar-content">
                                <div class="pin-wrapper" style="height: 1507.42px;"><div class="sticky-sidebar" style="border-bottom: 0px none rgb(102, 102, 102); width: 280px;">
                                    <div class="widget widget-search-form">
                                        <div class="widget-body">
                                            <form action="#" method="GET" class="input-wrapper input-wrapper-inline">
                                                <input type="text" class="form-control" placeholder="Search in Blog" autocomplete="off" required="">
                                                <button class="btn btn-search"><i class="w-icon-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End of Widget search form -->
                                    <div class="widget widget-categories">
                                        <h3 class="widget-title bb-no mb-0">Categories</h3>
                                        <ul class="widget-body filter-items search-ul">
                                            <li><a href="blog.html">Clothes</a></li>
                                            <li><a href="blog.html">Entertainment</a></li>
                                            <li><a href="blog.html">Fashion</a></li>
                                            <li><a href="blog.html">Lifestyle</a></li>
                                            <li><a href="blog.html">Others</a></li>
                                            <li><a href="blog.html">Shoes</a></li>
                                            <li><a href="blog.html">Technology</a></li>
                                        </ul>
                                    </div>
                                    <!-- End of Widget categories -->
                                    <div class="widget widget-posts">
                                        <h3 class="widget-title bb-no">Popular Posts</h3>
                                        <div class="widget-body">
                                            <div class="swiper">
                                                <div class="swiper-container swiper-theme nav-top swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-swiper-options="{
                                                    'spaceBetween': 20,
                                                    'slidesPerView': 1
                                                }">
                                                    <div class="swiper-wrapper " id="swiper-wrapper-cffac1a1146932f3" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                                        <div class="swiper-slide widget-col swiper-slide-active" role="group" aria-label="1 / 2" style="width: 280px; margin-right: 20px;">
                                                            <div class="post-widget mb-4">
                                                                <figure class="post-media br-sm">
                                                                    <img src="frontend/assets/images/blog/sidebar/1.jpg" alt="150" height="150">
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">March 1, 2021</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single.html">Fashion tells about who you are from external point</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="post-widget mb-4">
                                                                <figure class="post-media br-sm">
                                                                    <img src="frontend/assets/images/blog/sidebar/2.jpg" alt="150" height="150">
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">March 5, 2021</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single.html">New found the men dress for summer</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="post-widget mb-2">
                                                                <figure class="post-media br-sm">
                                                                    <img src="frontend/assets/images/blog/sidebar/3.jpg" alt="150" height="150">
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">March 1, 2021</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single.html">Cras ornare tristique elit</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide widget-col swiper-slide-next" role="group" aria-label="2 / 2" style="width: 280px; margin-right: 20px;">
                                                            <div class="post-widget mb-4">
                                                                <figure class="post-media br-sm">
                                                                    <img src="frontend/assets/images/blog/sidebar/4.jpg" alt="150" height="150">
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">March 1, 2021</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single.html">Vivamus vestibulum ntulla nec ante</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="post-widget mb-4">
                                                                <figure class="post-media br-sm">
                                                                    <img src="frontend/assets/images/blog/sidebar/5.jpg" alt="150" height="150">
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">March 5, 2021</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single.html">Fusce lacinia arcuet nulla</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="post-widget mb-2">
                                                                <figure class="post-media br-sm">
                                                                    <img src="frontend/assets/images/blog/sidebar/6.jpg" alt="150" height="150">
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">March 1, 2021</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single.html">Comes a cool blog post with Images</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-cffac1a1146932f3" aria-disabled="false"></div>
                                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-cffac1a1146932f3" aria-disabled="true"></div>
                                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget posts -->
                                    <div class="widget widget-custom-block">
                                        <h3 class="widget-title bb-no">Custom Block</h3>
                                        <div class="widget-body">
                                            <p class="text-default mb-0">Fringilla urna porttitor rhoncus dolor purus.
                                                Luctus veneneratis lectus magna fring.
                                                Suspendisse potenti. Sed egestas, ante et 
                                                vulputate volutpat, uctus metus libero.</p>
                                        </div>
                                    </div>
                                    <!-- End of Widget custom block -->
                                    <div class="widget widget-tags">
                                        <h3 class="widget-title bb-no">Browse Tags</h3>
                                        <div class="widget-body tags">
                                            <a href="#" class="tag">Fashion</a>
                                            <a href="#" class="tag">Style</a>
                                            <a href="#" class="tag">Travel</a>
                                            <a href="#" class="tag">Women</a>
                                            <a href="#" class="tag">Men</a>
                                            <a href="#" class="tag">Hobbies</a>
                                            <a href="#" class="tag">Shopping</a>
                                            <a href="#" class="tag">Photography</a>
                                        </div>
                                    </div>
                                    <div class="widget widget-calendar">
                                        <h3 class="widget-title bb-no">Calendar</h3>
                                        <div class="widget-body">
                                            <div class="calendar-container" data-calendar-options="{
                                                'dayExcerpt': 1
                                            }"><div class="calendar"><div class="calendar-header"><a href="#" class="btn-calendar btn-calendar-prev"><i class="la la-angle-left"></i></a><span class="calendar-title">August 2023</span><a href="#" class="btn-calendar btn-calendar-next"><i class="la la-angle-right"></i></a></div><table><thead><th class="holiday">s</th><th>m</th><th>t</th><th>w</th><th>t</th><th>f</th><th>s</th></thead><tbody><tr><td><span class="day disabled" data-date="2023-07-29T18:00:00.000Z">30</span></td><td><span class="day disabled" data-date="2023-07-30T18:00:00.000Z">31</span></td><td><span class="day" data-date="2023-07-31T18:00:00.000Z">1</span></td><td><span class="day" data-date="2023-08-01T18:00:00.000Z">2</span></td><td><span class="day" data-date="2023-08-02T18:00:00.000Z">3</span></td><td><span class="day" data-date="2023-08-03T18:00:00.000Z">4</span></td><td><span class="day" data-date="2023-08-04T18:00:00.000Z">5</span></td></tr><tr><td><span class="day" data-date="2023-08-05T18:00:00.000Z">6</span></td><td><span class="day" data-date="2023-08-06T18:00:00.000Z">7</span></td><td><span class="day" data-date="2023-08-07T18:00:00.000Z">8</span></td><td><span class="day" data-date="2023-08-08T18:00:00.000Z">9</span></td><td><span class="day" data-date="2023-08-09T18:00:00.000Z">10</span></td><td><span class="day" data-date="2023-08-10T18:00:00.000Z">11</span></td><td><span class="day" data-date="2023-08-11T18:00:00.000Z">12</span></td></tr><tr><td><span class="day" data-date="2023-08-12T18:00:00.000Z">13</span></td><td><span class="day" data-date="2023-08-13T18:00:00.000Z">14</span></td><td><span class="day" data-date="2023-08-14T18:00:00.000Z">15</span></td><td><span class="day today" data-date="2023-08-15T18:00:00.000Z">16</span></td><td><span class="day" data-date="2023-08-16T18:00:00.000Z">17</span></td><td><span class="day" data-date="2023-08-17T18:00:00.000Z">18</span></td><td><span class="day" data-date="2023-08-18T18:00:00.000Z">19</span></td></tr><tr><td><span class="day" data-date="2023-08-19T18:00:00.000Z">20</span></td><td><span class="day" data-date="2023-08-20T18:00:00.000Z">21</span></td><td><span class="day" data-date="2023-08-21T18:00:00.000Z">22</span></td><td><span class="day" data-date="2023-08-22T18:00:00.000Z">23</span></td><td><span class="day" data-date="2023-08-23T18:00:00.000Z">24</span></td><td><span class="day" data-date="2023-08-24T18:00:00.000Z">25</span></td><td><span class="day" data-date="2023-08-25T18:00:00.000Z">26</span></td></tr><tr><td><span class="day" data-date="2023-08-26T18:00:00.000Z">27</span></td><td><span class="day" data-date="2023-08-27T18:00:00.000Z">28</span></td><td><span class="day" data-date="2023-08-28T18:00:00.000Z">29</span></td><td><span class="day" data-date="2023-08-29T18:00:00.000Z">30</span></td><td><span class="day" data-date="2023-08-30T18:00:00.000Z">31</span></td><td><span class="day disabled" data-date="2023-08-31T18:00:00.000Z">1</span></td><td><span class="day disabled" data-date="2023-09-01T18:00:00.000Z">2</span></td></tr></tbody></table></div></div>
                                        </div>
                                    </div>
                                </div></div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        <footer class="footer appear-animate fadeIn appear-animation-visible" data-animation-options="{
            'name': 'fadeIn'
        }" style="animation-duration: 1.2s;">
            <div class="footer-newsletter bg-primary pt-6 pb-6">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="icon-box icon-box-side text-white">
                                <div class="icon-box-icon d-inline-flex">
                                    <i class="w-icon-envelop3"></i>
                                </div>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title text-white text-uppercase mb-0">Subscribe To  Our Newsletter</h4>
                                    <p class="text-white">Get all the latest information on Events, Sales and Offers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-9 mt-4 mt-lg-0 ">
                            <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                                <input type="email" class="form-control mr-2 bg-white" name="email" id="email" placeholder="Your E-mail Address">
                            <button class="btn btn-dark btn-rounded" type="submit">Subscribe<i class="w-icon-long-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="widget widget-about">
                                <a href="demo1.html" class="logo-footer">
                                    <img src="frontend/assets/images/logo_footer.png" alt="logo-footer" width="144" height="45">
                                </a>
                                <div class="widget-body">
                                    <p class="widget-about-title">Got Question? Call us 24/7</p>
                                    <a href="tel:18005707777" class="widget-about-call">1-800-570-7777</a>
                                    <p class="widget-about-desc">Register now to get updates on pronot get up icons
                                        &amp; coupons ster now toon.
                                    </p>

                                    <div class="social-icons social-icons-colored">
                                        <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                        <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                        <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                        <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                        <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h3 class="widget-title">Company</h3>
                                <ul class="widget-body">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="#">Team Member</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="#">Affilate</a></li>
                                    <li><a href="#">Order History</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4>
                                <ul class="widget-body">
                                    <li><a href="#">Track My Order</a></li>
                                    <li><a href="cart.html">View Cart</a></li>
                                    <li><a href="login.html">Sign In</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="wishlist.html">My Wishlist</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4>
                                <ul class="widget-body">
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Money-back guarantee!</a></li>
                                    <li><a href="#">Product Returns</a></li>
                                    <li><a href="#">Support Center</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Term and Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-middle">
                    <div class="widget widget-category">
                        <div class="category-box">
                            <h6 class="category-name">Consumer Electric:</h6>
                            <a href="#">TV Television</a>
                            <a href="#">Air Condition</a>
                            <a href="#">Refrigerator</a>
                            <a href="#">Washing Machine</a>
                            <a href="#">Audio Speaker</a>
                            <a href="#">Security Camera</a>
                            <a href="#">View All</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Clothing &amp; Apparel:</h6>
                            <a href="#">Men's T-shirt</a>
                            <a href="#">Dresses</a>
                            <a href="#">Men's Sneacker</a>
                            <a href="#">Leather Backpack</a>
                            <a href="#">Watches</a>
                            <a href="#">Jeans</a>
                            <a href="#">Sunglasses</a>
                            <a href="#">Boots</a>
                            <a href="#">Rayban</a>
                            <a href="#">Acccessories</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Home, Garden &amp; Kitchen:</h6>
                            <a href="#">Sofa</a>
                            <a href="#">Chair</a>
                            <a href="#">Bed Room</a>
                            <a href="#">Living Room</a>
                            <a href="#">Cookware</a>
                            <a href="#">Utensil</a>
                            <a href="#">Blender</a>
                            <a href="#">Garden Equipments</a>
                            <a href="#">Decor</a>
                            <a href="#">Library</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Health &amp; Beauty:</h6>
                            <a href="#">Skin Care</a>
                            <a href="#">Body Shower</a>
                            <a href="#">Makeup</a>
                            <a href="#">Hair Care</a>
                            <a href="#">Lipstick</a>
                            <a href="#">Perfume</a>
                            <a href="#">View all</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Jewelry &amp; Watches:</h6>
                            <a href="#">Necklace</a>
                            <a href="#">Pendant</a>
                            <a href="#">Diamond Ring</a>
                            <a href="#">Silver Earing</a>
                            <a href="#">Leather Watcher</a>
                            <a href="#">Rolex</a>
                            <a href="#">Gucci</a>
                            <a href="#">Australian Opal</a>
                            <a href="#">Ammolite</a>
                            <a href="#">Sun Pyrite</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Computer &amp; Technologies:</h6>
                            <a href="#">Laptop</a>
                            <a href="#">iMac</a>
                            <a href="#">Smartphone</a>
                            <a href="#">Tablet</a>
                            <a href="#">Apple</a>
                            <a href="#">Asus</a>
                            <a href="#">Drone</a>
                            <a href="#">Wireless Speaker</a>
                            <a href="#">Game Controller</a>
                            <a href="#">View all</a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="footer-left">
                        <p class="copyright">Copyright © 2021 Wolmart Store. All Rights Reserved.</p>
                    </div>
                    <div class="footer-right">
                        <span class="payment-label mr-lg-8">We're using safe payment for</span>
                        <figure class="payment">
                            <img src="frontend/assets/images/payment.png" alt="payment" width="159" height="25">
                        </figure>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    <div class="compare-popup">                    <div class="container">                        <div class="compare-title">                            <h4 class="title title-center">Compare Products</h4>                        </div>                        <ul class="compare-product-list list-style-none">                            <li></li><li></li><li></li><li></li>                        </ul>                        <a href="#" class="btn btn-clean">Clean All</a>                        <a href="compare.html" class="btn btn-dark btn-rounded">Start Compare !</a>                    </div>                </div>                <div class="compare-popup-overlay">                </div><div class="minipopup-area"></div></div>
    <!-- End of Page Wrapper -->

    <!-- Start of Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo1.html" class="sticky-link active">
            <i class="w-icon-home"></i>
            <p>Home</p>
        </a>
        <a href="shop-banner-sidebar.html" class="sticky-link">
            <i class="w-icon-category"></i>
            <p>Shop</p>
        </a>
        <a href="my-account.html" class="sticky-link">
            <i class="w-icon-account"></i>
            <p>Account</p>
        </a>
        <div class="cart-dropdown dir-up">
            <a href="cart.html" class="sticky-link">
                <i class="w-icon-cart"></i>
                <p>Cart</p>
            </a>
            <div class="dropdown-box">
                <div class="products">
                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="product-default.html">Beige knitted elas<br>tic
                                    runner shoes</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$25.68</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="#">
                                <img src="frontend/assets/images/cart/product-1.jpg" alt="product" height="84" width="94">
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close" aria-label="button">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="https://www.portotheme.com/html/wolmart/product.html">Blue utility pina<br>fore
                                    denim dress</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$32.99</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="#">
                                <img src="frontend/assets/images/cart/product-2.jpg" alt="product" width="84" height="94">
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close" aria-label="button">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="cart-total">
                    <label>Subtotal:</label>
                    <span class="price">$58.67</span>
                </div>

                <div class="cart-action">
                    <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                    <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
                </div>
            </div>
            <!-- End of Dropdown Box -->
        </div>
        
        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="w-icon-search"></i>
                <p>Search</p>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search" required="">
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- End of Sticky Footer -->

    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70"> <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35" r="34" style="stroke-dasharray: 23.1423, 400;"></circle> </svg> </a>
    <!-- End of Scroll Top -->

    <!-- Start of Mobile Menu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay"></div>
        <!-- End of .mobile-menu-overlay -->

        <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
        <!-- End of .mobile-menu-close -->

        <div class="mobile-menu-container scrollable">
            <form action="#" method="get" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search" required="">
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
            <div class="tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#main-menu" class="nav-link active">Main Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#categories" class="nav-link">Categories</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="main-menu">
                    <ul class="mobile-menu">
                        <li><a href="demo1.html">Home</a></li>
                        <li>
                            <a href="shop-banner-sidebar.html">Shop<span class="toggle-btn"></span></a>
                            <ul>
                                <li>
                                    <a href="#">Shop Pages<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                        <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Full Width Banner</a></li>
                                        <li><a href="shop-horizontal-filter.html">Horizontal Filter<span class="tip tip-hot">Hot</span></a></li>
                                        <li><a href="shop-off-canvas.html">Off Canvas Sidebar<span class="tip tip-new">New</span></a></li>
                                        <li><a href="shop-infinite-scroll.html">Infinite Ajax Scroll</a></li>
                                        <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                        <li><a href="shop-both-sidebar.html">Both Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Shop Layouts<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="shop-grid-3cols.html">3 Columns Mode</a></li>
                                        <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                        <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                        <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                        <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                        <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                        <li><a href="shop-list.html">List Mode</a></li>
                                        <li><a href="shop-list-sidebar.html">List Mode With Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Product Pages<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="product-variable.html">Variable Product</a></li>
                                        <li><a href="product-featured.html">Featured &amp; Sale</a></li>
                                        <li><a href="product-accordion.html">Data In Accordion</a></li>
                                        <li><a href="product-section.html">Data In Sections</a></li>
                                        <li><a href="product-swatch.html">Image Swatch</a></li>
                                        <li><a href="product-extended.html">Extended Info</a>
                                        </li>
                                        <li><a href="product-without-sidebar.html">Without Sidebar</a></li>
                                        <li><a href="product-video.html">360<sup>o</sup> &amp; Video<span class="tip tip-new">New</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Product Layouts<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="product-default.html">Default<span class="tip tip-hot">Hot</span></a></li>
                                        <li><a href="product-vertical.html">Vertical Thumbs</a></li>
                                        <li><a href="product-grid.html">Grid Images</a></li>
                                        <li><a href="product-masonry.html">Masonry</a></li>
                                        <li><a href="product-gallery.html">Gallery</a></li>
                                        <li><a href="product-sticky-info.html">Sticky Info</a></li>
                                        <li><a href="product-sticky-thumb.html">Sticky Thumbs</a></li>
                                        <li><a href="product-sticky-both.html">Sticky Both</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="vendor-dokan-store.html">Vendor<span class="toggle-btn"></span></a>
                            <ul>
                                <li>
                                    <a href="#">Store Listing<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="vendor-dokan-store-list.html">Store listing 1</a></li>
                                        <li><a href="vendor-wcfm-store-list.html">Store listing 2</a></li>
                                        <li><a href="vendor-wcmp-store-list.html">Store listing 3</a></li>
                                        <li><a href="vendor-wc-store-list.html">Store listing 4</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Vendor Store<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="vendor-dokan-store.html">Vendor Store 1</a></li>
                                        <li><a href="vendor-wcfm-store-product-grid.html">Vendor Store 2</a></li>
                                        <li><a href="vendor-wcmp-store-product-grid.html">Vendor Store 3</a></li>
                                        <li><a href="vendor-wc-store-product-grid.html">Vendor Store 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog.html">Blog<span class="toggle-btn"></span></a>
                            <ul>
                                <li><a href="blog.html">Classic</a></li>
                                <li><a href="blog-listing.html">Listing</a></li>
                                <li>
                                    <a href="https://www.portotheme.com/html/wolmart/blog-grid.html">Grid<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                        <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                        <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                        <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Masonry<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                        <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                        <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                        <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Mask<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                        <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="post-single.html">Single Post</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="about-us.html">Pages<span class="toggle-btn"></span></a>
                            <ul>
                                
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="become-a-vendor.html">Become A Vendor</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="faq.html">FAQs</a></li>
                                <li><a href="error-404.html">Error 404</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="elements.html">Elements<span class="toggle-btn"></span></a>
                            <ul>
                                <li><a href="element-products.html">Products</a></li>
                                <li><a href="element-titles.html">Titles</a></li>
                                <li><a href="element-typography.html">Typography</a></li>
                                <li><a href="element-categories.html">Product Category</a></li>
                                <li><a href="element-buttons.html">Buttons</a></li>
                                <li><a href="element-accordions.html">Accordions</a></li>
                                <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                                <li><a href="element-tabs.html">Tabs</a></li>
                                <li><a href="element-testimonials.html">Testimonials</a></li>
                                <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                <li><a href="element-instagrams.html">Instagrams</a></li>
                                <li><a href="element-cta.html">Call to Action</a></li>
                                <li><a href="element-vendors.html">Vendors</a></li>
                                <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                <li><a href="element-icons.html">Icons</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="categories">
                    <ul class="mobile-menu">
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-tshirt2"></i>Fashion
                            <span class="toggle-btn"></span></a>
                            <ul>
                                <li>
                                    <a href="#">Women<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Jewlery &amp;
                                                Watches</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Sale</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Men<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Jewlery &amp;
                                                Watches</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-home"></i>Home &amp; Garden
                            <span class="toggle-btn"></span></a>
                            <ul>
                                <li>
                                    <a href="#">Bedroom<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Beds, Frames &amp;
                                                Bases</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Dressers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Nightstands</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Kid's Beds &amp;
                                                Headboards</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Armoires</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Living Room<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Coffee Tables</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Chairs</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Tables</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Futons &amp; Sofa
                                                Beds</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Cabinets &amp;
                                                Chests</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Office<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Office Chairs</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Desks</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bookcases</a></li>
                                        <li><a href="shop-fullwidth-banner.html">File Cabinets</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Breakroom
                                                Tables</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Kitchen &amp; Dining<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Dining Sets</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Kitchen Storage
                                                Cabinets</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bashers Racks</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Dining Chairs</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Dining Room
                                                Tables</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bar Stools</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-electronics"></i>Electronics
                            <span class="toggle-btn"></span></a>
                            <ul>
                                <li>
                                    <a href="#">Laptops &amp; Computers<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Desktop
                                                Computers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Monitors</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Laptops</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Hard Drives &amp;
                                                Storage</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Computer
                                                Accessories</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">TV &amp; Video<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">TVs</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Home Audio
                                                Speakers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Projectors</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Media Streaming
                                                Devices</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Digital Cameras<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Digital SLR
                                                Cameras</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Sports &amp; Action
                                                Cameras</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Camera Lenses</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Photo Printer</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Digital Memory
                                                Cards</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Cell Phones<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Carrier Phones</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Unlocked Phones</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Phone &amp; Cellphone
                                                Cases</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Cellphone
                                                Chargers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-furniture"></i>Furniture
                            <span class="toggle-btn"></span></a>
                            <ul>
                                <li>
                                    <a href="#">Furniture<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Sofas &amp; Couches</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Armchairs</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bed Frames</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Beside Tables</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Dressing Tables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Lighting<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Light Bulbs</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Lamps</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Celling Lights</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Wall Lights</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Bathroom
                                                Lighting</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Home Accessories<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Decorative
                                                Accessories</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Candals &amp;
                                                Holders</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Home Fragrance</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Mirrors</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Clocks</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Garden &amp; Outdoors<span class="toggle-btn"></span></a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Garden
                                                Furniture</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Lawn Mowers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Pressure
                                                Washers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">All Garden
                                                Tools</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Outdoor Dining</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-heartbeat"></i>Healthy &amp; Beauty
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-gift"></i>Gift Ideas
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-gamepad"></i>Toy &amp; Games
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-ice-cream"></i>Cooking
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-ios"></i>Smart Phones
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-camera"></i>Cameras &amp; Photo
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-ruby"></i>Accessories
                            </a>
                        </li>
                        <li>
                            <a href="shop-banner-sidebar.html" class="font-weight-bold text-primary text-uppercase ls-25">
                                View All Categories<i class="w-icon-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Mobile Menu -->

    <!-- Plugin JS File -->
    <script src="frontend/assets/vendor/jquery/jquery.min.js"></script>
    <script src="frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="frontend/assets/vendor/sticky/sticky.js"></script>
    <script src="frontend/assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="frontend/assets/js/main.min.js"></script>




</body><!-- Mirrored from portotheme.com/html/wolmart/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jan 2022 07:31:48 GMT --></html>