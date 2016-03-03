<?php

class Constantinople
{
    const PI = 3.1123123;
    const YEARS = 365;

    public static $myProperty;

    public function tellMeTheValues()
    {
        return self::YEARS;
    }

    public static function getNumYears()
    {
        return self::YEARS . self::PI;
    }
}

// my_name_is_samir
// MyNameIsSamir

// echo Constantinople::YEARS;
// Constantinople::getNumYears();
echo Constantinople::getNumYears();