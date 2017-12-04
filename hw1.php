<!DOCTYPE html>
<html>
<head>
	<title>Gary Hsu's HW1</title>
</head>
<body>

<h1 style="color:red">中華職棒CPBL最新新聞</h1>

<h3>

<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://winter.cpbl.com.tw/news/lists.html");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$content = curl_exec($ch);  //$content is the content of the website

preg_match_all('/<div[^>]+class="news_head_title"[^>]*>(.*)<\/div>/', $content, $head_title);

preg_match_all('/<a[^>]+class="news_row_title"[^>]*>(.*)<\/a>/', $content, $title);

curl_close($ch);

echo str_replace('href="/news', 'href="http://winter.cpbl.com.tw/news', $head_title[0][0]);

echo str_replace('href="/news', 'href="http://winter.cpbl.com.tw/news', $title[0][0])."<br>";

echo str_replace('href="/news', 'href="http://winter.cpbl.com.tw/news', $title[0][1])."<br>";

echo str_replace('href="/news', 'href="http://winter.cpbl.com.tw/news', $title[0][2])."<br>";

echo str_replace('href="/news', 'href="http://winter.cpbl.com.tw/news', $title[0][3])."<br>";


// foreach ($head_title as $key) {
// 	print_r( str_replace('href="/news', 'href="http://winter.cpbl.com.tw/news', $key));
// }

// foreach ($head_title[0] as $realtitle) {
//     echo $realtitle . "\n";
// }


// foreach ($title[0] as $realtitle) {
//     echo $realtitle . "\n"."<br>";
// }

?>
</h3>

</body>
</html>