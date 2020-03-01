<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Pancake Sunday</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=font1|font2|etc" type="text/css">
    <link rel="stylesheet" href="/styles/style.css" type="text/css">
</head>

<body>

    <?php
    if (!isset($_COOKIE["order"])) {
        echo "No pancake order has been placed yet!";
    } else {
        $order = json_decode($_COOKIE["order"]);
        var_dump($order);
    }
    ?>

    <!-- <header id="main-header">
        <h1>Pancake Sunday</h1>
    </header>

    <main>
        <section id="cook-info">
            <h2>Cook the pancakes!</h2>
            <h3> /name/ ordered /number of/ /savoury/ pancake(s) this week</h3>
            <h4>They have titled it the:</h4>
            <p id="nameOfPancake">Cheesey Onion Supreme</p>

            <h3>You'll need:</h3>
            <ul>
                <li>Pancake mix</li>
                <li>Eggs</li>
                <li>Milk</li>
                <li>Grated cheese</li>
                <li>Brown onion</li>
                <li>Parsley</li>
            </ul>
            <button>Print</button>
        </section>
        <br>
        <section id="cook-buttons">
            <input type=button onClick="parent.location='eat.html'" value='EAT'>
            <input type=button onClick="parent.location='cook.html'" value='COOK'>
            <input type=button onClick="parent.location='index.html'" value='HOME'>

        </section>


    </main>

    <footer>

    </footer>
    <script src="/scripts//script.js"></script> -->
</body>

</html>