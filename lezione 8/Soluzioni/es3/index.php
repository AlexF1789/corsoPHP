<!DOCTYPE html>
<html lang="it-IT">
    <head>
        <title>Utenti</title>
        <meta charset="UTF-8">
    </head>

    <body>

        <h1>Utenti</h1>

        <table>
            <tr>
                <th>ID</th>
                <th>nome</th>
                <th>cognome</th>
                <th>mail</th>
            </tr>

            <?php

                require 'crypt.php';

                $db = new mysqli('localhost','studente','studente','studente');
                $query = $db->prepare("SELECT * FROM utenti");
                $query->execute();

                $risposta = $query->get_result();

                while($riga = $risposta->fetch_assoc()) {
                    $decrypt = [
                        'nome' => decripta_stringa($riga['nome']),
                        'cognome' => decripta_stringa($riga['cognome']),
                        'mail' => decripta_stringa($riga['mail'])
                    ];

                    echo "<tr>";
                    echo "<td>{$riga['ID']}</td>";
                    echo "<td>{$decrypt['nome']}</td>";
                    echo "<td>{$decrypt['cognome']}</td>";
                    echo "<td>{$decrypt['mail']}</td>";
                    echo "</tr>";
                }

            ?>

        </table>

        <h3>Form di registrazione</h3>

        <form method="POST" action="registra.php">
            <input type="text" placeholder="Nome" name="nome" required><br><br>
            <input type="text" placeholder="Cognome" name="cognome" required><br><br>
            <input type="text" placeholder="Mail" name="mail" required><br><br>
            <input type="submit" value="Registrati">
        </form>

    </body>

    <style>
        body {
            text-align: center;
        }

        table {
            text-align: center;
            margin: auto;
        }

        table, tr, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 5px 25px 5px 25px;
        }
    </style>

</html>