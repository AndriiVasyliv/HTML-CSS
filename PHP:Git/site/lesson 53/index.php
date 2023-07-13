<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        
        // class People {
        //     private $name;
        //     public function __construct() {
        //         echo 'Call constructor';
        //         $this -> name = 'Andrii';
        //     }
        // }
        // $obj = new People();
        // echo '<pre>';
        // echo print_r($obj);
        // echo '</pre>';


        // class Point {
        //     private $x;
        //     private $y;
        //     public function __construct($x=0, $y=0) {
        //         $this -> x = $x;
        //         $this -> y = $y;
        //     }
        // }
        // $obj = new Point(10, 20);
        // $obj1 = new Point(1, 2);
        // $obj2 = new Point(3, 7);
        // $obj3 = new Point(4, 12);
        // $obj4 = new Point();
        // echo '<pre>';
        // echo print_r($obj);
        // echo '</pre>';
        // echo '<pre>';
        // echo print_r($obj1);
        // echo '</pre>';
        // echo '<pre>';
        // echo print_r($obj2);
        // echo '</pre>';
        // echo '<pre>';
        // echo print_r($obj3);
        // echo '</pre>';
        // echo '<pre>';
        // echo print_r($obj4);
        // echo '</pre>';


        class Point {
            private $x;
            private $y;
            public function __construct($x=0, $y=0) {
                $this -> x = $x;
                $this -> y = $y;
            }
            public function __toString() {
               return "({$this -> x}, {$this-> y})";
            }
            
        }
        $obj = new Point(10, 20);
        echo "{$obj}";
    ?>
</body>
</html>