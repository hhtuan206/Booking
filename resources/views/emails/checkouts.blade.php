@component('mail::message')
# Dear {{$data->name}}

Thank you for you order of {{date('Y-m-d')}}

@component('mail::table')
| Tên sản phẩm      | Số lượng         | Đơn giá          |
| ----------------- |:----------------:| ----------------:|
@foreach($cart as $item)
| {{$item->name}} | {{$item->qty}} | {{number_format($item->price)}}đ |
@endforeach
@endcomponent

The total comes to {{$sub}}đ

Yours faithfully,<br>
{{ config('app.name') }}
@endcomponent
