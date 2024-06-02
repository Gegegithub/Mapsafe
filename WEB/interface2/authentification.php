<?php
// Vérification si le formulaire a été soumis
if(isset($_POST['email']) && isset($_POST['password']))  {
    // Récupération des données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connexion à la base de données
    $serveur = "localhost"; // Adresse du serveur MySQL
    $utilisateur = "root"; // Nom d'utilisateur MySQL
    $mot_de_passe_bd = ""; // Mot de passe MySQL
    $base_de_donnees = "bd_accident"; // Nom de la base de données

    //Connexion
    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe_bd, $base_de_donnees); 

    // Vérification de la connexion
    if ($connexion->connect_error) {
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }

    // Requête de recherche de l'utilisateur dans la base de données
    $sql = "SELECT * FROM user WHERE Email='$email'";
    $result = $connexion->query($sql);

    if ($result->num_rows > 0) {
        // Utilisateur trouvé, vérification du mot de passe
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["mdp"])) {
            // Mot de passe correct, rediriger vers une page de succès
            header("Location: map.html");
            exit();
        } else {
            // Mot de passe incorrect, rediriger vers la page de connexion avec un message d'erreur
            header("Location: index.php?error=password");
            exit();
        }
    } else {
        // Utilisateur non trouvé, rediriger vers la page de connexion avec un message d'erreur
        header("Location: index.php?error=user_not_found");
        exit();
    }

    // Fermeture de la connexion
    $connexion->close();
}
?>