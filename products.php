<?php
include './connect.php';

include './components/header.php';

?>


<!--EN PLUS-->

<section id="PRODUCT">
  <h3 class="product-title">Tous les produits</h3>

  <div class="product-and-filter">


    <div class="filter">

      <h2>Filtre</h2>
      <ul>
        <li>Vetement</li>
        <li>Chaussures</li>
        <li>Bijoux</li>
        <li>Cosmetiques</li>
      </ul>
    </div>

    <div class="all-product">

      <div class="product-container">

        <?php

        $result = mysqli_query($connection, "Select * from `produits`");

        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {

            echo '<div class="product ">
      <div class="product-img">
        <img src=' . 'imagedoc/' . $row['image1'] . ' alt="" class="front-img" />
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

    </div>

  </div>

</section>



<!--FOOTER-->
<?php
include './components/footer.php';
?>

</body>

</html>