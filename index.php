<?php
$jsonString = file_get_contents(__DIR__ . '/text.json');
$data = json_decode($jsonString, true);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Домашнее задание к лекции 2.1</title>
    <meta charset="UTF-8">
    <style>
table {
    width: 650px; 
    background: white; 
    color: white; 
    border-spacing: 1px; 
   }
td, th {
    background: blue;
    padding: 5px; 
   }
</style>
</head>

<body>
    <h1>Телефонная книжка</h1>
        <table>
            <thead>
            <tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Адрес</th>
                <th>Телефон</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $item) : ?>
                <tr>
                    <td> <?php echo $item['firstName']; ?></td>
                    <td> <?php echo $item['lastName']; ?></td>
                    <td> <?php echo $item['address'];  ?></td>
                    <td> <?php echo $item['phoneNumber']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</body>
</html>