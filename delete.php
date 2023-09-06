<?php
include './connect.php';

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($connection, "Delete from `produits` where id_produit=$delete_id")
        or  die("echec");

    if ($delete_query) {
        echo "produit supprimé avec success";
        header('location: dashboard.php');
    } else {

        echo "produit nom supprimé";
        header('location: dashboard.php');
    }
}
