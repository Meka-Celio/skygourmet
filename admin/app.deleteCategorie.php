<?php require_once 'model.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (deleteCategorie($id)) {
        header('Location:dashboard.php?msg=deleteSuccess');
    } else {
        header('Location:dashboard.php?msg=deleteFailure');
    }
} else {
    header('Location:dashboard.php');
}
