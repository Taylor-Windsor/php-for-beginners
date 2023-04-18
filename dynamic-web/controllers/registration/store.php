<?php

use Core\Validator;
use Core\App;
use Core\Database;

$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];

//validate form inputs

if(!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address';
}

if(!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a valid password';
}


if(!empty($errors)){
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}



//check if account exists

$db = App::resolve(Database::class);

$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email'=> $email
]) ->find();

//if yes, redirect to login page
if($user){
    header('location:/');
    exit();
} else {
//if no, create account, login, and redirect
    $db->query('INSERT INTO users (Id, email, name,password) VALUES (:Id, :email,:name,:password)',[
        'Id' => rand(),
        'email' => $email,
        'name' => explode('@',$email)[0],
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]
);

//mark user has logged in

$_SESSION['user'] = [
    'email' => $email
];

header('location: /');
exit();
}



