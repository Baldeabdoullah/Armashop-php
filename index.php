<?php
include './connect.php';

include './components/header.php';

?>


<!--LE CAROUSEL-->

<div class="slider">
  <div class="slide current">
    <div class="content">
      <h1>Armashop</h1>
      <p>
        Bienvenu sur Armashop Boutique en ligne de vente de produits divers
      </p>
    </div>
  </div>

  <div class="slide">
    <div class="content">
      <h1>Des produits pour toute la famille</h1>
      <p>Des produits locaux et importés</p>
    </div>
  </div>

  <div class="slide">
    <div class="content">
      <h1>Livraison à domicile</h1>
      <p>Restez chez vous. Nous nous occupons de la livraison</p>
    </div>
  </div>

  <div class="slide">
    <div class="content">
      <h1>Paiement en ligne</h1>
      <p>Vous pouver payer en ligne par visa ou paypal ou mobile money .</p>
    </div>
  </div>
</div>

<!--LE SWIPER-->

<!-- Swiper -->
<div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide slide-cathegory-container">
      <div class="slide-cathegory-img">
        <img src="./assets/images/cathegory/jacket-5.jpg" alt="" />

      </div>

      <div class="slide-cathegory-text">
        <h5>Vetement et robe <span>(53)</span></h5>
        <a href="#">Voir</a>
      </div>
    </div>
    <div class="swiper-slide slide-cathegory-container">
      <div class="slide-cathegory-img">
        <img src="./assets/images/cathegory/hiver.jpg" />
      </div>

      <div class="slide-cathegory-text">
        <h5>Collection Hiver <span>(13)</span></h5>
        <a href="#">Voir</a>
      </div>
    </div>
    <div class="swiper-slide slide-cathegory-container">
      <div class="slide-cathegory-img">
        <img src="./assets/images/cathegory/lunette1.jpg" />
      </div>

      <div class="slide-cathegory-text">
        <h5>Lunettes <span>(13)</span></h5>
        <a href="#">Voir</a>
      </div>
    </div>
    <div class="swiper-slide slide-cathegory-container">
      <div class="slide-cathegory-img">
        <img src="./assets/images/cathegory/pantallon.jpg" />
      </div>

      <div class="slide-cathegory-text">
        <h5>Pantallon <span>(13)</span></h5>
        <a href="#">Voir</a>
      </div>
    </div>
    <div class="swiper-slide slide-cathegory-container">
      <div class="slide-cathegory-img">
        <img src="./assets/images/cathegory/pull.jpg" />
      </div>

      <div class="slide-cathegory-text">
        <h5>Pull <span>(9)</span></h5>
        <a href="#">Voir</a>
      </div>
    </div>
    <div class="swiper-slide slide-cathegory-container">
      <div class="slide-cathegory-img">
        <img src="./assets/images/cathegory/chemise.jpg" />
      </div>

      <div class="slide-cathegory-text">
        <h5>chemise <span>(8)</span></h5>
        <a href="#">Voir</a>
      </div>
    </div>
    <div class="swiper-slide slide-cathegory-container">
      <div class="slide-cathegory-img">
        <img src="./assets/images/cathegory/montre.jpg" />
      </div>

      <div class="slide-cathegory-text">
        <h5>Montres <span>(22)</span></h5>
        <a href="#">Voir</a>
      </div>
    </div>
    <div class="swiper-slide slide-cathegory-container">
      <div class="slide-cathegory-img">
        <img src="./assets/images/cathegory/chapeau.jpg" />
      </div>

      <div class="slide-cathegory-text">
        <h5>Chapeau <span>(25)</span></h5>
        <a href="#">Voir</a>
      </div>
    </div>
  </div>
  <!-- <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div> -->
  <div class="swiper-scrollbar"></div>
  <!-- <div class="swiper-pagination"></div>  -->
</div>

