<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form method="post" enctype="multipart/form-data">
        Name: <input type="text" name="name"><br><br>
        Roll No: <input type="text" name="rollno"><br><br>
        Branch: <input type="text" name="branch"><br><br>
        Upload Photo: <input type="file" name="photo"><br><br>
        <input type="submit" name="submit" value="Register">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $rollno = $_POST['rollno'];
        $branch = $_POST['branch'];

        $file = $_FILES['photo']['name'];
    

        echo "<h3>Student Details</h3>";
        echo "Name: $name <br>";
        echo "Roll No: $rollno <br>";
        echo "Branch: $branch <br>";
        echo "Photo: <br><img src='$file' width='100' height='100'>";
    }
    ?>
</body>
</html>

