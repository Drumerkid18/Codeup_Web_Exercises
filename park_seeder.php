<?php 
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'national_parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'parks_user');
require_once('db_connect.php');

$parks = [
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => '801163.21',],
    ['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1980-06-28', 'area_in_acres' => '172924.07',],
    ['name' => 'Carlsbad Caverns', 'location' => 'New Mexico', 'date_established' => '1930-05-14, ', 'area_in_acres' => '46766.45',],
    ['name' => 'Crater Lake', 'location' => 'Oregon', 'date_established' => '1902-05-22', 'area_in_acres' => '183224.05',],
    ['name' => 'Mesa Verde', 'location' => 'Colorado', 'date_established' => '1906-June-29', 'area_in_acres' => '52121.93',],
    ['name' => 'Redwood', 'location' => 'California', 'date_established' => '1968-10-02, ', 'area_in_acres' => '112512.05',],
    ['name' => 'Yosemite', 'location' => 'California', 'date_established' => '1890-10-01, ', 'area_in_acres' => '761266.19',],
    ['name' => 'Zion', 'location' => 'Utah', 'date_established' => '1919-11-19, ', 'area_in_acres' => '146597.60',],
    ['name' => 'Yellowstone', 'location' => 'Wyoming', 'date_established' => '1872-03-01, ', 'area_in_acres' => '2219790.71',],
    ['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978-11-10, ', 'area_in_acres' => '242755.94',],
    
];

foreach ($parks as $park) {
    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', {$park['area_in_acres']})";

    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}