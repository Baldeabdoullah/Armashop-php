<?php
include './connect.php';

include './components/header.php';

?>

<!--Tableau de bord-->

<div class="dashboard-container">

    <h3>Liste des produits</h3>

    <h4><a href="./create_product.php">Creer Un Produit</a></h4>
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $result = mysqli_query($connection, "Select * from `produits`");
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo ' <tr style="background-color: lightgray;">
                <td>
                    <img src=' . 'imagedoc/' . $row['image1'] . ' class="dashboard-img" alt="">
                </td>
                <td>' . $row['nom'] . '</td>
                <td>' . $row['prix'] . ' FCFA</td>
                <td class="dashboard-action">
                    <a href="update.php?edit=' . $row['id_produit'] . '">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </a>

                    <a href="delete.php?delete= ' . $row['id_produit'] . '" onclick="return confirm(\'etes vous sures?\');" >
                     <i class="fa-solid fa-trash"></i>
                    </a>
                    
                   
                </td>
            </tr>';
                }
            }


            ?>


        </tbody>
    </table>

</div>

<div class="dashboard-container">

    <h3>Liste des Categories</h3>

    <h4><a href="./cathegorie/create.php">Creer Une Categorie</a></h4>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>



            <?php
            $categorie_result = mysqli_query($connection, "Select * from `categorie`");

            if ($categorie_result) {
                while ($categorie_row = mysqli_fetch_assoc($categorie_result)) {

                    echo '  <tr style="background-color: lightgray;">
                <td>' . $categorie_row['nom'] . '</td>

                <td class="dashboard-action">

                    <a href="./cathegorie/update.php?categorie_edit=' . $categorie_row['id_categorie'] . '">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </a>

                    <a href="./cathegorie/delete.php?categorie_delete= ' . $categorie_row['id_categorie'] . '" onclick="return confirm(\'etes vous sures?\');">
                        <i class="fa-solid fa-trash"></i>
                    </a>

                </td>
            </tr> ';
                }
            }
            ?>


        </tbody>
    </table>

    <!--CATHEGORIE-->




</div>




<!--FOOTER-->

<?php include './components/footer.php'; ?>


</body>

</html>