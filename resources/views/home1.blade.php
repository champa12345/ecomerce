@extends('master')
@section('title','home')
@section('content')
 <div class="container jtv-home-revslider">
    <div class="row">
      <div class="col-lg-9 col-sm-9 col-xs-12 jtv-main-home-slider">
        <div id='rev_slider_1_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
          <div id='rev_slider_1' class='rev_slider fullwidthabanner'>
            <ul>
              <li data-transition='slotzoom-horizontal' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slider/slide-img1.jpg'>
                <img src='images/slider/slide-img1.jpg' alt="slider image1" data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat'  />
                <div class="info">
                  <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='165'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;white-space:nowrap;'>
                    <span>Shop The Trend</span>
                  </div>
                  <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='220'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;white-space:nowrap;'>Amazing Chance!
                  </div>
                  <div class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'>Our new arrivals can't wait to meet you.</div>
                  <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='350'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'>
                    <a href='#' class="buy-btn">Browse Now</a>
                </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="banner-block"> <a href="#"> <img src="images/banner1.jpg" alt=""> </a>
          <div class="text-des-container pad-zero">
            <div class="text-des">
              <p>Designer</p>
              <h2>Handbags</h2>
            </div>
          </div>
        </div>
        <div class="banner-block"> <a href="#"> <img src="images/banner2.jpg" alt=""> </a>
          <div class="text-des-container">
            <div class="text-des">
              <p>The Ultimate</p>
              <h2>Shoes Collection</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
 </div>
<section class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                @foreach($categories as $sp1)
                <div class="col-main">
                    @foreach($sp1->products as $sp2)
                    <div class="jtv-featured-products">
                        <div class="slider-items-products">
                            <div id="featured-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col4 products-grid">
                                    <div class="item">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info">
                                                    <a class="product-image" title="Product tilte is here" href="">
                                                        @if(empty($sp2->images))
                                                            <img alt="Product tilte is here" src="{{ asset('images/products/' . $sp2->images[0]->link) }}">
                                                        @else
                                                              <img alt="Product tilte is here" src="images/products/default.png">
                                                        @endif
                                                    </a>
                                                    <div class="new-label new-top-left">new</div>
                                                    <div class="mask-shop-white"></div>
                                                    <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                                                        <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                                                    </a>
                                                    <a href="compare.html">
                                                        <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title">
                                                        <a title="Product tilte is here" href="{{ route('sanphamchitiet', ['id' => $sp2->id]) }}">
                                                            {{ $sp2->name }}
                                                        </a>
                                                    </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                @if($sp2->discount )
                                                                <span class="regular-price">
                                                                    <span class="price">{{ number_format($sp2 -> price - $sp2 -> price * $sp2 -> discount * 0.01) }}</span>
                                                                </span>
                                                                <p class="old-price">
                                                                    <span class="price-label">Regular Price:</span>
                                                                    <span class="price">{{ $sp2 -> price }}</span>
                                                                </p>
                                                                @else
                                                                <span class="regular-price">
                                                                    <span class="price">{{ number_format($sp2 -> price) }}</span>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <form></form>
                                                        <div class="actions">
                                                            <div class="add_cart">
                                                                {!! Form::open([
                                                                    'url' => route('addToCart'),
                                                                    'method' => 'POST'
                                                                ]) !!}
                                                                <button class="button btn-cart" name="addToCart" value="{{ $sp2->id }}" type="submit">
                                                                    <span><i class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                </button>
                                                                {!! Form::close() !!}
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
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection

