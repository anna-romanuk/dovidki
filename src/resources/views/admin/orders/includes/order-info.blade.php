<div>
    <p>
        <a href="{{ route('manager:user_profile', $order->user->id ) }}">{{ $order->user->name }}</a><br>
        {{ $order->group->specialty }}, {{ $order->group->year }} курс<br>
        Тип довідки - {{ $order->type }}<br>
        В період від {{ $order->period_from->format('m-Y') }} до {{ $order->period_to->format('m-Y') }}<br>
        Створена - {{ $order->created_at }}<br>
    </p>
</div>