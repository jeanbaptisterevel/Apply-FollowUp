<?php

namespace App\Utils;

class LinkUtils
{
    public static function linkify($string): string
    {
        return strtolower(trim(preg_replace('/[^A-Za-z]+/', '', $string)));
    }
}