<?php 
session_start();
if(empty($_SESSION['user']))
 header('location:loginsignup.php');
require_once('connectdb.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Panier</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link rel="stylesheet" href="prjet/menupage2.css">
      <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;1,400;1,600&display=swap" rel="stylesheet"> 
       <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/> 
       <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      
    </head>
    <body>
      
       <div class="header">

        <div class="container">
            <div class="navbar"> 
                <div class="logo">
                    <img src="image/logo/logo.png" width="150px">
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
        
       
       <div class="small-container cart-page">
       <table>
       <tr>
                        <th>Articles</th>
                        <th>Quantité</th>

                        <th>Montant</th>
                    </tr>
      <?php
         $query="SELECT a.* from article a,commande c,ligne_commande lc WHERE a.ArtId=lc.ArtId and c.CmdId=lc.CmdId and c.ClientId=".$_SESSION['user']['ClientId'];
         $select=$bdd->query($query)->fetchAll();
         $prixht=0;
         $tax=0;
         $prixTTC=0;
         foreach($select as $row)
         {
             $prixht+=$row['PrixArt'];
             $tax+=($row['PrixArt']*$row['TVA'])/100;
            
      ?>
            
                 
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="image/<?php echo $row['ArtImage']; ?>" class="img-cart"> 
                                <div>
                                    <p><?php echo $row['ArtNom']; ?></p>
                                    <small>Prix: <?php echo $row['PrixArt']; ?> FCFA</small>
                                    <br>   
                                    <a href="?ArtId=<?php echo $row['ArtId']; ?>">Remove</a>

                                </div> 

                            </div>


                        </td>
                        <td><input type="number" value="1"></td>
                        <td><?php echo $row['PrixArt']; ?> FCFA</td>


                    </tr>

                    <?php 
                    }
                    
                    ?>

            </table>

            <div class="total-price">

                <table>
                    <tr>
                        <td>Montant</td>
                        <td><?php echo $prixht; ?> FCFA</td>

                    </tr>
                    <tr>
                        <td>Taxe</td>
                        <td><?php echo $tax; ?> FCFA</td>

                    </tr>
                    <tr>
                        <td>Total</td>
                        <td><?php  $prixTTC+=$prixht+$tax; echo $prixTTC; ?> FCFA</td>

                    </tr>

                </table>

                

              <?php 
                 if(isset($_GET['ArtId']) || isset($_GET['Art']))
                 {   
                      if(!isset($_GET['Art']))
                           echo "<script>let result=confirm('vouler vous vraiment supprimer ce produit du panier')</script>";
                      if(!isset($_GET['result']))
                           echo "<script>window.location.assign(\"panier.php?Art=".$_GET['ArtId']."&result=\"+ result)</script>";



                    
                 }
              
                 if(isset($_GET['result']))
                 {
                   if($_GET['result']=='true')
                      {
                         $query="DELETE FROM `ligne_commande` WHERE `ligne_commande`.`ArtId` =".$_GET['Art'];
                      var_dump($_GET['result']);
                     if ($bdd->query($query))
                       echo "<script>alert('produit supprimer du panier')</script>";
                     else
                      echo "<script>alert(\" imposible de supprimer ce produit de votre panier\")</script>";
                      }
                      else
                      {
                     echo "<script>alert(\"suppresion annuler\")</script>";
                      }
                //    header('location:panier.php');
                 }
              ?>





            </div>

            <button class="commande"> Valider la commande</button>

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

























    </body>







</html>









