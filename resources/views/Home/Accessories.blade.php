@extends('layouts.app')

@section('title', 'Accessories Page')

@section('Maincontent')
{{-- Accessories Section --}}
<div class="page-heading">
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <ul>
              <li class="home"> <a href="index-2.html" title="Go to Home Page">Home</a> <span>&rsaquo; </span> </li>
              <li class="category1599"> <a href="grid.html" title="">New Car</a> <span>&rsaquo; </span> </li>
              <li class="category1600"> <a href="grid.html" title="">Audi</a> <span>&rsaquo; </span> </li>
              <li class="category1601"> <strong>Sedans</strong> </li>
            </ul>
          </div>
          <!--col-xs-12-->
        </div>
        <!--row-->
      </div>
      <!--container-->
    </div>
    <div class="page-title">
      <h2>PRODUCT LISTING</h2>
    </div>
  </div>
  <!--breadcrumbs-->
  <!-- BEGIN Main Container col2-left -->
  <section class="main-container col2-left-layout bounceInUp animated">
    <!-- For version 1, 2, 3, 8 -->
    <!-- For version 1, 2, 3 -->
    <div class="container">
      <div class="row">
        <div class="col-main col-sm-9 col-sm-push-3 product-grid">
        <div class="pro-coloumn">
          <article class="col-main">
            <div class="toolbar">
              <div class="sorter">
                <div class="view-mode"> <span title="Grid" class="button button-active button-grid">&nbsp;</span><a href="list.html" title="List" class="button-list">&nbsp;</a> </div>
              </div>
              <div id="sort-by">
                <label class="left">Sort By: </label>
                <ul>
                  <li><a href="#">Position<span class="right-arrow"></span></a>
                    <ul>
                      <li><a href="#">Name</a></li>
                      <li><a href="#">Price</a></li>
                      <li><a href="#">Position</a></li>
                    </ul>
                  </li>
                </ul>
                <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
              <div class="pager">
                <div id="limiter">
                  <label>View: </label>
                  <ul>
                    <li><a href="#">15<span class="right-arrow"></span></a>
                      <ul>
                        <li><a href="#">20</a></li>
                        <li><a href="#">30</a></li>
                        <li><a href="#">35</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="pages">
                  <label>Page:</label>
                  <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="category-products">
              <ul class="products-grid">
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                 <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p1.jpg" alt="Retis lapen casen"></a>
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

                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p2.jpg" alt="Retis lapen casen"></a>
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
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p3.jpg" alt="Retis lapen casen"></a>
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
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p4.jpg" alt="Retis lapen casen"></a>
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
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p5.jpg" alt="Retis lapen casen"></a>
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
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p6.jpg" alt="Retis lapen casen"></a>
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
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p7.jpg" alt="Retis lapen casen"></a>
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
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p8.jpg" alt="Retis lapen casen"></a>
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
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p9.jpg" alt="Retis lapen casen"></a>
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
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p10.jpg" alt="Retis lapen casen"></a>
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
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p11.jpg" alt="Retis lapen casen"></a>
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
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p18.jpg" alt="Retis lapen casen"></a>
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
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p17.jpg" alt="Retis lapen casen"></a>
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
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p16.jpg" alt="Retis lapen casen"></a>
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
                </li>
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a href="product-detail.html" title="Retis lapen casen" class="product-image"><img src="products-images/p12.jpg" alt="Retis lapen casen"></a>
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
                </li>
              </ul>
            </div>
            <div class="toolbar bottom">

              <div id="sort-by">
                <label class="left">Sort By: </label>
                <ul>
                  <li><a href="#">Position<span class="right-arrow"></span></a>
                    <ul>
                      <li><a href="#">Name</a></li>
                      <li><a href="#">Price</a></li>
                      <li><a href="#">Position</a></li>
                    </ul>
                  </li>
                </ul>
                <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
              <div class="pager">
                <div id="limiter">
                  <label>View: </label>
                  <ul>
                    <li><a href="#">15<span class="right-arrow"></span></a>
                      <ul>
                        <li><a href="#">20</a></li>
                        <li><a href="#">30</a></li>
                        <li><a href="#">35</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="pages">
                  <label>Page:</label>
                  <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>
            </div>

          </article>
          </div>
          <!--	///*///======    End article  ========= //*/// -->
        </div>
        <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated">
        <div class="section-filter">
              <div class="b-filter__inner bg-grey">
                <h2>Find your right car</h2>
                <form class="b-filter">
                  <div class="btn-group bootstrap-select" style="width: 100%;">
                    <select class="selectpicker" data-width="100%" tabindex="-98">
                      <option>Select Make</option>
                      <option>Make 1</option>
                      <option>Make 2</option>
                      <option>Make 3</option>
                    </select>
                  </div>
                  <div class="btn-group bootstrap-select" style="width: 100%;">
                    <select class="selectpicker" data-width="100%" tabindex="-98">
                      <option>Select Car Status</option>
                      <option>Status 1</option>
                      <option>Status 2</option>
                      <option>Status 3</option>
                    </select>
                  </div>
                  <div class="btn-group bootstrap-select" style="width: 100%;">
                    <select class="selectpicker" data-width="100%" tabindex="-98">
                      <option>Select Model</option>
                      <option>Model 1</option>
                      <option>Model 2</option>
                      <option>Model 3</option>
                    </select>
                  </div>
                  <div class="btn-group bootstrap-select" style="width: 100%;">
                    <select class="selectpicker" data-width="100%" tabindex="-98">
                      <option>Select All Locations</option>
                      <option>Location 1</option>
                      <option>Location 2</option>
                      <option>Location 3</option>
                    </select>
                  </div>
                  <div class="btn-group bootstrap-select" style="width: 100%;">
                    <select class="selectpicker" data-width="100%" tabindex="-98">
                      <option>Select Year</option>
                      <option>2017</option>
                      <option>2016</option>
                      <option>2015</option>
                    </select>
                  </div>
                  <div class="ui-filter-slider">
                    <div class="sidebar-widget-body m-t-10">
                      <div class="price-range-holder"> <span class="min-max"> <span class="pull-left">$200.00</span> <span class="pull-right">$800.00</span> </span>
                        <input type="text" class="price-slider" value="" style="display:block" >
                      </div>
                      <!-- /.price-range-holder -->
                    </div>
                  </div>
                  <div>
                    <div class="b-filter__btns">
                      <button class="btn btn-lg btn-primary">search vehicle</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          <!-- BEGIN SIDE-NAV-CATEGORY -->
          <div class="side-nav-categories">
            <div class="block-title"> Categories </div>
            <!--block-title-->
            <!-- BEGIN BOX-CATEGORY -->
            <div class="box-content box-category">
              <ul>
                <li> <a class="active" href="grid.html">AUDIO</a> <span class="subDropdown minus"></span>
                  <ul class="level0_415" style="display:block">
                    <li> <a href="grid.html"> Amplifiers </a> <span class=""></span>

                      <!--level1-->
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Installation Parts‎ </a> <span class=""></span>

                      <!--level1-->
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Speakers </a> <span class=""></span>

                      <!--level1-->
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html">Stereos </a> <span class=""></span>
                    <li> <a href="grid.html">Subwoofers </a> <span class=""></span></li>

                      <!--level1-->
                    </li>
                  </ul>
                  <!--level0-->

                </li>
                <!--level 0-->
                <li> <a href="grid.html">BODY PARTS</a> <span class="subDropdown plus"></span>
                  <ul class="level0_455" style="display:none">
                    <li> <a href="grid.html"> Bumpers </a> <span class=""></span>

                      <!--level1-->
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Doors  </a> <span class=""></span>

                      <!--level1-->
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Fenders </a> <span class=""></span>

                      <!--level1-->
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Griles </a> <span class=""></span>

                      <!--level1-->
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html">Hoods </a> <span class=""></span>

                      <!--level1-->
                    </li>
                    <!--level1-->

                      <!--level1-->
                    </li>

                  </ul>
                  <!--level0-->
                </li>
                <!--level 0-->
                <li> <a href="#.html">EXTERIOR</a> <span class="subDropdown plus"></span>
                  <ul class="level0_482" style="display:none">
                    <li> <a href="grid.html"> Bed Accessories </a> <span class=""></span>

                      <!--level1-->
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html">Body Kits </a> <span class=""></span>

                      <!--level1-->
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html">Custom Griles </a> <span class=""></span>

                      <!--level1-->
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Car Covers </a> <span class=""></span>

                      <!--level1-->
                    </li>
                    <!--level1-->
                   <li> <a href="grid.html"> Off-Road Bumpers</a> <span class=""></span>

                      <!--level1-->
                    </li>
                    <!--level1-->

                    </li>
                    <!--level1-->
                  </ul>
                  <!--level0-->
                </li>
                <!--level 0-->
                <li> <a href="grid.html">INTERIOR</a> <span class="subDropdown plus"></span>
                <ul class="level0_482" style="display:none">
                    <li> <a href="grid.html"> Custom Gauges </a> <span class=""></span></li>
                    <li> <a href="grid.html"> Dash Kits </a> <span class=""></span></li>
                    <li> <a href="grid.html"> Seat Covers </a> <span class=""></span></li>
                    <li> <a href="grid.html"> Steering Wheels </a> <span class=""></span></li>
                    <li> <a href="grid.html"> Sun Shades</a> <span class=""></span></li>
                    </li>
                <!--level 0-->

              </ul>
              <!--level 0-->
              <li> <a href="grid.html">LIGHTING</a> <span class="subDropdown plus"></span>
                <ul class="level0_482" style="display:none">
                    <li> <a href="grid.html"> Fog Lights </a> <span class=""></span></li>
                    <li> <a href="grid.html"> Headlights </a> <span class=""></span></li>
                    <li> <a href="grid.html"> LED Lights </a> <span class=""></span></li>
                    <li> <a href="grid.html">Off-Road Lights </a> <span class=""></span></li>
                    <li> <a href="grid.html"> Signal Lights</a> <span class=""></span></li>
                    </li>
                <!--level 0-->

              </ul>
              <!--level 0-->
              <li> <a href="grid.html">PERFORMANCE</a> <span class="subDropdown plus"></span>
                <ul class="level0_482" style="display:none">
                    <li> <a href="grid.html"> Air Intake Systems </a> <span class=""></span></li>
                    <li> <a href="grid.html"> Brakes </a> <span class=""></span></li>
                    <li> <a href="grid.html"> Exhaust Systems </a> <span class=""></span></li>
                    <li> <a href="grid.html">Power Adders </a> <span class=""></span></li>
                    <li> <a href="grid.html"> Racing Gear</a> <span class=""></span></li>
                    </li>
                <!--level 0-->

              </ul>
            </div>
            <!--box-content box-category-->
          </div>
          <!--side-nav-categories-->

          <div class="custom-slider">
            <div>
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active"><img src="images/slide3.jpg" alt="slide3">
                    <div class="carousel-caption">
                      <h3><a title=" Sample Product" href="product-detail.html">50% OFF</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      <a class="link" href="#">Buy Now</a></div>
                  </div>
                  <div class="item"><img src="images/slide1.jpg" alt="slide1">
                    <div class="carousel-caption">
                      <h3><a title=" Sample Product" href="product-detail.html">Hot collection</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                  <div class="item"><img src="images/slide2.jpg" alt="slide2">
                    <div class="carousel-caption">
                      <h3><a title=" Sample Product" href="product-detail.html">Summer collection</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="sr-only">Next</span> </a></div>
            </div>
          </div>

          <div class="block block-list block-cart">
            <div class="block-title"> My Cart </div>
            <div class="block-content">
              <div class="summary">
                <p class="amount">There is <a href="#">1 item</a> in your cart.</p>
                <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price">$299.00</span> </p>
              </div>
              <div class="ajax-checkout">
                <button type="button" title="Checkout" class="button button-checkout" onClick="#"> <span>Checkout</span> </button>
              </div>
              <p class="block-subtitle">Recently added item(s)</p>
              <ul id="cart-sidebar" class="mini-products-list">
                <li class="item">
                  <div class="item-inner"> <a href="#" class="product-image"><img src="products-images/p1.jpg" width="80" alt="product"></a>
                    <div class="product-details">
                      <div class="access"> <a href="#" class="btn-remove1">Remove</a>
                      <a href="#" title="Edit item" class="btn-edit">
                      <i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                      <!--access-->

                      <strong>1</strong> x <span class="price">$299.00</span>
                      <p class="product-name"><a href="#">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a></p>
                    </div>
                    <!--product-details-bottoms-->
                  </div>
                </li>
                <li class="item  last1">
                  <div class="item-inner"> <a href="#" class="product-image"><img src="products-images/p2.jpg" width="80" alt="product"></a>
                    <div class="product-details">
                      <div class="access"> <a href="#" class="btn-remove1">Remove</a>
                      <a href="#" title="Edit item" class="btn-edit">
                      <i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                      <!--access-->

                      <strong>1</strong> x <span class="price">$299.00</span>
                      <p class="product-name"><a href="#">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a></p>
                    </div>
                    <!--product-details-bottoms-->
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="block block-compare">
            <div class="block-title"> Compare Products </div>
           <div class="block-content">
              <ol id="compare-items">
                      <li class="item odd">
                     <a href="#" class="btn-remove1" onClick="#"></a>
                  <a class="product-name" href="#">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a>            </li>
               <li class="item odd">
                     <a href="#" class="btn-remove1" onClick="#"></a>
                  <a class="product-name" href="#">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a>            </li>
               <li class="item odd">
                     <a href="#" class="btn-remove1" onClick="#"></a>
                  <a class="product-name" href="#">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a>            </li>

                </ol>

          <div class="ajax-checkout">
              <button type="button" title="Compare" class="button button-compare" onClick="#"><span>Compare</span></button>
              <button class="button button-clear" href="#"><span>Clear</span></button>
          </div><!--ajax-checkout-->
          </div>
            <!--block-content-->
          </div>
          <!--block block-list block-compare-->




        </aside>
        <!--col-right sidebar-->
      </div>
      <!--row-->
    </div>
    <!--container-->
  </section>
  <!--main-container col2-left-layout-->



  </div>


@endsection
