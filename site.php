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
    <!-- <form action="site.php" method="get">
        <input type="text" name="color" placeholder="Color"><br>
        <input type="text" name="pluralNoun" placeholder="Plural Noun"><br>
        <input type="text" name="celebrity" placeholder="Celebrity"><br>

        <input type="submit">    
    </form> -->
    <!-- <form action="site.php" method="post">
        <input type="password" name="password" placeholder="Password"><br>

        <input type="submit">    
    </form> -->
    <!-- <form action="site.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>

        <input type="submit"> 
    </form> -->
    <!-- <form action="site.php" method="post">
        <input type="text" name="student"><br>
        <input type="submit"> 
    </form> -->
    <form action="site.php" method="post">
        <input type="number" name="num1" placeholder="Number1"><br>    
        <input type="text" name="operator" placeholder="Operator"><br>
        <input type="number" name="num2" placeholder="Number2"><br>

        <input type="submit"> 
    </form>

    <br>
    <?php 
        // number
        //echo floor(2.9);
        //form
        // echo $_GET["name"], "<br>";
        // echo $_GET["age"], "<br>";
        // echo $_GET["email"];
        //calculator
        //echo $_GET["num1"] + $_GET["num2"];
        //madlibs
        // $color = $_GET["color"];
        // $pluralNoun = $_GET["pluralNoun"];
        // $celebrity = $_GET["celebrity"];
        // echo "Roses are $color <br>";
        // echo "$pluralNoun are $color <br>";
        // echo "I love $celebrity <br>";
        //Using POSTs
        //echo $_POST["password"];
        //arrays
        // $friends = array("Kevin", "Lana", "FeyinT", "Adeife");
        // $friends[0] = "Murewa";
        // $friends[4] = "Sammy";
        // echo count($friends);
        //checkbox
        // $fruits = $_POST["fruits"];
        // echo $fruits[0];
        //Associative arrays
        // $grades = array("MoMo" => "A", "Ade" => "A", "Lana" => "B");
        // echo $grades[$_POST["student"]];
        //function
        // function sayHi($name){
        //     echo "Hello $name <br>";
        // }
        // sayHi("MoMo");
        // sayHi("Tom");
        // sayHi("David");
        //function return
        // function cube ($num){
        //     return $num * $num * $num;
        // }

        // $cubeResult = cube(5);
        // echo $cubeResult;
        //if statement
        // $isMale = false;
        // $isTall = false;
        // if($isMale && $isTall){
        //     echo "You are a tall male";
        // } elseif($isMale && !$isTall){
        //     echo "You are a short male";
        // } elseif(!$isMale && $isTall){
        //     echo "You are not male but you are tall";
        // } 
        // else {
        //     echo "You are neither male nor tall";
        // }
        //if comparisons operators
        // function getMax($num1, $num2, $num3){
        //    if($num1 >= $num2 && $num1 >= $num3){
        //     return $num1;
        //    } elseif($num2 >= $num1 && $num2 >= $num3){
        //     return $num2;
        //    } else{
        //     return $num3;
        //    }
        // }

        // echo getMax(6, 5, 4);

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];

        if($operator == "+"){
            echo $num1 + $num2;
        } elseif($operator == "-"){
            echo $num1 - $num2;
        } elseif($operator == "*"){
            echo $num1 * $num2;
        } elseif($operator == "/"){
            echo $num1 / $num2;
        } else{
            echo "Invalid operator";
        }

    ?>

</body>
</html>