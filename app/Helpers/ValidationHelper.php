<?php

namespace App\Helpers;


class ValidationHelper{
    public static function ReturnValidationKey($arr)
    {
        foreach ($arr->messages() as $key => $ret) {
            return $key;
        }
    }
}