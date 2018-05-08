<?php
$b=1000;
//$a=100;
//var_dump($a);
//$b=100.1;
//echo "<br>";
//var_dump($b);
//$c=$a+$b;
//echo "<br>";
//var_dump($c);
//$i=100;
//$s="100abc";
//var_dump($s);
//$m=$i+$s;
//echo "<br>";
//var_dump($m);
//$c=$i.$s;
//echo $c;$i = 100;
//$b = (boolean) $i;
//echo "原本" . var_dump($b);
//echo "<br>";
//$f = (float) $i;
//var_dump($f);
//echo "<br>";
//$s = (string) $i;
//var_dump($s);
//
/*          判断一个数的奇偶性 */
//$i = 57;
//if ($i % 2) {
//    echo "奇数";
//} else {
//    echo "偶数";
//}
//          第一题，编写程序计算半径为5的圆柱体体积
//$radius=5;
//$height=5;
//define("PI", 3.14);
//$v=PI*$radius*$radius*$height;
//echo $v;
//         计算两个数的最大公约数
$i1 = 55;
$i2 = 77;
//方法一，穷举法
//if ($i1 > $i2) {
//    $temp = $i1;
//    $i1 = $i2;
//    $i2 = $temp;
//}
//for ($n = 1; $n <= $i1; $n++) {
//    if ($i1 % $n == 0 && $i2 % $n == 0) {
//        $gcd = $n;
//    }
//}
//echo "最大公约数:".$gcd;//greatest common divisor
//方法二，辗转相除
//if ($i1 > $i2) {
//    $temp = $i1;
//    $i1 = $i2;
//    $i2 = $temp;
//}
//while ($i1 % $i2 != 0) {
//    $temp = $i1 % $i2;
//    $i1 = $i2;
//    $i2 = $temp;
//}
//echo $i2;
//      利用for循环 计算1+3+5...+99的和
//$sum=0;
//for ($i=1;$i<=99;$i+=2){
//    $sum=$i+$sum;
//}
//echo $sum;
//   输入一个三位整数，逆向显示此整数
//$m=123;
//$hw=0;
//while($m){
//    $hw=$hw*10+$m%10;
//    $m=(int)($m/10);
//    echo $m;
//    echo "<br>";
//}
//echo $hw;
//   利用for循环输出九九乘法表

//for ($i = 1; $i < 10; $i++) {
//    for ($j = 1; $j <=$i; $j++) {
//        echo "$i*$j=".$i*$j."  ";
//    }
//    echo "<br>";
//}
?>
