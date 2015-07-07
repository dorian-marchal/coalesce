<?php

if (!function_exists('coalesce')) {

    /**
     * @return The first non null argument (or null)
     */
    function coalesce() {
        return array_shift(array_filter(func_get_args(), function ($value) {
            return !is_null($value);
        }));
    }
}

if (!function_exists('coalescy')) {

    /**
     * @return The first non "falsy" argument (or null)
     */
    function coalescy() {
        return array_shift(array_filter(func_get_args()));
    }
}

if (!function_exists('val')) {

    /**
     * @param array $arr
     * @param string|int $index
     * @return The array element or null if it's undefined
     */
    function val($arr, $index) {
        return isset($arr[$index]) ? $arr[$index] : null;
    }
}

?>