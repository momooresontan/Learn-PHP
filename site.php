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
    <!-- <form action="site.php" method="post">
        <input type="number" name="num1" step="0.1" placeholder="Number1"><br>    
        <input type="text" name="operator" placeholder="Operator"><br>
        <input type="number" name="num2" placeholder="Number2"><br>

        <input type="submit"> 
    </form> -->
    <!-- <form action="site.php" method="post">
        What was your grade?
        <input type="text" name="grade" placeholder="Grade"><br>
        <input type="submit"> 
    </form> -->

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
        // Calculator 2.0
        // $num1 = $_POST["num1"];
        // $num2 = $_POST["num2"];
        // $operator = $_POST["operator"];

        // if($operator == "+"){
        //     echo $num1 + $num2;
        // } elseif($operator == "-"){
        //     echo $num1 - $num2;
        // } elseif($operator == "*"){
        //     echo $num1 * $num2;
        // } elseif($operator == "/"){
        //     echo $num1 / $num2;
        // } else{
        //     echo "Invalid operator";
        // }
        //Switchcase
        // $grade = $_POST["grade"];
        // switch ($grade){
        //     case "A":
        //         echo "You did amazing!";
        //         break;
        //     case "B":
        //         echo "You did pretty well";
        //         break;
        //     case "C":
        //         echo "You can do better";
        //         break;
        //     case "F":
        //         echo "You failed!";
        //         break;
        //     default: 
        //         echo "Invalid grade";
        //         break;
        // }
        //while & do while loops
        // $index = 1;
        // while($index <= 5){
        //     echo "$index <br>";
        //     $index++;
        // }
        // do{
        //     echo "$index <br>";
        //     $index++;
        // }while($index <= 5);
        //for loops
        // $luckyNo = array(4, 8, 15, 20, 25, 50, 30, 40, 41);
        // for($i = 0; $i <= count($luckyNo); $i++){
        //     echo "$luckyNo[$i] <br>";
        // }
        //Include HTML
        //include "header.html";
       //Include PHP file 
        // $title = "My First Post";
        // $author = "MoMo";
        // $wordCount = 400;
        // include "article-header.php";
 
        // include "useful-tools.php";
        // sayHi("MoMo");
        // echo $feetInMile;
        // Classes & Objects
        class Book {
            var $title;
            var $author;
            var $pages;

            function __construct($aTitle, $aAuthor, $aPages){
                $this -> title = $aTitle;
                $this -> author = $aAuthor;
                $this -> pages = $aPages;
            }
        }
        $book1 = new Book();
        $book1 -> title = "Harry Potter <br>";
        $book1 -> author = "MoMo <br>";
        $book1 -> pages = "300 <br>";

        $book2 = new Book();
        $book2 -> title = "Lord of the Rings <br>";
        $book2 -> author = "MoMo <br>";
        $book2 -> pages = "200 <br>";

        // echo $book1->title;
        // echo $book1->author;
        // echo $book1->pages;

        // echo $book2->title;
        // echo $book2->author;
        // echo $book2->pages;



    ?>

</body>
</html>