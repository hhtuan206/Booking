    @extends('layouts.app')

    @section('content')  
    <!-- Breadcrumbs Area Start -->
    <div class="breadcrumbs-area">
       <div class="container">
        <div class="row">
         <div class="col-md-12">
             <div class="breadcrumbs">
                <h2>SHOPPING CART</h2> 
                <ul class="breadcrumbs-list">
                  <li>
                      <a title="Return to Home" href="/">Home</a>
                  </li>
                  <li>Shopping Cart</li>
              </ul>
          </div>
      </div>
  </div>
</div>
</div> 
<!-- Breadcrumbs Area Start --> 
<!-- Cart Area Start -->
<div class="shopping-cart-area section-padding">
  <div class="container">
      <div class="row">
        @if (Session::has('Message'))
        <div class="alert alert-success">
            <ul>
                <div class="alert alert-info" role="alert">
                 {!! Session::get('Message') !!}
             </div>
             <li></li>
         </ul>
     </div>
     @endif
     <div class="col-md-12">
        <div class="wishlist-table-area table-responsive">
            <table>
                <thead>
                    <tr>
                        <th class="product-remove">Remove</th>
                        <th class="product-image">Image</th>
                        <th class="t-product-name">Product Name</th>
                        <th class="product-edit">Edit</th>
                        <th class="product-unit-price">Unit Price</th>
                        <th class="product-quantity">Quantity</th>
                        <th class="product-subtotal">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(Cart::content() as $item)
                    <form action="{{route('cart.update')}}" method="post" id="{{$item->rowId}}"
                        >
                        @csrf
                        <tr>
                            <td class="product-remove">
                                <a href="{{route('cart.remove',$item->rowId)}}">
                                    <i class="flaticon-delete"></i>
                                </a>
                            </td>
                            <td class="product-image">
                                <a href="#">
                                    <img src="{{$item->options->image}}" alt="" width="104px" height="104px">
                                </a>
                            </td>
                            <td class="t-product-name">
                                <h3>
                                    <a href="#">{{$item->name}}</a>
                                </h3>
                            </td>
                            <td class="product-edit">
                                <p>
                                    <a href="javascript:{}" onclick="document.getElementById('{{$item->rowId}}').submit();">Edit qty</a>
                                </p>
                            </td>
                            <td class="product-unit-price">
                                <p>${{$item->price}}</p>
                            </td>
                            <td class="product-quantity product-cart-details">
                               <input type="number" name="qty" value="{{$item->qty}}">
                           </td>
                           <td class="product-quantity">
                               <p>${{$item->price * $item->qty}}</p>
                           </td>
                       </tr>
                       <input type="hidden" name="rowId" value="{{$item->rowId}}">
                   </form>
                   @endforeach
               </tbody>
           </table>
       </div>	
       <div class="shopingcart-bottom-area">
        <a class="left-shoping-cart" href="{{route('shop.index')}}">CONTINUE SHOPPING</a>
        <div class="shopingcart-bottom-area pull-right">
            <a class="right-shoping-cart" href="{{route('cart.destroy')}}">CLEAR SHOPPING CART</a>
            {{--   <a class="right-shoping-cart" href="#">UPDATE SHOPPING CART</a> --}}
        </div>
    </div>	                
</div>
</div>
</div>
</div>
<!-- Cart Area End -->
<!-- Discount Area Start -->
<div class="discount-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="subtotal-main-area">
                    <div class="subtotal-area">
                        <h2>Total<span>$ {{Cart::subtotal()}}</span></h2>
                    </div>
                    <div class="subtotal-area">
                        <h2>Tax<span>$ {{Cart::tax()}}</span></h2>
                    </div>
                    <div class="subtotal-area">
                        <h2>Subtotal<span>$ {{Cart::total()}}</span></h2>
                    </div>
                    <a href="{{route('cart.checkout')}}">CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Discount Area End -->	
@endsection