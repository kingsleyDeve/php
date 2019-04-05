<html>
   <head>
      <title>INSCRIPTION</title>
      <meta charset="utf-8">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="style.css">

   </head>

   <header>
       <h1 style="margin-left: 15%;">Inscription</h1>
   </header>

   <body>
      <div class="container" align="center">

         <br /><br />
         <form method="POST" action="">
            <table>
               <tr>
                  <td align="right">
                     <label for="partenaire_siret">partenaire_siret :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre siret" id="partenaire_siret" name="partenaire_siret" value="<?php if(isset($partenaire_siret)) { echo $partenaire_siret; } ?>" />
                  </td>
               </tr>
               
                <tr>
                  <td align="right">
                     <label for="partenaire_nom">Nom de la société :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Nom de la société" id="partenaire_nom" name="partenaire_nom" />
                  </td>
               </tr>

               <tr>
                  <td align="right">
                     <label for="partenaire_mdp">Mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="partenaire_mdp" name="partenaire_mdp" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="partenaire_mdp2">Confirmation du mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Confirmez votre mdp" id="partenaire_mdp2" name="partenaire_mdp2" />
                  </td>
               </tr>
               <tr>
                  <td></td>
                  <td align="center">
                     <br />
                     <input type="submit" name="forminscription" value="Je m'inscris" />
                  </td>
               </tr>
            </table>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red"> <strong>'.$erreur."</strong></font>";
         }
         ?>
      </div>
   </body>
</html>