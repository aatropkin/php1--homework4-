<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галлерея</title>
</head>
<body>
<?php

$arrayimg = scandir(__DIR__ . '/img');
$arrayimg = array_diff($arrayimg, ['.', '..']);
foreach ($arrayimg as $name)
{
    ?>
    <img src="/img/<?php echo $name;?>" height="300" width="350">
    <?php
}
?>
<!-- форма для добавления изображения -->
<form action="/data.php" method="post" enctype="multipart/form-data">
    <input type="file" name="myimage">
    <button type="submit">Загрузить</button>
</form>

</body>
</html>