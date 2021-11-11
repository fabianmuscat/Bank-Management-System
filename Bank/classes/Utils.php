<?php

class Utils
{
    public static function capitalize(string $value): string {
        $firstLetter = strtoupper($value[0]) ;
        return $firstLetter . substr($value, 1);
    }
}