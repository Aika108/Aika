<?php
  $name = 'zaki';
  if($name == 'sakurai'){
    echo '正解';
  }else{
    echo '不正解';
  }
  echo '<br>';

  $name = 'sakuai';
  $age = 24;
  if($name == 'sakurai'){
    if($age == 22){
      echo '正解';
    }else{
      echo '人違い';
    }
  }else{
    echo '不正解';
  }
  echo '<br>';

  $num = 0;
  while($num <= 3){
    echo $num;
    //インクリメント
    $num++; // 1ずつ増やす
    //デクリメント
    //$num--; //-1ずつ減らす
  }
  echo '<br>';

  for($num = 0; $num <= 3; $num++){
    echo $num;
  }
  echo '<br>';

  $sakurai = array('name' => 'hoge', 'nation' => 'japan', 'age' => 120);
  foreach($sakurai as $value){
    echo $value . " ";
  }
  //実行結果 : hoge japan 120
  echo '<br>';

  $hoge = array('hoge', 'fuga', 'hogehoge');
  $count = count($hoge);
  //echo $count;
  for($i = 0; $i < $count; $i++){
    echo $hoge[$i] . ' ';
  }
  echo '<br>';

  function add($a, $b){
    $c = $a + $b;
    return $c;
  }
  echo add(6,4);
  echo '<br>';
  
  function hoge($a, $b){
    $c = $a . $b;
    return $c;
  }
  $d = hoge('sakurai', 'baka');
  $e = hoge($d, 'sakurai');
  echo $e;

?>
