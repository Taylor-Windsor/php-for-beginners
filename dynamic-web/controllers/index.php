<?php
$_SESSION['name']= 'Taylor';

view("index.view.php", [
    'heading' => 'Home',
]);