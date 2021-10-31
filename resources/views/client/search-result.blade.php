@foreach($data as $value)
<div class="alert alert-warning" role="alert" style="z-index: 10000;position: relative;">
  {{$value->name}}
</div>
@endforeach