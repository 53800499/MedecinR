<?php
include 'tables.php';


$data = json_decode(file_get_contents('php://input'), true);
if (isset($data['apprenant'])) {
    $apprenant = $data['apprenant'];
    echo $apprenant;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données "Info Personnel"
    $apprenant = $data['apprenant'];
    $groupeSanguin = $data['groupeSanguin'];
    $taille = $data['taille'];
    $poids = $data['poids'];
    $conditionsMedicales = json_encode($data['conditionsMedicales']);

    try {
        // Insérer dans la table apprenant
        $stmt = $pdo->prepare("INSERT INTO apprenant (apprenant, groupe_sanguin, taille, poids, conditions_medicales) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$apprenant, $groupeSanguin, $taille, $poids, $conditionsMedicales]);
        $apprenantId = $pdo->lastInsertId();

        // Récupération des données "Visite"
        $etablissement = $data['etablissement'];
        $dateEntree = $data['dateEntree'];
        $heureEntree = $data['heureEntree'];
        $dateSortie = $data['dateSortie'];
        $heureSortie = $data['heureSortie'];
        $medecin = $data['medecin'];
        $etatSante = $data['etatSante'];

        // Insérer dans la table visite
        $stmtVisite = $pdo->prepare("INSERT INTO visite (etablissement, date_entree, heure_entree, date_sortie, heure_sortie, medecin, etat_sante, apprenant_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmtVisite->execute([$etablissement, $dateEntree, $heureEntree, $dateSortie, $heureSortie, $medecin, $etatSante, $apprenantId]);

        echo "Les données ont été enregistrées avec succès.";
    } catch (PDOException $e) {
        echo "Erreur d'enregistrement des données : " . $e->getMessage();
    }
}
?>
