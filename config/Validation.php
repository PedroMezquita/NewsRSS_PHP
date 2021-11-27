<?php

class Validation
{
    static public function ClearInt(int $int)
    {
        return filter_var($int, FILTER_SANITIZE_NUMBER_INT);
    }

    static public function CleanString(string $str)
    {
        return filter_var($str, FILTER_SANITIZE_STRING);
    }

}