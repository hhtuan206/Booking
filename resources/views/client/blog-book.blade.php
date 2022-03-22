@extends('layouts.app')
<link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
@section('content')
<div class="breadcrumbs-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-3">
				<div class="breadcrumbs">
					<h2>Review Book</h2>
					<ul class="breadcrumbs-list">
						<li>
							<a title="Return to Home" href="index.html">Home</a>
						</li>
						<li>Review Book</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="shopping-area section-padding">
	<div class="container">
		<div class="row" style="margin-bottom: 25px;">
			<div class="col-lg-12 ">
				<div class="shop-tab-pill pull-left">
				<ul>
					<a href="{{route('blog.create')}}" class="btn btn-pill btn-success" role="button">Đăng tin mới </a>

				</ul>
			</div>
			<div class="shop-tab-pill pull-right">
				<ul>
					<li class="product-size-deatils">
						<form id="header-search" class="form-inline my-2 my-lg-0" method="post" action="/search">
							@csrf
							<input class="form-control mr-sm-2 m-input" type="search" placeholder="Search" aria-label="Search" name="search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
							<div id="search-suggest" class="s-suggest"></div>
						</form>
					</li>

				</ul>
			</div>
			</div>
		</div>
		<div class="row">
			@foreach($blogs as $blog)
			<div class="col-lg-6">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="{{asset($blog->image)}}" alt="" class="bd-placeholder-img" width="350px" height="250px">
						</div>
						<div class="col-md-8">
							<div class="card-body">

								<a class="card-title" href="{{route('blog.read',$blog->id)}}"><h5>{{$blog->title}}</h5></a>
								<p class="card-text">{!! Str::limit($blog->content, 150, $end='...') !!}</p>
								<p class="card-text">{{$blog->users->name}}</p>
								<p class="card-text"><small class="text-muted">Last update at {{date('d-m-Y', strtotime($blog->updated_at))}}</small></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="row" style="margin-top: 20px; align-content: center;">
			{{$blogs->links()}}
		</div>
	</div>
</div>

@endsection
