<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

<pre>
<?php


$string = "str.txt";

function getArrayFromString($string){
    

$str = file_get_contents($string);
$arr = explode("\n",$str);
 $keyNameArr = explode(":",$arr[0]);

 foreach($keyNameArr as $key => $value){
    $keyNameArr[$key] = trim($value);

 };

array_splice($arr, 0,1);

foreach ($arr as $key => $value){
   $arr[$key] = array_combine($keyNameArr, explode(":",$value));
};


print_r($arr);
echo "<br>";

};

getArrayFromString($string);

?>
<pre>
   
</body>
</html>



