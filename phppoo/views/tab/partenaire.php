 <div class="contnaire" align="center";>

<form class="form-inline"  method="POST">
  
  <div class="form-group">
    <p>
      Bienvenue  <?php echo $_SESSION['partenaire_nom'];?>
      &nbsp;
    </p>
  </div>
  <button type="submit" name="formDeconnexion" class="btn btn-primary">Se deconnecter</button>
</form>


     <br/>

     <h1>vos offres</h1>

<form method="POST">
<p><a href="ajoutOffre.php" class="btn btn-success">Ajouter une offre</a></p><br>



<label>classer par offre :</label>
  <input class="btn btn-info" type="submit" name="btndesc" id="btndesc" value="la plus récente">



  <input class="btn btn-info" type="submit" name="btnasc" id="btnasc" value="la plus ancienne">


<br><br>


 

     <table class="table table-bordered table-striped col-md-10">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Contrat</th>
              <th scope="col">Emploi</th>
              <th scope="col">Date de mise en ligne</th>
               <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>

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
             <td> <a   class="btn btn-secondary" href="modifierOffre.php?id="<?=$offre['idoffre']?>">Modifier</a></td>
            <td> <a class="btn btn-danger" href="offre.php?supprime=<?=$offre['idoffre'] ?>">Supprimer</a></td>
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