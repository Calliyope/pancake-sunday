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
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=font1|font2|etc" type="text/css">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h1>It's a post</h3>";
    } else {

        echo "<h1>It's a get</h3>";
    }
    ?>

    <header id="main-header">
        <h1>Pancake Sunday</h1>
    </header>

    <main>
        <section id="eat-form">
            <h2>Make your pancake!</h2>
            <form id="form" action="confirmation.php" method="POST">
                <!--Name of Pancake-->
                <h3 for="namePancake">Name your pancake:</h3>
                <input type="text" id="namePancake" name="namePancake"><br>

                <!-- Savoury or Sweet + Ingredient Lists -->

                <h3>What type of pancake?</h3>
                <label for='rad0' class='btn'>Sweet</label>
                <label for='rad1' class='btn'>Savoury</label>


                <input id='rad0' class='rad' name='pancakeType' value="sweet" type='radio'>

                <fieldset class='set'>
                    <!-- <legend>Sweet Ingredients</legend> -->
                    <div id="sweetIngredients">

                    </div>

                </fieldset>

                <input id='rad1' class='rad' name='pancakeType' value="savoury" type='radio'>

                <fieldset class='set'>
                    <!-- <legend>Savoury Ingredients</legend>-->
                    <div id="savouryIngredients">

                    </div>

                </fieldset>

                <!--How many?-->
                <h3>How many?</h3>
                <input id="number" type="number" name="amount" value="1" min="1" max="3" step="1"><br>

                <input type="submit">
            </form>




        </section>
        <br>
        <section id="eat-buttons">
            <input type=button onClick="parent.location='eat.html'" value='EAT'>
            <input type=button onClick="parent.location='cook.html'" value='COOK'>
            <input type=button onClick="parent.location='index.html'" value='HOME'>

        </section>


    </main>

    <footer>

    </footer>
    <script src="scripts//script.js"></script>
    <script src="scripts//eat.js"></script>
</body>

</html>