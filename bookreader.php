<?php

$json = fopen("book.json", "r");
"<pre>"
echo var_dump($json);
"</pre>"
echo(var_dump($json));

$book = var_dump(json_decode($json, true));
echo $book;

/*foreach ($book as $key => $value) {
	echo $value;
} */
