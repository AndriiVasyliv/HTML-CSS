<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        
        $str = 'PHP - [b]interpretable[/b] language, and it is [b]bold text[/b]';
        echo $str;
        echo '<br>';
        $str = str_replace('[b]', '<b>', $str);
        $str = str_replace('[/b]', '</b>', $str);
        echo $str;
        echo '<br>';
        $str = str_replace(['[b]', '[/b]'], ['<b>', '</b>'], $str);
        echo $str;
    ?>
</body>
</html>