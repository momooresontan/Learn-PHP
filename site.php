<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="site.php" method="get">
        <input type="text" name="name" placeholder="Name"><br>
        <input type="number" name="age" placeholder="Age"><br>
        <input type="email" name="email" placeholder="Email">
        <input type="submit" >
    </form> -->
    <!-- <form action="site.php" method="get">
        <input type="number" name="num1" placeholder="Number 1"><br>
        <input type="number" name="num2" placeholder="Number 2"><br>
        <input type="submit">
    </form> -->
    <form action="site.php" method="get">
        <input type="text" name="color" placeholder="Color"><br>
        <input type="text" name="pluralNoun" placeholder="Plural Noun"><br>
        <input type="text" name="celebrity" placeholder="Celebrity"><br>

        <input type="submit">    
    </form>

    <br>
    <?php 
        //echo floor(2.9);
        // echo $_GET["name"], "<br>";
        // echo $_GET["age"], "<br>";
        // echo $_GET["email"];

        //echo $_GET["num1"] + $_GET["num2"];

        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];
        echo "Roses are {color} <br>";
        echo "{plural noun} are blue <br>";
        echo "I love {celebrity} <br>";
    ?>

</body>
</html>