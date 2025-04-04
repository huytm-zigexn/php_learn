<?php

if (is_user_logged_in()) {
    redirect_to('index.php');
}

$errors = [];
$inputs = [];
echo 1;

if (is_post_request()) {

    $fields = [
        'username' => 'string | required | alphanumeric | between: 3, 25 | unique: users, username',
        'email' => 'email | required | email | unique: users, email',
        'password' => 'string | required | secure',
        'password2' => 'string | required | same: password',
        'agree' => 'string | required'
    ];
echo 2;


    // custom messages
    $messages = [
        'password2' => [
            'required' => 'Please enter the password again',
            'same' => 'The password does not match'
        ],
        'agree' => [
            'required' => 'You need to agree to the term of services to register'
        ]
    ];

    [$inputs, $errors] = filter($_POST, $fields, $messages);

echo 3;


    if ($errors) {
        redirect_with('register.php', [
            'inputs' => $inputs,
            'errors' => $errors
        ]);
    }
echo 4;


    if (register_user($inputs['email'], $inputs['username'], $inputs['password'])) {
        redirect_with_message(
            'login.php',
            'Your account has been created successfully. Please login here.'
        );

    }
echo 5;


} else if (is_get_request()) {
    [$inputs, $errors] = session_flash('inputs', 'errors');
}