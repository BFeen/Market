<?
    if( $db = mysqli_connect('localhost', 'root', '', '02112018_3project')) {
        mysqli_set_charset($db, 'utf8');
    } else {
        echo 'Не удалось подключиться к базе данных';
        die();
    }
