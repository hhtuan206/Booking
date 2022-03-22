@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		@foreach($bills as $bill)
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">Đơn ngày {{$bill->created_at}}</div>
			<div class="panel-body">
				<p>Tổng tiền {{$bill->subtotal}}$</p>
			</div>
			<!-- Table -->
			<table class="table">
				<thead>
					<tr>
						<th class="row">#</th>
						<th>Image</th>
						<th>Name Product</th>
						<th>Quantity</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>

					@foreach($bill->details()->get() as $detail)
					<tr>
						<th class="row">{{$i++}}</th>
						<th>
							<img src="{{asset($detail->product->image)}}" alt="" width="50px" height="50px">
						</th>
						<th>
							{{$detail->product->name}}
						</th>
						<th>
							{{$detail->quantity}}
						</th>
						<th>
							{{$detail->product->price}}
						</th>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		@endforeach
	</div>
</div>


@endsection
