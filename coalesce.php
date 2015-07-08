<?php

if (!function_exists('coalesce')) {

    /**
     * @return The first non null argument (or null)
     */
    function coalesce() {
        $notNullArgs = array_filter(func_get_args(), function ($value) {
            return !is_null($value);
        });
        return array_shift($notNullArgs);
    }
}

if (!function_exists('coalescy')) {

    /**
     * @return The first non "falsy" argument (or null)
     */
    function coalescy() {
        $notFalsyArgs = array_filter(func_get_args());
        return array_shift($notFalsyArgs);
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
