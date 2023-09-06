<?php
include './connect.php';

include './components/header.php';

?>

<!--DETAILS OFFRE SPECIAL-->
<section id="detail">
    <h3 class="detail-offer-title">Offre du jour</h3>
    <div class="detail-container">

        <?php
        $id = $_GET['detail_id'];

        $result = mysqli_query($connection, "Select * from `produits` where id_produit = $id");
        $row = mysqli_fetch_assoc($result);
        $categorie_id = $row['id_categorie'];

        echo '
        <div class="detail-img">
            <img src=' . 'imagedoc/' . $row['image1'] . ' alt="" />
        </div>

        <div class="detail-text">
            <div class="detail-text-icons">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>

            <h3 class="detail-product-name">
                ' . $row['nom'] . '
            </h3>
            <p class="detail-product-description">
               ' . $row['description'] . '
            </p>
            <div class="detail-price">
                <h4 class="detail-promo-price">' . $row['prix'] . ' FCFA</h4>
                <!-- <h4 class="detail-real-price">75000 FCFA</h4> -->
            </div>

            <div class="detail-btn-container">
                <a href="" class="detail-button">Ajouter au panier</a>
            </div>

            <div class="detail-sold">
                <p>Deja vendus: 50</p>
                <p>Disponibles: 10</p>
            </div>

        </div>';

        ?>

    </div>
</section>

<div class="detail-description">
    <img src="<?php echo 'imagedoc/' . $row['image2'] ?> " alt="">
</div>


<!--RECOMMANDATIONS-->
<section id="PRODUCT">
    <h3 class="product-title">Vous pourriez aimer</h3>
    <div class="product-container">

        <?php

        $result = mysqli_query($connection, "Select * from `produits` 
        where id_categorie=$categorie_id AND id_produit !=$id ORDER BY RAND() LIMIT 5");

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {

                echo '<div class="product">
                    <div class="product-img">
                        <img src=' . 'imagedoc/' . $row['image1'] . ' class="front-img" />
                        <img src=' . 'imagedoc/' . $row['image2'] . ' alt="" class="rear-img" />
                        <div class="product-img-icons">
                            <i class="fa-regular fa-heart"></i>
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <a href="detail.php?detail_id=' . $row['id_produit'] . '"><i class="fa-regular fa-eye"> </i></a>
                            <i class="fa-solid fa-basket-shopping"></i>
                        </div>
                    </div>

                    <div class="product-infos">
                        <h5 class="product-infos-title">' . $row['nom'] . '</h5>
                        <h6 class="product-infos-subname">' . $row['description'] . '</h6>
                        <div class="product-icons">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>

                        <div class="product-price">
                            <p class="product-promo">' . $row['prix'] . ' FCFA</p>
                            <p class="product-real-price">35000 FCFA</p>
                        </div>
                    </div>
                </div>';
            }
        }

        ?>
    </div>

    <!-- image preview modal -->
    <div id="preview-modal-overlay">
        <div id="preview-box">
            <span id="modal-close-btn">
                <i class="fa-solid fa-xmark"></i>
            </span>
            <img src="" alt="" />
            <p class="principetext"></p>
        </div>
    </div>
</section>




<!--FOOTER-->
<?php
include './components/footer.php';
?>



</body>

</html>