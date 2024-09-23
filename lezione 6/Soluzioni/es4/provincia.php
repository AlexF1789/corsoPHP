<?php

    if($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['ID'])) {

        $id = $_GET['ID'];

        $db = new mysqli('localhost','studente','studente','studente');

        $query = $db->prepare("SELECT * FROM `province` WHERE ID=?");
        $query->bind_param('i',$id);
        $query->execute();

        $risposta = $query->get_result();

        if($risposta->num_rows) {
            $dati = $risposta->fetch_assoc();
        } else
            header("location: /");

        $db->close();

    } else
        header("location: /");

?>

<!DOCTYPE html>
<html lang="it-IT">
    <head>
        <title>Provincia di <?= $dati['nome'] ?></title>
        <meta charset="UTF-8">
    </head>

    <body>
        <h1>Provincia di <?= $dati['nome'] ?></h1>

        <ul>
            <?php

                foreach($dati as $campo => $valore) {
                    echo "<li><b>$campo</b>: $valore</li>";
                }

            ?>
        </ul>
    </body>

</html> 