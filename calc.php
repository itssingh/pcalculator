<!DOCTYPE html>
<html>

<head>
    <title>Title of the document</title>
</head>

<body>
    <?php include "header.html"?>
    
    <form action="calc.php" method="post">
        Addition: <input type="checkbox" name="operations[]" value="addition"> <br>
        Subtraction:<input type="checkbox" name="operations[]" value="subtraction"> <br>
        Multiplication:<input type="checkbox" name="operations[]" value="multiplication"> <br>
        Division:<input type="checkbox" name="operations[]" value="division"> <br>
        First Number:<input type="number" step="0.01" name="num1"> <br>
        Second Number:<input type="number" step="0.01" name="num2"> <br>
        <input type="submit">
    </form>

    Answer is :
    <?php
    $operation = $_POST["operations"];
    $number1 = $_POST["num1"];
    $number2 = $_POST["num2"];
    if ($operation[0] == "addition") {
        echo  $number1 + $number2;
    } elseif ($operation[0] == "subtraction") {
        echo $number1 - $number2;
    } elseif ($operation[0] == "multiplication") {
        echo $number1 * $number2;
    } elseif ($operation[0] == "division") {
        echo $number1 / $number2;
    }
    ?>
    <?php include "footer.html"?>
</body>

</html>