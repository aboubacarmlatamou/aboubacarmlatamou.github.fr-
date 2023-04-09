<?php require_once ('connexion.php'); ?>
<!DOCTYPE html PUBLIC "-//DTD XHTML 1.0 transitional//EN" "http://www.w3.org/TR/xhtmll/DT
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> LOCATION CAR</title>
<link rel="stylesheet" href="loccar_style.css"/>
</head> 

<body>
    <div id="entete">
    <h1 class="nomcite"> <font color="#6060h0"> <center> LOUER VOTRE VOITURE CHEZ WOUDRY CAR:Tel 224 622 61 69 06</center> </font></h1>
    <a href="login.php" class="login">login</a>
    <video autoplay="autoplay" class="video_entete">
    <source src="images/wou.mp4.mp4" type="video/mp4" />
    </video>
    <p class="nomsite"> LOCATION CAR :<font color="#f30"> woudryaboubacar@gmail.com</font> </p>
    <div id="formauto">
    <form name="formauto" method="post" action="">
    <input id="motcle" type="text" name="motcle" placeholder=" Recherche par Marque..."/>
    <input class="btfind" type="submit" name="btsubmit" value="Recherche"/>
    </form>
    </div>
    </div>
    <div id="articles">
    <?php
    if(isset($_POST['btsubmit'])){
        $mc=$_POST['motcle'];
 $reqselect="select * from automobile where MARQUE like '%$mc%'";
    }
    else{
$reqselect="select * from automobile";
    }

    $resultat=mysqli_query ($cnloccar,$reqselect);
    $nbr=mysqli_num_rows ($resultat);
    echo "<p><b>".$nbr." </b> Resultats de votre recherche ....<p/>";
    while ($ligne=mysqli_fetch_assoc($resultat))
{
    ?>
    <div id="auto">
    <img src="<?php echo $ligne['PHOTO'] ?> "/><br/>
    <?php echo $ligne['IMM'];?><br/>
    <?php echo $ligne['MARQUE'];?><br/>
    <?php echo $ligne['PRIX_LOC'];?>
    </div>
    <?php }  ?>
    </div>  
    
</body>
</html>