<?php
if(isset($_POST['submit'])){
    // success
}else{
    echo"Your name sucks we couldn't submit it";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Submit Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="hero">
        <?php echo "The user's name is " . $_POST['name'] .".";?>

    </h1>
    <div class="container">
        <div class="holder">
            <form action="index.php" method="POST">
                <div class="wrapper">
                    <input type="text" placeholder="Enter Username" name="name">
                </div>
                <br>
                <br>
                <div class="wrapper">
                    <input type="submit" value="submit" name="submit">
                </div>
            </form>
        </div>
    </div>
    <h4 class="footer">Made by MD Salman Rahman</h4>
</body>
</html>