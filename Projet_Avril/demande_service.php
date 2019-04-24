
<?php  session_start(); ?>
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

<center>

<form method="POST" action="">
<h1 style="margin-top: 15px,">Formulaire de demande de services</h1 style="margin-top: 12px">


<section class="form-dark" style="margin-top: 70px">
<div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table7.jpg'); width: 28rem;">
    <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">

        <!--Header-->
        <div class="text-center">
            <h2 class="white-text mb-5 mt-4 font-weight-bold"><a class="green-text font-weight-bold"><strong> Services</strong></a></h2>
        </div>

        <!--Body-->
        <div class="md-form">
            <input type="hidden" id="Form-name" class="form-control white-text" name="nom"  value="<?= $_SESSION['nom'] ?>">
        </div>

        <div class="md-form pb-3">
            <input type="hidden" id="Form-lastname" class="form-control white-text" name="prenom" value="<?= $_SESSION['prenom'] ?>">
         </div>
         <div class="md-form pb-3">
            <input type="hidden" id="Form-email" class="form-control white-text" name="email" value="<?= $_SESSION['email'] ?>">
         </div>
         <div class="md-form pb-3">
            <input type="hidden" id="Form-tel" class="form-control white-text" name="telephone" value="<?= $_SESSION['telephone'] ?>">
         </div>
         <div class="md-form pb-3">
            <input type="text" id="Form-local" class="form-control white-text" name="localite" required="" >
            <label for="Form-local">Votre localité</label>
         </div>
          <div class="md-form pb-3">
            <input type="text" id="Form-metier" class="form-control white-text" name="metier"  required="">
            <label for="Form-metier">Quel est le nom du metier</label>
             <div class="md-form pb-3">
            <input type="text" id="Form-ouvrier" class="form-control white-text" name="ouvrier"  required="">
            <label for="Form-ouvrier">Nombres d'ouvriers</label>
         </div>
         </div>
        </div>

        <!--Grid row-->
        <div class="row d-flex align-items-center mb-4">

            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
                <button type="submit" class="btn btn-success btn-block btn-rounded z-depth-1" name="submit" value="Envoyer">Envoyer</button>
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


<?php
if (isset($_POST['submit'])) {

  $host = 'localhost';
    $dbname = 'commpte1';
    $util = 'root';
    $passe = '';
    $charset = 'utf8';
    $nom = htmlentities($_POST['nom']);
  $prenom = htmlentities($_POST['prenom']);
  $telephone = htmlentities($_POST['telephone']);
  $email = htmlentities($_POST['email']);
    $localite = htmlentities($_POST['localite']);
    $metier = htmlentities($_POST['metier']);
     $ouvrier = htmlentities($_POST['ouvrier']);
     $prix = $ouvrier * 4000;
   
    try {
      $bd = new PDO('mysql:host=localhost;dbname=commpte1','root','');
      }
      catch (Exception $e)
       {
        die('Erreur de connexion à la base de donnée: <br>'.$e->getMessage(). '<br>');
       }
              //insertion des données//
   $req = "INSERT INTO services(nom,prenom,telephone,email,localite,metier,ouvrier,prix) VALUES (:nom,:prenom,:telephone,:email,:localite,:metier,:ouvrier,:prix)";
    $ajout_etd = $bd->prepare($req);
    try
    {
      $ajout_etd->bindValue(':nom',$nom);
      $ajout_etd->bindValue(':prenom',$prenom);
      $ajout_etd->bindValue(':telephone',$telephone);
      $ajout_etd->bindValue(':email',$email);
      $ajout_etd->bindValue(':localite',$localite);
      $ajout_etd->bindValue(':metier',$metier);
      $ajout_etd->bindValue(':ouvrier',$ouvrier);
      $ajout_etd->bindValue(':prix',$prix);
      $resultat = $ajout_etd->execute();



      $objet = "demande";
        
            extract($_POST);
            $destinataire = 'dongo.ngnamien@uvci.edu.ci';
            $expéditeur = $_SESSION['email'].' à : <'.$_SESSION['email'].'>';
            $mail = mail($destinataire, $objet,'\r\n'.$expéditeur .': Bonjour '.$_SESSION['nom'].', vous avez demandé : '.$ouvrier.' \r\ndans le domaine : '.$metier.' \r\net vous êtes à : '.$localite);
            if ($mail)echo '<p style="text-align: center">Email envoyé avec succès</p>';else echo '<p style="text-align: center">Echec envoi de email</p>';



                    echo "<script>alert('Votre demande a été effectuée avec succès.');</script>";

      echo "<script>
          document.location.replace('membre.php');
      </script>";
    }
    catch(Exception $e){
      echo 'Erreur de réquête : ', $e->getMessage();
    }
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
</body>
</html>
