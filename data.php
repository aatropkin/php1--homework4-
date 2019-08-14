<?php

if (!empty ($_FILES)){
    if(isset($_FILES['myimage'])){
        if( 0 == $_FILES['myimage']['error']){
            if('image/jpeg' == $_FILES['myimage']['type'] || 'image/png' == $_FILES['myimage']['type']){//проверка типа загружаемого файла
                move_uploaded_file(
                    $_FILES['myimage']['tmp_name'],
                    __DIR__ . '/img/' . $_FILES['myimage']['name']
                );
                echo 'Ваше изображение удачно загружено загружено!';
            } else {
                echo 'Ошибка! Преверьте тип загружаемого файла. Можно загружать изображения только JPG или PNG.';
            }
        }
    } else {
    echo 'Вы не выбрали файл!';
    }
} else {
    echo 'Вы не выбрали файл!';
}
?>

