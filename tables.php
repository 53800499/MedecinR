<?php
include 'db.php';

try {
    // Table apprenant
    $sqlApprenant = "CREATE TABLE IF NOT EXISTS apprenant (
        id INT AUTO_INCREMENT PRIMARY KEY,
        apprenant VARCHAR(50),
        nom VARCHAR(50),
        filiere VARCHAR(50),
        anneEtude VARCHAR(50),
        groupe_sanguin VARCHAR(5),
        taille FLOAT,
        poids FLOAT,
        conditions_medicales TEXT
    )";
    $pdo->exec($sqlApprenant);
    echo "Table 'apprenant' créée avec succès. ";

    // Table visite
    $sqlVisite = "CREATE TABLE IF NOT EXISTS visite (
        id INT AUTO_INCREMENT PRIMARY KEY,
        etablissement VARCHAR(100),
        date_entree DATE,
        heure_entree TIME,
        date_sortie DATE,
        heure_sortie TIME,
        medecin VARCHAR(50),
        etat_sante VARCHAR(100),
        apprenant_id INT,
        FOREIGN KEY (apprenant_id) REFERENCES apprenant(id)
    )";
    $pdo->exec($sqlVisite);
    echo "Table 'visite' créée avec succès.";

} catch (PDOException $e) {
    echo "Erreur de création des tables : " . $e->getMessage();
}
?>
