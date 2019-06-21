
 
<?php 
function doubledNumber($a){
    
    return $a*2;
    
}

echo doubledNumber(2);

echo "<br>";

function f($a,$b){
    return $a+$b;
}

echo f(4,7);

echo "<br>";

function MultipliedNumber($arr){
    $result =1;
    foreach($arr as $number){
        $result=$result * $number;
    }
    return $result;
}
    
$array =[1,3,5,7,9];
echo MultipliedNumber($array);
    
    
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
     if($a>$max_number){
         $max_number=$a;
     }
         
 }

 return $max_number;
 }

$array=[1,3,4,5];
echo max_array($array);

?>    

//問題５ ↓

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <?php
    $text ="<h1>hello world</h1>";
    echo strip_tags($text);
    
    $array=[2,3,4,5];
    $array1=["a","b","c","d"];
    array_push($array,10,20);
    print_r($array);
    $result =array_merge($array,$array1);
    print_r($result);
    
    
    date_default_timezone_set('Asia/Tokyo');
    
    echo date("l");
    echo date("Y/m/d/h/a");
    
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $timestamp = mktime(10,10,10,2,28,1995);
    echo date('m/d/Y', $timestamp);
    
    
    ?>
    
</body>
</html>
