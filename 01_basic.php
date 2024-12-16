<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        this is my first php class
        <?php
         echo"Hello this is my first program in php";
        ?>
    </div>    
        <?php
         $var = 5;
         $var2 = 0;
         $var3 = 3;

         echo $var;
         echo $var2;
         echo $var3;
         echo $var +  $var3;

         // Arithmetic operator
         echo "<h3> Arithmetic operator</h3>";
         echo "<br>";
         echo" the value of var + var3 = ";
         echo $var + $var3;
         echo "<br>";
         echo "<br>";
         echo" the value of var - var3  = ";
         echo $var - $var3;
         echo "<br>";
         echo "<br>";
         echo" the value of var * var3   = ";
         echo $var * $var3;
         echo "<br>";
         echo "<br>";
         echo" the value of var / var3  = ";
         echo $var / $var3;
         echo "<br>";
         echo "<br>";


         // assignment operator
         echo "<h3> assignment operator</h3>";
         echo "<br>";
         $newvar = $var;
         $newvar += 2;
         echo " the newvar + 2  value is    ", $newvar;
         echo "<br>";
         echo "<br>";
         $newvar = $var;
         $newvar -= 2;
         echo " the newvar - 2  value is    ", $newvar;
         echo "<br>";
         echo "<br>";
         $newvar = $var;
         $newvar *= 2;
         echo " the newvar * 2  value is    ", $newvar;
         echo "<br>";
         echo "<br>";
         $newvar = $var;
         $newvar /= 2;
         echo " the newvar / 2  value is    ", $newvar;
         echo "<br>";



         //comparison operator

         echo "<br>";
         echo "<h3> comparison operator </h3>";
         
         echo "<br> the 1 == 4 is ";
         echo var_dump(1==4);
         echo "<br>";
         
         echo "<br> the 1 != 4 is ";
         echo var_dump(1!=4);
         echo "<br>";
         
         echo "<br> the 1 <= 4 is ";
         echo var_dump(1<=4);
         echo "<br>";
         
         echo "<br> the 1 >= 4 is ";
         echo var_dump(1>=4);
         echo "<br>";


         //increment / decrement operator
         echo "<br>";
         echo "<h3> increment / decrement operator </h3>";

         echo "value var++ is  ";
        echo  $var++;
        echo "<br>";
        echo "value var-- is  ";
        echo  $var--;
        echo "<br>";
        echo "value ++var is  ";
        echo  ++$var;
        echo "<br>";
        echo "value --var  is  ";
        echo  --$var;
        echo "<br>";

        echo "<h3>Logical operator</h3>";
        // $myvar = (true)&&(true);
        // echo "<br>";
        // echo var_dump($myvar);
        // echo "<br>";
        // $myvar2 = (false)or(true);
        // echo "<br>";
        // echo var_dump($myvar2);
        // echo "<br>";
        // $myvar3 = (false)xor(true);
        // echo "<br>";
        // echo var_dump($myvar3);
        // echo "<br>";
        $myvar4 = (true xor true);
        echo "<br>";
        echo var_dump($myvar4);


        echo "<br>";
        // Data types in PHP
        echo "<h3>Data types</h3>";
        // 1. string;
        $string = "this is a string";
        echo var_dump($string);
        echo "<br>";
        // 2. int;
        $int = 88;
        echo var_dump($int);
        echo "<br>";
        // 3. float;
        // $float = 88.99;
        // echo var_dump($float);
        // echo "<br>";
        // 4. Boolean;
        $float = true;
        echo var_dump($float);
        echo "<br>";
        // 5. Array;
        // 6. Object;

        define("PI","3.14");
        echo PI;
        ?>
</body>
</html>