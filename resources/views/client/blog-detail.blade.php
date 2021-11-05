@extends('layouts.app')

@section('content')
<div class="container">
	<div class="blog-header">
		<h1 class="blog-title">{{$blog->title}}</h1>
		<p class="lead blog-description text-center">
			<img src="{{asset($blog->image)}}" alt="" width="350px" height="450px" >
		</p>
		<div class="row">
			<div class="col-sm-12 blog-main">
				<div class="blog-post">
					<h2 class="blog-post-title">
						
					</h2>
					<p class="blog-post meta">
						{{date('d-m-Y', strtotime($blog->updated_at)).' By '}} <a href="{{route('blog.user',$blog->user->id)}}">{{$blog->user->name}}</a>
					</p>
					<p>
						{!!$blog->content!!}
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection