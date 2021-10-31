@extends('layouts.app')

@section('content')
<div class="shopping-area section-padding">
	<div class="container">
		<div class="row">
			<form method="POST" action="{{route('blog.store')}}" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label>Tiêu đề</label>
					<input type="text" class="form-control" name="title">
				</div>
				<div class="form-group">
					<label for="exampleFormControlFile1">Tải lên ảnh</label>
					<input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Nội dung</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Đăng bài viết</button>
			</form>
		</div>
	</div>
</div>
<script src={{ url('ckeditor/ckeditor.js') }}></script>
<script>
	  CKEDITOR.replace( 'exampleFormControlTextarea1' );
</script>
@endsection