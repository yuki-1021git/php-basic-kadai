<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        $nums = [15, 4 ,18 ,23 ,10];
        function sort_2way ($array,$order) {
            if ($order === true) {
                echo '昇り順でソートします。<br>';
                //昇順に指定　sort = 昇順
                sort ($array);
                foreach ($array as $num) {
                    echo "{$num}<br>";
            }
         }   else {
                echo '降順でソートします。<br>';
               //降順に指定　rsort = 降順
                rsort ($array);
                foreach ($array as $num) {
                    echo "{$num}<br>";
                }
            }
        }
      
        sort_2way($nums, true);
        sort_2way($nums,false);
        //array　=　[値]   sort = 昇順   rsort = 降順
        ?>
    </p>

</body>

</html>