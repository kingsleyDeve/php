
<html>
   <head>
      <title>CONNEXION</title>
      <meta charset="utf-8" http-esquiv="content-type" content="text/html">

<link rel="stylesheet" href="style.css">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      
   </head>

   <header>
       <h1 style="margin-left: 10%;">connexion</h1>
   </header>

   <body>
      <div class="container" align="center">
                 <br /><br />
         

      <form method="POST" name="login">
  <div class="form-group col-md-6">
    <label for="partenaire_siret">Partenaire_siret :</label>
    <input type="text" class="form-control" id="partenaire_siret" placeholder="Votre siret" name="partenaire_siret">
    
  </div>
  <div class="form-group col-md-6" >
    <label for="partenaire_mdp">partenaire_mdp :</label>
    <input type="password" class="form-control" id="partenaire_mdp" placeholder="Votre mot de passe" name="partenaire_mdp">
  </div>
 
  <button type="submit"  name="formConnexion" class="btn btn-primary">Se connecter</button>
      </form>

         <p><a href="inscriptionPartenaire.php"  style="font-size:20px; margin-left: 6%;">Inscrits toi ici</a></p><br>
         <p><a href="accueil.php"  style="font-size:20px; margin-left: 6%;">Retour à l'accueil</a></p>

        <?php
         if(isset($erreur)) {
            echo '<font color="red"> <strong>'.$erreur."</strong></font>";
         }
         ?> 
      </div>    
   </body>
</html>