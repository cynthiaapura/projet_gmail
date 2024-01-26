<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmail</title>

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <header class= "headband">

        <img onclick="window.location.href='./index.html'"
        src= "./asset/gmail_logo_icon_169102.svg" alt= "Logo gmail">

        <nav class="navbar">
            <button id="button_pro" class="button" onclick="window.location.href='./index.html'">POUR LES PROS</button>
            <button id="connexion" class="button" onclick="window.location.href='./index.html'">CONNEXION</button>
            <button id="create_button" class="button">CRÉER UN COMPTE</button>
        </nav>
    </header>
    <main>
        <?php
            require_once __DIR__ . "/controller/controller_base.class.php";
            ControllerBase::event();
        ?>
        <section class="formInscription">
            <h2>
                Bienvenue dans votre espace null
            </h2>

            <div class="inscription-form" id="formInscription" role="form" aria-labelledby="formInscription">
                <fieldset>
                    <legend>
                        Créer un compte
                    </legend>
                    <form action="index.php" method="post">

                    <label for="user-name">Nom *</label>
                    <input type="text" id="user-name" name="nom"
                    placeholder="Votre nom" aria-required="true" >

                    <label for="user-lastname">Prénom *</label>
                    <input type="text" id="user-lastname" name="prenom" 
                    placeholder="Votre prenom" aria-required="true" >

                    <label for="email">Mail *</label>
                    <input type="email" id="email" name="email" 
                    placeholder="Votre mail" aria-required="true" >

                    <label for="password">Choisir votre mot de passe *</label>
                    <input type="password" id="password" name="password" 
                    placeholder="Votre mot de passe" aria-required="true" >
                
                    
                    <button class="button_account" type="submit" value="Envoyer" aria-label="Valider votre compte">
                        Valider votre compte
                    </button>

                    </form>
                
                </fieldset>
            </div>
        </section>
    </main>
    <footer>
        <p>
            &copy; - MIT - <time datetime="2024-01-07">2024</time>
        </p>
    </footer>
</body>
</html>