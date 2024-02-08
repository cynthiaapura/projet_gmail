<div class="inscription-form" id="formInscription" role="form" aria-labelledby="formInscription">
    <fieldset>
        <legend>
            Créer un compte
        </legend>
        <form action="<?php print $_SERVER["PHP_SELF"]; ?>" method="post">

        <label for="user-name">Nom *</label>
        <input type="text" id="user-name" name="nom"
        placeholder="Votre nom" aria-required="true">

        <label for="user-lastname">Prénom *</label>
        <input type="text" id="user-lastname" name="prenom" 
        placeholder="Votre prenom" aria-required="true">

        <label for="email">Mail *</label>
        <input type="email" id="email" name="email" 
        placeholder="Votre mail" aria-required="true">

        <label for="password">Choisir votre mot de passe *</label>
        <input type="password" id="password" name="password" 
        placeholder="Votre mot de passe" aria-required="true">
                
                    
        <button class="button_account" type="submit" value="Envoyer" aria-label="Valider votre compte">
            Valider votre compte
        </button>

        </form>
                
    </fieldset>
</div>