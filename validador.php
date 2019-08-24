<?php
session_start(); 
?>

<html>   
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cupom Promocional</title>
    <link rel="icon" href="pics/lab-favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
 <nav class="navbar navbar-dark bg-primary">
    <form action="dashboard.php" method="POST">
      <button type="submit" class="btn btn-warning" type="button">Dashboard</button>
    </form>
 </nav>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Validação</h3>
                    <h3 class="title has-text-grey"><a href="https://www.dermage.com.br/" target="_blank">Dermage</a></h3>

                    <?php
                    if(isset($_SESSION['cupom_validado'])):
                    ?>
                    <div class="notification is-success">
                      <p>Cupom validado com sucesso!</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['cupom_validado']);
                    ?>

                    <?php
                    if(isset($_SESSION['cdcupom'])):
                    ?>
                    <div class="notification is-danger">
                      <p>Este cupom já foi ultilizado.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['cdcupom']);
                    ?>

                    <div class="box">
                        <form action="validar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus required>
                                </div>
                            <div class="field">
                                <div class="control">
                                    <input name="CPF" type="text" class="input is-large" placeholder="CPF" autofocus required>
                                </div>
                            <div class="field">
                                <div class="control">
                                    <input name="cdcupom" type="text" class="input is-large" placeholder="Código do Cupom" autofocus required>
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Validar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>