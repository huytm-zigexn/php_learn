<?php
    session_start();
    require __DIR__ . '/inc/header.php';

    require __DIR__ . '/inc/functions.php';

    $pizza_toppings = [
        'pepperoni' => 0.5,
        'mushrooms' => 1,
        'onions' => 1.5,
        'sausage' => 2.5,
        'bacon' => 1.0,
    ];

    $checkout_methods = [
        'banking' => 'Banking', 
        'cash' => 'Cash', 
        'mastercard' => 'Mastercard'
    ];

    $crusts = [
        'thin crust' => 'Thin crust',
        'crispy crust' => 'Crispy crust',
        'honey crust' => 'Honey crust'
    ];

    $errors = [];

    $request_method = strtoupper($_SERVER['REQUEST_METHOD']);

    if($request_method === 'GET') {
        require __DIR__ . '/inc/get.php';
    } elseif ($request_method === 'POST') {
        require __DIR__ . '/inc/post.php';
        if(count($errors) > 0) {
            require __DIR__ . '/inc/get.php';
        }
    }

    require __DIR__ . '/inc/footer.php';
?>