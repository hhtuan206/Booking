    @extends('layouts.app')

    @section('content')      
    <!-- slider Area Start -->
    <div class="slider-area">
     <div class="bend niceties preview-1">
      <div id="ensign-nivoslider" class="slides">	
       <img src="https://fortbragglibrary.org/wp-content/uploads/2017/12/Book-banner.jpg" alt="" title="#slider-direction-1"  />
       <img src="https://wallpapercave.com/wp/wp4650286.jpg" alt="" title="#slider-direction-2"  />
     </div>
     <!-- direction 1 -->
     <div id="slider-direction-1" class="text-center slider-direction">
       <!-- layer 1 -->
       <div class="layer-1">
        <h2 class="title-1">LET’S WRITE IMAGINE</h2>
      </div>
      <!-- layer 2 -->
      <div class="layer-2">
        <p class="title-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <!-- layer 3 -->
      <div class="layer-3">
        <a href="#" class="title-3">SEE MORE</a>
      </div>
    </div>
    <!-- direction 2 -->
    <div id="slider-direction-2" class="slider-direction">
     <!-- layer 1 -->
     <div class="layer-1">
      <h2 class="title-1">LET’S WRITE IMAGINE</h2>
    </div>
    <!-- layer 2 -->
    <div class="layer-2">
      <p class="title-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <!-- layer 3 -->
    <div class="layer-3">
      <a href="#" class="title-3">SEE MORE</a>
    </div>
    <!-- layer 4 -->
  
  </div>
</div>
</div>
<!-- slider Area End-->    
<!-- Online Banner Area Start -->    
<div class="online-banner-area">
  <div class="container">
    <div class="banner-title text-center">
      <h2>ONLINE <span>BOOK STORE</span></h2>
      <p>The Online Books Guide is the biggest big store and the biggest books library in the world that has alot of the popular and the most top category books presented here. Top Authors are here just subscribe your email address and get updated with us.</p>
    </div>
    <div class="row">
      <div class="banner-list">
        <?php $i = 1; ?>
        @foreach($products as $product)
        @if($i > 3)
        @break
        @endif
        <div class="col-md-4 col-sm-6">
          <div class="single-banner">
            <a href="#">
              <img src="{{$product->image}}" alt="" width="350px" height="350px" >
            </a>
            <div class="price"><span>$</span>{{$product->price}}</div>
            <div class="banner-bottom text-center">
              <a href="#">NEW RELEASE {{date('Y', strtotime($product->created_at))}}</a>
            </div>
          </div>
        </div>
         <?php $i++; ?>
        @endforeach
      </div>
    </div>
  </div>
</div>
<!-- Online Banner Area End -->   
<!-- Shop Info Area Start -->   

<!-- Shop Info Area End -->
<!-- Featured Product Area Start -->
<div class="featured-product-area section-padding">
  <h2 class="section-title">FEATURED PRODUCTS</h2>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tab-menu">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
          </ul>
        </div>         
      </div>
    </div>   
    <div class="row">
      <div class="product-list tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="arrival">
          <div class="featured-product-list indicator-style">
            @foreach($products as $product)
            <div class="single-p-banner">
              <div class="col-md-3">
                <div class="single-banner">
                  <div class="product-wrapper">
                    <a href="#" class="single-banner-image-wrapper">
                      <img alt="" src="{{asset($product->image)}}" width="270px" height="380px" style="display:block; width: 260px; height: 270px;">
                      <img style="position: absolute;
                      margin: auto;
                      top: 0;
                      left: 0;
                      right: 0;
                      bottom: 0;" >
                      <div class="price"><span>$</span>{{$product->price}}</div>
                      <div class="rating-icon">
                        <i class="fa fa-star icolor"></i>
                        <i class="fa fa-star icolor"></i>
                        <i class="fa fa-star icolor"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </a>
                    <div class="product-description">
                      <div class="functional-buttons">
                        <a href="{{route('cart.addCart',[$product->id,1])}}" title="Add to Cart">
                          <i class="fa fa-shopping-cart"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="banner-bottom text-center">
                    <a href="{{route('shop.show', $product->id )}}">{{$product->name}}</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        
      </div>
    </div>             
  </div>
