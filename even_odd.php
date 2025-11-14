<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd</title>
</head>
<body>
    <form method="post" action="even_odd.php">
        <label for="number">Put a number it will tell you Even or Odd:</label><br>
        <input type="number" name="num">
        <input type="submit" value="Submit">


    </form>

    <?php
    $space = " ";
    if(isset($_POST['num'])) {
        $num = (int)$_POST['num'];
        
        if($num % 2 === 0 ) {
            echo '<h1>'.$num.$space.'is even</h1>';
        } else {
            echo '<h1>'.$num.$space.'is odd</h1>';
        }
    }
    
    
    
    ?>
</body>
</html>