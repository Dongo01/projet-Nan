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
       <a href="index.php" class="nav-link dropdown-toggle text-uppercase" >Accueil</a>
        </li>
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
        <a class="nav-link dropdown-toggle text-uppercase"  href="compte.php">Inscription</a>
        </li>
            </div>
          </li>
        </div>
      </li>
    </div>
  </li>
</div>

    
  <!-- Collapsible content -->

</nav>
<center>








<h1 style="margin-top: 12px">Connecter vous!</h1 style="margin-top: 12px">


<section class="form-dark" style="margin-top: 70px">
<div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table7.jpg'); width: 28rem;">
    <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">

        <!--Header-->
        <div class="text-center">
            <h3 class="white-text mb-5 mt-4 font-weight-bold"><a class="green-text font-weight-bold"><strong> Se connecter</strong></a></h3>
        </div>

        <!--Body-->
        <div class="md-form pb-3">
            <input type="text" id="mail" class="form-control white-text">
            <label for="Form-mail">Votre email</label>
         </div>
         
        
         <div class="md-form pb-3">
            <input type="password" id="Form-pass5" class="form-control white-text">
            <label for="Form-pass5">Votre mot de passe</label>
         </div>
        </div>

        <!--Grid row-->
        <div class="row d-flex align-items-center mb-4">

            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
                <button type="button" class="btn btn-success btn-block btn-rounded z-depth-1">Connexion</button>
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
</body>
</html>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.js"></script>
  <script src="first.js"></script> 