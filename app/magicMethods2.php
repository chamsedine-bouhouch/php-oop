<?php

require "includes/Str.php";

$s = new Str('Hello, World!');

echo $s->upper() ; // HELLO, WORLD!
print("\n");
echo $s->lower(); // hello, world!
print("\n");
echo $s->length(); // 13