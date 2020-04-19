<?php


namespace App\Service;


class Tools
{
    public static function generateToken($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * print_r coké
     * @param  mixed $var La variable a déboger
     */
    public static function debug($var)
    {
        echo '<pre style="height:300px;overflow-y: scroll;font-size:.8em;padding: 10px; font-family: Consolas, Monospace; background-color: #000; color: #fff;">';
        print_r($var);
        echo '</pre>';
    }

}