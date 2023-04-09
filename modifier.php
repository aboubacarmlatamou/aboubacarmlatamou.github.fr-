<?php require_once('connexion.php');?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <title>Document sans titre</title>
        <link rel="stylesheet" href="loccar_style.css">
    </head>
    <body>
        
        <div id="container">
    
            <form name="formUpdate" action="" method="post" class="formulaire" enctype="multipart/form-data">
            <h1 align="center">Mettre à Jour une Voiture...</h1>
    
            <label><br>Immatriculation : <br></label>
            <input type="text" name="txtImm" class="zonetext" value="<?php echo $_GET['mod'] ?> " readonly>
    
            <label><br>Marque :<br></label>
            <input type="text" name="txtMarque" class="zonetext"  placeholder="Entrer la Marque ici" required>
            
            <label><br> Prix de Location: </br></label> 
            <input type="number" name="txtPL" class="zonetext"  placeholder="Entrer la Prix Unitaire" required>
            
            <label><br>Photo :<br></label>
            <input type="file" name="txtPhoto" class="zonetext" placeholder="Choisir une image..." required>
             
            <input type="submit" name="btmod"  class="submit" value="Mettre a Jour">

            <p><a href="accueil.php" class="submit">Tableau de Bord</a></p>

            <label style="text-align: center; color: #360001;">
    
            <?php   


            
if(isset($_POST['btmod']))
{
$imm=$_POST['txtImm'];
$marque=$_POST['txtMarque'];
$prixloc=$_POST['txtPL'];

$modifier=$_GET['mod'];

$image=$_FILES['txtPhoto']['tmp_name'];
$traget="images/".$_FILES['txtPhoto']['name'];

move_uploaded_file($image,$traget);

$reqUp="UPDATE automobile SET MARQUE='$marque',PRIX_LOC='$prixloc',PHOTO='$prixloc',PHOTO='$traget' WHERE IMM='$modifier'";
$resultat=mysqli_query($cnloccar,$reqUp);
if($resultat)
{
    echo "mise a jour des données validés";
}
  else
  {
       echo "echec de modiification des données";
  }
}
?>
</label>
</form>

</div>

</body>
</html>
