<?php 
// ПОДКЛЮЧЕНИЕ ФАЙЛА НЕ РАБОТАЕТ
// require_once($_SERVER['DOCUMENT_ROOT'] . '/config/config.php'); 

    $db = mysqli_connect('localhost', 'root', '', '02112018_3project');
    mysqli_set_charset($db, 'utf8');
    if (!$db) {
        echo 'Не удалось подключиться к базе данных.';
        die();
    }


    $sql = "SELECT * FROM products WHERE active = 1";
    $result = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);

?>