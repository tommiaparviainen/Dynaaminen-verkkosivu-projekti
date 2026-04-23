<h1>Ratkaisupankki</h1>

<h2>Lisätyt ratkaisut</h2>

<ul>
    @foreach ($ratkaisut as $r)
        <li>
            <strong>{{ $r->name }}</strong><br>
            {{ $r->description }}
        </li>
        <br>
    @endforeach
</ul>
