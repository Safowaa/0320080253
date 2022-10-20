<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="index.php" method="POST">
        Enter the first number: <input type="number" name="num1"> <br>
        <br>
        Enter the operator: <input type="operator" name="operator"> <br>
        <br>
        Enter the second number: <input type="number" name="num2"> <br>
        <br>
        <input type="Submit">

    </form>
    <?php
    $num1=$_POST ['num1'];
    $operator=$_POST ['operator'];
    $num2=$_POST ['num2'];

    if ($operator =="+"){
        echo $num1 + $num2;
    }
    elseif ($operator =="-"){
        echo $num1  -$num2;
    }
    elseif ($operator =="*"){
        echo $num1 * $num2;
    }
    elseif ($operator =="%"){
        echo $num1  %$num2;
    }
    elseif ($operator =="/"){
        echo $num1  /$num2;
    }
    else echo "invalid input";
    ?>
</body>
</html>