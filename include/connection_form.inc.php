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