</div>
<!-- Featured Product Area End -->
<!-- Testimonial Area Start -->

<!-- Testimonial Area End -->
<!-- Counter Area Start -->
<div class="counter-area section-padding text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
         <div class="counter-info">
          <span class="fcount">
           <span class="counter">3725</span>
         </span>
         <h3>BOOKS READ</h3>								
       </div>
     </div>		                
   </div>
   <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
     <div class="counter-info">
      <span class="fcount">
       <span class="counter">950</span>
     </span>
     <h3>ONLINE USERS</h3>								
   </div>
 </div>		                
</div>
<div class="col-md-3 col-sm-3 col-xs-6">
  <div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
   <div class="counter-info">
    <span class="fcount">
     <span class="counter">1450</span>
   </span>
   <h3>BEST AUTHORS</h3>								
 </div>
</div>		                
</div>
<div class="col-md-3 col-sm-3 col-xs-6">
  <div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
   <div class="counter-info">
    <span class="fcount">
     <span class="counter">62</span>
   </span>
   <h3>AWARDS</h3>								
 </div>
</div>		                
</div>
</div>
</div>
</div>
<!-- Counter Area End -->
<!-- Blog Area Start -->
<div class="blog-area section-padding">
  <h2 class="section-title">LATEST BLOG</h2>
  <p>The Latest Blog post for the biggest Blog for the books Library.</p>
  <div class="container">
    <div class="row">
      <div class="blog-list indicator-style">
        @foreach($blogs as $blog)
        <div class="col-md-3">
          <div class="single-blog">
            <a href="single-#">
              <img src="{{$blog->image}}" alt="" width="250px" height="350px">
            </a>
            <div class="blog-info text-center">
              <a href="#"><h2>{{$blog->title}}</h2></a>
              <div class="blog-info-bottom">
                <span class="blog-author">BY: <a href="#">{{$blog->user->name}}</a></span>
                <span class="blog-date">{{date('d-m-Y', strtotime($blog->created_at))}}</span>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<!-- Blog Area End -->
<!-- News Letter Area Start -->
<div class="newsletter-area text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="newsletter-title">
          <h2>SUBSCRIBE OUR NEWSLETTER</h2>
          <p>Subscribe here with your email us and get up to date.</p>
        </div>
        <div class="letter-box">
          <form action="#" method="post" class="search-box">
            <div>
              <input type="text" placeholder="Subscribe us">
              <button type="submit" class="btn btn-search">SUBSCRIBE<span><i class="flaticon-school-1"></i></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- News Letter Area End -->

<!--Quickview Product Start -->
<div id="quickview-wrapper">
  <!-- Modal -->
  <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="modal-product">
            <div class="product-images">
              <div class="main-image images">
                <img alt="" src="img/quick-view.jpg">
              </div>
            </div>
            <div class="product-info">
              <h1>Frame Princes Cut Diamond</h1>
              <div class="price-box">
                <p class="s-price"><span class="special-price"><span class="amount">$280.00</span></span></p>
              </div>
              <a href="product-details.html" class="see-all">See all features</a>
              <div class="quick-add-to-cart">
                <form method="post" class="cart">
                  <div class="numbers-row">
                    <input type="number" id="french-hens" value="3">
                  </div>
                  <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                </form>
              </div>
              <div class="quick-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
              </div>
              <div class="social-sharing">
                <div class="widget widget_socialsharing_widget">
                  <h3 class="widget-title-modal">Share this product</h3>
                  <ul class="social-icons">
                    <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                    <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                    <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                    <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                    <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div><!-- .product-info -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End of Quickview Product-->			
@endsection