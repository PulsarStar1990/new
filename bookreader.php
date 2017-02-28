<?php

$json = fopen("files\book.json", "r");
echo"<pre>";
echo var_dump($json);
echo"</pre>";

$book = var_dump(json_decode($json, true));
echo $book;

/*foreach ($book as $key => $value) {
	echo $value;
} */
