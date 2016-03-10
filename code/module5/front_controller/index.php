<?php

$pieces = explode('/', $_SERVER['REQUEST_URI']);
$pathInfo = array_pop($pieces);

echo '$pathInfo='.$pathInfo;

//$path = $_SERVER['PATH_INFO'];
//
//echo $path;
