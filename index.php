<!DOCTYPE html>
<html lang="fr">
    <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
       <meta name="description" content="Portfolio d’Amélia Pilou - BTS SIO SLAM">
       <meta name="author" content="Amélia Pilou">
       <link rel="icon" href="favicon.ico">
       <title>PROJET - Accueil</title>
       <link href="css/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet" />
       <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
                                   <!--       header          -->
        <header>   
            <?php
            include('includes/navbar.inc.php');
            ?>
        </header>


                                    <!--    Corps de la pages   -->
        <div class="jumbotron">
            <div class="container">
                <h1>Bonjour et bienvenue sur monProjet !</h1>
                <p>
                    <img id="maPhoto" class="pull-left img-rounded" src="images/Capture.PNG" alt="Ma photo d'identité" /> Un text ICI
                </p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">En savoir plus &raquo;</a></p>
            </div>
        </div>


                                    
                                    
                                   
                                    
                                    
                                    
                                    
                                    <!--        Footer         -->
        <?php            
            include('includes/footer.inc.php');
            //chargement script Java
            include('includes/scriptjs.inc.php');
        ?>
                                    
                                            
    </body>

</html>
