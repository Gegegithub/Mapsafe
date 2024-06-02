<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription.css">
    <title>Page d'inscription</title>
</head>
<body>
    <form method="POST" action="traitement.php" id="inscriptionForm">
        <h1><span>Créer un Compte</span> MAPSAFE</h1>
        <div class="inputs">
            <input type="text" id="nom" name="nom" placeholder="Nom" required>
            <input type="text" id="prenom" name="prenom" placeholder="Prénom" required>
            <input type="text" id="genre" name="genre" placeholder="Genre" required>
            <input type="text" id="age" name="age" placeholder="Age" required>
            <input type="text" id="date_de_Naissance" name="date_de_Naissance" placeholder="Date de Naissance" required>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="text" id="numero_de_telephone" name="numero_de_telephone" placeholder="Numéro de téléphone" required>
            <input type="password" id="password1" name="password" placeholder="Mot de Passe" required>
            <input type="password" id="password2" name="password2" placeholder="Confirmer le Mot de Passe" required>
        </div>
        <div align="center">
            <button type="submit" name="ok">Créer le Compte</button>
        </div>
    </form>
</body>
</html>
