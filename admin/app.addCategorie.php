<?php require_once 'model.php';

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    if (addCategorie($nom)) {
        header('Location:dashboard.php?msg=addSuccess');
    } else {
        header('Location:dashboard.php?msg=addFailure');
    }
} else {
    header('Location:addCategorie.php');
}
