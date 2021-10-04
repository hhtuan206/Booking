@extends('layouts.app')

@section('content')
<!-- Mobile Menu End -->   
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumbs">
					<h2>SHOP LEFT SIDEBAR</h2> 
					<ul class="breadcrumbs-list">
						<li>
							<a title="Return to Home" href="index.html">Home</a>
						</li>
						<li>SHOP LEFT SIDEBAR</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div> 
<!-- Breadcrumbs Area Start --> 
<!-- Shop Area Start -->
<div class="shopping-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="shop-widget">
					<div class="shop-widget-top">
						<aside class="widget widget-categories">
							<h2 class="sidebar-title text-center">CATEGORY</h2>
							<ul class="sidebar-menu">
								@foreach($categories as $category)
								<li>
									<a href="{{route('shop.category',$category->id)}}">
										<i class="fa fa-angle-double-right"></i>
										{{$category->category_name}}
									</a>
								</li>
								@endforeach
							</ul>
						</aside> 
						<aside class="widget shop-filter">
							<h2 class="sidebar-title text-center">PRICE SLIDER</h2>
							<div class="info-widget">
								<div class="price-filter">
									<div id="slider-range"></div>
									<div class="price-slider-amount">
										<input type="text" id="amount" name="price"  placeholder="Add Your Price" />
										<div class="widget-buttom">
											<input type="submit"  value="Filter"/>  
											<input type="reset" value="CLEAR" />
										</div>
									</div>
								</div>
							</div>
						</aside>                            
					</div>
					<div class="shop-widget-bottom">
						<aside class="widget widget-tag">
							<h2 class="sidebar-title">POPULAR TAG</h2>
							<ul class="tag-list">
								<li>
									<a href="#">e-book</a>
								</li>
								<li>
									<a href="#">writer</a>
								</li>
								<li>
									<a href="#">book’s</a>
								</li>
								<li>
									<a href="#">eassy</a>
								</li>
								<li>
									<a href="#">nice</a>
								</li>
								<li>
									<a href="#">author</a>
								</li>
							</ul>
						</aside>
						<aside class="widget widget-seller">
							<h2 class="sidebar-title">TOP SELLERS</h2>
							<div class="single-seller">
								<div class="seller-img">
									<img src="img/shop/1.jpg" alt="" />
								</div>
								<div class="seller-details">
									<a href="shop.html"><h5>Cold mountain</h5></a>
									<h5>$ 50.00</h5>
									<ul>
										<li><i class="fa fa-star icolor"></i></li>
										<li><i class="fa fa-star icolor"></i></li>
										<li><i class="fa fa-star icolor"></i></li>
										<li><i class="fa fa-star icolor"></i></li>
										<li><i class="fa fa-star icolor"></i></li>
									</ul>
								</div>
							</div>
							<div class="single-seller">
								<div class="seller-img">
									<img src="img/shop/2.jpg" alt="" />
								</div>
								<div class="seller-details">
									<a href=""><h5>The historian</h5></a>
									<h5>$ 50.00</h5>
									<ul>
										<li><i class="fa fa-star icolor"></i></li>
										<li><i class="fa fa-star icolor"></i></li>
										<li><i class="fa fa-star icolor"></i></li>
										<li><i class="fa fa-star icolor"></i></li>
										<li><i class="fa fa-star icolor"></i></li>
									</ul>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</div>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<div class="shop-tab-area">
					<div class="shop-tab-list">
						<div class="shop-tab-pill pull-left">
							<ul>
								<li class="active" id="left"><a data-toggle="pill" href="#home"><i class="fa fa-th"></i><span>Grid</span></a></li>
								<li><a data-toggle="pill" href="#menu1"><i class="fa fa-th-list"></i><span>List</span></a></li>
							</ul>
						</div>
						<div class="shop-tab-pill pull-right">
							<ul>
								<li class="product-size-deatils">
									<div class="show-label">
										<label>Show : </label>
										<select>
											<option value="10" selected="selected">10</option>
											<option value="09">09</option>
											<option value="08">08</option>
											<option value="07">07</option>
											<option value="06">06</option>
										</select>
									</div>
								</li>
								<li class="product-size-deatils">
									<div class="show-label">
										<label><i class="fa fa-sort-amount-asc"></i>Sort by : </label>
										<select>
											<option value="position" selected="selected">Position</option>
											<option value="Name">Name</option>
											<option value="Price">Price</option>
										</select>
									</div>
								</li>	
							</ul>
						</div>
					</div>
					<div class="tab-content">
						<div class="row tab-pane fade in active" id="home">
							<div class="shop-single-product-area">
								@foreach($products as $product)
								<div class="col-md-4 col-sm-6" >
									<div class="single-banner">
										<div class="product-wrapper">
											<a href="{{route('shop.show', $product->id )}}" class="single-banner-image-wrapper" width="270px" height="280px" style="display:block; width: 260px; height: 270px;">
												<img style="position: absolute;
												margin: auto;
												top: 0;
												left: 0;
												right: 0;
												bottom: 0;" 
												alt="" src="{{asset($product->image)}}" >
												<div class="price"><span>$</span>{{$product->price}}</div>
											</a>
											<div class="product-description">
												<div class="functional-buttons">
													<a href="{{route('cart.addCart',[$product->id,1])}}" title="Add to Cart">
														<i class="fa fa-shopping-cart"></i>
													</a>
														<i class="fa fa-compress"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="banner-bottom text-center">
											<div class="banner-bottom-title">
												<a href="{{route('shop.show', $product->id )}}">{{$product->name}}</a>
											</div>
											<div class="rating-icon">
												<i class="fa fa-star icolor"></i>
												<i class="fa fa-star icolor"></i>
												<i class="fa fa-star icolor"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
						<div id="menu1" class="tab-pane fade">
							<div class="row">
								@foreach($products as $product)
								<div class="single-shop-product">
									<div class="col-xs-12 col-sm-5 col-md-4">
										<div class="left-item">
											<a href="{{route('shop.show', $product->id )}}" title="{{$product->name}}" style="display:block; width: 260px; height: 270px;">
												<img src="{{$product->image}}" alt="" style="position: absolute;
												margin: auto;
												top: 0;
												left: 0;
												right: 0;
												bottom: 0;">
											</a>
										</div>
									</div>
									<div class="col-xs-12 col-sm-7 col-md-8">
										<div class="deal-product-content">
											<h4>
												<a href="{{route('shop.show', $product->id )}}" title="East of eden">{{$product->name}}</a>
											</h4>
											<div class="product-price">
												<span class="new-price">$ {{$product->price}}</span>
												<span class="old-price">$ 120.00</span>
											</div>
											<div class="list-rating-icon">
												<i class="fa fa-star icolor"></i>
												<i class="fa fa-star icolor"></i>
												<i class="fa fa-star icolor"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p>{!! Str::limit($product->description,200,$end='...') !!}</p>
											<div class="availability">
												@if($product->quantity > 0)
												<span>In stock</span>
												<span><a href="cart.html">Add to cart</a></span>
												@else
												<span style="background: red;">Sold out</span>
												@endif
												
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
						{{$products->links()}}
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Shop Area End -->   

@endsection