<?php

namespace App\Helpers;


class ValidationHelper{
    public static function ReturnValidationKey($arr)
    {
        foreach ($arr->messages() as $key => $ret) {
            return $key;
        }
    }

    public static function array_group_by(array $arr, callable $key_selector) {
        $result = array();
        foreach ($arr as $i) {
          $key = call_user_func($key_selector, $i);
          $result[$key][] = $i;
        }  
        return $result;
    }
}