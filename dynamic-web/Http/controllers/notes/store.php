<?php

use Core\Database;
use Core\Validator;
use Core\App;

$db = App::resolve(Database::class);
$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required';
}

if (!empty($errors)) {
    view("notes/create.view.php", [
        'heading' => 'Create Note',
        "errors" => $errors
    ]);
}

$db->query('INSERT INTO notes(Id,body, user_id) VALUES(:Id,:body,:user_id)', [
    'Id' => rand(),
    'body' => $_POST['body'],
    'user_id' => 1
]);

header('location: /notes');
die();
