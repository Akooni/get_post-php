<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form method="post" action="even_odd.php">
        <label for="number">Even or Odd:</label><br>
        <input type="number" name="num">
        <input type="submit" value="Submit" class="left">


    </form>

    <?php
    $space = " ";
    if(isset($_POST['num'])) {
        $num = (int)$_POST['num'];
        
        if($num % 2 === 0 ) {
            echo '<h2>'.$num.$space.'is even</h2>';
        } else {
            echo '<h2>'.$num.$space.'is odd</h2>';
        }
    }
    
    
    
    ?>
    <br>
    <a href="index.php">Home page</a>
</body>
</html>