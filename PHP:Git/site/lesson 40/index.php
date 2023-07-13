<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        
        function recursiya($counter) {
            if($counter>0) {
                echo ($counter--) , '<br>';
                recursiya($counter);
            } else return;
        }
        recursiya(8);
    ?>
</body>
</html>