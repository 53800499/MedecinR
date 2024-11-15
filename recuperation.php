<?php
$host = 'localhost';  // ou l'adresse de votre serveur de base de données
$user = 'root';       // votre utilisateur MySQL
$password = '';       // votre mot de passe MySQL
$dbname = 'medecin';  // nom de votre base de données

// Connexion à MySQL
$conn = new mysqli($host, $user, $password, $dbname);


if ($conn->connect_error) {
    // Rediriger vers la page erro.php avec le message d'erreur en paramètre
    header("Location: erro.php?error=" . urlencode("La connexion a échoué: " . $conn->connect_error));
    exit(); // S'assurer que le script s'arrête ici
}

// Récupérer tous les étudiants avec une jointure
$sql = "SELECT * FROM apprenant 
        INNER JOIN visite ON apprenant.id = visite.apprenant_id";
$result = $conn->query($sql);

// Vérifier si la requête a échoué
if ($result === false) {
    die("Erreur SQL : " . $conn->error); // Affiche l'erreur SQL
}
?>
