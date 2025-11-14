<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <form method="post" action="calc.php">
        <label for="number">Number:1</label>
        <input type = "number" id="num1" name ="num1">
        <br><br>
        <label for="number">Number:2</label>
        <input type = "number" id="num2" name ="num2">

        <br><br>
        <label for="number">Choose the operation:</label><br>
        <input type = "radio"  name ="oper" value="mul"> multiplication * <br>
        <input type = "radio"  name ="oper" value="div"> Divide / <br>
        <input type = "radio"  name ="oper" value="add"> addition + <br>
        <input type = "radio"  name ="oper" value="sub"> Substraction - <br>
        <input type = "submit" value="submit"> 

    


    </form>

    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $oper = $_POST['oper'];
    if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['oper'])){
        if($oper == 'mul') {
            $return = $num1 * $num2;
        }
        else if($oper == 'div') {
            $return = $num1 / $num2;
        }
        else if($oper == 'add'){
            $return = $num1 + $num2;
        }
        else if($oper == 'sub'){
            $return = $num1 - $num2;
        }
        
        echo '<h2>Results: '.$return.'</h2>';
    }    
    ?>
    <a href="index.php">Home page</a>
</body>
</html>