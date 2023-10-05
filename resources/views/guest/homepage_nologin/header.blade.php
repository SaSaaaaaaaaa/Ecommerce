<header id="site-header" class="site-header header-v1 color-white">
    <div class="header-desktop">
        <div class="header-wrapper">
            <div class="section-padding">
                <div class="section-container p-l-r">
                    <div class="row">
                        <div class="col-xl-3 col-lg-2 col-md-12 col-sm-12 col-12 header-left">
                            <div class="site-logo">
                                <a href="index10.html">
                                    <img width="400" height="79" src="media/logo-white.png" alt="Ruper – Furniture HTML Theme" />
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center header-center">
                            <div class="site-navigation">
                                <nav id="main-navigation">
                                    <ul id="menu-main-menu" class="menu">
                                        <li class="level-0 menu-item">
                                            <a href="{{route('shop')}}"><span class="menu-item-text">Shop</span></a>
                                        </li>
                                        <li class="level-0 menu-item menu-item-has-children mega-menu mega-menu-fullwidth align-center">
                                            <a href="{{route('blog')}}"><span class="menu-item-text">Blog</span></a>
                                            <div class="sub-menu">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="menu-section">
                                                            <h2 class="sub-menu-title">Recent Posts</h2>
                                                            <div class="block block-posts recent-posts p-t-5">
                                                                <ul class="posts-list">
                                                                    <li class="post-item">
                                                                        <a href="{{route('blog-details')}}" class="post-image">
                                                                            <img src="/media/blog/1.jpg">
                                                                        </a>
                                                                        <div class="post-content">
                                                                            <h2 class="post-title">
                                                                                <a href="{{route('blog-details')}}">
                                                                                    Easy Fixes For Home Decor
                                                                                </a>
                                                                            </h2>
                                                                            <div class="post-time">
                                                                                <span class="post-date">May 30, 2022</span>
                                                                                <span class="post-comment">4 Comments</span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="post-item">
                                                                        <a href="{{route('blog-details')}}" class="post-image">
                                                                            <img src="/media/blog/2.jpg">
                                                                        </a>
                                                                        <div class="post-content">
                                                                            <h2 class="post-title">
                                                                                <a href="{{route('blog-details')}}">
                                                                                    How To Make Your Home A Showplace
                                                                                </a>
                                                                            </h2>
                                                                            <div class="post-time">
                                                                                <span class="post-date">Aug 24, 2022</span>
                                                                                <span class="post-comment">2 Comments</span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="post-item">
                                                                        <a href="{{route('blog-details')}}" class="post-image">
                                                                            <img src="/media/blog/3.jpg">
                                                                        </a>
                                                                        <div class="post-content">
                                                                            <h2 class="post-title">
                                                                                <a href="{{route('blog-details')}}">
                                                                                    Stunning Furniture With Aesthetic Appeal
                                                                                </a>
                                                                            </h2>
                                                                            <div class="post-time">
                                                                                <span class="post-date">Dec 06, 2022</span>
                                                                                <span class="post-comment">1 Comment</span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="level-0 menu-item">
                                            <a href="page-contact.html"><span class="menu-item-text">Contact Us</span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 header-right">
                            <div class="header-page-link">
                                @guest
                                    @if (Route::has('login'))
                                    <ul class="navbar-nav">
                                        <li class="level-0 menu-item">
                                            <a href="{{ route('login') }}"><span class="menu-item-text" style="color:white;">{{ __('Login') }}</span></a>
                                        </li>
                                    </ul>
                                    @endif

                                    @if (Route::has('register'))
                                    <ul class="navbar-nav">
                                        <li class="level-0 menu-item">
                                            <a href="{{ route('register') }}"><span class="menu-item-text" style="color:white;">{{ __('Register') }}</span></a>
                                        </li>
                                    </ul>
                                    @endif
                                @else
                                @endguest
                                <!-- Search -->
                                <div class="search-box">
                                    <div class="search-toggle"><i class="icon-search"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>