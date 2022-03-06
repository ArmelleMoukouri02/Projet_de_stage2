  <?php
   session_start();
    require_once("connectdb.php");
    ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <!-- Required meta tags-->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="au theme template">
      <meta name="author" content="Hau Nguyen">
      <meta name="keywords" content="au theme template">

      <!-- Title Page-->
      <title>Forms</title>

      <!-- Fontfaces CSS-->
      <link href="css/font-face.css" rel="stylesheet" media="all">
      <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
      <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
      <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

      <!-- Bootstrap CSS-->
      <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

      <!-- Vendor CSS-->
      <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
      <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
      <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
      <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
      <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
      <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
      <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

      <!-- Main CSS-->
      <link href="css/theme.css" rel="stylesheet" media="all">

  </head>

  <body class="animsition">
      <div class="page-wrapper">
          <!-- HEADER MOBILE-->
          <header class="header-mobile d-block d-lg-none">
              <div class="header-mobile__bar">
                  <div class="container-fluid">
                      <div class="header-mobile-inner">
                          <a class="logo" href="index.html">
                              <img src="images/icon/logo-mini.png" alt="Admin" />
                          </a>
                          <button class="hamburger hamburger--slider" type="button">
                              <span class="hamburger-box">
                                  <span class="hamburger-inner"></span>
                              </span>
                          </button>
                      </div>
                  </div>
              </div>
              <nav class="navbar-mobile">
                  <div class="container-fluid">
                      <ul class="navbar-mobile__list list-unstyled">
                          <li class="has-sub">
                              <a class="js-arrow" href="#">
                                  <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                  <li>
                                      <a href="index.html">Dashboard 1</a>
                                  </li>

                              </ul>
                          </li>
                          <li>
                              <a href="chart.html">
                                  <i class="fas fa-chart-bar"></i>Charts</a>
                          </li>
                          <li>
                              <a href="table.html">
                                  <i class="fas fa-table"></i>Tables</a>
                          </li>
                          <li>
                              <a href="form.html">
                                  <i class="far fa-check-square"></i>Formulaire</a>
                          </li>
                          <li>
                              <a href="calendar.html">
                                  <i class="fas fa-calendar-alt"></i>Calendrier</a>
                          </li>

                          <li class="has-sub">
                              <a class="js-arrow" href="#">
                                  <i class="fas fa-copy"></i>Pages</a>
                              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                  <li>
                                      <a href="login.html">Connexion</a>
                                  </li>
                                  <li>
                                      <a href="register.html">Enregistrement Administrateur</a>
                                  </li>
                                  <li>
                                      <a href="forget-pass.html">Mot de passe oublié</a>
                                  </li>
                              </ul>
                          </li>

                      </ul>
                  </div>
              </nav>
          </header>
          <!-- END HEADER MOBILE-->

          <!-- MENU SIDEBAR-->
          <aside class="menu-sidebar d-none d-lg-block">
              <div class="logo">
                  <a href="#">
                      <img src="images/icon/logo-mini.png" alt=" Admin" />
                  </a>
              </div>
              <div class="menu-sidebar__content js-scrollbar1">
                  <nav class="navbar-sidebar">
                      <ul class="list-unstyled navbar__list">
                          <li class="has-sub">
                              <a class="js-arrow" href="#">
                                  <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                              <ul class="list-unstyled navbar__sub-list js-sub-list">
                                  <li>
                                      <a href="index.html">Dashboard 1</a>
                                  </li>

                              </ul>
                          </li>
                          <li>
                              <a href="chart.html">
                                  <i class="fas fa-chart-bar"></i>Charts</a>
                          </li>
                          <li>
                              <a href="table.html">
                                  <i class="fas fa-table"></i>Tables</a>
                          </li>
                          <li class="active">
                              <a href="form.html">
                                  <i class="far fa-check-square"></i>Formulaire</a>
                          </li>
                          <li>
                              <a href="calendar.html">
                                  <i class="fas fa-calendar-alt"></i>Calendrier</a>
                          </li>

                          <li class="has-sub">
                              <a class="js-arrow" href="#">
                                  <i class="fas fa-copy"></i>Pages</a>
                              <ul class="list-unstyled navbar__sub-list js-sub-list">
                                  <li>
                                      <a href="login.html">Connexion</a>
                                  </li>
                                  <li>
                                      <a href="register.html">Enregistrement Administrateur</a>
                                  </li>
                                  <li>
                                      <a href="forget-pass.html">Mot de passe oublié</a>
                                  </li>
                              </ul>
                          </li>

                      </ul>
                  </nav>
              </div>
          </aside>
          <!-- END MENU SIDEBAR-->

          <!-- PAGE CONTAINER-->
          <div class="page-container">
              <!-- HEADER DESKTOP-->
              <header class="header-desktop">
                  <div class="section__content section__content--p30">
                      <div class="container-fluid">
                          <div class="header-wrap">
                              <form class="form-header" action="" method="POST">
                                  <input class="au-input au-input--xl" type="text" name="search" placeholder="Rechercher..." />
                                  <button class="au-btn--submit" type="submit">
                                      <i class="zmdi zmdi-search"></i>
                                  </button>
                              </form>
                              <div class="header-button">
                                  <div class="noti-wrap">
                                      <div class="noti__item js-item-menu">
                                          <i class="zmdi zmdi-comment-more"></i>
                                          <span class="quantity">1</span>
                                          <div class="mess-dropdown js-dropdown">
                                              <div class="mess__title">
                                                  <p>You have 2 news message</p>
                                              </div>
                                              <div class="mess__item">
                                                  <div class="image img-cir img-40">
                                                      <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                  </div>
                                                  <div class="content">
                                                      <h6>Michelle Moreno</h6>
                                                      <p>Have sent a photo</p>
                                                      <span class="time">3 min ago</span>
                                                  </div>
                                              </div>
                                              <div class="mess__item">
                                                  <div class="image img-cir img-40">
                                                      <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                  </div>
                                                  <div class="content">
                                                      <h6>Diane Myers</h6>
                                                      <p>You are now connected on message</p>
                                                      <span class="time">Yesterday</span>
                                                  </div>
                                              </div>
                                              <div class="mess__footer">
                                                  <a href="#">View all messages</a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="noti__item js-item-menu">
                                          <i class="zmdi zmdi-email"></i>
                                          <span class="quantity">1</span>
                                          <div class="email-dropdown js-dropdown">
                                              <div class="email__title">
                                                  <p>You have 3 New Emails</p>
                                              </div>
                                              <div class="email__item">
                                                  <div class="image img-cir img-40">
                                                      <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                  </div>
                                                  <div class="content">
                                                      <p>Meeting about new dashboard...</p>
                                                      <span>Cynthia Harvey, 3 min ago</span>
                                                  </div>
                                              </div>
                                              <div class="email__item">
                                                  <div class="image img-cir img-40">
                                                      <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                  </div>
                                                  <div class="content">
                                                      <p>Meeting about new dashboard...</p>
                                                      <span>Cynthia Harvey, Yesterday</span>
                                                  </div>
                                              </div>
                                              <div class="email__item">
                                                  <div class="image img-cir img-40">
                                                      <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                  </div>
                                                  <div class="content">
                                                      <p>Meeting about new dashboard...</p>
                                                      <span>Cynthia Harvey, April 12,,2018</span>
                                                  </div>
                                              </div>
                                              <div class="email__footer">
                                                  <a href="#">See all emails</a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="noti__item js-item-menu">
                                          <i class="zmdi zmdi-notifications"></i>
                                          <span class="quantity">3</span>
                                          <div class="notifi-dropdown js-dropdown">
                                              <div class="notifi__title">
                                                  <p>You have 3 Notifications</p>
                                              </div>
                                              <div class="notifi__item">
                                                  <div class="bg-c1 img-cir img-40">
                                                      <i class="zmdi zmdi-email-open"></i>
                                                  </div>
                                                  <div class="content">
                                                      <p>You got a email notification</p>
                                                      <span class="date">April 12, 2018 06:50</span>
                                                  </div>
                                              </div>
                                              <div class="notifi__item">
                                                  <div class="bg-c2 img-cir img-40">
                                                      <i class="zmdi zmdi-account-box"></i>
                                                  </div>
                                                  <div class="content">
                                                      <p>Your account has been blocked</p>
                                                      <span class="date">April 12, 2018 06:50</span>
                                                  </div>
                                              </div>
                                              <div class="notifi__item">
                                                  <div class="bg-c3 img-cir img-40">
                                                      <i class="zmdi zmdi-file-text"></i>
                                                  </div>
                                                  <div class="content">
                                                      <p>You got a new file</p>
                                                      <span class="date">April 12, 2018 06:50</span>
                                                  </div>
                                              </div>
                                              <div class="notifi__footer">
                                                  <a href="#">All notifications</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="account-wrap">
                                      <div class="account-item clearfix js-item-menu">
                                          <div class="image">
                                              <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                          </div>
                                          <div class="content">
                                              <a class="js-acc-btn" href="#"><?php 
                                            if(isset($_SESSION['fournisseur']))
                                            echo $_SESSION['fournisseur']['FourPrenom']." ".$_SESSION['fournisseur']['FourNom']; 

                                            else
                                            echo $_SESSION['admin']['ClientPrenom']." ".$_SESSION['admin']['ClientNom']; 
                                            
                                            
                                            ?></a>
                                          </div>
                                          <div class="account-dropdown js-dropdown">
                                              <div class="info clearfix">
                                                  <div class="image">
                                                      <a href="#">
                                                          <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                      </a>
                                                  </div>
                                                  <div class="content">
                                                      <h5 class="name">
                                                          <a href="#"><?php 
                                                               if(isset($_SESSION['fournisseur']))
                                                               echo $_SESSION['fournisseur']['FourPrenom']." ".$_SESSION['fournisseur']['FourNom']; 
                   
                                                               else
                                                               echo $_SESSION['admin']['ClientPrenom']." ".$_SESSION['admin']['ClientNom']; 
                                                        ?></a>
                                                      </h5>
                                                      <span class="email"><?php
                                                    if(isset($_SESSION['fournisseur']))
                                                    echo $_SESSION['fournisseur']['Fouremail'];
                                                    else
                                                    echo $_SESSION['admin']['ClientLogin']; ?></span>
                                                  </div>
                                              </div>
                                              <div class="account-dropdown__body">
                                                  <div class="account-dropdown__item">
                                                      <a href="#">
                                                          <i class="zmdi zmdi-account"></i>Account</a>
                                                  </div>
                                                  <div class="account-dropdown__item">
                                                      <a href="#">
                                                          <i class="zmdi zmdi-settings"></i>Setting</a>
                                                  </div>
                                                  <div class="account-dropdown__item">
                                                      <a href="#">
                                                          <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                  </div>
                                              </div>
                                              <div class="account-dropdown__footer">
                                                  <a href="#">
                                                      <i class="zmdi zmdi-power"></i>Logout</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </header>
              <!-- HEADER DESKTOP-->

              <!-- MAIN CONTENT-->
              <div class="main-content">
                  <div class="section__content section__content--p30">
                      <div class="container-fluid">
                          <div class="row">


                         <?php 
                           if(isset($_SESSION['admin']))
                           {
                            ?>
                              <div class="col-lg-6">
                                  <div class="card">
                                      <div class="card-header">
                                          <strong>Enregistrement d'un Founiseur</strong>
                                      </div>
                                      <div class="card-body card-block">
                                          <form action="" method="post" class="form-horizontal">

                                              <div class="row form-group">
                                                  <div class="col col-md-3">
                                                      <label for="text-input" class=" form-control-label">Nom</label>
                                                  </div>
                                                  <div class="col-12 col-md-9">
                                                      <input type="text" id="FourNom" name="FourNom" placeholder="Entrer le nom" class="form-control">

                                                  </div>
                                              </div>
                                              <div class="row form-group">
                                                  <div class="col col-md-3">
                                                      <label for="text-input" class=" form-control-label">Prénom</label>
                                                  </div>
                                                  <div class="col-12 col-md-9">
                                                      <input type="text" id="FourPrenom" name="FourPrenom" placeholder="Entrer le prénom" class="form-control">

                                                  </div>
                                              </div>
                                              <div class="row form-group">
                                                  <div class="col col-md-3">
                                                      <label for="adresse-input" class=" form-control-label">Adresse</label>
                                                  </div>
                                                  <div class="col-12 col-md-9">
                                                      <input type="text" id="FourAdresse" name="FourAdresse" placeholder="Entrer l'adresse " class="form-control">

                                                  </div>
                                              </div>
                                              <div class="row form-group">
                                                  <div class="col col-md-3">
                                                      <label for="entreprise-input" class=" form-control-label">Entreprise</label>
                                                  </div>
                                                  <div class="col-12 col-md-9">
                                                      <input type="text" id="FourEntreprise" name="FourEntreprise" placeholder="Entrer le nom de l'entreprise" class="form-control">

                                                  </div>
                                              </div>

                                              <div class="row form-group">
                                                  <div class="col col-md-3">
                                                      <label for="email-input" class=" form-control-label">Email</label>
                                                  </div>
                                                  <div class="col-12 col-md-9">
                                                      <input type="email" id="FourEmail" name="FourEmail" placeholder="Entrer l'adresse email" class="form-control">

                                                  </div>
                                              </div>
                                              <div class="row form-group">
                                                  <div class="col col-md-3">
                                                      <label for="password-input" class=" form-control-label">Mot de Passe</label>
                                                  </div>
                                                  <div class="col-12 col-md-9">
                                                      <input type="password" id="FourEmail" name="FourMotdePasse" placeholder="Entrer le mots de passe" class="form-control">

                                                  </div>
                                              </div>

                                              <div class="row form-group">
                                                  <div class="col col-md-3">
                                                      <label for="phone-input" class=" form-control-label">Numero de telephone</label>
                                                  </div>
                                                  <div class="col-12 col-md-9">
                                                      <input type="number" id="FourTelephone" name="FourTelephone" placeholder="Entrer le numero de telephone" class="form-control">

                                                  </div>
                                              </div>


                                      </div>
                                      <div class="card-footer">
                                          <button type="submit" name="FourSubmit" class="btn btn-primary btn-sm">
                                              <i class="fa fa-dot-circle-o"></i> Enregistrer
                                          </button>
                                          <button type="reset" class="btn btn-danger btn-sm">
                                              <i class="fa fa-ban"></i> Annuler
                                          </button>
                                      </div>
                                      </form>
                                     

                                  </div>
                              </div>
                            <?php
                           }

                         ?>
                                  <?php
                                        if (isset($_POST['FourSubmit'])) {
                                            $nom = $_POST['FourNom'];
                                            $prenom = $_POST['FourPrenom'];
                                            $adresse = $_POST['FourAdresse'];
                                            $email = $_POST['FourEmail'];
                                            $telephone = $_POST['FourTelephone'];
                                            $password = $_POST['FourMotdePasse'];
                                            $entreprise = $_POST['FourEntreprise'];
                                            $query = "Insert INTO fournisseur VALUES(null,'$nom','$prenom','$adresse','$telephone','$email','$password','$entreprise')";
                                            var_dump($query);
                                            if ($bdd->query($query)) {
                                                echo "<script>alert('enregistrement du fournisseur reussi')</script>";
                                            } else {
                                                echo "<script>alert(\"echec d'enregistrement du fournisseur\")</script>";
                                            }
                                        }

                                        if (isset($_POST['ArtSubmit'])) {

                                            require_once('uploadimage.php');
                                            $nom = $_POST['ArtNom'];
                                            $prix = $_POST['PrixArt'];
                                            $qte = $_POST['QteArt'];
                                            $taux = $_POST['Tauxremise'];
                                            $description = $_POST['ArtDescription'];
                                            if(empty($_SESSION['fournisseur']))
                                            $fourId = $_POST['FourId'];
                                            else 
                                            $fourId =$_SESSION['fournisseur']['FourId'];
                                          
                                            $catId = $_POST['CatId'];
                                            $TVA = $_POST['TVA'];
                                          
                                            $image = $_FILES['ArtImage']['name'];
                                            $query = "Insert INTO article VALUES(null,$fourId,$catId,'$nom','$prix','$qte','$taux','$description','$TVA','$image')";
                                        
                                            if ($bdd->query($query)) {
                                                echo "<script>alert('enregistrement de l'article reussi')</script>";
                                            } else {
                                                echo "<script>alert(\"echec d'enregistrement de l'article\")</script>";
                                            }
                                        }
                                        if (isset($_POST['CatSubmit'])) {
                                            $nom = $_POST['CatNom'];

                                            $query = "Insert INTO categorie VALUES(null,'$nom')";
                                            if ($bdd->query($query)) {
                                                echo "<script>alert('enregistrement de la categorie reussi')</script>";
                                            } else {
                                                echo "<script>alert(\"echec d'enregistrement de la categorie\")</script>";
                                            }
                                        }

                                        ?>

                              <div class="col-lg-6">
                                  <div class="card">
                                      <div class="card-header">
                                          <strong>Enregistrement des Categorie</strong>
                                      </div>
                                      <div class="card-body card-block">
                                          <form action="" method="post" class="form-horizontal">

                                              <div class="row form-group">
                                                  <div class="col col-md-3">
                                                      <label for="text-input" class=" form-control-label">Nom</label>
                                                  </div>
                                                  <div class="col-12 col-md-9">
                                                      <input type="text" id="CatNom" name="CatNom" placeholder="Entrer le nom" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="card-footer">
                                                  <button type="submit" name="CatSubmit" class="btn btn-primary btn-sm">
                                                      <i class="fa fa-dot-circle-o"></i> Enregistrer
                                                  </button>
                                                  <button type="reset" class="btn btn-danger btn-sm">
                                                      <i class="fa fa-ban"></i> Annuler
                                                  </button>
                                              </div>

                                          </form>

                                      </div>


                                  </div>
                              </div>





                              <div class="col-lg-6">
                                  <div class="card">
                                      <div class="card-header">
                                          <strong>Enregistrement d'un article</strong>
                                      </div>
                                      <div class="card-body card-block">
                                          <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                                              <div class="row form-group">
                                                  <div class="col col-md-3">
                                                      <label for="text-input" class=" form-control-label">Nom</label>
                                                  </div>
                                                  <div class="col-12 col-md-9">
                                                      <input type="text" id="ArtNom" name="ArtNom" placeholder="Entrer le nom de l'article" class="form-control">

                                                  </div>
                                              </div>
                                              <div class="row form-group">
                                                  <div class="col col-md-3">
                                                      <label for="text-input" class=" form-control-label">Prix</label>
                                                  </div>
                                                  <div class="col-12 col-md-9">
                                                      <input type="number" id="PrixArt" name="PrixArt" placeholder="Entrer le prix de l'article" class="form-control">

                                                  </div>
                                              </div>
                                              <div class="row form-group">
                                                  <div class="col col-md-3">
                                                      <label for="email-input" class=" form-control-label">Quantite</label>
                                                  </div>
                                                  <div class="col-12 col-md-9">
                                                      <input type="number" id="QteArt" name="QteArt" placeholder="Entrer le nombre d'article" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="row form-group">
                                                  <div class="col col-md-3">
                                                      <label for="email-input" class=" form-control-label">TVA</label>
                                                  </div>
                                                  <div class="col-12 col-md-9">
                                                      <input type="text" id="TVA" name="TVA" placeholder="Entrer la TVA de l'article" class="form-control">
                                                  </div>
                                              </div>

                                              <div class="row form-group">
                                                  <div class="col col-md-3">
                                                      <label for="password-input" class=" form-control-label">Taux de remise</label>
                                                  </div>
                                                  <div class="col-12 col-md-9">
                                                      <input type="text" id="Tauxremise" name="Tauxremise" placeholder="Entre le Taux de remise" class="form-control">

                                                  </div>
                                              </div>

                                              <div class="row form-group">
                                                  <div class="col col-md-3">
                                                      <label for="textarea-input" class=" form-control-label">Description</label>
                                                  </div>
                                                  <div class="col-12 col-md-9">
                                                      <textarea name="ArtDescription" id="ArtDescription" rows="9" placeholder="Entre la description" class="form-control"></textarea>
                                                  </div>
                                              </div>
                                              <?php
                                                 if(empty($_SESSION['fournisseur']))
                                                 {
                                                  ?>
                                                    <div class="row form-group">
                                                  <div class="col col-md-3">
                                                      <label for="select" class=" form-control-label">Fourniseur</label>
                                                  </div>
                                                  <div class="col-12 col-md-9">
                                                      <select name="FourId" id="FourId" class="form-control">
                                                          <?php
                                                            $select = $bdd->query("Select * From fournisseur")->fetchAll();
                                                            foreach ($select as $row) {
                                                                echo "<option value=\"" . $row['FourId'] . "\">" . $row['FourNom'] . "</option>";
                                                            }
                                                            ?>
                                                      </select>
                                                  </div>
                                              </div>
                                                  <?php
                                                 }

                                               ?>
                                              

                                              <div class="row form-group">
                                                  <div class="col col-md-3">
                                                      <label for="select" class=" form-control-label">Categorie</label>
                                                  </div>
                                                  <div class="col-12 col-md-9">
                                                      <select name="CatId" id="CatId" class="form-control">
                                                          <?php
                                                            $select = $bdd->query("Select * From categorie")->fetchAll();
                                                            foreach ($select as $row) {
                                                                echo "<option value=\"" . $row['CatId'] . "\">" . $row['CatNom'] . "</option>";
                                                            }
                                                            ?>
                                                      </select>
                                                  </div>
                                              </div>

                                              <div class="row form-group">
                                                  <div class="col col-md-3">
                                                      <label for="file-input" class=" form-control-label">Image</label>
                                                  </div>
                                                  <div class="col-12 col-md-9">
                                                      <input type="file" id="ArtImage" name="ArtImage" class="form-control-file">
                                                  </div>
                                              </div>

                                              <div class="card-footer">
                                                  <button type="submit" name="ArtSubmit" class="btn btn-primary btn-sm">
                                                      <i class="fa fa-dot-circle-o"></i> Enregistrer
                                                  </button>
                                                  <button type="reset" class="btn btn-danger btn-sm">
                                                      <i class="fa fa-ban"></i> Annuler
                                                  </button>
                                              </div>

                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>

                  <!-- Jquery JS-->
                  <script src="vendor/jquery-3.2.1.min.js"></script>
                  <!-- Bootstrap JS-->
                  <script src="vendor/bootstrap-4.1/popper.min.js"></script>
                  <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
                  <!-- Vendor JS       -->
                  <script src="vendor/slick/slick.min.js">
                  </script>
                  <script src="vendor/wow/wow.min.js"></script>
                  <script src="vendor/animsition/animsition.min.js"></script>
                  <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
                  </script>
                  <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
                  <script src="vendor/counter-up/jquery.counterup.min.js">
                  </script>
                  <script src="vendor/circle-progress/circle-progress.min.js"></script>
                  <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
                  <script src="vendor/chartjs/Chart.bundle.min.js"></script>
                  <script src="vendor/select2/select2.min.js">
                  </script>

                  <!-- Main JS-->
                  <script src="js/main.js"></script>

  </body>

  </html>
  <!-- end document-->