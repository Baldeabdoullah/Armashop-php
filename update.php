<?php
include './connect.php';

// mise a jour
if (isset($_POST['update'])) {
    $update_id = $_POST['update_id'];
    $update_category_id = $_POST['id_categorie'];
    $update_nom = $_POST['update_nom'];
    $update_description = $_POST['update_description'];
    $update_prix = $_POST['update_prix'];

    $update_image1 = $_FILES['update_image1']['name'];
    $update_image1_tmp_name = $_FILES['update_image1']['tmp_name'];
    $update_image1_folder = 'imagedoc/' .  $update_image1;

    $update_image2 = $_FILES['update_image2']['name'];
    $update_image2_tmp_name = $_FILES['update_image2']['tmp_name'];
    $update_image2_folder = 'imagedoc/' .  $update_image2;

    $update = mysqli_query($connection, "Update `produits` set 
    id_categorie = '$update_category_id', nom = '$update_nom',
    description = '$update_description' , prix = '$update_prix',
    image1 = '$update_image1', image2 = ' $update_image2' where 
    id_produit = '$update_id'");
    if ($update) {

        move_uploaded_file($update_image1, $update_image1_folder);
        move_uploaded_file($update_image2, $update_image2_folder);
        header('location:dashboard.php');
    } else {
        $display_message = "Il y'a une erreur dans la modification du produits";
    }
}


//header
include './components/header.php';

if (isset($display_message)) {
    echo " <div class='display_message'>
        <span> $display_message </span>
        <i class='fa-solid fa-xmark' onclick='this.parentElement.style.display=`none`'></i>
    </div>";
}

?>

<div class="formular-container">

    <?php
    if (isset($_GET['edit'])) {
        $id =  $_GET['edit'];

        $result = mysqli_query($connection, "Select * from `produits` where id_produit=$id");

        while ($row = mysqli_fetch_assoc($result)) {

    ?>

            <h3>Ajouter un produit</h3>
            <form method="post" enctype="multipart/form-data">

                <div>
                    <input type="hidden" value='<?php echo $row['id_produit'] ?>' name="update_id">
                </div>
                <div>
                    <input type="text" name="update_nom" value='<?php echo $row['nom']  ?>' placeholder="nom">
                </div>

                <div>
                    <textarea name="update_description" id="" cols="30" rows="10" placeholder="description">
                <?php echo $row['description'] ?>
            </textarea>
                </div>

                <div>
                    <input type="number" value='<?php echo $row['prix']  ?>' name="update_prix" placeholder="prix">
                </div>

                <div>
                    <input type="file" name="update_image1" placeholder="premiere image">
                </div>

                <div>
                    <input type="file" name="update_image2" placeholder="deuxieme image">
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

                <button type="submit" name="update">Valider</button>

            </form>

    <?php

        }
    }


    ?>

</div>

<?php
include './components/footer.php' ?>

</body>

</html>