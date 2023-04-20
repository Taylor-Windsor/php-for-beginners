<?php

use Core\Authenticator;
use Http\Forms\LoginForm;




$form = LoginForm::validate($attriutes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);


$signedIn = (new Authenticator())->attempt(
    $attriutes['email'], 
    $attriutes['password']
);
if (!$signedIn) {
    $form->error(
        'email', 
        'No matching account found for that email address and password.'
        )
    ->throw();
}


return redirect('/');


