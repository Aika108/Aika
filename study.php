<?php
  $hoge = 12;
  echo 'ho';
  echo "<br>";
  echo $hoge;

  //キャメルケース
  //$nameSakurai = '';

  //スネークケース
  $name_sakurai = '';

  echo "<br>";

  //四則演算
  //加算
  $a = 10;
  $b = $a + 10;
  echo $b;

  echo "<br>";

  //剰余
  $c = $b % 6;
  echo $c;

  echo "<br>";

  //文字列連結
  $a = 'zaki';
  $b = 'habaka';
  echo $a.$b;

  echo "<br>";

  //複合演算子を用いた四則演算
  $a += $b;
  $a = $a + $b;
  echo $a;

  echo "<br>";

  //複合演算子を用いた文字列連結
  $a = 'zaki';
  $a .= 'habaka'; // 'zaki' . 'habaka'
  echo $a;

  echo "<br>";

  //配列
  $fruits = array('ichigo', 'apple', 'orange');
  echo $fruits[0];
  echo $fruits[1];
  echo $fruits[2];

  echo "<br>";

  //連想配列
  $sakurai = array('name' => 'sakurai', 'location' => 'toyama', 'age' => 22);
  echo $sakurai['name'] . " ";
  echo $sakurai['location'] . " ";
  echo $sakurai['age'];
?>
