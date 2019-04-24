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
      <li><a href="index.php">HOME</a></li>
      </li> 
      <li><a href="services.php">Services</a>
      </li>
      <li><a href="propos.php">A propos de nous</a></li>
      <li><a href="contact.php">CONTACT</a></li>
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
       $reponse = $bd->prepare("SELECT * FROM services WHERE email ='$email' ORDER BY ID DESC LIMIT 1");
       $reponse->execute();
       $rows = $reponse->fetchAll();
      
  ?>
<form method="post" action="">
  <h1 class="text-logo">Mes services demandées</h1>
  <div class="container admin">
    <div class="row">
      <h1><strong>Liste des services à modifier  </strong><a href="" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span>Ajouter</a></h1>
      <table class="table table-striped table-bordered">
        <thead>
              <th>Votre Localité</th>
              <th>Nom du metier</th>
              <th>Nombre d'ouvrier</th>
              <th>Prix total</th>
              <td><input type="submit" class="btn btn-success" name="submit" value="Enregistrer les modifications"></td>
        </thead>
        <tr>
          <td>
            <?php 
                foreach ($rows as $reponse1) {
                   echo "<input type='text' name='localite' value='".$reponse1['localite']."'><br>";
                 }
             ?>
          </td>
          <td>
            <?php 
                foreach ($rows as $reponse1) {
                   echo "<input type='text' name='metier' value='".$reponse1['metier']."'><br>";
                 }
             ?>
          </td>
          <td>
            <?php 
                foreach ($rows as $reponse1) {
                   echo "<input type='text' name='ouvrier' value='".$reponse1['ouvrier']."'><br>";
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
</form>
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
if(isset($_POST['submit'])){
   $localite = htmlentities($_POST['localite']);
   $metier = htmlentities($_POST['metier']);
   $ouvrier = htmlentities($_POST['ouvrier']);
   $prix = $ouvrier * 4000;
  $req = "UPDATE services SET localite='$localite', metier='$metier', ouvrier='$ouvrier', prix='$prix' WHERE email='$email' ORDER BY ID DESC LIMIT 1";
    $mdif_etd = $bd->prepare($req);
    try
    {
      $mdif_etd->bindValue(':localite',$localite);
      $mdif_etd->bindValue(':metier',$metier);
      $mdif_etd->bindValue(':ouvrier',$ouvrier);
      $mdif_etd->bindValue(':prix',$prix);
      $resultat = $mdif_etd->execute();

  $objet = "demande";
        
            extract($_POST);
            $destinataire = 'dongo.ngnamien@uvci.edu.ci';
            $expéditeur = $_SESSION['email'].' à : <'.$_SESSION['email'].'>';
            $mail = mail($destinataire, $objet,'\r\n'.$expéditeur .': Bonjour '.$_SESSION['nom'].', vous avez modifié votre demande et les nouvelles informations sont : '.$ouvrier.' \r\ndans le domaine : '.$metier.' \r\net vous êtes à : '.$localite);
            if ($mail)echo '<p style="text-align: center">Email envoyé avec succès</p>';else echo '<p style="text-align: center">Echec envoi de email</p>';



                    echo "<script>alert('Votre demande a été effectuée avec succès.');</script>";
                    



      if ($resultat){
        echo "<script>document.location.replace('actualise.php');</script>";
      }

    }

    catch(Exception $e){
      echo 'Erreur de réquête : ', $e->getMessage();
      }
}
   ?>
</body>
</html>
