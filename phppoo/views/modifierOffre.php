<html>
   <head>
      <title>modifier offre</title>
      <meta charset="utf-8">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="style.css">

   </head>

   <header>
      <h1 style="margin-left: 12%;">Modifier offre</h1>
   </header>

   <body>
      <div class="container" align="center">
         
         <br /><br />
         <form method="POST" action="">
            <table>
               <tr>
                  <td align="right">
                     <label for="type_contrat">type de contrat :</label>
                  </td>
                  <td>
                     <input type="text" name="type_contrat" value="<?= $tab->type_contrat; ?>"/>
                  </td>
               </tr>
               
               <tr>
                  <td align="right">
                     <label for="emploi">Domaine :</label>
                  </td>
                  <td>
                     <input type="text"  name="emploi" value="<?= $tab->emploi; ?>"/>
                  </td>
                </tr>

                 <tr>
                  <td align="right">
                     <label for="dateoffre">Date :</label>
                  </td>
                  <td>
                     <input type="date"   name="dateoffre" value="<?= $tab->dateoffre; ?>" />
                  </td>
                </tr>
               
              
               <tr>
                 <td></td>
                  <td align="center">
                     <br />
                     <input type="submit" name="btnsauvegarder" value="Sauvegarder" />
                  </td>   
               </tr> 
   
            </table>
         </form>
         
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
   </body>
</html>