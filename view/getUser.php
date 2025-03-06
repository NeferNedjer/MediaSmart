<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails Utilisateur</title>
    <link rel="stylesheet" href="../assets/scss/style.css">
</head>
<body>
    <div id="backround" class='flex-container'></div>
        <div id="user-details">
            <div class="user-info">
                <h1><?php echo $data->getName() ?> <?php echo $data->getFirst_name() ?></h1><br>
                <p>Identifiant : <?php echo $data->getId_user(); ?></p><br>
                <p>E-mail : <?php echo $data->getEmail(); ?></p><br>
                <p>Adresse : <?php echo $data->getAdress(); ?></p><br>
                <p>Téléphone : <?php echo $data->getPhone(); ?></p><br>
                <p>Statut : <?php echo $data->getStatut(); ?></p><br>
                <p>Date d'inscription : <?php echo $data->getInscription_date()->format('d/m/Y à H:i'); ?></p><br>
                <h2>Emprunts en cours :</h2><br>
                <ul>
                <?php 
                $number = 0;
                foreach($emprunts as $emprunt): $number++; ?>

                <li>emprunt <?php echo $number ?> : <a href=""><?php echo $emprunt->getTitle();?> </a>emprunté le :  <?php echo $emprunt->getEmprunt_date()->format('d/m/Y');?> à rendre le : <?php echo $emprunt->getMax_return_date()->format('d/m/Y'); ?>.</li>
                <?php endforeach; ?></p>  
                </ul><br><br>
                <h2>Historique des emprunts :</h2><br><br>

            
                <a href="<?php echo $router->generate('dashboard-employee') ?>">retour</a>
            </div>
        </div>
    </div>
</body>
</html>