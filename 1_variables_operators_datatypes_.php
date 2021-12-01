<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php
        define('Pi',3.14);
            echo "Hello world is printed using php.";
            // To make a variable in PHP
            $variable1 = 34;
            $variable2 = 45;
            echo $variable1;
            echo $variable2;
            echo $variable1 + $variable2;
            
            // Operators in PHP
            
            // Arithematic Operators
            echo "<br>";
            echo "The value of variable1 + variable2 is ";
            echo $variable1 + $variable2;
            echo "<br>";
            echo "The value of variable1 - variable2 is ";
            echo $variable1 - $variable2;
            echo "<br>";
            echo "The value of variable1 * variable2 is ";
            echo $variable1 * $variable2;
            echo "<br>";
            echo "The value of variable1 / variable2 is ";
            echo $variable1 / $variable2;

            // Assignment Operators
            $newVar = $variable1;
            echo "<br>";
            echo "If 2 is added to new variable then the value is ";
            echo $newVar += 2;
            echo "<br>";
            echo "If 2 is subtracted to new variable then the value is ";
            echo $newVar -= 2;
            echo "<br>";
            echo "If 2 is multiplied to new variable then the value is ";
            echo $newVar *= 2;
            echo "<br>";
            echo "If 2 is divided to new variable then the value is ";
            echo $newVar /= 2;

            // Comparison Operators
            echo "<br>";
            echo "The value of 1==4 is ";
            echo var_dump(1==4);
            echo "<br>";
            echo "The value of 1!=4 is ";
            echo var_dump(1!=4);
            echo "<br>";
            echo "The value of 1>=4 is ";
            echo var_dump(1>=4);
            echo "<br>";
            echo "The value of 1<=4 is ";
            echo var_dump(1<=4);

            // Increment/Decrement Operators
            echo "<br>";
            echo $variable1++;
            echo "<br>";
            echo $variable1--;
            echo "<br>";
            echo ++$variable1;
            echo "<br>";
            echo --$variable1;

            // Logical Operators
            // and(&&)
            echo "<br>";
            // $variable1 = (true and true);
            // $variable1 = (true and false);
            // $variable1 = (false and true);
            $variable1 = (false and false);
            echo var_dump($variable1);

            // or(!!)
            echo "<br>";
            // $variable1 = (true or true);
            $variable1 = (true or false);
            // $variable1 = (false or true);
            // $variable1 = (false or false);
            echo var_dump($variable1);

            // xor
            echo "<br>";
            // $variable1 = (true xor true);
            // $variable1 = (true xor false);
            $variable1 = (false xor true);
            // $variable1 = (false xor false);
            echo var_dump($variable1);
        ?>

        <?php
            // DataTypes in PHP

            // 1. String
            echo "<br>";
            $var = "This is a string";
            echo var_dump($var);

            // 2. Integer
            echo "<br>";
            $var = 64;
            echo var_dump($var);

            // 3. Float
            echo "<br>";
            $var = 64.3;
            echo var_dump($var);

            // 4. Boolean
            echo "<br>";
            $var = true;
            echo var_dump($var);

            // 5. Array
            // 6. Object
        ?>
        
    </div>
</body>
</html>