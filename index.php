<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>CountAsSimple</title>
</head>
<body>
    <header>
        <?php 
                include "./pages/header.php";
            ?>
    </header>

    
    <section>
        
        <?php 
            include "./pages/menu.php";
        ?>

        <div class="page">

            <div class="texte">
                <?php 

                    if(empty($_GET['page'])){
                        include_once 'pages/accueil.php';
                        }                        
                    if(!empty($_GET['page'])){
                        include 'pages/'.$_GET['page'].'.php';
                        }
                ?>

            </div>
            
        </div>

    </section>

    <footer>
        <?php 
            include "./pages/footer.php";
        ?>
    </footer>
</body>
</html>