<section id="first-product-section">
  <div class="first-product-container">
    <div class="first-cathegory">
      <h4>Cathegories</h4>
      <div class="article">
        <div>
          <p class="article-question">
            vêtements
            <button class="change-btn">
              <i class="fa-solid fa-plus"></i>
              <i class="fa-solid fa-minus"></i>
            </button>
          </p>
        </div>

        <div class="article-contenu">
          <ul>
            <li><a href="#">Chemise</a></li>
            <li><a href="#">jean</a></li>
            <li><a href="#">Veste</a></li>
            <li><a href="#">Robe</a></li>
          </ul>
        </div>
      </div>
      <div class="article">
        <p class="article-question">
          Chaussures
          <button class="change-btn">
            <i class="fa-solid fa-plus"></i>
            <i class="fa-solid fa-minus"></i>
          </button>
        </p>
        <div class="article-contenu">
          <ul>
            <li><a href="#">Sport</a></li>
            <li><a href="#">Professionel</a></li>
            <li><a href="#">Habituel</a></li>
          </ul>
        </div>
      </div>
      <div class="article">
        <p class="article-question">
          Bijoux
          <button class="change-btn">
            <i class="fa-solid fa-plus"></i>
            <i class="fa-solid fa-minus"></i>
          </button>
        </p>
        <div class="article-contenu">
          <ul>
            <li><a href="#">Boucles d'oreilles</a></li>
            <li><a href="#">Anneaux</a></li>
            <li><a href="#">Collier</a></li>
          </ul>
        </div>
      </div>
      <div class="article">
        <p class="article-question">
          Parfum
          <button class="change-btn">
            <i class="fa-solid fa-plus"></i>
            <i class="fa-solid fa-minus"></i>
          </button>
        </p>
        <div class="article-contenu">
          <ul>
            <li><a href="#">Parfum</a></li>
            <li><a href="#">Gel</a></li>
            <li><a href="#">Deodorants</a></li>
          </ul>
        </div>
      </div>
      <div class="article">
        <p class="article-question">
          Cosmétiques

          <button class="change-btn">
            <i class="fa-solid fa-plus"></i>
            <i class="fa-solid fa-minus"></i>
          </button>
        </p>
        <div class="article-contenu">
          <ul>
            <li><a href="#">Shampooing</a></li>
            <li><a href="#">Crème solaire</a></li>
            <li><a href="#">Netoyant</a></li>
            <li><a href="#">Makeup</a></li>
          </ul>
        </div>
      </div>

      <div class="article">
        <p class="article-question">
          Lunettes

          <button class="change-btn">
            <i class="fa-solid fa-plus"></i>
            <i class="fa-solid fa-minus"></i>
          </button>
        </p>
        <div class="article-contenu">
          <ul>
            <li><a href="#">Lunettes de soleil</a></li>
            <li><a href="#">Verre correcteurs</a></li>
          </ul>
        </div>
      </div>

      <div class="article">
        <p class="article-question">
          Sac

          <button class="change-btn">
            <i class="fa-solid fa-plus"></i>
            <i class="fa-solid fa-minus"></i>
          </button>
        </p>
        <div class="article-contenu">
          <ul>
            <li><a href="#">Sac a main</a></li>
            <li><a href="#">Sac scolaire</a></li>
            <li><a href="#">Sac professionel</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="first-product-item-container">
      <h4 class="first-product-new-tile">Découverte</h4>
      <div class="first-product-title">
        <p>Noveautes</p>
        <p>Tendances</p>
        <p>Mieux note</p>
      </div>
      <hr />
      <br />
      <br />
      <div class="first-product-item">
        <div class="swiper-slide slide-cathegory-container">
          <div class="slide-cathegory-img">
            <img src="./assets/images/products/1.jpg" />
          </div>

          <div class="slide-cathegory-text">
            <h5>Chaussures</h5>
            <a href="#">Voir</a>
            <div class="cathegory-price">
              <p class="promo">20000 FCFA</p>
              <p class="price">25000 FCFA</p>
            </div>
          </div>
        </div>

        <div class="swiper-slide slide-cathegory-container">
          <div class="slide-cathegory-img">
            <img src="./assets/images/products/2.jpg" />
          </div>

          <div class="slide-cathegory-text">
            <h5>Pull Over</h5>
            <a href="#">Voir</a>
            <div class="cathegory-price">
              <p class="promo">20000 FCFA</p>
              <p class="price">28000 FCFA</p>
            </div>
          </div>
        </div>

        <div class="swiper-slide slide-cathegory-container">
          <div class="slide-cathegory-img">
            <img src="./assets/images/products/3.jpg" />
          </div>

          <div class="slide-cathegory-text">
            <h5>Pull Over</h5>
            <a href="#">Voir</a>
            <div class="cathegory-price">
              <p class="promo">20000 FCFA</p>
              <p class="price">28000 FCFA</p>
            </div>
          </div>
        </div>

        <div class="swiper-slide slide-cathegory-container">
          <div class="slide-cathegory-img">
            <img src="./assets/images/products/4.jpg" />
          </div>

          <div class="slide-cathegory-text">
            <h5>Chapeau</h5>
            <a href="#">Voir</a>
            <div class="cathegory-price">
              <p class="promo">15000 FCFA</p>
              <p class="price">18000 FCFA</p>
            </div>
          </div>
        </div>

        <div class="swiper-slide slide-cathegory-container">
          <div class="slide-cathegory-img">
            <img src="./assets/images/products/belt.jpg" />
          </div>

          <div class="slide-cathegory-text">
            <h5>Ceintures</h5>
            <a href="#">Voir</a>
            <div class="cathegory-price">
              <p class="promo">5000 FCFA</p>
              <p class="price">8000 FCFA</p>
            </div>
          </div>
        </div>

        <div class="swiper-slide slide-cathegory-container">
          <div class="slide-cathegory-img">
            <img src="./assets/images/products/clothes-1.jpg" />
          </div>

          <div class="slide-cathegory-text">
            <h5>Pull Blanc</h5>
            <a href="#">Voir</a>
            <div class="cathegory-price">
              <p class="promo">5000 FCFA</p>
              <p class="price">8000 FCFA</p>
            </div>
          </div>
        </div>

        <div class="swiper-slide slide-cathegory-container">
          <div class="slide-cathegory-img">
            <img src="./assets/images/products/clothes-2.jpg" />
          </div>

          <div class="slide-cathegory-text">
            <h5>Shirt</h5>
            <a href="#">Voir</a>
            <div class="cathegory-price">
              <p class="promo">6000 FCFA</p>
              <p class="price">9000 FCFA</p>
            </div>
          </div>
        </div>

        <div class="swiper-slide slide-cathegory-container">
          <div class="slide-cathegory-img">
            <img src="./assets/images/products/clothes-3.jpg" />
          </div>

          <div class="slide-cathegory-text">
            <h5>Jupe Noir</h5>
            <a href="#">Voir</a>
            <div class="cathegory-price">
              <p class="promo">6000 FCFA</p>
              <p class="price">11000 FCFA</p>
            </div>
          </div>
        </div>

        <div class="swiper-slide slide-cathegory-container">
          <div class="slide-cathegory-img">
            <img src="./assets/images/products/clothes-4.jpg" />
          </div>

          <div class="slide-cathegory-text">
            <h5>Jupes noir courte</h5>
            <a href="#">Voir</a>
            <div class="cathegory-price">
              <p class="promo">8000 FCFA</p>
              <p class="price">11000 FCFA</p>
            </div>
          </div>
        </div>

        <div class="swiper-slide slide-cathegory-container">
          <div class="slide-cathegory-img">
            <img src="./assets/images/products/jacket-1.jpg" />
          </div>

          <div class="slide-cathegory-text">
            <h5>Blouse verte</h5>
            <a href="#">Voir</a>
            <div class="cathegory-price">
              <p class="promo">18000 FCFA</p>
              <p class="price">22000 FCFA</p>
            </div>
          </div>
        </div>

        <div class="swiper-slide slide-cathegory-container">
          <div class="slide-cathegory-img">
            <img src="./assets/images/products/jacket-2.jpg" />
          </div>

          <div class="slide-cathegory-text">
            <h5>Blouse Noir</h5>
            <a href="#">Voir</a>
            <div class="cathegory-price">
              <p class="promo">18000 FCFA</p>
              <p class="price">22000 FCFA</p>
            </div>
          </div>
        </div>

        <div class="swiper-slide slide-cathegory-container">
          <div class="slide-cathegory-img">
            <img src="./assets/images/products/jacket-3.jpg" />
          </div>

          <div class="slide-cathegory-text">
            <h5>Blouse grise</h5>
            <a href="#">Voir</a>
            <div class="cathegory-price">
              <p class="promo">18000 FCFA</p>
              <p class="price">22000 FCFA</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--DETAILS OFFRE SPECIAL-->
