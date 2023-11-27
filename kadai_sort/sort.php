<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($order) {
            $array = [15, 4, 18, 23, 10];
            if($order === true) {
                echo "昇順にソートします。<br>";
                sort($array);
                foreach($array as $ascending) {
                echo $ascending . '<br>';
                
                }
            }
            else {
                echo "降順にソートします。<br>";
                rsort($array);
                foreach($array as $descending) {
                echo $descending . '<br>';
               
                }
            }
        } 
            

    sort_2way(true);
    sort_2way(false);  
        ?>
    </p>
</body>

</html>