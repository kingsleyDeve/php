
<html>
   <head>
      <title>CONNEXION</title>
      <meta charset="utf-8">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      <link rel="stylesheet" href="style.css">

   </head>

   <header>
      <h1 style="margin-left: 10%;">connexion</h1>
   </header>

   <body>
      <div class="container" align="center">
         
         <br /><br />
         <form method="POST" name="login">
            <table>
               <tr>
                  <td align="right">
                     <label for="login">login :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre login" id="login" name="login"/>
                  </td>
               </tr>
               
               <tr>
                  <td align="right">
                     <label for="jeune_mdp">Mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="jeune_mdp" name="jeune_mdp" />
                  </td>
               </tr>
               <tr>
                  <td></td>
                  <td align="center">
                     <br />
                     <input type="submit" name="formConnexion" value="Se Connecter" />
                  </td>
               </tr>
         </table>      
        </form>  

         <p><a href="inscriptionJeune.php"  style="font-size:20px; margin-left: 6%;">Inscrits toi ici</a></p><br>
          <p><a href="accueil.php"  style="font-size:20px; margin-left: 6%;">Retour à l'accueil</a></p>

        <?php
         if(isset($erreur)) {
        echo '<font color="red"> <strong>'.$erreur."</strong></font>";         }
         ?> 
      </div>    
   </body>
</html>