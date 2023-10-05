<header id="site-header" class="site-header header-v1 absolute">
    <div class="header-mobile">
        <div class="section-padding">
            <div class="section-container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-left">
                        <div class="navbar-header">
                            <button type="button" id="show-megamenu" class="navbar-toggle"></button>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 header-center">
                        <div class="site-logo">
                            <a href="{{route('homepage')}}">
                                <img width="400" height="79" src="/media/logo.png" alt="Ruper – Furniture HTML Theme" />
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-right">
                        <div class="ruper-topcart dropdown">
                            <div class="dropdown mini-cart top-cart">
                                <div class="remove-cart-shadow"></div>
                                <a class="dropdown-toggle cart-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="icons-cart"><i class="icon-large-paper-bag"></i><span class="cart-count">2</span></div>
                                </a>
                                <div class="dropdown-menu cart-popup">
                                    <div class="cart-empty-wrap">
                                        <ul class="cart-list">
                                            <li class="empty">
                                                <span>No products in the cart.</span>
                                                <a class="go-shop" href="{{route('shop')}}">GO TO SHOP<i aria-hidden="true" class="arrow_right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cart-list-wrap">
                                        <ul class="cart-list ">
                                            <li class="mini-cart-item">
                                                <a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a>
                                                <a href="{{route('item')}}" class="product-image"><img width="600" height="600" src="/media/product/3.jpg" alt=""></a>
                                                <a href="{{route('item')}}" class="product-name">Chair Oak Matt Lacquered</a>		
                                                <div class="quantity">Qty: 1</div>
                                                <div class="price">$150.00</div>
                                            </li>
                                            <li class="mini-cart-item">
                                                <a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a>													
                                                <a href="{{route('item')}}" class="product-image"><img width="600" height="600" src="/media/product/1.jpg" alt=""></a>
                                                <a href="{{route('item')}}" class="product-name">Zunkel Schwarz</a>
                                                <div class="quantity">Qty: 1</div>
                                                <div class="price">$100.00</div>						
                                            </li>
                                        </ul>
                                        <div class="total-cart">
                                            <div class="title-total">Total: </div>
                                            <div class="total-price"><span>$100.00</span></div>
                                        </div>
                                        <div class="free-ship">
                                            <div class="title-ship">Buy <strong>$400</strong> more to enjoy <strong>FREE Shipping</strong></div>
                                            <div class="total-percent"><div class="percent" style="width:20%"></div></div>
                                        </div>
                                        <div class="buttons">
                                            <a href="{{route('cart')}}" class="button btn view-cart btn-primary">View cart</a>
                                            <a href="{{route('checkout')}}" class="button btn checkout btn-default">Check out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-mobile-fixed">
            <!-- Shop -->
            <div class="shop-page">
                <a href="{{route('shop')}}"><i class="wpb-icon-shop"></i></a>
            </div>

            <!-- Login -->
            <div class="my-account">
                <div class="login-header">
                    <a href="page-my-account.html"><i class="wpb-icon-user"></i></a>
                </div>
            </div>

            <!-- Search -->
            <div class="search-box">
                <div class="search-toggle"><i class="wpb-icon-magnifying-glass"></i></div>
            </div>

            <!-- Wishlist -->
            <div class="wishlist-box">
                <a href="{{route('wishlist')}}"><i class="wpb-icon-heart"></i></a>
            </div>
        </div>
    </div>

    <div class="header-desktop">
        <div class="header-wrapper">
            <div class="section-padding">
                <div class="section-container p-l-r">
                    <div class="row">
                        <div class="col-xl-3 col-lg-2 col-md-12 col-sm-12 col-12 header-left">
                            <div class="site-logo">
                                <a href="{{route('homepage')}}">
                                    <img width="400" height="79" src="/media/logo.png" alt="Ruper – Furniture HTML Theme" />
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center header-center">
                            <div class="site-navigation">
                                <nav id="main-navigation">
                                    <ul id="menu-main-menu" class="menu">
                                        <li class="level-0 menu-item">
                                            <a href="{{route('homepage')}}"><span class="menu-item-text">Home</span></a>
                                        </li>
                                        <li class="level-0 menu-item">
                                            <a href="{{route('shop')}}"><span class="menu-item-text">Shop</span></a>
                                        </li>
                                        <li class="level-0 menu-item menu-item-has-children mega-menu mega-menu-fullwidth align-center">
                                            <a href="{{route('blog')}}"><span class="menu-item-text">Blogs</span></a>
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
                                            <a href="#"><span class="menu-item-text">Cart</span></a>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 header-right">
                            <div class="header-page-link">

                                <!-- Search -->
                                <div class="search-box">
                                    <div class="search-toggle"><i class="icon-search"></i></div>
                                </div>
                                
                                <!-- Wishlist -->
                                <div class="wishlist-box">
                                    <a href="{{route('wishlist')}}"><i class="icon-heart"></i></a>
                                    <span class="count-wishlist">1</span>
                                </div>
                                
                                <!-- Cart -->
                                <div class="ruper-topcart dropdown light">
                                    <div class="dropdown mini-cart top-cart">
                                        <div class="remove-cart-shadow"></div>
                                        <a class="dropdown-toggle cart-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="icons-cart"><i class="icon-large-paper-bag"></i><span class="cart-count">2</span></div>
                                        </a>
                                        <div class="dropdown-menu cart-popup">
                                            <div class="cart-empty-wrap">
                                                <ul class="cart-list">
                                                    <li class="empty">
                                                        <span>No products in the cart.</span>
                                                        <a class="go-shop" href="{{route('shop')}}">GO TO SHOP<i aria-hidden="true" class="arrow_right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="cart-list-wrap">
                                                <ul class="cart-list ">
                                                    <li class="mini-cart-item">
                                                        <a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a>
                                                        <a href="{{route('item')}}" class="product-image"><img width="600" height="600" src="/media/product/3.jpg" alt=""></a>
                                                        <a href="{{route('item')}}" class="product-name">Chair Oak Matt Lacquered</a>		
                                                        <div class="quantity">Qty: 1</div>
                                                        <div class="price">$150.00</div>
                                                    </li>
                                                    <li class="mini-cart-item">
                                                        <a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a>													
                                                        <a href="{{route('item')}}" class="product-image"><img width="600" height="600" src="/media/product/1.jpg" alt=""></a>
                                                        <a href="{{route('item')}}" class="product-name">Zunkel Schwarz</a>
                                                        <div class="quantity">Qty: 1</div>
                                                        <div class="price">$100.00</div>						
                                                    </li>
                                                </ul>
                                                <div class="total-cart">
                                                    <div class="title-total">Total: </div>
                                                    <div class="total-price"><span>$100.00</span></div>
                                                </div>
                                                <div class="free-ship">
                                                    <div class="title-ship">Buy <strong>$400</strong> more to enjoy <strong>FREE Shipping</strong></div>
                                                    <div class="total-percent"><div class="percent" style="width:20%"></div></div>
                                                </div>
                                                <div class="buttons">
                                                    <a href="{{route('cart')}}" class="button btn view-cart btn-primary">View cart</a>
                                                    <a href="{{route('checkout')}}" class="button btn checkout btn-default">Check out</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>