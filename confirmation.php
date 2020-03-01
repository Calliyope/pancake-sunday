<?php

class PancakeOrder
{
    public $pancakeName;
    public $pancakeType;
    public $ingredients;
    public $amount;
    public $cooker;
    public $eater;
    public $weekNumber;
}

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo "<h1>ERROR NOT ALLOWED</h1>";
    exit;
}



var_dump($_POST);

$order = new PancakeOrder();
$order->pancakeName = $_POST["namePancake"];
$order->pancakeType = $_POST["pancakeType"];
$order->amount = $_POST["amount"];
$order->ingredients = $_POST["ingredients"];
$order->cooker = "DONTKNOWYET";
$order->eater = "DONTKNOWYET";
$order->weekNumber = "DONTKNOWYET";

setcookie(
    "order",
    json_encode($order)
);

?>

<h1>Order confirmed!</h1>

<p>
    <b>Pancake:</b> <?php echo $order->pancakeName; ?>
</p>
<p>
    <b>Amount:</b> <?php echo $order->amount; ?>
</p>
<p>
    <b>Ingredients (<?php echo $order->pancakeType; ?>):</b>
    <ul>
        <?php
        foreach ($order->ingredients as $ingredient) {
            echo "<li>" . $ingredient . "</li>";
        }
        ?>
    </ul>
</p>


<?php

?>