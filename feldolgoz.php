<!DOCTYPE html>
<html lang="hu">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Strandolás Magyarországon. A Balaton, Tisza-tó és a Szelidi-tó homokos strandja, szállodája, kempingjei, magánüdülõi, vendéglõi, szabadtéri színpada nyugodt kikapcsolódást és mozgalmas szórakozást kínálnak az idelátogató vendégeknek.">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
        <title>Hurrá, nyaralunk !</title>
        <link rel="icon" type="image/x-icon" href="img/beach.svg">
    </head>

    <body>
        <main>
<?php  
        if (isset($_GET['adatkez'])) {
            echo '<h2>Tisztelt '.$_GET['nev'].' Hirdetése a következő adatokkal kerül elküldésre: </h2><br>';            
            
            echo ' <p> <b>Név: </b> ' .$_GET['nev'].' </p><br>';
            echo ' <p> <b>E-mail cím: </b> ' .$_GET['email'].' </p><br>';
            echo ' <p> <b>Telefonszám: </b> ' .$_GET['telefon'].' </p><br>';
            echo ' <p> <b>A választott tó: </b> ' .$_GET['lake'].' </p><br>';
        
            echo '<p> <b>Ezek a szállások érdeklik Önt: </b></p><br>';
            if (isset($_GET['hotel'])) {
                echo ' <p> <b>&nbsp; - </b>' .$_GET['hotel'].' </p><br>';
            } 

            if (isset($_GET['kemping'])) {
             echo ' <p> <b>&nbsp; - </b>' .$_GET['kemping'].' </p><br>';
            } 

            if (isset($_GET['apartman'])) {
                echo ' <p> <b>&nbsp; - </b>' .$_GET['apartman'].' </p><br>';
            } 
            
            if (isset($_GET['ellatas']))
            {
                echo ' <p> <b>Ellátási forma: </b> ' .$_GET['ellatas'];
            }

            echo ' <p> <b>Az Ön kiegészítése: </b> ' .$_GET['megjegy'].'!</p><br>';
        }
        else{
            echo ' <h2>Mivel Ön nem járult hozzá adatai kezeléséhez, így a kitöltött űrlapok nem kerülhetnek feldolgozésra. </h2>';
        }
?> 
    </main>
 </body>
</html>