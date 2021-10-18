<div id="header">
    <div class="header-container">
      <div class="header-logo"> <a href="index-2.html" title="Car HTML" class="logo">
        <div><img src="images/logo.png" alt="Car Store"></div>
        </a> </div>
      <div class="header__nav">
        <div class="header-banner">
          <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
            <div class="assetBlock">
              <div style="height: 20px; overflow: hidden;" id="slideshow">
                <p style="display: block;">Hot days! - <span>50%</span> Get ready for summer! </p>
                <p style="display: none;">Save up to <span>40%</span> Hurry limited offer!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-lg-6 col-xs-12 col-sm-6 col-md-6 call-us"><i class="fa fa-clock-o"></i> Mon - Sat : 09am to 09pm <i class="fa fa-phone"></i> Mr. Danish: +49 176 57682630</div>
        </div>
        <div class="fl-header-right">
          <div class="fl-links">
            <div class="no-js"> <a title="" class="clicker"></a>
              <div class="fl-nav-links">
                <div class="language-currency">
                  <div class="fl-language">
                  <h3>Language</h3>
                    <ul class="lang">
                      <li><a href="#"> <img src="images/english.png" alt="English"> <span>English</span> </a></li>
                      <li><a href="#"> <img src="images/francais.png" alt="French"> <span>French</span> </a></li>
                      <li><a href="#"> <img src="images/german.png" alt="German"> <span>German</span> </a></li>
                    </ul>
                  </div>
                  <!--fl-language-->
                  <!-- END For version 1,2,3,4,6 -->
                  <!-- For version 1,2,3,4,6 -->
                  <div class="fl-currency">
                   <h3>Currency</h3>
                    <ul class="currencies_list">
                      <li><a href="#" title="EGP"> <strong>£</strong> Pound Sterling</a></li>
                      <li><a href="#" title="EUR"> <strong>€</strong> Euro</a></li>
                      <li><a href="#" title="USD"> <strong>$</strong> US Dollar</a></li>
                    </ul>
                  </div>
                  <!--fl-currency-->
                  <!-- END For version 1,2,3,4,6 -->
                </div>
                 <h3>My Acount</h3>
                 @guest
                <ul class="links">
                  <li><a href="{{ route('login') }}" title="My Account">Login</a></li>
                  <li><a href="{{ route('register') }}" title="Wishlist">Register</a></li>
                </ul>
                @else
                <a class="p-2 text-dark" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();"
            >Logout ({{ Auth::user()->name }})</a>

            <form id="logout-form" action={{ route('logout') }} method="POST" style="display: none;">
                @csrf
            </form>
                  @endguest
              </div>
            </div>
          </div>
          <div class="fl-cart-contain">
            <div class="mini-cart">
              <div class="basket"> <a href="shopping-cart.html"><span> 2 </span></a> </div>
              <div class="fl-mini-cart-content" style="display: none;">
                <div class="block-subtitle">
                  <div class="top-subtotal">2 items, <span class="price">$259.99</span> </div>
                  <!--top-subtotal-->
                  <!--pull-right-->
                </div>
                <!--block-subtitle-->
                <ul class="mini-products-list" id="cart-sidebar">
                  <li class="item first">
                    <div class="item-inner"><a class="product-image" title="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" href="#l"><img alt="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" src="products-images/p4.jpg"></a>
                      <div class="product-details">
                        <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                        <!--access-->
                        <strong>1</strong> x <span class="price">$179.99</span>
                        <p class="product-name"><a href="accessories-detail.html">timi &amp; leslie Sophia Diaper Bag...</a></p>
                      </div>
                    </div>
                  </li>
                  <li class="item last">
                    <div class="item-inner"><a class="product-image" title="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" href="#"><img alt="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" src="products-images/p3.jpg"></a>
                      <div class="product-details">
                        <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                        <!--access-->
                        <strong>1</strong> x <span class="price">$80.00</span>
                        <p class="product-name"><a href="accessories-detail.html">JP Lizzy Satchel Designer Diaper Ba...</a></p>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="actions">
                  <button class="btn-checkout" title="Checkout" type="button" onClick="window.location=checkout.html"><span>Checkout</span></button>
                </div>
                <!--actions-->
              </div>
              <!--fl-mini-cart-content-->
            </div>
          </div>
          <!--mini-cart-->
          <div class="collapse navbar-collapse">
            <form class="navbar-form" role="search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                <button type="submit" class="search-btn"> <span class="glyphicon glyphicon-search"> <span class="sr-only">Search</span> </span> </button>
                </span> </div>
            </form>
          </div>
          <!--links-->
        </div>
        <div class="fl-nav-menu">
          <nav>
            <div class="mm-toggle-wrap">
              <div class="mm-toggle"><i class="fa fa-bars"></i><span class="mm-label">Menu</span> </div>
            </div>
            <div class="nav-inner">
              <!-- BEGIN NAV -->
              <ul id="nav" class="hidden-xs">
                <li class="active"> <a class="level-top" href="{{ route('home.index') }}"><span>Home</span></a></li>
                <li class="mega-menu"> <a class="level-top" href="{{ route('accessories.index') }}"><span>Accessories</span></a>
                  <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                    <div class="container">
                      <div class="level0-wrapper2">
                        <div class="nav-block nav-block-center">
                          <!--mega menu-->
                          <ul class="level0">
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Audio</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Amplifiers</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Installation Parts</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Speakers</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Stereos</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Subwoofers</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Body Parts</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bumpers</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Doors</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fenders</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Grilles</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Hoods</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Exterior</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bed Accessories</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Body Kits</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Custom Grilles</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Car Covers</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Off-Road Bumpers</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Interior</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Custom Gauges</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Dash Kits</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Seat Covers</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Steering Wheels</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sun Shades</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Lighting</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fog Lights</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Headlights</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>LED Lights</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Off-Road Lights</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Signal Lights</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                            <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Performance</span></a>
                              <!--sub sub category-->
                              <ul class="level1">
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Air Intake Systems</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Brakes</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Exhaust Systems</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Power Adders</span></a> </li>
                                <!--level2 nav-6-1-1-->
                                <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Racing Gear</span></a> </li>
                                <!--level2 nav-6-1-1-->
                              </ul>
                              <!--level1-->
                              <!--sub sub category-->
                            </li>
                            <!--level3 nav-6-1 parent item-->
                          </ul>
                          <!--level0-->
                        </div>
                        <!--nav-block nav-block-center-->

                      </div>
                      <!--level0-wrapper2-->
                    </div>
                    <!--container-->
                  </div>
                  <!--level0-wrapper dropdown-6col-->
                  <!--mega menu-->
                </li>
                <li class="level0 parent drop-menu"> <a class="level-top" href="#"><span>Listing‎</span></a>
                  <ul class="level1">
                    <li class="level1 first"><a href="grid.html"><span>Car Grid</span></a></li>
                    <li class="level1 nav-10-2"> <a href="list.html"> <span>Car List</span> </a> </li>
                    <li class="level1 nav-10-3"> <a href="grid1.html"> <span>Accessories Grid</span> </a> </li>
                    <li class="level1 nav-10-4"> <a href="list1.html"> <span>Accessories List</span> </a> </li>
                    <li class="level1 first parent"><a href="car-detail.html"><span>Car Detail</span></a> </li>
                    <li class="level1 first parent"><a href="accessories-detail.html"><span>Accessories Detail</span></a> </li>
                  </ul>
                </li>
                <li class="level0 parent drop-menu"> <a class="level-top" href="#"><span>Blog</span></a>
                  <ul class="level1">
                    <li class="level1 first"><a href="blog.html"><span>Blog List</span></a></li>
                    <li class="level1 nav-10-2"> <a href="blog-detail.html"> <span>Blog Detail</span> </a> </li>
                  </ul>
                </li>
                <li class="mega-menu hidden-sm"> <a class="level-top" href="compare.html"><span>Compare Cars‎</span></a> </li>
                <li class="level0 parent drop-menu"><a href="#"><span>Pages</span> </a>
                  <!--sub sub category-->
                  <ul class="level1">
                    <li class="level1"> <a href="about-us.html"> <span>About us</span> </a> </li>
                    <li class="level1 nav-10-4"> <a href="shopping-cart.html"> <span>Cart Page</span> </a> </li>
                    <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a>
                      <!--sub sub category-->
                      <ul class="level2 right-sub">
                        <li class="level2 nav-2-1-1 first"><a href="checkout-method.html"><span>Method</span></a></li>
                        <li class="level2 nav-2-1-5 last"><a href="checkout-billing-info.html"><span>Billing Info</span></a></li>
                      </ul>
                      <!--sub sub category-->
                    </li>
                    <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                    <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
                    <li class="level1"> <a href="multiple-addresses.html"> <span>Multiple Addresses</span> </a> </li>
                    <li class="level1"><a href="contact-us.html"><span>Contact us</span></a> </li>
                    <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                    <li class="level1"><a href="login.html"><span>Login Page</span></a> </li>
                    <li class="level1"><a href="quickview.html"><span>Quick View</span></a> </li>
                    <li class="level1"><a href="newsletter.html"><span>Newsletter</span></a> </li>
                  </ul>
                </li>
                <li class="fl-custom-tabmenulink mega-menu"> <a href="#" class="level-top"> <span>Custom</span> </a>
                  <div class="level0-wrapper fl-custom-tabmenu" style="left: 0px; display: none;">
                    <div class="container">
                      <div class="header-nav-dropdown-wrapper clearer">
                        <div class="grid12-3">
                          <div><img src="images/custom-img1.jpg" alt="custom-image"></div>
                          <h4 class="heading">SALE UP TO 30% OFF</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="grid12-3">
                          <div><img src="images/custom-img2.jpg" alt="custom-image"></div>
                          <h4 class="heading">SALE UP TO 30% OFF</h4>
                          <p>Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                        </div>
                        <div class="grid12-3">
                          <div><img src="images/custom-img3.jpg" alt="custom-image"></div>
                          <h4 class="heading">SALE UP TO 30% OFF</h4>
                          <p>Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                        </div>
                        <div class="grid12-3">
                          <div><img src="images/custom-img4.jpg" alt="custom-image"></div>
                          <h4 class="heading">SALE UP TO 30% OFF</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <!--nav-->
            </div>
          </nav>
        </div>
      </div>

      <!--row-->

    </div>
  </div>
</div>
