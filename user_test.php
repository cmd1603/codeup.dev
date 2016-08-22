<?php

require_once 'User.php';
//---add new user---//
$testUser = new User();
$testUser->name = 'test2';
$testUser->email = 'test2@email.com';
$testUser->password = password_hash('test2password', PASSWORD_DEFAULT);
$testUser->save();

// $foundUser = User::find(7);
// var_dump($foundUser);

$allUsers = User::all();
var_dump($allUsers);

// $testUser->name = 'Cheesburger Eddie';
// $testUser->save();
// var_dump($testUser);

 $deleteUser = User::delete(9);

?>