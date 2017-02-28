<?php
$filename = "files/users.json";
$resours = file($filename);

if (!$resours) {    echo 'Файл не найден!!!';}

/*echo '<pre>';
echo var_dump($resours);
echo '<pre>';*/

if ($resours) {
    
    $stringRequest = '';
    
    for ($i = 0; $i < count($resours); $i++) {
    
        $stringRequest = $stringRequest.$resours[$i];
    
    }
}

/*echo '<pre>';
echo var_dump($stringRequest);
echo '<pre>';*/

$jsonData = json_decode($stringRequest, TRUE);

/*echo '<pre>';
echo var_dump($jsonData);
echo '</pre>';*/

echo '<table align=center  CELLPADDING=5px>';
foreach ($jsonData as $value => $key) {
   echo '<tr><td>Данные о пользователе:</td><td></td></tr>';
    echo '<tr>';
    foreach ($key as $key1 => $key2) {
         
        echo '<tr><td>'.$key1.'</td><td>'.$key2.'</td><tr>';
    }
    echo '</tr>';
    echo '<tr>';
    echo '</tr>';
    
}

echo '</table>';
