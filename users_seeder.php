<?php  

require_once 'adlister_config.php';
require_once 'db_connect.php';

$query = "TRUNCATE users";

$dbc->exec($query);

$users = [
            [
                'name' => 'Chris Davila',
                'email' => 'cdavila@email.com',
                'password' => 'eefgdgdggdg'
            ],
            [
                'name' => 'TJ Becker',
                'email' => 'tjb@email.com',
                'password' => 'eoijijljij'
            ],
            [
                'name' => 'Rob Hernandez',
                'email' => 'rbhern@email.com',
                'password' => 'dqdfdgwhbdfhbwfhb'
            ],
            [
                'name' => 'Ashley Callahan',
                'email' => 'ashcal@email.com',
                'password' => 'fdklfdklfjdl'
            ],
            [
                'name' => 'Tyler Warren',
                'email' => 'twarren@email.com',
                'password' => 'lkdlkljkldfkdjf'
            ],
            [
                'name' => 'Harley Quinn',
                'email' => 'harquinn@email.com',
                'password' => 'iewubjkdajkndiuh'
            ],
            [
                'name' => 'Hopper Eleven',
                'email' => 'strangerthings@email.com',
                'password' => 'eijridjgkldgj'
            ],
        ];

$stmt = $dbc->prepare('INSERT INTO users(name, email, password) VALUES (:name, :email, :password)');

foreach ($users as $user) {
    $stmt->bindValue(':name', $user['name'], PDO:: PARAM_STR);
    $stmt->bindValue(':email', $user['email'], PDO:: PARAM_STR);
    $stmt->bindValue(':password', $user['password'], PDO:: PARAM_STR);

$stmt->execute();

echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;

}        
?>