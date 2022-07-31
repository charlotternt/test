<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Majestic</title>
    <meta charset="utf_8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar" style="background-color: #00385b;">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#">
      <img src="./Links/logo.png" alt="logo" class="d-inline-block align-text-top img-fluid">
    </a>
    <h1 style="color: #bd9857;" class="fw-bold text-center">PROCHAINEMENT À LYON 3e</h1></br>
    <p style="color: white;" class="fw-bold  fs-2 text-center">25 appartements de standing dans une résidence intimiste</p></n>
  </div>
</nav>
    <div class="container-xl container-lg d-flex justify-content-start">
        <img src="./Links/BALTHAZAR_V4.png" class="img-fluid " alt="photo immeuble">

     <div class="form">
        <div class="text-break">
            <p class="text-sm-start fs-5 fw-bold me-1" style="color: #00385b;">Pour être informé en avant-première Inscrivez-vous dès maintenant :</p>
        </div>
        <form action="post-form.php" method="POST">
          <div class="row">
            <div class="text-sm-left" >
            <input type="text" name="name" maxlength="60" class="form-control" id="input_name" placeholder="Nom">
            <input type="text" name="firstname" maxlength="60" class="form-control" id="input_firstname" placeholder="Prénom">
            <input type="mail" name="mail" maxlength="90" class="form-control color: white;" id="input_mail" placeholder="Email">
            <input type="tel" name="phone" pattern="[0-9]{10}" maxlength="10" class="form-control" id="input_phone"  placeholder="Numéro de téléphone">  
            </div>
            <div class="d-grid gap-4 d-md-block">
                <button type="submit" class="btn btn-md fw-bold fs-5">Valider</button>
            </div>           
         </div>
        </form>
     </div>

    </div>
<footer>
    <div class="container-fluid flex" style="background-color: #00385b;">
     <p class="text-end fs-3 fw-bold me-2" style="color: white;">04 78 62 02 00</p>
     <p class="text-end fs-7 me-4" style="color: white;">batilyonpromotion.fr</p> 
     <img src="./Links/tampon.png" alt="tampon entreprise" class="float-end img-fluid"/>
     <h3 class="fw-bold text-center" style="color: white;">Offrez-vous l’authenticité de Montchat et la convivialité de Monplaisir </h3>
     <p class="text-center fs-5 fw-bold" style="color: white;">Entre Montchat et Monplaisir, pourquoi choisir quand une adresse
         réunit toutes les qualités de deux des secteurs les plus prisés de Lyon !</p>
        
    </div>
</footer>
</body>
</html>