<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHPテスト</title>
</head>
<body>
  <?php 
  echo '1,FizzBuzz';
  echo '<br><br>';
  ?>

  <?php
    $i = 1;
    for ($i = 1; $i <= 100; $i++){
      if ($i % 3 === 0){
        echo 'Fizz';
        echo '<br>';
      } else if  ($i % 5 === 0){
        echo 'Buzz';
        echo '<br>';
      } else if ($i % 3 === 0 && $i % 5 ===0){
        echo 'FizzBuzz';
        echo '<br>';
      } else {
        echo $i, ' ';
        echo '<br>';
      }
    }
?>

<?php 
  echo'<br><br>';
  echo '2,素数算出';
  echo '<br><br>';
  ?>
  <?php
   for ($i=1; $i <=1000; $i++) {
    $yakusuu=0;
      for ($j=1; $j<=$i; $j++) {
          if ($i%$j==0) {
              $yakusuu++;
          }
      }
      if ($yakusuu==2) {
          echo $i, ' ';
          echo '<br>';
      }
  }
?>

<?php 
  echo'<br><br>';
  echo '3,5次元配列';
  echo'<br><br>';
  $me = [
     '血液型' => 'A型',
     '家族' => [
         '父' => [
             '血液型' => 'X型',
             '家族' => [
                 '弟' => [
                    '血液型' => 'O型',
                    '家族' => [
                       '妹' => [
                         '血液型' => 'Z型',
                         '家族' => [
                             '娘' => []
                         ]
                       ]
                    ]
                 ]
             ]
         ]
           
         ]
  ];
     

$aunt = $me['家族']['父']['家族']['弟']['家族'];
  var_dump ($aunt);
  
?>


</body>
</html>

 