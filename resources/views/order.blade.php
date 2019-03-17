

@foreach($orders as $order)
    {{$order->id }}
    {{$order->total }}
    {{$order->time }}
@endforeach

