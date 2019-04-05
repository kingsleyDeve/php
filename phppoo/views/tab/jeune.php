
 <div class="contnaire" align="center";>

<form class="form-inline">
  
  <div class="form-group">
    <p>
      Bienvenue  <?php echo $_SESSION['nom'];?>
      &nbsp;
    </p>
  </div>
  <button type="submit" class="btn btn-primary">Se deconnecter</button>
</form>


     <br/>

     <h1>vos offres</h1>


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