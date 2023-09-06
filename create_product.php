<?php
include './connect.php';

if (isset($_POST['submit'])) {
    $id_categorie = $_POST['id_categorie'];
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];

    $image1 = $_FILES['image1']['name'];
    $image1_tmp_name = $_FILES['image1']['tmp_name'];
    $image1_folder = 'imagedoc/' . $image1;

    $image2 = $_FILES['image2']['name'];
    $image2_tmp_name = $_FILES['image2']['tmp_name'];
    $image2_folder = 'imagedoc/' . $image2;

    $insertion = mysqli_query($connection, "Insert into `produits` (id_categorie, nom, description, prix, image1, image2) 
    values('$id_categorie', '$nom', '$description', '$prix', '$image1', '$image2')") or die("echec d'ajout du produit");
    if ($insertion) {
        move_uploaded_file($image1_tmp_name, $image1_folder);
        move_uploaded_file($image2_tmp_name, $image2_folder);
        $afficher = "produits ajouté avec succès";
        header('location:dashboard.php');
    } else {
        $afficher = "erreur d'ajout du produit";
        header('location:dashboard.php');
    }
};

include './components/header.php';


?>

<?php
if (isset($afficher)) {
    echo "
        <div class='text-center'> 
        <span>$afficher</span>
         <i class='fa-solid fa-xmark' onclick='this.parentElement.style.display=`none`'></i>
         </div>
        ";
}

?>

<div class="formular-container">

    <h3>Ajouter un produit</h3>
    <form method="post" enctype="multipart/form-data">
        <div>
            <input type="text" name="nom" placeholder="nom">
        </div>

        <div>
            <textarea name="description" id="" cols="30" rows="10" placeholder="description"></textarea>
        </div>

        <div>
            <input type="number" name="prix" placeholder="prix">
        </div>

        <div>
            <input type="file" name="image1" placeholder="premiere image">
        </div>

        <div>
            <input type="file" name="image2" placeholder="deuxieme image">
        </div>

        <div>


            <h3>Categorie</h3>


            <select name="id_categorie" id="">

                <?php
                $categorie_result = mysqli_query($connection, "Select * from `categorie`");

                if ($categorie_result) {
                    while ($categorie_row = mysqli_fetch_assoc($categorie_result)) {

                        echo '<option value=' . $categorie_row['id_categorie'] . '> ' . $categorie_row['nom'] . ' </option> ';
                    }
                }
                ?>


            </select>
        </div>

        <button type="submit" name="submit">Valider</button>

    </form>
</div>


<!--FOOTER-->
<?php
include './components/footer.php';
?>



</body>

</html>