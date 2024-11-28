<?php require_once 'parts/_header.php';
?>

<h1>Ajouter une categorie</h1>

<form action="app.addCategorie.php" method="post">
    <label for="nom">Nom de la catégorie :
        <input type="text" name="nom" id="nom" required>
    </label>
    <label for="">
        <input type="submit" value="Ajouter" name=submit class="btn btn-success">
    </label>
</form>


<?php require_once 'parts/_footer.php' ?>