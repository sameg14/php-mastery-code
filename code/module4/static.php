<?php

class CacheLayer
{
    public static $shouldCache = true;

    public function getData()
    {
        if (self::$shouldCache == true) {
            return 'data from cache';
        } else {
            return 'data from DB';
        }
    }
}

$c1 = new CacheLayer();
echo $c1->getData();

echo '<hr/>';
CacheLayer::$shouldCache = false;

$c2 = new CacheLayer();
echo $c2->getData();

echo '<hr/>';

CacheLayer::$shouldCache = true;
$c3 = new CacheLayer();
echo $c3->getData();