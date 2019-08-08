<?php

// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function sum($sum) {
    echo $sum * 2;
}
echo sum(2);
echo "\n";

// 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

function data($a, $b) {
    echo $a + $b;
}
data(2, 4);
echo "\n";

// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) 
// を渡すとその要素をすべてかけた結果を返す関数を作成してください。

function ar($arr) {
    $total = 1;
    foreach ($arr as $a) {
        $total *=$a;
    }
    return $total;
}
echo ar(array(1,3,5,7,9));
echo "\n";
?>
<?php
// 4.次のプログラムは、配列の中で一番大きい値を返す max_array 
//という関数を実装しようとしています。途中の部分を完成させてください。

function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
    //どうしたらいいかわからない・・・・
    if ($max_number < $a) {
        $max_number = $a;
    }
    }
    return $max_number;
}
echo max_array(array(11,26,5,22));
echo "\n";
?>

<?php
// 5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
// strip_tags

$string = '<a href="http://amazon.com">Amazon</a>';
$result = strip_tags($string);
echo $result;
echo "\n";

// array_push

$season = ['spring', 'summer', 'autumn'];
array_push($season, 'winter');
print_r($season);
echo "\n";


// array_merge
$price1 = [100, 200];
$price2 = [300, 400];
$price3 = [500, 600];

$price = array_merge($price1, $price2, $price3);
print_r($price);
echo "\n";


// time, mktime
//timeは現在時刻のUNIXタイムスタンプを取得することが出来る。
echo time();
echo "\n";

// mktimeは指定した日時のUNIXタイムスタンプを取得出来る。
$time2 = mktime(0,0,0,11,26,1983);
echo $time2;
echo "\n";


// date
echo date("Y/m/d/H:i:s");
echo "\n";

?>
