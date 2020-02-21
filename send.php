<!DOCTYPE html>
<html>
    <head>
        <title>BDD</title>
        <meta charset='utf-8'>
    </head>
    <body>
        <h1>BDD</h1>

        <?php

            $servname = "localhost";
            $dbname = "cours_php";
            $user = "root";
            $pass = "";
            

            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $email = $_POST['email'];
                $mdp = $_POST['mdp'];
                

                $donnees = [
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'email' => $email,
                    'mdp' => $mdp,

                ];

                if (isset($email))
                {
                    $email = htmlspecialchars($email);
                    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_POST['email']))
                        {
                            $sth = $dbco->prepare(
                            "INSERT INTO utilisateurs (nom, prenom, email, mdp) VALUES (:nom, :prenom, :email, :mdp)"
                            );
    
                            $sth->execute($donnees);
                            echo "Vous avez bien rentrer le nom ".$nom." le prénom ".$prenom." l'email " .$email;
                        }
                    else
                        {
                            $email = "Adresse email invalide, votre inscription n'a pas été prise en compte => cheh";
                            echo $email;
                        }
                }
                else
                {
                    $email = "Pas d'email détecté";
                    echo $email;
                }
    
            }

              
            
              catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }

            $dbco = NULL;

        ?>

    </body>
</html>