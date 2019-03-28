
<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Alimentation</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <style>
  	.form-dark .font-small {
font-size: 0.8rem; }

.form-dark [type="radio"] + label,
.form-dark [type="checkbox"] + label {
font-size: 0.8rem; }

.form-dark [type="checkbox"] + label:before {
top: 2px;
width: 15px;
height: 15px; }

.form-dark .md-form label {
color: #fff; }

.form-dark input[type=text]:focus:not([readonly]) {
border-bottom: 1px solid #00C851;
-webkit-box-shadow: 0 1px 0 0 #00C851;
box-shadow: 0 1px 0 0 #00C851; }

.form-dark input[type=text]:focus:not([readonly]) + label {
color: #fff; }

.form-dark input[type=password]:focus:not([readonly]) {
border-bottom: 1px solid #00C851;
-webkit-box-shadow: 0 1px 0 0 #00C851;
box-shadow: 0 1px 0 0 #00C851; }

.form-dark input[type=password]:focus:not([readonly]) + label {
color: #fff; }

.form-dark input[type="checkbox"] + label:before {
content: '';
position: absolute;
top: 0;
left: 0;
width: 17px;
height: 17px;
z-index: 0;
border: 1.5px solid #fff;
border-radius: 1px;
margin-top: 2px;
-webkit-transition: 0.2s;
transition: 0.2s; }

.form-dark input[type="checkbox"]:checked + label:before {
top: -4px;
left: -3px;
width: 12px;
height: 22px;
border-style: solid;
border-width: 2px;
border-color: transparent #00c851 #00c851 transparent;
-webkit-transform: rotate(40deg);
-ms-transform: rotate(40deg);
transform: rotate(40deg);
-webkit-backface-visibility: hidden;
-webkit-transform-origin: 100% 100%;
-ms-transform-origin: 100% 100%;
transform-origin: 100% 100%; }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark special-color-dark">

  <!-- Navbar brand -->
  <a class="navbar-brand text-uppercase" href="#">Alimentation Africaine</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
    aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent2">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">

     
              
      <!-- Technology -->
      <li class="nav-item dropdown mega-dropdown">
        <a class="nav-link dropdown-toggle text-uppercase" id="navbarDropdownMenuLink4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">foutou</a>
        <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-5 px-3" aria-labelledby="navbarDropdownMenuLink4">
          
              <!--Featured image-->
              <a href="#!" class="view overlay z-depth-1 p-0 mb-2">
                <img src="image.jpg" class="img-fluid"
                  alt="First sample image">
                <div class="mask rgba-white-slight"></div>
              </a>
            
   
        <li class="nav-item dropdown mega-dropdown">
        <a class="nav-link dropdown-toggle text-uppercase" id="navbarDropdownMenuLink4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Placali</a>
        <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-5 px-3" aria-labelledby="navbarDropdownMenuLink4">
          
              <!--Featured image-->
              <a href="#!" class="view overlay z-depth-1 p-0 mb-2">
                <img src="image1.jpeg" class="img-fluid"
                  alt="First sample image">
                <div class="mask rgba-white-slight"></div>
              </a>
              
      <!-- Lifestyle -->
      <li class="nav-item dropdown mega-dropdown">
        <a class="nav-link dropdown-toggle text-uppercase" id="navbarDropdownMenuLink4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Riz Gras</a>
        <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-5 px-3" aria-labelledby="navbarDropdownMenuLink4">
          
              <!--Featured image-->
              <a href="#!" class="view overlay z-depth-1 p-0 mb-2">
                <img src="riz.jpg" class="img-fluid"
                  alt="First sample image">
                <div class="mask rgba-white-slight"></div>
              </a>
              <li class="nav-item dropdown mega-dropdown">
        <a class="nav-link dropdown-toggle text-uppercase" id="navbarDropdownMenuLink4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">A propos de nous</a>
        <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-5 px-3" aria-labelledby="navbarDropdownMenuLink4">
          

              <!--Featured image-->
              <a href="#!" class="view overlay z-depth-1 p-0 mb-2">
                <img src="serge.jpg" class="img-fluid"
                  alt="First sample image">
                <div class="mask rgba-white-slight"></div>
                <span style="color:white">Je suis Developpeur d'Application web et Administrateur Réseau et Sécurité informatique</span>
              </a>

        <li class="nav-item dropdown mega-dropdown">
        <a class="nav-link dropdown-toggle text-uppercase"  href="connecter.php">Se connecter</a>
        </li>
    
  <!-- Collapsible content -->

</nav>
<center>







<form method="POST" action="">
<h1 style="margin-top: 12px">Inscrivez vous svp !</h1 style="margin-top: 12px">


<section class="form-dark" style="margin-top: 70px">
<div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table7.jpg'); width: 28rem;">
    <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">

        <!--Header-->
        <div class="text-center">
            <h3 class="white-text mb-5 mt-4 font-weight-bold"><a class="green-text font-weight-bold"><strong> Inscription</strong></a></h3>
        </div>

        <!--Body-->
        <div class="md-form">
            <input type="text" id="Form-name" class="form-control white-text" name="nom" required="">
            <label for="Form-name">Votre nom</label>
        </div>

        <div class="md-form pb-3">
            <input type="text" id="Form-lastname" class="form-control white-text" name="prenom" required="">
            <label for="Form-lastname">Votre prenom</label>
         </div>
         <div class="md-form pb-3">
            <input type="text" id="Form-tel" class="form-control white-text" name="tel" required="">
            <label for="Form-tel">Votre telephone</label>
         </div>
         <div class="md-form pb-3">
            <input type="text" id="Form-mail5" class="form-control white-text" name="mail" required="">
            <label for="Form-mail5">Votre mail</label>
         </div>
         <div class="md-form pb-3">
            <input type="password" id="Form-pass5" class="form-control white-text" name="passe" required="">
            <label for="Form-pass5">Votre mot de passe</label>
         </div>
          <div class="md-form pb-3">
            <input type="password" id="Form-motpasse" class="form-control white-text" name="repasse" required="">
            <label for="Form-motpasse"> Confirmez votre mot de passe</label>

         </div>
        </div>

        <!--Grid row-->
        <div class="row d-flex align-items-center mb-4">

            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
                <button type="submit" class="btn btn-success btn-block btn-rounded z-depth-1" name="submit" value="connexion">Connexion</button>
            </div>
            <!--Grid column-->
        </div>
     

    </div>
</div>

<!--/Form without header-->

</section>
<!--Section: Live preview-->
</div>
</div>
</section>


<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4" style="margin-top: 20px">

    <!-- Footer Elements -->
    <div class="container" >

      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook-f"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <i class="fab fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <i class="fab fa-google-plus-g"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            <i class="fab fa-linkedin-in"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <i class="fab fa-dribbble"> </i>
          </a>
        </li>
      </ul>
      <!-- Social buttons -->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright: *Tous droit réservés*
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->



<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.js"></script>
  <script src="first.js"></script>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
//Recuperation des donnees
  
 //connexion au server//
  $connect = 'localhost';
    $bd = 'compte';
    $util = 'root';
    $passe = '';
    $charset = 'utf8';
    $nom = htmlentities($_POST['nom']);
  $prenom = htmlentities($_POST['prenom']);
  $telephone = htmlentities($_POST['tel']);
  $password = htmlentities($_POST['passe']);
  $repasse = htmlentities($_POST['repasse']);
  $email = htmlentities($_POST['mail']);
   
    try {
      $bdd = new PDO('mysql:host=localhost;dbname=compte','root','');
      }
      catch (Exception $e)
       {
        die('Erreur de connexion à la base de donnée: <br>'.$e->getMessage(). '<br>');
       }
    if($password == $repasse) {
              //insertion des données//
    $req ="INSERT INTO etudiants(nom_etd,prenom_etd,tel_etd,email_etd,password_etd) VALUES(:nom_etd,:prenom_etd,:tel_etd,:email_etd,:password_etd)" ;
    $ajout_etd = $bdd->prepare($req);
    try
    {
      $ajout_etd->bindValue(':nom_etd',$nom);
      $ajout_etd->bindValue(':prenom_etd',$prenom);
      $ajout_etd->bindValue(':tel_etd',$telephone);
      $ajout_etd->bindValue(':email_etd',$email);
      $ajout_etd->bindValue(':password_etd',$password);
      $resultat = $ajout_etd->execute();
      if($resultat)
      {
        $_SESSION['mail'] = $email;
        echo '<script>
                location.href="connecter.php";
                </script>';
      }else
      {
        echo 'Veillez renseigner tous les champs';
      }
    }
    catch(Exception $e){
      echo 'Erreur de réquête : ', $e->getMessage();
    }
      }
      else
       
      {
        echo "les deux mots de passe ne correspondent pas";
}



  }

  ?>