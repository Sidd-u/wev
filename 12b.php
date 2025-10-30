<!DOCTYPE html>
<html>
<head>
    <title>Factorial of a Number</title>
</head>
<body>
    <h2>Find Factorial of a Number</h2>
    <form method="post">
        Enter a number: <input type="text" name="num">
        <input type="submit" name="find" value="Find Factorial">
    </form>

    <?php
    if (isset($_POST['find'])) {
        $num = $_POST['num'];
        $fact = 1;

        if ($num < 0) {
            echo "<h3>Factorial of negative number doesn't exist.</h3>";
        } else {
            for ($i = 1; $i <= $num; $i++) {
                $fact *= $i;
            }
            echo "<h3>Factorial of $num is: $fact</h3>";
        }
    }
    ?>
</body>
</html>
