<?php

class Utils
{
    public static function capitalize(string $value): string {
        $firstLetter = strtoupper($value[0]) ;
        return $firstLetter . strtolower(substr($value, 1));
    }
}