<section id="detail">
  <h3 class="detail-offer-title">Offre du jour</h3>
  <div class="detail-container">
    <div class="detail-img">
      <img src="./assets/images/products/shampoo.jpg" alt="" />
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
        Shampooing et pack nettoyant pour le visage
      </h3>
      <p class="detail-product-description">
        Decouvrez notre nouveauté le Shampooing old spice avec un pack soin
        du visage
      </p>
      <div class="detail-price">
        <h4 class="detail-promo-price">60000 FCFA</h4>
        <h4 class="detail-real-price">75000 FCFA</h4>
      </div>

      <div class="detail-btn-container">
        <a href="" class="detail-button">Ajouter au panier</a>
      </div>

      <div class="detail-sold">
        <p>Deja vendus: 20</p>
        <p>Disponibles: 40</p>
      </div>

      <div class="ends">
        <h4 class="ends-title">L'offre se termine :</h4>
        <h4 class="anoncetext"></h4>
        <div class="ends-date-container">
          <div class="ends-date-item">
            <h4>360</h4>
            <p>Jour</p>
          </div>

          <div class="ends-date-item">
            <h4>24</h4>
            <p>Heures</p>
          </div>

          <div class="ends-date-item">
            <h4>59</h4>
            <p>Min</p>
          </div>

          <div class="ends-date-item">
            <h4>11</h4>
            <p>Sec</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--NEW PRODUCT-->
<section id="NEW">
  <div class="new-container"></div>
