<?php
function guestbook(){
    return file(__DIR__ . '/data.txt', FILE_IGNORE_NEW_LINES); //читает текст. файл гостевой книги и возвращает массив записей гостевой книги
}