<?php

    $db = new mysqli('localhost','studente','studente','studente');

    $query = $db->prepare("SELECT ID, nome FROM province ORDER BY nome ASC");
    $query->execute();

    $risposta = $query->get_result();

    $province = $risposta->fetch_all(MYSQLI_ASSOC);

    $db->close();

?>

<!DOCTYPE html>
<html lang="it-IT">
    <head>
        <title>Province</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <h1>Alcune province italiane</h1>

        <ul>
            <?php

                foreach($province as $provincia) {
                    echo "<li><a href=\"provincia.php?ID={$provincia['ID']}\">{$provincia['nome']}</a></li>";
                }

            ?>
        </ul>
    </body>

</html>