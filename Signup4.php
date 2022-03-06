<?php
       require_once('connectdb.php');
       if (isset($_POST['save'])) {
         
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $motdepasse=$_POST['motdepasse'];
        $ville=$_POST['ville'];
        $sexe = $_POST['sexe'];
        $query = "Insert INTO client VALUES(null,'$nom','$prenom','$sexe','$adresse','$telephone','$motdepasse','$email','$ville',0)";

        if ($bdd->query($query)) {
            
            echo "<script>alert('enregistrement du client reussi')</script>";
        } else {
            echo "<script>alert(\"echec d'enregistrement du client\")</script>";
        }
    }

               ?>  
<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="Signup4.css">
        <link href="http://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&display=swap" rel="stylesheet">
     </head>
    <body>
        <div class="cont">
            <div class="form">
                    <h2>Inscription</h2>
                <form action="" method="POST">    
                    <label>
                        <span>Nom</span>
                        <input type="text" name="nom" required/>
                    </label>
                    <label>
                        <span>Prénom</span>
                        <input type="text" name="prenom"  required/>
                    </label>
                   <label for="sexe">
                       <span>Sexe</span>
                       <select name="sexe" id="">
                           <option value="M">Masculin</option>
                           <option value="F">Feminin</option>
                       </select>
                   </label>
                    <label>
                        <span>Adresse</span>
                        <input type="text" name="adresse"  required/>
                    </label>
                    <label>
                        <span>ville</span>
                        <input type="text" name="ville" aria-required/>
                    </label>
                    <label>
                        <span>Téléphone</span>
                        <input type="number" name="telephone"  required/>
                    </label>
                    
                    <label>
                        <span>Adresse Email</span>
                        <input type="email" name="email" required/>
                    </label>
                    <label>
                        <span>Mot de passe</span>
                        <input type="password" name="motdepasse" aria-required/>
                    </label>
                    
                        
                    <button class="submit" type="submit" name="save" type="button">S'inscrire</button>
                    <p class="motdepasseoublie">Déjà inscris?
                        <a href="loginsignup.php">Connectez-vous</a>
                    </p>
                    <div class="social-media">
                        <ul>
                            <li><img src="image/facebook.png"></li>
                            <li><img src="image/instagram.png"></li>
                            <li><img src="image/google.png"></li>
                        </ul>
                    </div>
                </form>  
              
            </div>
        </div>
    </body>
</html>
    
