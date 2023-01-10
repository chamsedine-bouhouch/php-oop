<?php

require 'HTMLElement.php';

$article = new HtmlElement('article');

$article->id = 'main';
$article->class = 'light';

echo $article->html("First article content");
print("\n");
// show the attributes
echo $article->class; // light
echo $article->id; // main