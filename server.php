<?php

$disk_db = json_decode(file_get_contents('database.json'), true);

// OPPURE:
// $disk_db = file_get_contents('database.json');

// var_dump($disk_db);

header('Content-Type: application/json');

echo json_encode($disk_db);
