<?php

class Singleton {
    private static $uniqueInstance = [];
    private function __construct() { }

    public static function getInstance(){
        $cls = static::class;
        echo $cls.'<br/>';
        if (!isset(self::$uniqueInstance[$cls])) {
            self::$uniqueInstance[$cls] = new Singleton();
        }

        return self::$uniqueInstance[$cls];
    }

    function showInstance () {
        echo '<pre>';
        print_r(self::$uniqueInstance);
        echo '</pre>';
    }
}