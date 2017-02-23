<?php
$from = 'USD';  // 美元 
$to = 'TWD'; // 新台幣 
//重點只有這行 知道匯率擷取的位址
$uri = 'http://finance.yahoo.com/d/quotes.csv?e=.csv&f=sl1d1t1&s='. $from . $to .'=X'; 
$content = file_get_contents($uri); 
$content = explode(',', $content); 
echo "$from => $to 匯率: ".$content[1];
echo "<br>";
echo "匯率擷取時間: ".$content[2].$content[3];
$rate = $content[1];