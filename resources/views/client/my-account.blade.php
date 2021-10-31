@extends('layouts.app')

@section('content')  
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area">
 <div class="container">
    <div class="row">
       <div class="col-md-12">
        <div class="breadcrumbs">
         <h2>My Account</h2> 
         <ul class="breadcrumbs-list">
           <li>
            <a title="Return to Home" href="index.html">Home</a>
         </li>
         <li>My Account</li>
      </ul>
   </div>
</div>
</div>
</div>
</div> 
<!-- Breadcrumbs Area Start -->
<div class="my-account-area section-padding">
   <div class="container">
      <div class="section-title2">
         <h2>Profile</h2>
         <p>Welcome to your account. Here you can manage all of your personal information and orders.</p>
         @if(Session::has('Message'))
         <div class="alert alert-info">
            {{Session::get('Message')}}
       </div>
       @endif
    </div>

    <div class="row">
      <div class="addresses-lists">
         <div class="col-xs-12 col-sm-6 col-lg-6">
            <div class="" id="accordion" role="tablist" aria-multiselectable="true">
               <div class="card ">
                  <div class="card-header" role="tab" id="headingFour">
                     <h4 class="card-header">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                           <i class="fa fa-building"></i>
                           <span>My personal information</span>
                        </a>
                     </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse-expanding" role="tabpanel" aria-labelledby="headingFour">
                     <div class="card-block">
                        <div class="coupon-info">
                           <h1 class="heading-title">Your personal information</h1>
                           <form action="{{route('user.update')}}" method="post" >
                              @csrf
                              @method('PATCH')
                              <div class="form-row">
                               <label>Full Name</label>
                               <input type="text" value="{{$user->name}}" name="name" />
                            </div>
                            <div class="form-row">
                               <label>Email</label>
                               <input type="text" value="{{$user->email}}" name="email" />
                            </div>
                            <div class="form-row">
                              <label>Sex</label>
                              <div class="sex">
                               <select class="form-control" id="sel1" name="sex">
                                 <option value="Nam">Nam</option>
                                 <option value="Nữ">Nữ</option>
                                 <option value="Khác">Khác</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-row">
                           <label>Date of Birth</label>
                           <div class="row">
                              <div class="col-xs-12">
                               <div class="form-group ">
                                  <div class="col-sm-10">
                                   <div class="input-group">
                                     <div class="input-group-addon">
                                       <i class="fa fa-calendar">
                                       </i>
                                    </div>
                                    <input class="form-control" id="date" name="birth" placeholder="MM/DD/YYYY" type="text" value="{{$user->birth}}" />
                                 </div>
                              </div>
                           </div>
                        </div>                  
                     </div>
                  </div>                   
               </div>
               <div class="form-row">
                  <label>Address</label>
                  <input type="text" placeholder="Address" value="{{$user->address}}" name="address" />
               </div>
               <div class="form-row">
                  <label>Phone</label>
                  <input type="text" placeholder="Phone" value="{{$user->phone}}" name="phone" />
               </div>

               <div class="form-row">
                  <label>New Password</label>
                  <input type="text" placeholder="New Password" name="password" />
               </div>

               <button class="btn button button-small" href="index.html"><span>
                Save
                <i class="fa fa-chevron-right"></i>
             </span></button>

          </a>
       </form>
    </div>
 </div>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-lg-6">
   <div class="myaccount-link-list">                        
      <div class="card ">
         <div class="card-header">
            <h4 class="card-header">
               <a  href="{{route('user.history')}}">
                  <i class="fa fa-list-ol"></i>
                  <span>Order history and details</span>
               </a>
            </h4>
         </div>
      </div>
   </div>
</div>
</div>
</div>
<div class="row">
   <div class="col-md-12">
      <div class="create-account-button float-xs-left">
         <a href="index.html" class="btn button button-small" title="Home">
            <span>
               <i class="fa fa-chevron-left"></i>
               Home
            </span>
         </a>
      </div>
   </div>
</div>
</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
   $(document).ready(function(){
      var date_input=$('input[name="birth"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      date_input.datepicker({
         format: 'mm/dd/yyyy',
         container: container,
         todayHighlight: true,
         autoclose: true,
      })
   })
</script>
<script>
   $("div.sex select").val("{{$user->sex}}").change();
</script>

@endsection