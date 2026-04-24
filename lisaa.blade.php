<a href="/">Takaisin etusivulle</a>
<h1>Lisää uusi ratkaisu</h1>

<form method="POST" action="/lisaa">
    @csrf
    <div>
        <label>Ratkaisun nimi</label><br>
        <input type="text" name="name">
    </div>

    <br>

    <div>
        <label>Kuvaus</label><br>
        <textarea name="description"></textarea>
    </div>

    <br>
    <br>

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

    <button type="submit">Tallenna</button>
</form>
