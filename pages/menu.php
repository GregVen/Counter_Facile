<div class="menu">
    <div class="div_boulier">
        <img class="img_boulier" src="./img/calculator.png" alt="boulier">
    </div>

    <?php if (!empty($_SESSION["id_Role"]) == 1) { ?>
            <p class="user_connect">user: <?php echo $_SESSION["login"]; ?></p>
    <?php } ?>

    <ul>
        
        <?php if(((!empty($_GET['page'])) && ($_GET['page']=="accueil")) || (empty($_GET['page']))) { ?>
            <a class ="active_page" href="index.php?page=accueil"><li>Accueil</li></a> 
        <?php } else { ?>
            <a href="index.php?page=accueil"><li>Accueil</li></a> 
        <?php } ?>

        <?php if((!empty($_GET['page'])) && ($_GET['page']=="tarifs")){ ?>
            <a class ="active_page" href="index.php?page=tarifs"><li>Tarifs</li></a> 
        <?php } else { ?>
            <a href="index.php?page=tarifs"><li>Tarifs</li></a> 
        <?php } ?>

        <?php if((!empty($_GET['page'])) && ($_GET['page']=="machines")){ ?>
            <a class ="active_page" href="index.php?page=machines"><li>Machines</li></a> 
        <?php } else { ?>
            <a href="index.php?page=machines"><li>Machines</li></a> 
        <?php } ?>


        <?php if (!empty($_SESSION["id_Role"]) == 1) {
            $user_id=$_SESSION["userID"];
            if((!empty($_GET['page'])) && ($_GET['page']=="change_mdp")){ ?>
                <a class ="active_page" href="index.php?page=change_mdp"><li>Changer mot de passe admin</li></a>
            <?php } else { ?>
                <a href="index.php?page=change_mdp"><li>Changer mot de passe admin</li></a> 
            <?php } ?>

                <!-- <a href="./fonctions/deconnexion.php"><li>Déconnexion</li></a> -->
        <?php } 
        ?> 
    </ul>
</div>