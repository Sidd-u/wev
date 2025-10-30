<!DOCTYPE html>
<html>
<head>
    <title>Login Using Cookies</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="post">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" name="login" value="Login">
    </form>

    <?php
    // Step 1: Create an array of users
    $users = array(
        "user1" => "pwd1",
        "user2" => "pwd2",
        "user3" => "pwd3",
        "user4" => "pwd4"
    );

    // Step 2: Store users in a cookie (serialize array to string)
    setcookie("user_data", serialize($users), time() + 3600); // valid for 1 hour

    // Step 3: Check login credentials when form is submitted
    if (isset($_POST['login'])) {
        $uname = $_POST['username'];
        $pwd = $_POST['password'];

        // Read cookie and unserialize data
        if (isset($_COOKIE['user_data'])) {
            $stored_users = unserialize($_COOKIE['user_data']);

            if (array_key_exists($uname, $stored_users) && $stored_users[$uname] == $pwd) {
                echo "<h3 style='color:green;'>Login Successful! Welcome, $uname.</h3>";
            } else {
                echo "<h3 style='color:red;'>Invalid Username or Password!</h3>";
            }
        } else {
            echo "<h3 style='color:red;'>Cookie not set. Please refresh the page.</h3>";
        }
    }
    ?>
</body>
</html>
