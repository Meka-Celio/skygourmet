<?php require_once 'parts/_header.php' ?>

<h1>Dashboard</h1>

<h2>Catégories</h2>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nom Categorie</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Plat</td>
            <td>
                <a href="readCategorie.php?id=1">Consulter</a>
                <a href="editCategorie.php?id=1">Modifier</a>
                <a href="deleteCategorie.php?id=1">Supprimer</a>
            </td>
        </tr>
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
                <a href="readProduct.php?id=1">Consulter</a>
                <a href="editProduct.php?id=1">Modifier</a>
                <a href="deleteProduct.php?id=1">Supprimer</a>
            </td>
        </tr>
    </tbody>
</table>


<?php require_once 'parts/_footer.php' ?>