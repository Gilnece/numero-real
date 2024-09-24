<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analise do numero</title>
</head>
<body>
    <main>
        <h1>Analisador de numero real</h1>
        <?php
            $num = $_POST["n"] ?? 0;

            echo "<p>Analisando o numero <strong>" . number_format($num, 3, ",", ".").  
            "</strong></p>";

            $int = (int) $num;
            $fra = $num - $int; //o numerto menos a parte inteira

            echo "<ul><li>A parte inteira é: <strong>". number_format($num, 0,  
            ",", ".")."</strong>;</li></ul>";
            echo "<ul><li>A parte fracionada é: <strong>". number_format($fra, 3,  
            ",", ".")."</strong> </li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button> 
    </main>
</body>
</html>