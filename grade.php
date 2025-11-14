<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form method="post" action="grade.php">
        <label for="number">Grade:</label>
        <input type="number" name="grade">
        <input type="submit" value="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {    
         if (isset($_POST['grade']) && $_POST['grade'] !== "") {
            $num = (int) $_POST['grade'];
            if($num >= 90 ) {
                $return = 'A';
            } else if($num >= 80) {
                $return = 'B' ;
            } else if($num >= 70) {
                $return = 'C';
            } else if($num >= 50){
                $return = 'D';
            } else {
                $return = 'Fail';
            }
            echo '<h2>'.$return.'</h2>';
        }
    }
    ?>
<a href="index.php">Home page</a>
</body>
</html>