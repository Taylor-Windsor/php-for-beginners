<?php

use Core\Database;

$db = Core\App::resolve(Database::class);

$currentUserId = 1;

$note = $db->query("select * from notes where Id = :id", [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);
