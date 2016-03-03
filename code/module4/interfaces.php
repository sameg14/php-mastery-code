<?php

interface CacheInterface
{
    /**
     * @param string $key Name of the key in the cache store
     * @return mixed
     */
    public function get($key);

    /**
     * @param string $key Name of the cache key
     * @param mixed $val The value it contains
     * @return mixed
     */
    public function set($key, $val);
}


class Memcache implements CacheInterface
{

    public function get($key)
    {

    }

    public function set($key, $val)
    {

    }
}

//class Redis implements CacheInterface
//{
//}
