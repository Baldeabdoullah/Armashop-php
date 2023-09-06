<?php
include '../connect.php';

if (isset($_GET['categorie_delete'])) {
    $delete_id = $_GET['categorie_delete'];
    $delete_query = mysqli_query($connection, "Delete from `categorie` where id_categorie=$delete_id")
        or  die("echec");

    if ($delete_query) {
        echo "categorie supprimé avec success";
        header('location: ../dashboard.php');
    } else {

        echo "categorie nom supprimé";
        header('location: ../dashboard.php');
    }
}
