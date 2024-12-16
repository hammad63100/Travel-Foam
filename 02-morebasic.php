<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 80%;
        background-color: gray;
        margin: auto;
        padding: 23px;
    }
</style>

<body>
    <div class="container">
        <h1> Lets learn about PHP </h1>
        this is more basic concept
        <br>

        <?php
        $age = 7;
        if ($age > 18) {
            echo "you are allowed to go for Party";
        } elseif ($age == 7) {
            echo "you are 7 year old";
        } else {
            echo "you are child Don't go for Party";
        }
        echo "<br>";
        // Array in PHP
        $languages = array("Python", "C#", "C++", "Java", "JavaScript", "Solidity",);
        echo $languages[1];
        echo "<br>";
        echo count($languages);
        echo "<br>";

        // loops
        // while loop
        echo "<br>";
        $a = 0;
        while ($a <= 10) {
            echo "<br> The value of A is : ";
            $a++;
            echo $a;
        }

        echo "<br>";
        echo "<br>";
        $a = 0;
        while ($a <= 10) {
            echo "<br> The value of A is : ";
            $a++;
            echo $a;
        }


// do while loop
        echo "<br>";
        $b = 0;
        do{
            echo "<br>";
            echo "<br> The value of B is : ";
            echo $b, " ", $languages[$b];
            $b++;

        }
        while ($b < count($languages));



        

        echo "<br>";
        $c = 0;
        do{
            echo "<br>";
            echo "<br> The value of c is come from Do While loop: ";
            echo $c;
            $c++;

        }
        while ($c < 10);


        //for loop
        echo "<br>";
        for ($i=0; $i < 10; $i++) { 
        echo "<br>";
        echo "The value come from for loop: $i";
        } 


        //for each loop
        echo "<br>";
        foreach ($languages as $value) {
            echo "<br> the value come from Foreach Loop: ";
            echo $value;
        }


        // function
         echo "<br>";
         function Print5(){
            echo "<br>";
            echo "Five";
         }
         print5();

         echo "<br>";
         function Print_number($number){
            echo "<br>";
            echo "Your Number is ";
            echo "$number";
         }
         Print_number(45);
         Print_number(46);
         Print_number(47);
         Print_number(48);
         Print_number(49);
         Print_number(50);


          ?>

        



    </div>
</body>

</html>