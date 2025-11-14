<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>When is your birthday ?</title>
</head>
<body>
    <form method = "post" action="birthday.php">
        <label for = "date">Data of Birth:</label>
        <input type = date name ="birthday">
        <input type="submit" value="submit">
    </form>


    <?php
    $date = $_POST['birthday'];
    $birthday = new DateTime($date);
    $current_date = new DateTime();
    $month = $birthday ->format("m");
    $day = $birthday ->format("d");

    $current_year = $current_date ->format('Y');

    $next_birthday = new DateTime("$current_year-$month-$day");

    $diff = $current_date -> diff($next_birthday);
    if(isset($_POST['birthday'])){
        echo $diff -> days;
    }
    ?>
</body>
</html>