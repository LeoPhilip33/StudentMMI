<!DOCTYPE html>
<html>
    <head>
        <title>Inscription/Connection</title>
        <meta charset='utf-8'>
        <link href="style.css" rel="stylesheet">
    </head>
    <body> 
        <div class="register">
            <div class="gauche">
                <h1> text gauche </h1>
            </div>
            <div class="droit">
                <h2> Inscrivez vous gratuitement et devenez membre </h2>
                <h3> Créer vous un compte. C'est gratuit ! </h3>
                <div class="formulaire">
                    <div class="alignement">
                        <div class="nom"><input type="text" name="Nom" maxlength="30"  placeholder="Nom" required> </div>
                        <div><input type="text" name="Prenom" maxlength="25" placeholder="Prénom" required> </div>
                    </div>
                    <div><input type="text" name="Email" minlength="4" maxlength="25" placeholder="Email" required><div>
                    <input type="text" name="Mdp" minlength="4" maxlength="25" placeholder="Mot de passe" required><div>
                    <input type="text" name="confMdp" minlength="4" maxlength="25" placeholder="Confirmation" required><div>
                    <input id="button" type="submit" value="Enregistrez vous maintenant !">
                </div>
            </div>
        </div>
    </body>
</html>