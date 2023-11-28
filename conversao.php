<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php
        //Cotação copiada do Google
        $cotacao = 4.87; // em 28/11/23

        //Quantos $$ você tem?
        $real = $_REQUEST['dinheiro'] ?? 0;

        //Equivalência em dólar
        $dolar = $real / $cotacao;

        // Mostrar o resultado
        // echo "Seus R/$" . number_format($real, 2, ',' , '.') . " equivalem a US/$ "  . number_format($dolar, 2, ',' , '.')  

        // Formatação de moedas com internacionalização!
        // Biblioteca inti (Internacionalization PHP)

        $padrão = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($padrão, $real, 'BRL') . " equivalem a ".numfmt_format_currency($padrão, $dolar, 'USO');
        ?>
        <button onclick = 'javascript:history.go(-1)'>Voltar</button>
    </main>

</body>
</html>