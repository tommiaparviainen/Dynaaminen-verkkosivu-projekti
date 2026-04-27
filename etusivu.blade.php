<a href="/haku">Hae ratkaisuja</a> |
<a href="/lisaa">Lisää uusi ratkaisu</a>
<h1>Ratkaisupankki</h1>

<h2>Lisätyt ratkaisut</h2>

<ul>
    @foreach ($ratkaisut as $r)
        <li>
            <strong>{{ $r->name }}</strong><br>
            ({{ $r->problemArea->name ?? 'ei aluetta' }})<br>
            {{ $r->description }}
            <br>
            Tagit:
            @foreach ($r->tags as $tag)
                {{ $tag->name }}
            @endforeach
            <br>
            KPI:
            @foreach ($r->kpis as $kpi)
            <div>- {{ $kpi->name }}</div>
            @endforeach
        </li>
        <br>
    @endforeach
</ul>
