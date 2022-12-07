<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescrição de exercício</title>
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="pesquisa.js"></script>
</head>

<body>
    <main>
        <form action="livesearch.php/<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <fieldset>
                <input class="livesearch" id="livesearch" placeholder="Digite um exercício...">
                <select class="showResult"></select>
            </fieldset>
        </form>
    </main>
</body>
</html>