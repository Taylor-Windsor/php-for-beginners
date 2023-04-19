<?php
use Core\Database;
use Core\Validator;

$db = Core\App::resolve(Database::class);

$currentUserId = 1;
$errors = [];

$note = $db->query("select * from notes where Id = :id", [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);


if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required';
}

//if no validation errors, update the record in the notes database

if (count($errors)) {
    return view('notes/edit.view.php', [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query('UPDATE notes set body =:body WHERE Id=:id',[
    'body'=>$_POST['body'],
    'id' => $_POST['id']
]);

header('location: /notes');
die();