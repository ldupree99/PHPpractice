<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $x = 100;
    $y = 100;
        function Money($x) {
            $newnr = $x * 0.75;
            echo "<br>Here is 75% of what you had: ".$newnr;
        }

        function taxes($newnr) {
            $total = $newnr + 3.25;
            echo "This is your order plus taxes: ".$total ;
        }


        Money ($x);
        Money ($x);

        taxes($newnr);

    ?>

</body>
</html>