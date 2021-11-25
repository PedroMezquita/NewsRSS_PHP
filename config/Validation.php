<?php

class Validation
{
    static public function CleanString(string $str)
    {
        return filter_var($str, FILTER_SANITIZE_STRING);
    }
}