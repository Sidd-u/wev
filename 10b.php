<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><Sum of the list of a number/h2>
    <form action=POST">
    Enter a number:<input type="text" name="num">
    <input type="submit" name="sum">
    <form>
    <script>
        if(isset($_POST("sum"))){
            $num=$_POST["$num"];
            $temp=$num;
            $sum=0;
            while($temp!=0){
                $digit=temp%10;
                $sum+=$digit;
                $temp=(int)($temp/10);
                echo "<h2>entered num $nium is convert into $sum</h2>";
            }
        }
    </script>
</body>
</html>