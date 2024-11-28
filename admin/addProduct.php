<?php require_once 'parts/_header.php';
$categories = getAllCategories();
?>

<h1>Ajouter un Produit</h1>

<form action="app.addProduit.php" method="post" enctype="multipart/form-data">
    <label for="nom">Nom du produit
        <input type="text" name="nom" id="nom" required>
    </label>
    <label for="categorie">Catégorie du produit
        <select name="categorie" id="categorie">
            <?php foreach ($categories as $cat) { ?>
                <option value="<?php echo $cat['Id'] ?>"><?php echo $cat['Nom'] ?></option>
            <?php } ?>
        </select>
    </label>
    <label for="prix">Prix
        <input type="number" name="prix" id="prix">
    </label>
    <label for="ingredients">Ingrédients
        <textarea name="ingredients" id="ingredients"></textarea>
    </label>
    <label for="photo">Photo
        <input type="file" name="photo" id="photo">
    </label>
    <label for="">
        <input type="submit" value="Ajouter" name=submit class="btn btn-success">
    </label>
</form>


<?php require_once 'parts/_footer.php' ?>


Id Nom Categorie Prix Ingredients Photo