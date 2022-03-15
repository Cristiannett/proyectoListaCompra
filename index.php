<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-top">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Styles/bulma.min.css">
    <div class="cabecera">
    <title>ListaDeCompra</title>
    </div>

</head>

<body>
    <!-- Barra de Navegacion -->
    <nav class="navbar is-fixed-top">
        <div class="nacbar-brand">
            <a class="navbar-item">
                <img src="data:image/png;base64,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" width="150" height="28">
            </a>
        </div>
        <div class="navbar-menu">
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-success">
                            <strong>Sign In</strong>
                        </a>
                        <a class="button-is-light">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Principal -->

    <section class="section" id="seccionPrincipal">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <?php include("view/userDetails.php"); ?>
                </div>
                <div class="column is-three-quarters"><?php include_once("view/shoppingList.php");?></div>
            </div>
        </div>
    </section>

</body>

</html>