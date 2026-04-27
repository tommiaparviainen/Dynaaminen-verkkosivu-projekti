<a href="/">Takaisin</a>

<h1>Lisää KPI</h1>

<form method="POST" action="/kpi">
    @csrf

    <input type="text" name="name" placeholder="KPI nimi"><br><br>

    <select name="solution_id">
        @foreach ($solutions as $s)
            <option value="{{ $s->id }}">{{ $s->name }}</option>
        @endforeach
    </select><br><br>

    <button type="submit">Tallenna</button>
</form>
