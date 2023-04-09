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
<form name="formdelet"   action="formulaire"> 
<p><a href="accueil.php" class="submit">tableau de Bord</a></p>


    <?php
    if(isset($_GET['supcar'])){ 
        $sup=$_GET['supcar'];
    $reqDelete="DELETE FROM automobile WHERE IMM='$sup'";
    $resultat=mysqli_query($cnloccar,$reqDelete);
    }

    if($resultat){
        echo " <label style='text-align: center; color: #960406;'> la suppression a ete correctement effectue...</label> ";
    }
    else{
        echo " <label style='text-align: center; color: #960406;'> la suppression a ete échouée...</label> ";
    }

    ?>

</form> 
</div>
</body>
</html>