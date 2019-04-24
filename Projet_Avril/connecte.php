<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Constructon</title>
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

<center>

<form method="POST" action="">
<h1 style="margin-top: 15px;font-size: 50px">Formulaire de connexion</h1 style="margin-top: 12px">


<section class="form-dark" style="margin-top: 70px">
  <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table7.jpg'); width: 28rem;">
    <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">

        <!--Header-->
        <div class="text-center">
            <h2 class="white-text mb-5 mt-4 font-weight-bold"><a class="green-text font-weight-bold"><strong> connecter vous !</strong></a></h2>
        </div>

         <div class="md-form pb-3">
            <input type="text" id="Form-mail5" class="form-control white-text" name="email" required="">
            <label for="Form-mail5">Votre mail</label>
         </div>
         <div class="md-form pb-3">
            <input type="password" id="Form-pass5" class="form-control white-text" name="password" required="">
            <label for="Form-pass5">Votre mot de passe</label>
         </div>
        </div>
        <div class="row d-flex align-items-center mb-4">

            <div class="text-center mb-3 col-md-12">
                <button type="submit" class="btn btn-success btn-block btn-rounded z-depth-1" name="submit" value="connexion">Connexion</button>
            </div>
            <div class="text-center mb-3 col-md-12">
                <a class="btn btn-success btn-block btn-rounded z-depth-1" href="compte.php" name="creer_compte" value="connexion">Creer un compte</a>
            </div>
        </div>
    </div>
  </section>
</form>
</center>
</body>
</html>






<?php 
if (isset($_POST['submit']) && $_POST['submit'] == 'connexion') {
  $connect = 'localhost';
  $bd = 'commpte1';
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
  $email = htmlentities($_POST['email']);
  $password = htmlentities($_POST['password']);
  
   $req = $bd->query("SELECT * FROM inscription WHERE email ='$email' AND password = '$password'");
   $row = $req->fetch();
   if ($row['email'] == $email && $row['password'] == $password) {
    $telephone = $row['telephone'];
    $nom = $row['nom'];
    $prenom = $row['prenom'];
       $_SESSION['email'] = $email;
       $_SESSION['telephone'] = $telephone;
       $_SESSION['nom'] = $nom;
       $_SESSION['prenom'] = $prenom;
        header('Location:membre.php');
     }else echo "<center>Identifiants incorrectes</center>";

}
  elseif (isset($_POST['submit']) && $_POST['submit'] == 'Creer un compte') {
    header('Location: compte.php');
  }

 ?>
















<!-- Footer -->
<div class="footer">  
      <div class="copy_right">
        <p style="color: white">&copy; 2019 Construction. Tous droits réservés</p>
       </div>
     </div>



<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.js"></script>
  <script src="first.js"></script>




