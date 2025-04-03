<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <h1>Please select your pizza toppings:</h1>
    <ul>
        <?php foreach($pizza_toppings as $topping => $price): ?>
            <li>
                <div style="display: flex;">
                    <input type="checkbox" name="pizza_toppings[]" value="<?php echo $topping ?>" id="pizza_topping_<?php echo $topping ?>" <?php echo checked($topping, $_SESSION['selected_toppings'] ?? []) ?> />
                    <label for="pizza_topping_<?php echo $topping ?>"><?php echo ucfirst($topping) ?></label>
                    <span><?php echo '$' . $price ?></span>
                </div>
            </li>
        <?php endforeach ?>
    </ul>
    <h1>Please select pizza crust:</h1>
    <select name="crust" id="crust">
        <option value="">Select pizza crust</option>
        <?php foreach($crusts as $key => $value): ?>
            <li>
                <option <?php echo selected($key, $_SESSION['crust'] ?? '') ?> value="<?php echo $key ?>"><?php echo $value ?></option>
            </li>
        <?php endforeach ?>
    </select>
    <h1>Please choose checkout method:</h1>
    <ul>
        <?php foreach($checkout_methods as $key => $value): ?>
            <li>
                <input type="radio" name="checkout_methods" value="<?php echo $key ?>" <?php echo checked($key, $_SESSION['method'] ?? '') ?>>
                <label for="checkout_method_<?php echo $key ?>"><?php echo ucfirst($value) ?></label>
            </li>
        <?php endforeach ?>
    </ul>

    <button type="submit">Order now</button>
</form>