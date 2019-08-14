<?php
require __DIR__ . '/functions.php';
$lines = guestBook();
$lines[] = $_POST['comment'];
file_put_contents (__DIR__ . '/data.txt', implode("\n", $lines));
header('Location: /index.php');
