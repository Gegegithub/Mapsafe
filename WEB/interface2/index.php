<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Page de connexion</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>
  <form method="POST" action="authentification.php">
    <h1>MAPSAFE</h1>
    <?php
    // Vérifie s'il y a un message de succès dans l'URL
    if (isset($_GET['success']) && $_GET['success'] == 1) {
        echo "<p class='success'>Votre compte a été créé avec succès !</p>";
    }

    // Vérifie s'il y a une erreur dans l'URL
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error === "password") {
            echo "<p class='error'>Mot de passe incorrect. Veuillez réessayer.</p>";
        } elseif ($error === "user_not_found") {
            echo "<p class='error'>Utilisateur non trouvé. Veuillez vérifier votre adresse email.</p>";
        }
    }
    ?>
    <p class="connexion">Connexion :</p>
    <div class="inputs">
      <input type="email" id="email" name="email" placeholder="Email" required>
      <input type="password" id="password" name="password" placeholder="Mot de passe" required>
    </div>
    <div align="center">
      <button type="submit">Se connecter</button>
    </div>
    <div align="center">
      <p class="inscription">Je n'ai pas de compte. Je m'en <a href="inscription.php" class="creer">crée</a> un.</p>
    </div>
    <div align="center">
        <button type="button" onclick="window.location.href='map.html'">Se connecter en tant qu'invité</button>
    </div>
  </form>
</body>
</html>

