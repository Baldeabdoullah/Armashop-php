<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="./style.css" />

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

                    <?php
                    $categorie_result = mysqli_query($connection, "Select * from `categorie`");

                    if ($categorie_result) {
                        while ($categorie_row = mysqli_fetch_assoc($categorie_result)) {

                            echo ' <li><a href="categorie.php?categorie_id=' . $categorie_row['id_categorie'] . '">' . $categorie_row['nom'] . '</a></li>';
                        }
                    }
                    ?>

                    <!-- <li><a href="#">Accueil</a></li>
                    <li><a href="#">Vetements</a></li>
                    <li><a href="#">Chaussures</a></li>
                    <li><a href="#">Bijoux</a></li>
                    <li><a href="#">Cosmetiques</a></li> -->
                    <li><a href="products.php">Tous les produits</a></li>
                    <li><a href="#">A propos</a></li>
                </ul>
            </div>
        </nav>
    </header>