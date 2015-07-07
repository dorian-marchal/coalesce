<?php

if (!function_exists('coalesce')) {

    function coalesce() {
        return array_shift(array_filter(func_get_args(), function ($value) {
            return !is_null($value);
        }));
    }
}

if (!function_exists('coalescy')) {

    function coalescy() {
        return array_shift(array_filter(func_get_args()));
    }
}

?>
