<?php session_start(); 

require_once('connectdb.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;1,400;1,600&display=swap" rel="stylesheet"> 
        <link rel="stylesheet"  href="prjet/menupage2.css">
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/> 
       <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    </head>
    <body>

         <div class="header">
            <div class="container">
                <div class="navbar"> 
                    <div class="logo">
                        <img src="image/logo/logo.png" width="80px">
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
        <br><br><br>
      
       <div class="small-container">
          <div class="row row-2">
              <h2>Tous les Articles</h2>
              
              <select name="categorie" id="CatId" onchange="myfonction()">
              <option></option>
              <?php
                $select = $bdd->query("Select * From categorie")->fetchAll();
                foreach ($select as $row) {
                    echo "<option value=\"" . $row['CatId'] . "\">" . $row['CatNom'] . "</option>";
                }
             ?>
              </select>
          </div>
          <br><br>

           <div class="row">

           <?php 
              require_once('connectdb.php');
              if(isset($_GET['CatId']))
              {
                $query="SELECT * From article WHERE CatId=".$_GET['CatId'];
                $select=$bdd->query($query)->fetchAll();
              }else{
                $query="SELECT * From article";
                $select=$bdd->query($query)->fetchAll();
              }
               
              if(empty($select))
             {
                 echo "<h1>Pas de produit disponible dans cette categorie</h1>";
             } 
             else
             {
                foreach($select as $row)
                {
                    echo "<div class=\"col-4 bloc\">
                    <img src=\"image/".$row['ArtImage']."\">
                    <h4>".$row['ArtNom']."</h4>
                    <p>".$row['PrixArt']." FCFA</p>
                  <center>  <a href=\"?ArtId=".$row['ArtId']."\">Ajouter au Panier</a> </center>
                </div>";
                }
             }
              
            ?>
            

        

           <div class="page-btn">
               <span>1</span>
               <span>2</span>
               <span>3</span>
               <span>&#8594;</span>
           </div>

       </div> 

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
     <script>
     function myfonction()
     {
        let cat=document.getElementById("CatId")
      window.location.assign("categorie.php?CatId="+cat.value)
     
     }
    
      </script>
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
    </body>
</html>