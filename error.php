<?php
// Vérifiez si un message d'erreur est passé dans l'URL
if (isset($_GET['error'])) {
    $error_message = urldecode($_GET['error']);
} else {
    $error_message = "Une erreur inconnue s'est produite.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur de Connexion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8d7da;
            color: #721c24;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
            text-align: center;
        }
        .error-box {
            padding: 20px;
            border: 1px solid #f5c6cb;
            background-color: #f8d7da;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn-home {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="error-box">
        <h1><i class="fas fa-exclamation-triangle"></i> Erreur de Connexion</h1>
        <p><strong>Oups !</strong> Il semble qu'il y ait eu un problème de connexion avec la base de données.</p>
        <p><strong>Détails de l'erreur :</strong></p>
        <p><?php echo $error_message; ?></p>
        <a href="index.php" class="btn btn-danger btn-home">Retour à la page d'accueil</a>
    </div>
</div>

<!-- Bootstrap JS pour les éléments interactifs (si nécessaire) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
