<?php
/**
 * 
 *  Created by Iliyan Konakchiev
 *  PHP OOP With AJAX Login/Register System
 *  This project is for practice purpose only.
 * 
 */

class Config
{
    public static function get($path = null) {
        if($path) {
            $config = $GLOBALS['config'];
            $path = explode('/', $path);

            foreach($path as $bit) {
               if(isset($config[$bit])) {
                $config = $config[$bit];
               }
            }

            return $config;
        }

        return false;
    }
}