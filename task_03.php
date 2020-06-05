<?php
//課題3 $fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
$fruits = array("apple", "orange", "banana", "lemon", "grape");
foreach($fruits as $fruit) {
    echo "要素は" . $fruit;
    echo "\n";
}
?>