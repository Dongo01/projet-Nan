<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Construction</title>
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
<div class="h_menu">
    <a id="touch-menu" class="mobile-menu" href="#">Menu</a>
    <nav>
    <ul class="menu list-unstyled">
      <li class="activate"><a href="membre.php">Accueil</a>
      </li> 
      <li><a href="membre.php">Services</a>

      </li>
      <li><a href="services.php">Voir mes services</a></li>
      <div class="clear"> </div>
    </nav> 
</div>
<?php
  $host = 'localhost';
    $dbname = 'commpte1';
    $util = 'root';
    $passe = '';
    $charset = 'utf8';
   
    try {
      $bd = new PDO('mysql:host=localhost;dbname=commpte1','root','');
      }
      catch (Exception $e)
       {
        die('Erreur de connexion à la base de donnée: <br>'.$e->getMessage(). '<br>');
       }

       $email = $_SESSION['email'];
       $reponse = $bd->prepare("SELECT * FROM services WHERE email ='$email'");
       $reponse->execute();
       $rows = $reponse->fetchAll();
      
  ?>

  <h1 class="text-logo" style="font-size: 50px; text-align: center;color:green">Mes services demandés</h1>
  <div class="container admin">
    <div class="row">
      <table class="table table-striped table-bordered">
        <thead>
              <th>Votre Localité</th>
              <th>Nom du metier</th>
              <th>Nombre d'ouvrier</th>
              <th>Total ouvrier</th>
              <td><a href="modifier.php" class="btn btn-success">modifier</a></td>
        </thead>
        <tr>
          <td>
            <?php 
                foreach ($rows as $reponse1) {
                   echo $reponse1['localite']."<br>";
                 }
             ?>
          </td>
          <td>
            <?php 
                foreach ($rows as $reponse1) {
                   echo $reponse1['metier']."<br>";
                 }
             ?>
          </td>
          <td>
            <?php 
                foreach ($rows as $reponse1) {
                   echo $reponse1['ouvrier']."<br>";
                 }
             ?>
          </td>

          <td>
            <?php 
                foreach ($rows as $reponse1) {
                   echo $reponse1['prix']."<br>";
                 }
             ?>
          </td>
        </tr>
      </table>
    </div>
  </div>



</body>
</html>