</section>

<!--CATHEGORIE-->

<section id="category">

  <div class="category-container">
    <h2>Les Cathegories</h2>
    <ul>
      <?php
      $categorie_result = mysqli_query($connection, "Select * from `categorie`");

      if ($categorie_result) {
        while ($categorie_row = mysqli_fetch_assoc($categorie_result)) {

          echo ' <li><a href="categorie.php?categorie_id=' . $categorie_row['id_categorie'] . '">' . $categorie_row['nom'] . '</a></li>';
        }
      }
      ?>

    </ul>
  </div>

</section>

<!--EN PLUS-->
<section id="PRODUCT">
  <h3 class="product-title">Nouveaux produits</h3>
  <div class="product-container">

    <?php

    $result = mysqli_query($connection, "Select * from `produits` ORDER BY id_produit DESC LIMIT 5");

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

<!--CONTAINER-->

<section id="container">
  <div class="container">
    <div class="temoin-container">
      <h3 class="temoin-title">Temoignages</h3>
      <div class="temoin-div">
        <img src="./assets/images/temoignage.jpg" alt="" class="temoin-img" />
        <h2>Aline Foqua</h2>
        <h3>ceo de digitalist</h3>
        <i class="fa-solid fa-quote-left"></i>
        <p>Un service impeccable</p>
      </div>
    </div>

    <div class="discount-container">
      <div class="discount-container-img">
        <img src="./assets/images/banner.jpg" alt="" />
        <p></p>
      </div>
    </div>

    <div class="services-container">
      <h3 class="services-title">Nos services</h3>
      <div class="service-div">
        <div class="services-item">
          <i class="fa-solid fa-truck-fast fa-2x"></i>
          <p>Livraison rapide en local</p>
        </div>
        <div class="services-item">
          <i class="fa-solid fa-ship fa-2x"></i>
          <p>Livarison international</p>
        </div>
        <div class="services-item">
          <i class="fa-solid fa-phone fa-2x"></i>
          <p>Support client 24/24</p>
        </div>
        <div class="services-item">
          <i class="fa-solid fa-reply fa-2x"></i>
          <p>politique de remtour</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!--BLOG-->

<section id="BLOG">
  <div class="blog-container">
    <div class="blog-item">
      <div class="blog-item-img">
        <img src="./assets/images/blog-1.jpg" alt="" />
      </div>
      <div class="blog-item-text">
        <h5>Evenement</h5>
        <h4><a href="#">Ouverture d'un nouveaux point de vente</a></h4>
        <p>10/01/2023</p>
      </div>
    </div>
    <div class="blog-item">
      <div class="blog-item-img">
        <img src="./assets/images/blog-2.jpg" alt="" />
      </div>
      <div class="blog-item-text">
        <h5>Evenement</h5>
        <h4><a href="#">Arrivage de vêtements traditionnels</a></h4>
        <p>10/01/2023</p>
      </div>
    </div>

    <div class="blog-item">
      <div class="blog-item-img">
        <img src="./assets/images/blog-3.jpg" alt="" />
      </div>
      <div class="blog-item-text">
        <h5>Evenement</h5>
        <h4>
          <a href="#">Scannez le qr code et payez par mobile money</a>
        </h4>
        <p>10/01/2023</p>
      </div>
    </div>
  </div>
</section>

<!-- LE MODAL POP UP -->
<div class="pop-up" id="pop-up">
  <div class="pop-up-container">

    <div class="pop-up-image">
      <img src="./assets/images/shop.jpg" alt="" />
    </div>

    <div class="pop-up-text">

      <div class="pop-up-text-content">
        <h3>New Letter</h3>

        <p>
          Inscrivez-vous pour recevoir <br />
          les nouveautés sur les reductions du moment
        </p>

        <div class="pop-up-subscribe">
          <input type="text" placeholder="Email" />

          <button>Inscription</button>
        </div>

        <div class="close-pop-up">
          <i class="fa-solid fa-rectangle-xmark fa-2x" id="closepopup"></i>
        </div>
      </div>

    </div>

  </div>
</div>



<!--FOOTER-->
<?php
include './components/footer.php';
?>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    centeredSlides: false,
    slidesPerGroupSkip: 1,
    grabCursor: true,
    keyboard: {
      enabled: true,
    },
    breakpoints: {
      600: {
        slidesPerView: 1,
        slidesPerGroup: 2,
      },

      800: {
        slidesPerView: 2,
        slidesPerGroup: 2,
      },

      1000: {
        slidesPerView: 3,
        slidesPerGroup: 2,
      },

      1200: {
        slidesPerView: 4,
        slidesPerGroup: 2,
      },
    },
    scrollbar: {
      el: ".swiper-scrollbar",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>
</body>

</html>