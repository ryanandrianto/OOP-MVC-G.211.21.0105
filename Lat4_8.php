<?php
class One
{
    private static $var = 10;
    function __construct()
    {
    }
    static function disp()
    {
        print self::$var;
    }
    function __destruct()
    {
    }
}
One::disp();
