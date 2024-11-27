<?php

$login = "celio";
$passw = "w26";
$ok = 0;

// ! Cette page n'est pas fonctionnelle sans les données du formulaire !
// ! Pour éviter l'accès sans données, posons une condition :
if (isset($_POST['submit'])) // Si la variable 'submit' existe et est != de null
{
    // * Valdation des champs
    $inputLogin = $_POST['login'];
    $inputPassw = $_POST['passw'];

    if ($inputLogin === $login) {
        $ok += 1;
    } else {
        echo "<li>Le login est incorrect ! <a href='login.php'>Retour au formulaire</a> </li>";
    }

    if ($inputPassw === $passw) {
        $ok += 1;
    } else {
        echo "<li>Le mot de passe est incorrect ! <a href='login.php'>Retour au formulaire</a></li>";
    }

    if ($ok === 2) {
        // Redirection en php
        header("Location:dashboard.php");
    } else {
        echo "<li><b>La connexion a échoué !</b> <a href='login.php'>Retour au formulaire</a></li>";
    }
} else {
    echo "Il n'y a pas de valeur envoyé par le formulaire !";
}
