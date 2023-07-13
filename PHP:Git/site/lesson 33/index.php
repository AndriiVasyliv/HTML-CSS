<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        
       $transport = [
        'Cars' => ['Lanos', 'Buggatti', 'BMW'],
        'Planes' => ['F16', 'MIG', 'Cucurudznuk'],
        'Ships' => ['Aircraft carrier', 'Frigate', 'Black Pearl'],
       ];
       foreach($transport as $key => $array) {
        echo "<br>$key</br><br>";
            foreach($array as $value) {
                echo "<li> $value </li>";
            }
       }


    ?>
</body>
</html>