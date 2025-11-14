<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <p><strong>Hint#</strong> use admin/1234</p>
    <form method="post" action="login.php">
        <label for="username">Username:</label>
        <input type="name" name="user">
<br><br>
        <label for="pwd">Password: </label>
        <input type="pwd" name="pass"><br>
        <input type="submit" value="submit">

    </form>
    <?php
    $usr = $_POST['user'];
    $pwd = $_POST['pass'];
    if(isset($_POST['user']) && isset($_POST['pass'])) {
        if($usr === "admin" && $pwd === '1234'){
            echo"<h1> Welcome back </h1>";
        } else {
            echo"<h3> Wrong username/password</h3>";
        }
    }
    
    
    
    ?>        
    <br>
    <a href="index.php">Home page</a>
</body>
</html>