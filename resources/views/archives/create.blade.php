<h2>Ajouter votre archives</h2>

<form action="/archives" method="post">
    @csrf
    <input type="text" name="intitule_archive" id="intitule_archive"> <br>
    <input type="text" name="traitement" id="traitement"><br>
    <input type="text" name="fichier" id="fichier"><br>
    <input type="text" name="type" id="type">
    <button type="submit">Enregidtrer</button>
</form>