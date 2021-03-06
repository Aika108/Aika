<?php
  //練習問題1
  //文字列連結を用いて、自分の名前をブラウザ上に表示する。
  $first_name = 'Nitta';
  $last_name = 'Aika';
  echo $first_name.$last_name;
  echo "<br>";

  //練習問題2
  //以下の計算をそれぞれ行い、ブラウザ上に表示する。
  //8 * 3の計算
  echo 8*3;
  echo "<br>";

  //24 / 8の計算
  echo 24/8;
  echo "<br>";

  //6 + 10の計算
  echo 6+10;
  echo "<br>";

  //6 - 10の計算
  echo 6-10;
  echo "<br>";

  //10 % 7の計算
  echo 10%7;
  echo "<br>";

  //練習問題3
  //下記のプログラムのコメント部分をそれぞれ実行し、ブラウザ上に表示する。
  //※自己代入演算子を用いること
  $var = 2;
  //$varに12を足す
  echo $var += 12;
  echo "<br>";
  //$varに7で割る
  echo $var /= 7;
  echo "<br>";
  //$varに5を掛ける
  echo $var *= 5;
  echo "<br>";
  //$varの3の剰余
  echo $var %= 3;
  echo "<br>";

  //練習問題4
  //配列内に、伊達、櫻井、伊藤、藤尾を入れて、ブラウザ上にそれぞれを表示せよ。
  $list = array('伊達', '櫻井', '伊藤', '藤尾');
  echo $list[0];
  echo $list[1];
  echo $list[2];
  echo $list[3];
  echo "<br>";

  //練習問題5
  //連想配列内に、nameキーに'櫻井'、ageキーに'22'、placeキーに'富山'を入力して、ブラウザ上にそれぞれを表示せよ。
  $lists = array('name' => '櫻井', 'age' => '22', 'place' =>'富山');
  echo $lists['name'];
  echo $lists['age'];
  echo $lists['place'];
  echo "<br>";

  //練習問題6
  //以下の$a, $b, $cは三角形の辺の長さである。
  //この3辺で三角形は成立可能か($a + $b > $c)を求めよ。もし、三角形が成立可能ならばブラウザに「可能」、成立不可能ならば「不可能」と表示せよ。
  $a = 3;
  $b = 4;
  $c = 9;
  if( $a += $b > $c){
       echo '可能';}
  else{echo '不可能';}
  echo "<br>";
  //練習問題7
  //ある学校のこれまでの成績表では A ~ E までのアルファベットで成績をつけていました。今年度から成績を 5 ~ 1 の数字で成績をつけることになりました。
  //これまでの成績も以下の様に変換することになりました。これを、switch文を用いてこの問題を解きなさい。
  /*
  変換前 -> 変換後
    5   ->   A
    4   ->   B
    3   ->   C
    2   ->   D
    1   ->   E
  */
 $seiseki = 'C';

 switch($seiseki){
   case 'A';
    echo '5';
   break;

   case 'B';
    echo '4';
   break;

   case 'C';
    echo '3';
   break;

   case 'D':
    echo '2';
   break;

   case 'E':
    echo '1';
  break;
 }
  echo "<br>";
  //練習問題8
  //変数$i = 10; を用意し、10から1まで1つずつカウントダウンするプログラムを作成せよ。(1つずつ改行して表示せよ)
  //この問題にはwhileを用いること
  $i = 10;
  while($i >= 1){
     echo $i;
     echo "<br>";
     $i--;
  }
   echo "<br>";
  //練習問題9
  //正の整数1から9に、それぞれ5を掛けた数を半角スペース区切りでブラウザに表示せよ。
  //この問題にはforを用いること
  for( $aa = 1; $aa <= 9; $aa++ ){
     $ans = 5*$aa;
     echo $ans;
     echo " ";
  }
  echo "<br>";
  //練習問題10
  //以下の配列を表示せよ。(1つずつ改行して表示せよ)
  //この問題にはforeachを用いること
  $food = array('carry', 'onigiri', 'candy', 'ham', 'meet', 'rice');
  foreach($food as $food2){
    echo $food2 . "<br>";
  }
  echo "<br>";
  //練習問題11
  //以下の変数を用いて加減乗除のそれぞれの関数を作成せよ。
  $a = 10;
  $b = 5;
  function add($a,$b){
    $c = $a + $b;
    return $c;
  }
  echo add(10,5);
  echo "<br>";

  function sub($a,$b){
    $d = $a - $b;
    return $d;
  }
  echo sub(10,5);
  echo "<br>";

  function mul($a,$b){
    $e = $a * $b;
    return $e;
  }
  echo mul(10,5);
  echo "<br>";

  function div($a,$b){
    $f = $a / $b;
    return $f;
  }
  echo div(10,5);
  echo "<br>";

  //課題1
  //西暦の計算
  //以下の配列に2つの西暦a, bがあります。その2つのaからbが何年間か出力しなさい。
  $year = array(1994, 2017);
  echo $year[1]-$year[0];
  echo "<br>";

  //課題2
  //かまくらづくり
  //櫻井がはしゃいでかまくらを作り始めました。どれだけの体積の雪が必要か計算しなさい。
  //そのかまくらは四角形であり、以下の配列に外側の1辺と内側の1辺の長さが入っている。(r1 > r2)
  //下の行のecho文のコメントを外すとimageが出てくるのでこちらも参照するとわかりやすい。
  //echo '<img src="./assets/img/img1.png">';
  $size = array(6, 4);
  echo pow($size[0],3)-pow($size[1],3);
  echo "<br>";

  //課題3
  //行列の計算
  //まず、以下のecho文のコメントをはずしてください。
  //以下の配列内にa = 10, b = -20, c = 12, d = 6がそれぞれ代入されている。
  //この行列を表す配列を用いて、行列の計算を行いなさい。
  echo '<img src="./assets/img/matrix1.png">';
  $matrix = array(10, -20, 12, 6);
  echo $matrix[0]*$matrix[3]-$matrix[1]*$matrix[2];
  echo "<br>";

  //課題4
  //自己紹介
  //練習問題5を参考にして、自己紹介をせよ。
  //例) 私は、安久昌和です。出身は石川県で、年齢は22歳、趣味はバスケットボールです。電子・情報工学科に所属しています。
  //必ず、連想配列を用いること
  $lists2=array('name' =>'私は新田藍花です。', 'age' => '年齢は18で、', 'place' => '出身は石川県です。',
              'like' => '趣味は歌うことで', 'favorite' => '好きな食べ物はアイスです。');
  echo $lists2['name'];
  echo $lists2['place'];
  echo $lists2['like'];
  echo $lists2['favorite'];

  echo "<br>";
  //課題5
  //1~100までの数字を表示するプログラムを作成せよ。
  //※出力のレイアウトは下記のように表示すること(数字を10個表示したタイミングで改行する)
  //for, ifのみを用いること
  /*
  1 2 3 4 5 6 7 8 9 10
  11 12 13 14 15 16 17 18 19 20
  ...
  ...
  91 92 93 94 95 96 97 98 99 100
  */
  for($a1 = 1; $a1 <= 100; $a1++){
   if($a1 == 11 or $a1 == 21 or $a1 == 31 or $a1 == 41 or $a1 == 51 or
      $a1 == 61 or $a1 == 71 or $a1 == 81 or $a1 == 91){
     echo "<br>";
   }
   echo $a1;
   }

  //課題6
  //時差の問題
  //以下の配列に都市の個数、各都市の時差、ある都市の現在時刻が入っている。
  //この配列を用いて、各都市の現在時刻を表示せよ。
  //ちなみに、今シンガポールで22:38なので、東京では0:38である。
  //for, ifのみ用いること
  $jisa = array(5, array('tokyo', 9), array('beijing', 8), array('singapore', 7), array('london', 0), array('newyork', -5), array('singapore', '22:38'));
  //print_r($jisa);

  //課題7
  //練習問題1~10と課題1~5を関数化せよ。
   echo '<br>';
  //課題7.1
  //練習問題1の関数化
  function hoge1($first_name1,$last_name1){
    $full_name = $first_name1.$last_name1;
    return $full_name;
   }
   echo hoge1('Nitta','Aika');
   echo '<br>';
  //課題7.2
  //練習問題2の関数化
  function hoge2($huga1,$huga2){
    $aaa1 = $huga1 * $huga2;
    return $aaa1;
   }
   echo hoge2(8,3);
   echo '<br>';

  function hoge3($huga3,$huga4){
    $aaa2 = $huga3 / $huga4;
    return $aaa2;
  }
    echo hoge3(24,8);
    echo '<br>';

  function hoge4($huga5,$huga6){
    $aaa3 = $huga5 + $huga6;
    return $aaa3;
  }
    echo hoge4(6,10);
    echo '<br>';

   function hoge5($huga7,$huga8){
      $aaa4 = $huga7 - $huga8;
      return $aaa4;
   }
      echo hoge5(6,10);
      echo '<br>';

    function hoge6($huga9,$huga10){
       $aaa5 = $huga9 % $huga10;
       return $aaa5;
     }
       echo hoge5(10,7);
       echo '<br>';

  //課題7.3
  //練習問題3の関数化
   function hoge7($var){
     $aaa6 = $var + 12;
     return $aaa6;
   }
    echo hoge7(2);
    echo '<br>';

   function hoge8($var){
     $aaa7 = $var / 7;
     return $aaa7;
   }
    echo hoge8(2);
    echo '<br>';

   function hoge9($var){
     $aaa8 = $var * 5;
     return $aaa8;
   }
    echo hoge9(2);
    echo '<br>';

    function hoge10($var){
      $aaa9 = $var % 3;
      return $aaa9;
    }
     echo hoge10(2);
     echo '<br>';
  //課題7.4
  //練習問題4の関数化
    function hoge11($c0,$c1,$c2,$c3){
      $aaa10 = $c0.$c1.$c2.$c3;
      return $aaa10;
    }
     echo hoge11('伊達','櫻井','伊藤','藤尾');
     echo '<br>';
  //課題7.5
  //練習問題5の関数化

  //課題7.6
  //練習問題6の関数化

  //課題7.7
  //練習問題7の関数化

  //課題7.8
  //練習問題8の関数化

  //課題7.9
  //練習問題9の関数化

  //課題7.10
  //練習問題10の関数化

  //課題7.11
  //課題1の関数化

  //課題7.12
  //課題2の関数化

  //課題7.13
  //課題3の関数化

  //課題7.14
  //課題4の関数化

  //課題7.15
  //課題5の関数化

?>
