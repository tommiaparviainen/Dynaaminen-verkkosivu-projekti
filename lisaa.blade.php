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

    <button type="submit">Tallenna</button>
</form>