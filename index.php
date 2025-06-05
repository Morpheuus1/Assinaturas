<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Assinaturas</title>
</head>
<body>
<h1>Assinaturas</h1>
<div id="signature-list">
    <?php
    $pasta = "image/";
    $arquivos = scandir($pasta);

    foreach ($arquivos as $arquivo) {
        if (preg_match("/\.(jpg|jpeg|png|gif)$/i", $arquivo)) {
            echo "<img src='$pasta$arquivo' alt='$arquivo'>";
        }
    }
    ?>
</div>
</body>
</html>