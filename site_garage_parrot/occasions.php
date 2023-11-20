<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V.Parrot-Garage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href=".\sytle-garage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <?php include '.\structure\header.php' ?>
    </header>
    <!-- Main -->
    <main class="container">
        <!-- Vehicules d'occasions -->
        <section class="m-2">
            <h2>Vehicules d'occasions disponibles</h2>
            <?php include '.\structure\main\index_occasions.php' ?>
        </section>
        <section class="m-2">
        <?php include '.\structure\main\horaires_garage.php'?>
        </section>
    </main>
    <!-- FOOTER -->
    <footer class="container-fluid p-2">
        <?php include '.\structure\footer.php' ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src=".\structure\main\filtre-occasions.js"></script>
</body>
</html>