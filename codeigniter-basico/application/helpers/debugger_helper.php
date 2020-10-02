<?php
if (!function_exists('dd')) {

    /**
     * dd var_dump() and die();
     *
     * @param mix $field
     * @param boolean $die
     *
     * @return void
     */
    function dd($field, $die = true)
    {
        var_dump($field);
        if ($die) {
            die('End Debugger');
        }
    }
}

if (!function_exists('ddr')) {

    /**
     * ddr print_r();
     *
     * @param mix $field
     * @param boolean $die
     *
     * @return void
     */
    function ddr($field, $die = true)
    {
        echo '<pre>', print_r($field, true), '</pre>';
        if ($die) {
            die('End Debugger');
        }
    }
}
