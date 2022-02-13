<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nombres[]="juan";
        $nombres[]="pedro";
        $nombres[]="ana";
        for($f=0;$f<count($nombres);$f++)
        {
        echo $nombres[$f];
        echo "<br>";
        } 
    ?>
</body>
</html>