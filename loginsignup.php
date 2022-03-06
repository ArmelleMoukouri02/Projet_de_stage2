<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style3.css">
        <link href="http://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&display=swap" rel="stylesheet">
     </head>
    <body>
        <div class="cont">
            <Form class="form" action="" method="POST">
                <h2>Connexion</h2>
                <label>
                    <span>Adresse Email</span>
                    <input type="email" name="email"/>
                </label>
                <label>
                    <span>Mot de passe</span>
                    <input type="password" name="motdepasse"/>
                </label>
                <button class="submit" name="submit" type="submit">Se connecter</button>
                <p class="motdepasseoublie">Pas de compte?
                    <a href="Signup4.<?php  ?>">Inscrivez-vous</a>
                </p>
                <div class=" social-media">
                    <ul>
                        <li><img src="image/facebook.png"></li>
                       <li><img src="image/instagram.png"></li>
                       <li><img src="image/google.png"></li> 
                    </ul>
                </div>
         </form>
        </div>
        <?php 
        require_once('connectdb.php');
            //verification si on a cliquer sur le bouton submit
            if(isset($_POST['submit']))
            {
                $select=$bdd->query("SELECT * from client Where IS_ADMIN=false")-> fetchAll();
                foreach($select as $row)
                {
                    if($_POST['email']==$row['ClientLogin'] && $_POST['motdepasse']==$row['ClientMotdePasse'])
                    {
                        $_SESSION['user']=$row;
                        $selectc=$bdd->query("SELECT * from commande Where ClientId=".$_SESSION['user']['ClientId'])-> fetch();
                        if(!empty($selectc))
                        {
                            $_SESSION['commande']=false;
                            $_SESSION['idcmd']= $selectc['CmdId'];
                        }
                        else{
                            $_SESSION['commande']=true;
                        }
                        header('location:menupage2.php');
                    }
                }
                echo 'identifiant ou mot de passe incorrect';
            }
            ?>
           

    </body>
</html>