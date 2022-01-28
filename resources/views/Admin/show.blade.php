@extends('layouts.app')

@section('title', 'Auto Name')

@section('Maincontent')

    <!-- BEGIN Main Container -->
    <div class="main-container col1-layout wow bounceInUp animated">
      <div class="main">
        <div class="col-main">
          <!-- Endif Next Previous Product -->
          <div class="product-view wow bounceInUp animated" itemscope="" itemtype="http://schema.org/Product" itemid="#product_base">
            <div id="messages_product_view"></div>
            <!--product-next-prev-->
            <div class="product-essential container">
              <div class="row">
                <form action="#" method="post" id="product_addtocart_form">
                  <!--End For version 1, 2, 6 -->
                  <!-- For version 3 -->
                  <div class="product-img-box col-lg-5 col-sm-5 col-xs-12">
                    <div class="new-label new-top-left">Hot</div>
                    <div class="sale-label sale-top-left">-15%</div>
                    <div class="product-image">
                      <div class="product-full"> <img id="product-zoom1"
                        src="{{ asset('/storage/imagesupload/' . $Autos->path) }}" data-zoom-image="products-images/p46.jpg" alt="product-image"/> </div>
                    </div>
                    <!-- end: more-images -->
                     <div class="toll-free"><a href="#"><i class="fa fa-phone"></i> +1 800 789 0000</a></div>
                    <div class="ask-question"><a href="#" onClick="ShowMe();"><i class="fa fa-question"></i> Ask a Question</a></div>
                    <div class="request-call"><a href="#" onClick="ShowMe1();"><i class="fa fa-money"></i> Finance Calculator</a></div>
                  </div>
                  <!--End For version 1,2,6-->
                  <!-- For version 3 -->
                  <div class="product-shop col-lg- col-sm-7 col-xs-12">
                    <div class="brand">{{ $Autos->companyname }}</div>
                    <div class="product-name">
                      <h1>{{ $Autos->title }}</h1>
                    </div>
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:60%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">{{ $Autos->review }}</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                    </div>
                    <div class="price-block">
                      <div class="price-box">

                        <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price">${{ $Autos->price }}</span> </p>
                      </div>
                    </div>

                    <div class="spec-row" id="summarySpecs">
                    <h2>Specifications</h2>
                      <table width="100%">
                        <tbody>
                          <tr>
                            <td class="label-spec"> Mileage <span class="coln">:</span></td>
                            <td class="value-spec"> {{ $Autos->Kilometer }} kmpl </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> Engine Displ. <span class="coln">:</span></td>
                            <td class="value-spec"> 259kw </td>
                          </tr>
                          <tr class="odd">
                            <td class="label-spec"> Transmission <span class="coln">:</span></td>
                            <td class="value-spec"> {{ $Autos->type }} </td>
                          </tr>
                          <tr class="odd">
                            <td class="label-spec"> Fuel Type <span class="coln">:</span></td>
                            <td class="value-spec"> Diesel </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> Model <span class="coln">:</span></td>
                            <td class="value-spec"> {{ $Autos->model }} </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> Power Windows <span class="coln">:</span></td>
                            <td class="value-spec"> Yes </td>
                          </tr>
                          <tr class="odd">
                            <td class="label-spec"> Airbags <span class="coln">:</span></td>
                            <td class="value-spec"> Available </td>
                          </tr>
                           <tr class="odd">
                            <td class="label-spec"> ABS <span class="coln">:</span></td>
                            <td class="value-spec"> Yes </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> Central Locking <span class="coln">:</span></td>
                            <td class="value-spec"> Yes </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> Fog Lamps <span class="coln">:</span></td>
                            <td class="value-spec"> Front </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="email-addto-box">
                      <ul class="add-to-links">
                        <li> <a class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a></li>
                        <li><a class="link-compare" href="compare.html"><span>Add to Compare</span></a></li>
                      </ul>
                      <p class="email-friend"><a href="#" class=""><span>Email to a Friend</span></a></p>
                    </div>
                    <div class="social">
                      <ul class="link">
                        <li class="fb"><a href="#"></a></li>
                        <li class="tw"><a href="#"></a></li>
                        <li class="googleplus"><a href="#"></a></li>
                        <li class="rss"><a href="#"></a></li>
                        <li class="pintrest"><a href="#"></a></li>
                        <li class="linkedin"><a href="#"></a></li>
                        <li class="youtube"><a href="#"></a></li>
                      </ul>
                    </div>
                    <ul class="shipping-pro">
                      <li>Free Servicing</li>
                      <li>Free Monthly Checkup</li>
                      <li>Extended Warrenty</li>
                    </ul>
                  </div>
                  <!--product-shop-->
                  <!--Detail page static block for version 3-->
                </form>
              </div>
            </div>
            <!--product-essential-->
            <div class="product-collateral container">
              <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Vehicle Overview </a> </li>
                <li><a href="#product_tabs_tags" data-toggle="tab">Technical Specification</a></li>
               <li> <a href="#product_tabs_custom" data-toggle="tab">Accessories</a> </li>
                 <li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>
                <li> <a href="#product_tabs_custom1" data-toggle="tab">Custom Tab1</a> </li>
              </ul>
              <div id="productTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="product_tabs_description">
                  <div class="std">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>
                    <p> Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis.</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="product_tabs_tags">
                  <div class="spec-row" id="summarySpecs">
                      <table width="100%">
                        <tbody>
                          <tr>
                            <td class="label-spec"> Mileage <span class="coln">:</span></td>
                            <td class="value-spec"> 17 kmpl </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> Engine Displ. <span class="coln">:</span></td>
                            <td class="value-spec"> 259kw </td>
                          </tr>
                          <tr class="odd">
                            <td class="label-spec"> Transmission <span class="coln">:</span></td>
                            <td class="value-spec"> Automatic </td>
                          </tr>
                          <tr class="odd">
                            <td class="label-spec"> Fuel Type <span class="coln">:</span></td>
                            <td class="value-spec"> Diesel </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> Model <span class="coln">:</span></td>
                            <td class="value-spec"> 2019 </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> Power Windows <span class="coln">:</span></td>
                            <td class="value-spec"> Yes </td>
                          </tr>
                          <tr class="odd">
                            <td class="label-spec"> Airbags <span class="coln">:</span></td>
                            <td class="value-spec"> Available </td>
                          </tr>
                           <tr class="odd">
                            <td class="label-spec"> ABS <span class="coln">:</span></td>
                            <td class="value-spec"> Yes </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> Central Locking <span class="coln">:</span></td>
                            <td class="value-spec"> Yes </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> Fog Lamps <span class="coln">:</span></td>
                            <td class="value-spec"> Front </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="reviews_tabs">
                  <div class="woocommerce-Reviews">
                    <div>
                      <h2 class="woocommerce-Reviews-title">2 reviews for <span>Bacca Bucci Men's Running Shoes</span></h2>
                      <ol class="commentlist">
                        <li class="comment">
                          <div> <img alt="" src="images/member1.png" class="avatar avatar-60 photo">
                            <div class="comment-text">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div style="width:100%" class="rating"></div>
                                </div>
                              </div>
                              <p class="meta"> <strong>John Doe</strong> <span>–</span> April 19, 2018 </p>
                              <div class="description">
                                <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <p>Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
                              </div>
                            </div>
                          </div>
                        </li>
                        <!-- #comment-## -->
                        <li class="comment">
                          <div> <img alt="" src="images/member2.png" class="avatar avatar-60 photo">
                            <div class="comment-text">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div style="width:100%" class="rating"></div>
                                </div>
                              </div>
                              <p class="meta"> <strong>Stephen Smith</strong> <span>–</span> June 02, 2018 </p>
                              <div class="description">
                                <p>Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                            </div>
                          </div>
                        </li>
                        <!-- #comment-## -->
                      </ol>
                    </div>
                    <div>
                      <div>
                        <div class="comment-respond"> <span class="comment-reply-title">Add a review </span>
                          <form action="#" method="post" class="comment-form" novalidate>
                            <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                            <div class="comment-form-rating">
                              <label id="rating">Your rating</label>
                              <p class="stars"> <span> <a class="star-1" href="#">1</a> <a class="star-2" href="#">2</a> <a class="star-3" href="#">3</a> <a class="star-4" href="#">4</a> <a class="star-5" href="#">5</a> </span> </p>
                            </div>
                            <p class="comment-form-comment">
                              <label>Your review <span class="required">*</span></label>
                              <textarea id="comment" name="comment" cols="45" rows="8" required></textarea>
                            </p>
                            <p class="comment-form-author">
                              <label for="author">Name <span class="required">*</span></label>
                              <input id="author" name="author" type="text" value="" size="30" required>
                            </p>
                            <p class="comment-form-email">
                              <label for="email">Email <span class="required">*</span></label>
                              <input id="email" name="email" type="email" value="" size="30" required>
                            </p>
                            <p class="form-submit">
                              <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                            </p>
                          </form>
                        </div>
                        <!-- #respond -->
                      </div>
                    </div>
                    <div class="clear"></div>
                  </div>
                </div>
                <div class="tab-pane fade" id="product_tabs_custom">
                  <div class="spec-row" id="summarySpecs">
                      <table width="100%">
                        <tbody>
                          <tr>
                            <td class="label-spec"> Air Conditioner <span class="coln">:</span></td>
                            <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> AntiLock Braking System <span class="coln">:</span></td>
                            <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          </tr>
                          <tr class="odd">
                            <td class="label-spec"> Power Steering <span class="coln">:</span></td>
                            <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          </tr>
                          <tr class="odd">
                            <td class="label-spec"> Power Windows <span class="coln">:</span></td>
                            <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> CD Player <span class="coln">:</span></td>
                            <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> Leather Seats <span class="coln">:</span></td>
                            <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          </tr>
                          <tr class="odd">
                            <td class="label-spec"> Central Locking <span class="coln">:</span></td>
                            <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          </tr>
                           <tr class="odd">
                            <td class="label-spec"> Power Door Locks <span class="coln">:</span></td>
                            <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> Brake Assist <span class="coln">:</span></td>
                            <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          </tr>
                          <tr>
                            <td class="label-spec"> Driver Airbag <span class="coln">:</span></td>
                            <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="product_tabs_custom1">
                  <div class="product-tabs-content-inner clearfix">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>
                  </div>
                </div>
              </div>
            </div>

            <!--product-collateral-->
            <div class="box-additional">
              <!-- BEGIN RELATED PRODUCTS -->
              <div class="related-pro container">
                <div class="slider-items-products">
                  <div class="new_title center">
                    <h2>Related Products</h2>
                  </div>
                  <div id="related-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 products-grid">
                      <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p36.jpg" alt="Retis lapen casen"></a>
                              <div class="new-label new-top-left">Used</div>
                              <div class="sale-label sale-top-left">-15%</div>
                              <div class="item-box-hover">
                                <div class="box-inner">
                                  <div class="add_cart">
                                    <button class="button btn-cart" type="button"></button>
                                  </div>
                                  <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                  <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div class="rating" style="width:80%"></div>
                                    </div>
                                    <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"><span class="regular-price"><span class="price">$49000.00</span> </span> </div>
                                </div>
                                <div class="other-info">
                                  <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                                  <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                                  <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Item -->
                      <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p35.jpg" alt="Retis lapen casen"></a>
                              <div class="item-box-hover">
                                <div class="box-inner">
                                  <div class="add_cart">
                                    <button class="button btn-cart" type="button"></button>
                                  </div>
                                  <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                  <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div class="rating" style="width:80%"></div>
                                    </div>
                                    <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"><span class="regular-price"><span class="price">$39000.00</span> </span> </div>
                                </div>
                                <div class="other-info">
                                  <div class="col-km"><i class="fa fa-tachometer"></i> 847km</div>
                                  <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                  <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Item -->

                      <!-- Item -->
                      <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p34.jpg" alt="Retis lapen casen"></a>
                              <div class="item-box-hover">
                                <div class="box-inner">
                                  <div class="add_cart">
                                    <button class="button btn-cart" type="button"></button>
                                  </div>
                                  <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                  <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div class="rating" style="width:80%"></div>
                                    </div>
                                    <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"><span class="regular-price"><span class="price">$99000.00</span> </span> </div>
                                </div>
                                <div class="other-info">
                                  <div class="col-km"><i class="fa fa-tachometer"></i>687km</div>
                                  <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                  <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2019</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Item -->

                      <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p33.jpg" alt="Retis lapen casen"></a>
                              <div class="item-box-hover">
                                <div class="box-inner">
                                  <div class="add_cart">
                                    <button class="button btn-cart" type="button"></button>
                                  </div>
                                  <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                  <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div class="rating" style="width:80%"></div>
                                    </div>
                                    <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"><span class="regular-price"><span class="price">$59000.00</span> </span> </div>
                                </div>
                                <div class="other-info">
                                  <div class="col-km"><i class="fa fa-tachometer"></i> 10587km</div>
                                  <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                  <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2017</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Item -->
                      <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p31.jpg" alt="Retis lapen casen"></a>
                              <div class="new-label new-top-left">New</div>
                              <div class="item-box-hover">
                                <div class="box-inner">
                                  <div class="add_cart">
                                    <button class="button btn-cart" type="button"></button>
                                  </div>
                                  <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                  <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div class="rating" style="width:80%"></div>
                                    </div>
                                    <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"><span class="regular-price"><span class="price">$47000.00</span> </span> </div>
                                </div>
                                <div class="other-info">
                                  <div class="col-km"><i class="fa fa-tachometer"></i> 0km</div>
                                  <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                  <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2019</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Item -->

                      <!-- Item -->
                      <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p32.jpg" alt="Retis lapen casen"></a>
                              <div class="new-label new-top-left">New</div>
                              <div class="item-box-hover">
                                <div class="box-inner">
                                  <div class="add_cart">
                                    <button class="button btn-cart" type="button"></button>
                                  </div>
                                  <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                  <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"><a href="product-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div class="rating" style="width:80%"></div>
                                    </div>
                                    <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"><span class="regular-price"><span class="price">$67000.00</span> </span> </div>
                                </div>
                                <div class="other-info">
                                  <div class="col-km"><i class="fa fa-tachometer"></i> 847km</div>
                                  <div class="col-engine"><i class="fa fa-gear"></i> Semi</div>
                                  <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2016</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Item -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- end related product -->

            </div>
            <!-- end related product -->
          </div>
          <!--box-additional-->
          <!--product-view-->
        </div>
      </div>
      <!--col-main-->
    </div>
    <!--main-container-->
  </div>
  <!--col1-layout-->

@endsection

