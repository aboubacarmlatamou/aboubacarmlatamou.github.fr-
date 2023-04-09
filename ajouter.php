<?php require_once('connexion.php');?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <title>Ajouter</title>
        <link rel="stylesheet" href="loccar_style.css">
    </head>

    <body>
        
    <div id="container">

        <form name="formAdd" action="" method="POST" class="formulaire" enctype="multipart/form-data">
        <h2 align="center">Ajouter Une Nouvelle Voiture</h2>

        <label><br>Immatriculation : <br></label>
        <input type="text" name="txtImm" class="zonetext" placeholder="Entrer Immatriculation" required>

        <label><br>Marque :<br></label>
        <input type="text" name="txtMarque" class="zonetext" placeholder="Entrer la Marque" required>

         <label><br>Prix de Location :<br></label>
        <input type="number" name="txtPL" class="zonetext" placeholder="Entrer la Prix Unitaire" required>
        
        <label><br>Photo :<br></label>
        <input type="file" name="txtphoto" class="zonetext" placeholder="Choisir une image" required>
         
        <input type="submit" name="btadd" value="Ajouter" class="submit">

        <p><a href="accueil.php" class="submit">Tableau de Bord</a></p>

        <label style="text-align: center; color: #960406;">

        <?php  

     if(isset($_POST['btadd']))
            {
            $imm=$_POST['txtImm'];
            $marque=$_POST['txtMarque'];
            $prixloc=$_POST['txtPL'];

            $image=$_FILES['txtphoto']['tmp_name'];
            $traget="images/".$_FILES['txtphoto']['name'];

            move_uploaded_file($image,$traget);

            $reqAdd="INSERT INTO automobile (IMM,MARQUE,PRIX_LOC,PHOTO) VALUES('$imm','$marque','$prixloc','$traget')";
            $resultat=mysqli_query($cnloccar,$reqAdd);

            if($resultat)
            {
                echo "Insertion des données validés"; 
            }
              else
              {
                   echo "echec d insertion des données";
              }
            }
          ?>
     </label>
    </form>

    </div>

    </body>
</html>
