<!DOCTYPE html>
<html>
    <head>
    <title>Inscription utilisateur </title>
    <meta charset='utf-8'>
    <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Bienvenue sur mon site internet</h1>
        <form name="inscription" method="post" action="send.php">
            <div class="bloc">
                <span id="a">  Entrer votre zeufho :</span><input type="text" name="nom" required /><br>
                <span id="b">Enter votre Prénom :</span><input type="text" name="prenom" required /><br>
                <span id="c">Enter votre Email :</span><input type="text" name="email" required  /><br>
                <span id="d">Enter votre Mot de passe :</span><input type="password" name="mdp" required /><br>
                <input type="submit" name="valider" value="S'inscrire" id="valider" />
            </div>
        </form>
    </body>
</html>