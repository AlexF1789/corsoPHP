<!DOCTYPE html>
<html lang="it-IT">
    <head>
        <title>Esercizio 4</title>
        <meta charset="UTF-8">
    </head>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>

    <body>
        <section>
            <article>
                <h1>Portale web</h1>
                <p>Inserendo il tuo nome utente e la tua password potrai autenticarti e vedere i tuoi dati</p>
            </article>
        </section>

        <section>
            <form method="POST" action="login.php">
                <input type="text" name="nome_utente" placeholder="Nome utente" required><br><br>
                <input type="password" name="password" placeholder="Password" required><br><br>
                <input type="submit" value="Accedi">
            </form>
        </section>
    </body>

    <script type="text/javascript">
        
        function notificaErrore() {
            Swal.fire({
                icon: 'error',
                title: 'Errore!',
                text: 'Le credenziali inserite non sono valide, riprova.',
                showConfirmButton: true,
                showCancelButton: false,
                showCloseButton: false
            });
        }

    </script>

    <?php

        if($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['errore'])) {
            echo '<script type="text/javascript">notificaErrore()</script>';
        }

    ?>
</html>