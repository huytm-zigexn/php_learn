<?php
    $selected_toppings = filter_input(
        INPUT_POST,
        'pizza_toppings',
        FILTER_DEFAULT,
        FILTER_REQUIRE_ARRAY
    ) ?? [];

    if($selected_toppings)
    {
        $selected_toppings = array_map('htmlspecialchars', $selected_toppings);
        $total = 0;
        $toppings = array_keys($pizza_toppings);
        $_SESSION['selected_toppings'] = [];
        foreach ($selected_toppings as $topping)
        {
            if(in_array($topping, $toppings))
            {
                $_SESSION['selected_toppings'][] = $topping;
                $total += $pizza_toppings[$topping];
            }
        }
    } else {
        $errors['topping'] = "You didn't select any pizza toppings.";
    }


    $crust = filter_input(
        INPUT_POST,
        'crust',
        FILTER_DEFAULT
    );
    if($crust && array_key_exists($crust, $crusts)) {
        $crust = htmlspecialchars($crust);
        $_SESSION['crust'][] = $crust;
    } else {
        $errors['crust'] = 'Please select pizza crust';
    }

    $checkout_method = filter_input(
        INPUT_POST,
        'checkout_methods',
        FILTER_DEFAULT
    );
    if($checkout_method && array_key_exists($checkout_method, $checkout_methods))
    {
        $checkout_method = htmlspecialchars($checkout_method);
        $_SESSION['method'][] = $checkout_method;
    } else {
        $errors['method'] = "Please choose a checkout method";
    }
?>

<?php if ($_SESSION['selected_toppings'] && $checkout_method && $crust) : ?>
    
    <h1 style="text-align: center;">Order Summary</h1>
    <ul style="margin-left: 120px;">
        <?php foreach ($_SESSION['selected_toppings'] as $topping) : ?>
            <li>
                <span><?php echo ucfirst($topping) ?></span>
                <span><?php echo '$' . $pizza_toppings[$topping] ?></span>
            </li>
        <?php endforeach ?>

        <li class="total"><span>Total</span><span><?php echo '$' . $total ?></span></li>
        <p>You chose the <?php echo $checkout_method ?> method.</p>

        <p>You chose: <?php echo ucfirst($crust) ?></p>
    </ul>
<?php elseif(!$checkout_method && !$_SESSION['selected_toppings'] && !$crust): ?>
    <p>Please choose a checkout method and select pizza toppings and crust</p>
<?php elseif(!$_SESSION['selected_toppings']) : ?>
    <p>You didn't select any pizza toppings.</p>
<?php elseif(!$crust) : ?>
    <p>You didn't select any pizza crusts.</p>
<?php else :?>
    <p>Please choose a checkout method</p>
<?php endif ?>

<menu style="text-align: center;">
    <a class="btn" href="<?php htmlentities($_SERVER['PHP_SELF']) ?>" title="Back to the form">Change Toppings</a>
</menu>