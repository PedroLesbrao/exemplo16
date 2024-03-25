<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
    <h1>CT Desenvolvimento de Sistemas Back-End</h1>
    <div id="container">
        <?php
            echo "Passagem de parâmetro vai URL<br><br>";
            /*http://localhost/BACKEND/exemplo16.php?iNum1=1&iNum2=2&sNome=Marco&sMensa=oi Galera show!!!&fSalario=5528,30*/
            $iNum1 = $_GET["iNum1"];
            $iNum2 = $_GET["iNum2"];
            $sNome = $_GET["sNome"];
            $sMensa = $_GET["sMensa"];
            $fSalario = $_GET["fSalario"];

            echo "Número 1 é igual a $iNum1<br>";
            echo "Número 1 é igual a $iNum2<br>";
            echo "Nome é igual a $sNome<br>";
            echo "Mensagem é igual a $sMensa<br>";
            echo "Salário é igual a $fSalario<br>";
        ?>
        </div>
    </body>
</html>