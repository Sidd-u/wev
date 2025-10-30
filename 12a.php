<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Check</title>
</head>
<body>
    <h2>Check Whether a Number is Prime or Not</h2>
    <form method="post">
        Enter a number: <input type="text" name="num">
        <input type="submit" name="check" value="Check">
    </form>

    <?php
    if (isset($_POST['check'])) {
        $num = $_POST['num'];
        $flag = 0;

        if ($num == 1 || $num == 0) {
            echo "<h3>$num is not a prime number.</h3>";
        } else {
            for ($i = 2; $i <= $num / 2; $i++) {
                if ($num % $i == 0) {
                    $flag = 1;
                    break;
                }
            }

            if ($flag == 0) {
                echo "<h3>$num is a prime number.</h3>";
            } else {
                echo "<h3>$num is not a prime number.</h3>";
            }
        }
    }
    ?>
</body>
</html>
