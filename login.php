<?php require_once ('connexion.php'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Document sans titre</title>
        <link rel="stylesheet" href="loccar_style.css" type="text/css">
    </head>
        <body>
        
        <div id="container">

    <form action="" method="post" class="formulaire">
        <h1>Connexion</h1>
         <label><br>Nom d'Utilisateur :</br></label>
        <input type="text" placeholder="Entrer le Nom d'Utilisateur" name="txtlogin" required class="zonetext">

        <label><br>Mot de Passe :</br></label>
        <input type="password" placeholder="Entrer le Mot de Passe" name="txtpw" required class="zonetext">

        <input type="submit" name="btlogin" value="LOGIN" id="submit" class="submit">
        
        <?php   
        
        if(isset($_POST['btlogin']))
        {
            $req="select * from utilisateurs where login='".$_POST['txtlogin']."' and motPasse='".$_POST['txtpw']."'";
            if($resultat=mysqli_query($cnloccar,$req))
            {
                $ligne=mysqli_fetch_assoc($resultat);
                if($ligne!=0){

                    session_start();
                    $_SESSION['monlogin']=$_POST['txtlogin'];
                    header("location:accueil.php");

                }
            }
            else{
                echo "<font color='#F0001D'>Login ou mot de passe est invalide</font>";
            }
        }
        
        ?>

    </form>
    </div>
    </body>
</html>