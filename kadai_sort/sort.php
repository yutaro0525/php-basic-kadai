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
    function sort_2way($array,$order){

       $nums = [15, 4, 18, 23, 10 ];

      if ($order){
      sort($nums, SORT_NUMERIC);
      echo "昇順にソートします"."<br>";
      foreach ($nums as $val) {
          echo  $val . "\n"."<br>";
      }
     } else{
      rsort($nums, SORT_NUMERIC);
      echo "降順にソートします"."<br>";
      foreach ($nums as $val) {
          echo $val . "\n"."<br>";
      }
    }
  }

      sort_2way($nums, TRUE);
      sort_2way($nums, FALSE);
    
        ?>
    </p>
</body>

</html>