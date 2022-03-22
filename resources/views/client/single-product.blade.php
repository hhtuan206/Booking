@extends('layouts.app')

@section('content')
    <!-- Breadcrumbs Area Start -->
    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <h2>PRODUCT DETAILS</h2>
                        <ul class="breadcrumbs-list">
                            <li>
                                <a title="Return to Home" href="index.html">Home</a>
                            </li>
                            <li>Product Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Area Start -->
    <!-- Single Product Area Start -->
    <div class="single-product-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <div class="single-product-image-inner">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="one">
                                <a class="venobox" href="img/single-product/bg-1.jpg" data-gall="gallery" title="">
                                    <img src="{{asset($product->image)}}" alt="" width="570px" height="550px"
                                         style="display:block; width: 553px; height: 553px;">
                                    <img style="position: absolute;
                                                margin: auto;
                                                top: 0;
                                                left: 0;
                                                right: 0;
                                                bottom: 0;">
                                </a>
                            </div>

                        </div>
                        <!-- Nav tabs -->

                    </div>
                </div>
                <div class="col-md-6 col-sm-5">
                    <div class="single-product-details">
                        <div class="list-pro-rating">
                            <i class="fa fa-star icolor"></i>
                            <i class="fa fa-star icolor"></i>
                            <i class="fa fa-star icolor"></i>
                            <i class="fa fa-star icolor"></i>
                            <i class="fa fa-star icolor"></i>
                        </div>
                        <h2>{{$product->name}}</h2>
                        <div class="availability">
                            <span>In stock</span>
                        </div>
                        <div class="single-product-price">
                            <h2>${{$product->price}}</h2>
                        </div>
                        <div class="product-attributes clearfix">
                        <span class="pull-left" id="quantity-wanted-p">
                           <span class="dec qtybutton">-</span>
                           <input type="text" value="1" class="cart-plus-minus-box">
                           <span class="inc qtybutton">+</span>
                       </span>
                            <span>
                        <a class="cart-btn btn-default" href="{{route('cart.addCart',[$product->id,1])}}">
                            <i class="flaticon-shop"></i>
                            Add to cart
                        </a>
                    </span>
                        </div>

                        <div class="single-product-categories" style="margin-bottom:15px;margin-top: 15px;">
                            <label>Categories:</label>
                            <span>
                                @foreach($product->categories as $category)
                                    <a href="{{route('shop.category',$category->id)}}">{{$category->name}} </a>
                                @endforeach
                            </span>
                        </div>
                        <div class="social-share" style="margin-bottom:15px;margin-top: 15px;">
                            <label>Author: </label>
                            @foreach($product->authors as $author)
                                {{$author->name}}
                            @endforeach
                        </div>
                        <div class="social-share" style="margin-bottom:15px;margin-top: 15px;">
                            <label>Nxb: </label>
                            @foreach($product->nxbs as $nxb)
                                {{$nxb->name}}
                            @endforeach
                        </div>
                        <div class="social-share">
                            <label>Share: </label>
                            <ul class="social-share-icon">
                                <li><a href="#"><i class="flaticon-social"></i></a></li>
                                <li><a href="#"><i class="flaticon-social-1"></i></a></li>
                                <li><a href="#"><i class="flaticon-social-2"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="p-details-tab-content">
                        <div class="p-details-tab">
                            <ul class="p-details-nav-tab" role="tablist">
                                <li role="presentation" class="active"><a href="#more-info" aria-controls="more-info"
                                                                          role="tab" data-toggle="tab">Description</a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div class="tab-content review">
                            <div role="tabpanel" class="tab-pane active" id="more-info">
                                <p>{!! $product->description !!}</p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="data">
                                <table class="table-data-sheet">
                                    <tbody>
                                    <tr class="odd">
                                        <td>Compositions</td>
                                        <td>Cotton</td>
                                    </tr>
                                    <tr class="even">
                                        <td>Styles</td>
                                        <td>Casual</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>Properties</td>
                                        <td>Short Sleeve</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Product Area End -->
    <!-- Related Product Area Start -->
    <div class="related-product-area">
        <h2 class="section-title">RELATED PRODUCTS</h2>
        <div class="container">
            <div class="row">
                <div class="related-product indicator-style">
                    @foreach($products as $product)
                        <div class="col-md-3">
                            <div class="single-banner">
                                <div class="product-wrapper">
                                    <a href="{{route('shop.show',$product->id)}}" class="single-banner-image-wrapper">
                                        <img alt="" src="{{asset($product->image)}}"
                                             style="display:block; width: 250px; height: 250px;">
                                        <img style="position: absolute;
                                                margin: auto;
                                                top: 0;
                                                left: 0;
                                                right: 0;
                                                bottom: 0;">
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
                                            <a href="{{route('cart.addCart',[$product->id,1])}}}" title="Add to Cart">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-bottom text-center">
                                    <a href="{{route('shop.show',$product->id)}}">{{$product->name}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Related Product Area End -->
@endsection
