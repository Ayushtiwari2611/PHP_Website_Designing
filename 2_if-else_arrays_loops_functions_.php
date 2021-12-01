<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
.container{
    max-width: 80%;
    background-color: bisque;
    margin:10px auto;
    padding: 20px;
}
</style>
<body>
    <div class="container">
        <h1>This is a heading</h1>
        <?php

        // If-else conditional statements
        $age = 34;
        if($age>18){
            echo "You can go to the party";
        }
        else{
            echo "You can not go to the party";
        }
        echo "<br>";
        
        // Arrays
        $languages = array("Python","Java","C++","php","NodeJs");
        echo count($languages);
        echo "<br>";
        echo $languages[1];
        
        // Loops in PHP
        // while loop
        $a = 1;
        while ($a <= 10){
            echo "<br>";
            echo "The value of a is : ";
            echo $a;
            $a++;
        }
        // Iterating arrays in PHP using while loop 
        $b = 0;
        while ($b < count($languages)){
            echo "<br>";
            echo "The value of language is : ";
            echo $languages[$b];
            $b++;
        }

        // do-while loop
        $a = 20;
        do {
            echo "<br>";
            echo "The value of a is : ";
            echo $a;
            $a++;
        } while ($a <= 10);
        // Iterating arrays in PHP using do-while loop 
        $b = 0;
        do {
            echo "<br>";
            echo "The value of language is : ";
            echo $languages[$b];
            $b++;
        } while ($b < count($languages));
        
        // for Loop
        for ($i=1; $i < 11; $i++) { 
            echo "<br> The value from the for-loop is : ";
            echo $i;
        }
        // for each loop
        foreach($languages as $values){
            echo "<br> The value from foreach loop is : ";
            echo $values;
        }

        // functions
        function print_numbers($number){
            echo "<br> The number is : ";
            echo $number;
        }
        print_numbers(45);
        print_numbers(23);
        ?>   
    </div>
</body>
</html>