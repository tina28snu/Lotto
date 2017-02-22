<h2>Bienvenue au Lotto</h2>
   


<?php
    if(isset($_GET["error"])) {
        $error = $_GET["error"];
            if ($error == true) {
                print "<h3>Vous avez pas choisi 5 valeurs ou vous avez choisi le meme nombre plusieurs fois. Veuillez re-essayer</h3>";
            }
        }
    else {
        print "<h3>Veuillez choisir 5 valeurs entre 1 et 50</h3>";
    }

?>

<form action="./index.php?page=./process/traitementLotto.php" method="post">
    
    1.<input type="text" name="nr1"><br>
    2.<input type="text" name="nr2"><br>
    3.<input type="text" name="nr3"><br>
    4.<input type="text" name="nr4"><br>
    5.<input type="text" name="nr5"><br>
     <button type="submit">Envoyer</button>
    
    
</form>