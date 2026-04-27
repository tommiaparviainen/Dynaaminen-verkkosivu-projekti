<a href="/">Takaisin etusivulle</a>

<h1>Hae ratkaisuja</h1>

<form method="GET" action="/haku">
    <div>
        <label>Ongelma-alue</label><br>
        <select name="problem_area_id">
            @foreach ($areas as $area)
                <option value="{{ $area->id }}">{{ $area->name }}</option>
            @endforeach
        </select>
    </div>

    <br>

    <div>
        <label>Tagit</label><br>
        @foreach ($tags as $tag)
            <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
            {{ $tag->name }}<br>
        @endforeach
    </div>

    <br>

    <button type="submit">Hae</button>
</form>
<h2>Tulokset</h2>

<ul>
    @foreach ($ratkaisut as $r)
        <li>
            <strong>{{ $r->name }}</strong><br>
            {{ $r->description }}
        </li>
        <br>
    @endforeach
</ul>
