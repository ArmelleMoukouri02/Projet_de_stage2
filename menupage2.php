<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ancoco'Kids</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link rel="stylesheet" href="prjet/menupage2.css">
      <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;1,400;1,600&display=swap" rel="stylesheet"> 
      <link href="css/slick.css" rel="stylesheet"> 
       <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/> 
       <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
       <style>

       </style>
    </head>
    <body>
      
        
        <div class="header">
            <div class="container">
                <div class="navbar"> 
                    <div class="logo">
                        <img src="image/logo/logo.png" width="70px">
                    </div>
                    <nav>
                        <ul>
                            <li><a href="menupage2.php">Accueil</a></li> 
                            <li><a href="categorie.php">Catégorie</a></li> 
                            <li><a href="#">A propos</a></li> 
                            <li><a href="#">Compte</a></li>
                            <a href="panier.php"><li class="fal fa-shopping-cart"></li></a>
                            
                        </ul>
                    </nav>
                </div>
                
            </div>
        </div>
       
        <div class="w3-content">

           <div class="col-2">
            <h1>Bienvenue sur Ancoco'Kids</h1><br>   
               <p>Entrez et découvrez une gamme de produits de qualité pour votre bébé</p><br><br>
               
               <a href=""><button class="btn btn-primary" type="button">Commencer</button></a>
           </div> 






        </div>
        
        <br><br><br>

       <div class="categories">

            <div class="row">

                <div class="col-5">
                    <img src="image/Accessoire_Bébé/landeau_poussette.jpg">
                    <h4>Accessoires</h4>
                </div>
                 <div class="col-5">
                    <img src="image/Chambre de bébé/lit bébé .jpg">
                    <h4>Chambre de bébé</h4>
                </div>
                 <div class="col-5">
                    <img src="image/Eveil et jouet/doudou.jpg">
                    <h4>Jouet</h4>
                </div>
                 <div class="col-5">
                    <img src="image/Porte de bébé/porte_bebe.jpg">
                    <h4>Port-Bébé</h4>
                </div>
                 <div class="col-5">
                    <img src="image/Repas de bébé/Biberon Bébé .jpg">
                    <h4>Repas de bébé</h4>
                </div> 

            </div>

            <div class="row">

                <div class="col-5">
                    <img src="image/Toilette de bébé/Trousse_de_toilette_bebe.jpg">
                    <h4>Toilette de bébé</h4>
                </div>
                 <div class="col-5">
                    <img src="image/Vetements de bébé/garçon2.jpg">
                    <h4>Vetements de bébé</h4>
                </div>
                 <div class="col-5">
                    <img src="image/Sécurité de bébé/Babyphone2.jpg">
                    <h4>Sécurité de bébé</h4>
                </div>
                 <div class="col-5">
                    <img src="image/change de bébé/Couches_de_bain.jpg">
                    <h4>Change de bébé</h4>
                </div>
                 <div class="col-5">
                    <img src="image/Vetements de grossesse et maternité/Robe_Maternite.jpg">
                    <h4>Accessoires</h4>
                 </div> 

            </div>

       </div><br><br><br>

       <div class="for_slick_slider multiple-items">
            <div class="items">
                <img src="image/Chaussures et vetements/shoes-3358269_1920.jpg" alt="" >
            </div>
            <div class="items">
                <img src="image/Accessoires/dummy-92579_1920.jpg" alt="" >
            </div>
            <div class="items">
                <img src="image/Jouets/toys-5519717_1920.jpg" alt="" >
            </div>
            <div class="items">
                <img src="image/Chaussures et vetements/booties-2047596_1920.jpg" alt="" >
            </div>
            <div class="items">
                <img src="image/Accessoires/lollipop-3800097_1920.jpg" alt="" >
            </div>

            <div class="items">
                <img src="image/Accessoires/ducks-1426008_1920.jpg" alt="" >
            </div>
       </div> <br><br><br>
        
        <div class="s-wrap">
            <div class="s-move">
                <div class="slides">
                <h3>Slider 1</h3>
                <p>
                    The episode orbits? The panic overwhelms a fuse. The major lurks below the shower!
                </p>
                </div>
                <div class="slides">
                <h3>Slider 2</h3>
                <p>
                    The lasting astronomer balances the counter reminder. The trap hires the paradox.
                </p>
                </div>
                <div class="slides">
                <h3>Slider 3</h3>
                <p>
                    Her birthday calculates past a juice! The envy succeeds across an evident jelly. An afternoon shifts opposite a bust.
                </p>
                </div>
                <div class="slides">
                <h3>Slider 4</h3>
                <p>
                    A distributed actor pilots the null pencil. The wild wolfs a damp cage inside the breach.
                </p>
                </div>
                <div class="slides">
                <h3>Slider 5</h3>
                <p>
                    The suspected book hums opposite the unacceptable urge. The warning goodbye searches the substitute.
                </p>
                </div>
            </div>
        </div>
        <br><br>

       <div class="small-container">
           <br>
           <h2>Articles</h2>
           <br>

           <div class="row">
            <?php 
              require_once('connectdb.php');
              $query="SELECT * From article";
              $select=$bdd->query($query)->fetchAll();
              foreach($select as $row)
              {
                  echo "<div class=\"col-4 bloc\">
                  <img src=\"image/".$row['ArtImage']."\">
                  <h4>".$row['ArtNom']."</h4>
                  <p>".$row['PrixArt']." FCFA</p>
                <center>  <a href=\"?ArtId=".$row['ArtId']."\">Ajouter au Panier</a> </center>
              </div>";
              }
            ?>
           
           </div>

       </div>
        

        <br><br>
        <div class="apropos">
            <footer class="footer">
                <div class="newsletter-info">
                  <div class="n-title">NEWSLETTER</div>
                  <p>
                  Veuillez-vous inscrire, loin d’être une obligation juste pour vous faire part des nouveautés disponible sur le site. <br>
                  En entrant votre nom et prénom et aussi votre adresse mail vous recevrez nos annonces. <br> <br>
                  Merci 
                  </p>
                  <a href=""><button>Login</button></a>
                </div>
                <div class="row">
                    <div class="footer-col">
                        <h4>E-learning</h4>
                        <ul>
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">Formations</a></li>
                            <li><a href="#">Tutoriel</a></li>
                            <li><a href="#">Forum</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>get help</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">shipping</a></li>
                            <li><a href="#">returns</a></li>
                            <li><a href="#">order status</a></li>
                            <li><a href="#">payment options</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>online shop book</h4>
                        <ul>
                            <li><a href="#">development</a></li>
                            <li><a href="#">maintenace</a></li>
                            <li><a href="#">security</a></li>
                            <li><a href="#">access</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Contact</h4>
                        <div class="social-links">
                            <a href="#"><img src="img/email.svg" alt=""></a>
                            <a href="#"><img src="img/google-plus.svg" alt=""></a>
                            <a href="#"><img src="img/speech-bubbles.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </footer>
         </div>


    <?php 
     if(!empty($_GET['ArtId']))
     {
         if($_SESSION['commande']==true)
         {
            
            $query = "INSERT INTO commande  VALUES(null,'".date('Y-m-d H:i:s')."','".$_SESSION['user']['ClientId']."')";
            if ($bdd->query($query)) {
                $_SESSION['commande']=false;
                $_SESSION['idcmd']=$bdd->lastInsertId();
                  $query="INSERT INTO `ligne_commande` (`LigCmd_Id`, `ArtId`, `CmdId`, `QteCmd`, `DateLigCmd`) VALUES (NULL, '".$_GET['ArtId']."', '". $_SESSION['idcmd']."', '1', '".date('Y-m-d H:i:s')."')";
                  if ($bdd->query($query))
                  echo "<script>alert('produit ajouter au panier')</script>";
                  else
                echo "<script>alert(\"le produit existe deja dans le panier\")</script>";
            }
         }
         else{
            $query="INSERT INTO `ligne_commande` (`LigCmd_Id`, `ArtId`, `CmdId`, `QteCmd`, `DateLigCmd`) VALUES (NULL, '".$_GET['ArtId']."', '". $_SESSION['idcmd']."', '1', '".date('Y-m-d H:i:s')."')";
            if ($bdd->query($query))
            echo "<script>alert('produit ajouter au panier')</script>";
            else
          echo "<script>alert(\"le produit existe deja dans le panier\")</script>";
         }
     }

    ?>















         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
      <script src="js/slick.min.js"></script>
     <script src="js/carroussel.js"></script> 
      <script
  src="https://code.jquery.com/jquery-3.6.0.js"></script>
				

    </body>
</html>