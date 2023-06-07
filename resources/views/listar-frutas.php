<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Frutas</h1>
    <ul>
        <?php foreach ($frutas as $fruta): ?>
            <li> <?= $fruta; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>