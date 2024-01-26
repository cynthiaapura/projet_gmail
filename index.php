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

        <img onclick="window.location.href='#'" 
        src= "./asset/gmail_logo_icon_169102.svg" alt= "Logo gmail">

        <nav class="navbar">
            <button id="button_pro" class="button" onclick="window.location.href='#'">POUR LES PROS</button>
            <button id="connexion" class="button" onclick="window.location.href='#formSection'">CONNEXION</button>
            <button id="create_button" class="button" onclick="window.location.href='./form_inscription.html'">CRÉER UN COMPTE</button>
        </nav>
    </header>

    <main>
        <section class="home">

            <h2>
                Retrouvez la fluidité et la simplicité de Gmail sur tous vos appareils
                
                <button class="account-creation" onclick="window.location.href='./form_inscription.html'">
                    CRÉER UN COMPTE
                </button>
            </h2>


        </section>

        <div id="scroll-btn" onclick="window.location.href='#formSection'"> 
            <img src="./asset/arrow.png" alt="fleche vers le bas">
        </div>

        <section class="form" id="formSection">
            <h2>
                Une boite de réception entièrement repensée
            </h2>
            <p>
                Avec les nouveaux onglets personnalisables, repérez immédiatemment les nouveaux messages et choisissez ceux que vous souhaitez lire en priorité.
            </p>


            <div class="connection-form" id="connection" role="form" aria-labelledby="connection">
                <fieldset>
                    <legend>
                        Connectez-vous à votre compte
                    </legend>
                    <form action="#" method="post">

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

        </section>
    </main>

    <footer>
        <p>
            &copy; - MIT - <time datetime="2024-01-07">2024</time>
        </p>
    </footer>
</body>
</html>