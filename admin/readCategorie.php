<?php require_once 'parts/_header.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('Location:dashboard.php');
}

$categorie = getCategorie($id);
?>

<h1>Les <?= $categorie['Nom'] ?></h1>


<?php require_once 'parts/_footer.php' ?>