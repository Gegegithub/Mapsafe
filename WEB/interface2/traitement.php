<?php
// Connexion à la base de données
$serveur = "localhost"; // Adresse du serveur MySQL
$utilisateur = "root"; // Nom d'utilisateur MySQL
$mot_de_passe_bd = ""; // Mot de passe MySQL
$base_de_donnees = "bd_accident"; // Nom de la base de données

// Vérification si le formulaire a été soumis
if(isset($_POST['ok']))  {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $genre = $_POST['genre'];
    $age = $_POST['age'];
    $naissance = $_POST['date_de_Naissance'];
    $email = $_POST['email'];
    $telephone = $_POST['numero_de_telephone'];
    $mdp = $_POST['password'];
    $confirme_mdp = $_POST['password2'];

    // Cryptage du mot de passe
    $mdp_hash = password_hash($mdp, PASSWORD_DEFAULT);
    $confirme_mdp = password_hash($confirme_mdp, PASSWORD_DEFAULT);


    //Connexion
    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe_bd, $base_de_donnees); 

    // Vérification de la connexion
    if ($connexion->connect_error) {
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }

    // Requête d'insertion dans la table utilisateur
    $sql = "INSERT INTO user (Nom, Prenom, Genre, Age, Naissance, Email, Telephone, mdp, confirme_mdp) 
            VALUES ('$nom', '$prenom', '$genre', '$age', '$naissance', '$email', '$telephone', '$mdp_hash', '$confirme_mdp')";

    // Exécution de la requête
    if ($connexion->query($sql) === TRUE) {
        // Rediriger vers la page de connexion avec un message de succès
        header("Location: index.php?success=1");
        exit();
    } else {
        echo "Erreur lors de l'enregistrement : " . $connexion->error;
    }

    // Fermeture de la connexion
    $connexion->close();
}
?>
