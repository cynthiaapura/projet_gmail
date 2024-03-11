<!-- insert session_start -->
<?php

// Définir les variables de session
session_start();

// Inclure le fichier de configuration de la base de données
require_once('config.php');

// Fonction pour se connecter
function seConnecter($email, $motDePasse) {
  // Connexion à la base de données
  $connexion = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $utilisateur, $motDePasse);

  // Préparer la requête SQL
  $requete = $connexion->prepare("SELECT * FROM utilisateurs WHERE email = ?");

  // Lier le paramètre email
  $requete->bindParam(1, $email);

  // Exécuter la requête
  $requete->execute();

  // Si un utilisateur est trouvé
  if ($utilisateur = $requete->fetch()) {
    // Vérifier le mot de passe
    if (password_verify($motDePasse, $utilisateur['password'])) {
      // Stocker l'ID de l'utilisateur dans la session
      $_SESSION['id'] = $utilisateur['id'];

      // Rediriger vers la page d'accueil
      header('Location: index.php');
      exit();
    } else {
      // Mot de passe incorrect
      return "Mot de passe incorrect";
    }
  } else {
    // Email non trouvé
    return "Email non trouvé";
  }

  // Fermer la connexion
  $connexion = null;
}

// Traitement du formulaire de connexion
if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $motDePasse = $_POST['password'];

  $message = seConnecter($email, $motDePasse);
}

<div class="connection-form" id="connection" role="form" aria-labelledby="connection">
    <fieldset>

        <legend>
            Connectez-vous à votre compte
        </legend>

        <form action="<?php print $_SERVER["PHP_SELF"]; ?>"  method="post">

        <label for="email-co">Mail ou login *</label>
        <input type="email" id="email-co" name="email-co" 
        placeholder="Votre mail" aria-required="true" >

        <label for="password-co">Mot de passe *</label>
        <input type="password" id="password-co" name="password-co" 
        placeholder="Votre mot de passe" aria-required="true" >
                
        <button class="button_account" type="submit" value="Envoyer" aria-label="Connexion à votre compte">
            Connexion à votre compte
        </button>

        </form>
                
    </fieldset>
</div>