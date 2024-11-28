<?php

require_once 'config.php';

// Fonction de connexion à la base de données
function connectDB(string $nameserver, string $username, string $password, string $database)
{
    // Création de la connexion à la database
    try {
        $conn = new PDO("mysql:host=$nameserver;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Renvoie de la variable de connexion
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

/* ================================================================ 
Founctions sur les catégories
=================================================================== */

// 1- Récupérer toutes les catégories
function getAllCategories()
{
    // Connexion à la DB
    $cnx = connectDB(HOST, USERNAME, PASSW, DBNAME);
    // Requete sql
    $sql = "SELECT * FROM categories ORDER BY `categories`.`Id` ASC";
    // Execution de la requete SQL
    $req = $cnx->query($sql, PDO::FETCH_ASSOC);
    // Recupération du resultat
    $datas = $req->fetchAll();
    // Fermeture de la requete
    $req->closeCursor();
    $cnx = null;

    // Envoie de la variable
    return $datas;
}

// 2- récupérer 1 categorie
function getCategorie(int $id)
{
    // Connexion à la DB
    $cnx = connectDB(HOST, USERNAME, PASSW, DBNAME);
    // Requete sql
    $sql = "SELECT * FROM categories WHERE Id = $id";
    // Execution de la requete SQL
    $req = $cnx->query($sql);
    // Recupération du resultat
    $data = $req->fetch();
    // Fermeture de la requete
    $req->closeCursor();
    $cnx = null;

    return $data;
}


function addCategorie(string $nom)
{
    // Connexion à la DB
    $cnx = connectDB(HOST, USERNAME, PASSW, DBNAME);
    // Requete SQL
    $sql = "INSERT INTO categories VALUES (0,'$nom')";
    // Execution de la requete SQL
    if ($req = $cnx->query($sql)) {
        $req->closeCursor();
        $cnx = null;
        return 1;
    } else {
        $cnx = null;
        return 0;
    }
}


function deleteCategorie(int $id)
{
    // Connexion à la DB
    $cnx = connectDB(HOST, USERNAME, PASSW, DBNAME);
    // Requete SQL
    $sql = "DELETE FROM categories WHERE Id = $id";
    // Execution de la requete SQL
    if ($req = $cnx->query($sql)) {
        $req->closeCursor();
        $cnx = null;
        return 1;
    } else {
        $cnx = null;
        return 0;
    }
}
