<div align="center";>
 <?php
        echo "<p>Bienvenue"." ".$_SESSION['idadministrateur']."  </p>";
     echo '<form  method="POST">
          <input type="submit" name="formDeconnexion" value="Se Deconnecter" />
            </form>';

         ?>   
     <br/>

     <h1>vos offres</h1>

<form method="POST">



<label>classer par offre :
  <input style="background-color:#5EB6E4;" type="submit" name="btndesc" id="btndesc" value="la plus récente">
</label>

<label>
  <input style="background-color:#5EB6E4;" type="submit" name="btnasc" id="btnasc" value="la plus ancienne">
</label>

<br><br>


     <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Contrat</th>
              <th>Emploi</th>
              <th>Date de mise en ligne</th>
                <th>Supprimer</th>

            </tr>
          </thead>
          <tbody>

             
            <?php while($offre = $req->fetch())
     
   {
           
            ?>

            <tr>
             <td> <?php echo $offre['idoffre']; ?> </td>
             <td> <?php echo $offre['type_contrat']; ?> </td>
             <td> <?php echo $offre['emploi']; ?> </td>
             <td> <?php echo $offre['dateoffre']; ?> </td>
            <td> <a href="offre.php?supprime=<?=$offre['idoffre'] ?>">Supprimer</a></td>
            </tr>

            <?php  } ?>

          </tbody>
        </table>

        </form>        
  
        <?php
         if(isset($erreur)) {
            echo '<font color="red"> <strong>'.$erreur."</strong></font>";
         }
         ?>  

     </div>