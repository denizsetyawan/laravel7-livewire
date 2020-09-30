<div>
    <ul>
        @foreach ($contact as $c)
        <li> {{ $c->name }} </li>
        @endforeach
    </ul>
</div>
