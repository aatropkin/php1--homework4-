<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашняя работа 4</title>
</head>
<body>

<?php
require(__DIR__ . '/functions.php'); //подключ. функции
$lines = guestbook();
foreach ($lines as $comment)
{
    echo $comment; ?>
<hr>
<?php
}
?>

<!-- Форма для добавления комментария -->
<form action="/addcomment.php" method="post">
        <legend>Добавить комментарий</legend>
        <textarea name="comment"></textarea>
        <button type="submit">Добавить комментарий</button>
</form>

</body>
</html>