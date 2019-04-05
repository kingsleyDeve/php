<html>
   <head>
      <title>CONNEXION</title>
      <meta charset="utf-8">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      <link rel="stylesheet" href="style.css">

   </head>

   <header>
      <h1>connexion</h1>

   </header>


    <body>
      <div class="container" align="center">
                 <br /><br />
                 
         

      <form method="POST" name="login">
  <div class="form-group col-md-6">
    <label for="administrateur_siret">administrateur_siret :</label>
    <input type="text" class="form-control" id="administrateur_siret" placeholder="Votre siret" name="administrateur_siret">
    
  </div>
  <div class="form-group col-md-6" >
    <label for="administrateur_mdp">administrateur_mdp :</label>
    <input type="password" class="form-control" id="administrateur_mdp" placeholder="Votre mot de passe" name="administrateur_mdp">
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