@if($paginator)
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Ім'я студента</th>
            <th scope="col">Спеціальність</th>
            <th scope="col">Тип</th>
            <th scope="col">Дії</th>
        </tr>
        </thead>
        <tbody>
        @foreach($paginator as $order)
            <tr>
                <th scope="row">{{ $order->id }}</th>
                <td><a href="{{ route('manager:user_profile', $order->user->id ) }}">{{ $order->user->getNameInitials() }}</a></td>
                <td>{{ $order->group->specialty }}, {{ $order->group->year }} курс</td>
                <td>{{ $order->type }}</td>
                <td><a href="{{ route('manager:order', $order->id) }}" class="btn btn-info btn-sm active" role="button" aria-pressed="true">Перегляд</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @if($paginator->total() > $paginator->count())
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                {{ $paginator->links() }}
            </div>
        </div>
    @endif
@endif