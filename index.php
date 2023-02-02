<?php

/**
 * 1. A l'aide de PhpMyAdmin
 * ==> Créez une nouvelle base de données intro_sql_phpmyadmin
 * ==> Une fois créée, trouvez un moyen pour supprimer cette base de données toujours depuis PhpMyAdmin.
 */

// FIXME ==> Aucun code à fournir pour cette étape.


/**
 * 2. A l'aide de PHP
 * ==> Créez une nouvelle base de données intro_sql
 * ==> Tentez de la supprimer depuis PHP
 * ==> Créez la à nouveau car nus en aurons besoin pour l'exo suivant !
 * Théorie :
 * -----------
 * En SQL, l'instruction DROP DATABASE nom_de_ma_table permet de supprimer une base de données.
 * Dans la réalité, vous n'aurez que très peu d'occasions de vous en servir directement depuis PHP mais retenez la quand même, elle peut être utile dans le cadre de tests.
 */

// TODO Votre code ici bas.

try {
    $maConnexion = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $password);
    $maConnexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $intro_sql = "
        CREATE TABLE user (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nom VARCHAR(30) NOT NULL,
            prenom VARCHAR(30) NOT NULL,
            rue VARCHAR(70) NOT NULL,
            numero SMALLINT UNSIGNED NOT NULL,
            code_postal SMALLINT UNSIGNED NOT NULL,
            ville VARCHAR(70) NOT NULL,
            pays VARCHAR(70) NOT NULL,
            mail VARCHAR(70) NOT NULL,
            date_enregistrement DATETIME DEFAULT CURRENT_TIMESTAMP,
            UNIQUE(mail)
        )
    ";

    $maConnexion->exec($intro_sql);
    echo "La base de données intro_sql a bien été créée.";
}
catch (PDOException $exception) {
    echo "Erreur de connexion: " . $exception->getMessage();
}













