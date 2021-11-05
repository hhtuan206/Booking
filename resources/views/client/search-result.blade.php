@foreach($data as $value)
<div class="alert alert-warning" role="alert" style="z-index: 10000;position: relative;">
  <a href="{{route('shop.show', $value->id )}}"> {{$value->name}}</a>
  
</div>
@endforeach
