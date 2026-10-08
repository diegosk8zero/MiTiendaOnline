<?php
$nombre = $_GET['nombre'];
$email = $_GET['email'];
$mensaje = $_GET['mensaje'];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>TecnoShop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">
    <script src="functions.js"></script>

</head>

<body>

    <header>
        <h1>TecnoShop</h1>
        <div id="clock">00:00:00</div>
        <script>showTime();</script>

        <nav>
            <a href="index.html">Home</a> |
            <a href="about.html">Contacto</a> <br>

        </nav>
    </header>

    <main>
        <section>
            <div class="alert alert-primary" role="alert">
                Gracias por entrar en contacto con nosotro, luego más entraremos en contacto contigo.
            </div>

            <div class="card">
                <h5 class="card-header">Mensaje de <?php echo($nombre) ?></h5>
                <div class="card-body">
                    <h5 class="card-title">Mensaje:</h5>
                    <p class="card-text"> <?php echo($mensaje) ?> </p>
                </div>
            </div>

        </section>
    </main>

    <footer>
        <p>© 2026 TecnoShop</p>
    </footer>

</body>

</html>