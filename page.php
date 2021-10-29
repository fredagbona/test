<?php $num =  $_POST["numero"];
        $num1 = $num - 1;
        $nbr = array(9,$num1);
    $calc = array_sum($nbr)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  Sum is : <?php echo $calc; ?>
</body>
</html>
