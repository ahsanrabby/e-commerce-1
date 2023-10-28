<!--[if lte IE 9]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve
    your experience and security.
</p>
<![endif]-->

<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>


<header class="header navbar-area">

    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="top-left">
                        <ul class="menu-top-link">
                            <li>
                                <div class="select-position">
                                    <select id="select4">
                                        <option value="0" selected>৳ BDT</option>

                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="select-position">
                                    <select id="select5">
                                        <option value="0" selected>English</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="top-middle">
                        <ul class="useful-links">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="#footer">About Us</a></li>
                            <li><a href="#footer">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="top-end">
                        @if(Session::get('customer_id'))
                            <div class="user">
                                <i class="lni lni-user"></i>
                                {{Session::get('customer_name')}}
                                <ul class="user-login">
                                    <li>
                                        <a href="{{route('customer.dashboard')}}">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="{{route('customer.logout')}}">Log Out</a>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <ul class="user-login">
                                <li>
                                    <a href="{{route('customer.login')}}">Sign In</a>
                                </li>
                                <li>
                                    <a href="{{route('customer.login')}}">Register</a>
                                </li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="header-middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-7">

                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('/')}}website/assets/images/logo/logo.png" class="h-25" style="width: 120px" alt="Logo">
                    </a>

                </div>
                <div class="col-lg-5 col-md-7 d-xs-none">

                    <div class="main-menu-search">

                        <div class="navbar-search search-style-5">
                            <div class="search-select">
                                <div class="select-position">
                                    <select id="select1">
                                        <option selected>All</option>
                                        @foreach($categories as $category)
                                            <option value="1">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <form action="{{route('search')}}">
                                <div class="search-input">
                                    <input type="text" name="query" placeholder="Search here...">
                                    <span><button type="submit" class="btn btn-outline-primary btn-sm">
                                            <i class="lni lni-search-alt p-1 mt-3"></i></button></span>


                                </div>
                            </form>
                            {{--                            <div class="search-btn">--}}
                            {{--                                <button><i class="lni lni-search-alt"></i></button>--}}
                            {{--                            </div>--}}


                        </div>

                    </div>

                </div>
                <div class="col-lg-4 col-md-2 col-5">
                    <div class="middle-right-area">
                        <div class="nav-hotline ">
                            <i class="lni lni-phone text-primary "></i>
                            <h3 class="text-success">Hotline:
                                <span><a href="">+880 1763117783</a></span>
                            </h3>
                        </div>
                        <div class="navbar-cart">
                            <div class="wishlist">
                                <a href="javascript:void(0)">
                                    <i class="lni lni-heart text-danger"></i>
                                    <span class="total-items">0</span>
                                </a>
                            </div>
                            <div class="cart-items">
                                <a href="javascript:void(0)" class="main-btn">
                                    <i class="lni lni-cart"></i>
                                    <span class="total-items">{{count(ShoppingCart::all())}}</span>
                                </a>

                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>{{count(ShoppingCart::all())}} Items</span>
                                        <a href="{{route('show.cart')}}">View Cart</a>
                                    </div>
                                    <ul class="shopping-list">
                                        @php($result = 0)
                                        @foreach(ShoppingCart::all() as $item)
                                            <li>
                                                <a href="javascript:void(0)" class="remove" title="Remove this item"><i class="lni lni-close"></i></a>
                                                <div class="cart-img-head">
                                                    <a class="cart-img" href=""><img src="{{asset($item->image)}}" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <h4>
                                                        <a href="">{{$item->name}}</a>
                                                    </h4>
                                                    <p class="quantity">{{$item->qty}}x - <span class="amount">{{$item->price}}</span>
                                                    </p>
                                                </div>
                                            </li>
                                            @php($result = $result + $item->qty * $item->price)
                                        @endforeach
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">{{$result}}</span>
                                        </div>
                                        <div class="button">
                                            <a href="{{route('checkout')}}" class="btn animate">Checkout</a>
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


    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 col-12">
                <div class="nav-inner">

                    <div class="mega-category-menu">
                        <span class="cat-button text-success"><i class="lni lni-menu "></i>All Categories</span>
                        <ul class="sub-category">
                            @foreach($categories as $category)
                                <li>
                                    <a href="{{route('product-category', ['id' => $category->id])}}">{{$category->name}}
                                        @if(count($category->subCategories) > 0)
                                            <i class="lni lni-chevron-right"></i>
                                        @endif
                                    </a>
                                    <ul class="inner-sub-category">
                                        @foreach($category->subCategories as $subCategory)
                                            <li>
                                                <a href="">{{$subCategory->name}}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </div>


                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="{{route('home')}}" class="active" aria-label="Toggle navigation">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dd-menu collapsed" href="javascript:void(0), "  data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Pages</a>
                                    <ul class="sub-menu collapse" id="submenu-1-2">
                                        <li class="nav-item"><a href="#featured_category">Featured Categroy </a></li>
                                        <li class="nav-item"><a href="faq.html">Faq</a></li>
                                        <li class="nav-item"><a href="{{route('customer.login')}}">Login</a></li>
                                        <li class="nav-item"><a href="{{route('customer.login')}}">Register</a></li>
                                        <li class="nav-item"><a href="mail-success.html">Mail Success</a></li>
                                        <li class="nav-item"><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Shop</a>
                                    <ul class="sub-menu collapse" id="submenu-1-3">
                                        <li class="nav-item"><a href="#trending">Trending Products</a></li>
                                        <li class="nav-item"><a href="product-list.html">Shop List</a></li>
                                        <li class="nav-item"><a href="product-details.html">shop Single</a></li>
                                        <li class="nav-item"><a href="{{route('show.cart')}}">Cart</a></li>
                                        <li class="nav-item"><a href="{{route('checkout')}}">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Blog</a>
                                    <ul class="sub-menu collapse" id="submenu-1-4">
                                        <li class="nav-item"><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a>
                                        </li>
                                        <li class="nav-item"><a href="blog-single.html">Blog Single</a></li>
                                        <li class="nav-item"><a href="blog-single-sidebar.html">Blog Single
                                                Sibebar</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#footer" aria-label="Toggle navigation">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="nav-social">
                    <h5 class="title text-success">Follow Us:</h5>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/ahsan.rabby.37/"><i class="lni lni-facebook-filled text-primary"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-twitter-original text-warning"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/ahsanrabby.36/"><i class="lni lni-instagram text-danger"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</header>
