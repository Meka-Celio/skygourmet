<?php require_once 'parts/_header.php';
$categories = getAllCategories();
?>

<h1>Dashboard</h1>

<h2>Catégories</h2>

<a href="addCategorie.php" class="btn btn-success">Ajouter une categorie</a>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nom Categorie</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $categorie) { ?>
            <tr>
                <td><?php echo $categorie['Id'] ?></td>
                <td><?php echo $categorie['Nom'] ?></td>
                <td>
                    <a href="readCategorie.php?id=<?php echo $categorie['Id'] ?>" class="btn btn-info">Consulter</a>
                    <a href="editCategorie.php?id=<?php echo $categorie['Id'] ?>" class="btn btn-warning">Modifier</a>
                    <a href="app.deleteCategorie.php?id=<?php echo $categorie['Id'] ?>" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
        <?php } ?>

    </tbody>
</table>


<h2>Produits</h2>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nom Produit</th>
            <th>Categorie</th>
            <th>Prix (Dh)</th>
            <th>Ingrédients</th>
            <th>Photo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Tacos au thon</td>
            <td>1</td>
            <td>25</td>
            <td>Crêpe de mais, thon, fromage, sauce blache</td>
            <td>
                <img src="" alt="image du produit">
            </td>
            <td>
                <a href="readProduct.php?id=1" class="btn btn-info">Consulter</a>
                <a href="editProduct.php?id=1" class="btn btn-warning">Modifier</a>
                <a href="deleteProduct.php?id=1" class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
    </tbody>
</table>


<?php require_once 'parts/_footer.php' ?>