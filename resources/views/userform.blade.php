<h3>Dane uxytkownika</h3>
<div>
<form action="Form" method="POST">
    {{@csrf_field()}}
    <input type="text" name="name" placeholder="podaj imie"><br>
    <input type="email" name="email" placeholder="podaj email" ><br>
    <input type="password" name="password" placeholder="podaj haslo"><br>

    <input type="radio" id="mezczyzna" name="gender" value="mezczyzna">
    <label for="mezczyzna">mezczyzna</label><br>
    <input type="radio" id="kobieta" name="gender" value="kobieta">
    <label for="kobieta">Kobieta</label><br>

    {{-- <input list="cities">

    <datalist id="cities">
    <option value="Poznan">
    <option value="Wroclaw">
    <option value="Krakow">
    <option value="Opole">
    <option value="Warszawa">
    </datalist> --}}

    <select name="cities" size="5">  
        <option value="Poznan"> Poznan </option>  
        <option value="Warszawa"> Warszawa </option>  
        <option value="Wroclaw"> Wroclaw </option>  
        <option value="Bydgoszcz"> Bydgoszcz </option>  
        <option value="Szczecin"> Szczecin </option>  
        <option value="Gdansk"> Gdansk </option>  
    <br>
    <input type="checkbox" id="rules" name="rules" value="checked">
    <label for="rules"> Regulamin</label><br>

    <input type="submit" value="zatwierdz">
</form>
</div>