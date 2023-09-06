<?php include '../connect.php';
if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];

    $insertion = mysqli_query($connection, "Insert into `categorie` (nom) values('$nom')") or die("erreur");

    if ($insertion) {

        $afficher = "categorie ajouté avec succès";
    } else {
        $afficher = "erreur d'ajout de la categorie";
    }
}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="../style.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>

<body>
    <header class="header">
        <div class="header-first">
            <div class="menu-icon">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>

            <p>Livraison gratuite à partir de 30000 FCFA</p>
            <p>Blog</p>
        </div>

        <hr />

        <div class="search-container">
            <h2>Armashop</h2>

            <div class="input-container">
                <input type="text" />
                <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
            </div>

            <div class="search-icons">
                <i class="fa-regular fa-user fa-2x"></i>
                <i class="fa-regular fa-heart fa-2x"></i>
                <i class="fa-solid fa-bag-shopping fa-2x"></i>
            </div>
        </div>

        <nav class="nav">
            <div class="toggle-menu">
                <i class="fa-solid fa-bars fa-2x"></i>
            </div>

            <div class="nav-container">
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Vetements</a></li>
                    <li><a href="#">Chaussures</a></li>
                    <li><a href="#">Bijoux</a></li>
                    <li><a href="#">Cosmetiques</a></li>
                    <li><a href="products.php">Tous les produits</a></li>
                    <li><a href="#">A propos</a></li>
                </ul>
            </div>
        </nav>
    </header>

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

        <h3>Creer une Cathegorie</h3>
        <form method="post" enctype="multipart/form-data">
            <div>
                <input type="text" name="nom" placeholder="nom">
            </div>


            <button type="submit" name="submit">Valider</button>

        </form>
    </div>

    <!--FOOTER-->

    <section id="FOOTER">
        <div class="footer-container">
            <div class="footer-item">
                <h4>Produits</h4>
                <hr />
                <ul>
                    <li><a href="#">Promotion</a></li>
                    <li><a href="#">Nouveauté</a></li>
                    <li><a href="#">Meilleurs ventes</a></li>
                    <li><a href="#">Contactez nous</a></li>
                </ul>
            </div>

            <div class="footer-item">
                <h4>Notre société</h4>
                <hr />
                <ul>
                    <li><a href="#">Livraison</a></li>
                    <li><a href="#">Notice légal</a></li>
                    <li><a href="#">terms et conditions</a></li>
                    <li><a href="#">Paiement sécurisé</a></li>
                </ul>
            </div>

            <div class="footer-item">
                <h4>Contacte</h4>
                <hr />
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-location-dot"></i>avenue 10 rond point
                            7</a>
                    </li>

                    <li>
                        <a href="#"> <i class="fa-solid fa-phone"></i>(+221) 45 67 45</a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa-regular fa-envelope"></i>infos@armashop.com</a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa-solid fa-money-bill"></i>Paiement sécurisé</a>
                    </li>
                </ul>
            </div>
        </div>

        <hr />

        <div class="paiement">
            <div>
                <img src="./images/payment.png" alt="" />
            </div>

            <div>
                <a href="https://abdoullahbalde.com/">
                    crée Avec passion par Abdoullah Balde</a>
            </div>
        </div>
    </section>

    <!--JAVASCRIPT-->
    <script src="./assets/main.js"></script>

</body>

</html>