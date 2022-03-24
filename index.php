<?php
session_start();
?>
<!DOCTYPE html>
<html lang= "pt-br">
    <head>
        <meta charset="utf-8">
        <title> CRUD - Fluxo de Aeronaves </title>
    </head>

    <body>
        <h1>Adicionar Aeronaves</h1>

            <?php
                if(isset ($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset ($_SESSION['msg']);
                }
            ?>
            
            <form method="POST" action="processa.php">
                <label>Modelo Da Aeronave:</label>
                <input type="text" name="modelo" placeholder="Digite o Modelo da Aeronave"> <br><br>

                <label>Compania Da Aeronave: </label>
                <input type="text" name="compania" placeholder="Digite a Compania da Aeronave"> <br><br>

                <input type="submit" value="adicionar">
            </form>

    </body>
</html>