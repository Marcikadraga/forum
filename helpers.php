<?php
/**
 * Created by PhpStorm.
 * User: Balogh Márton
 * Date: 2022. 04. 22.
 * Time: 15:23
 */

if (!function_exists('session')) {
    function session($name, $value = null) {
        if ($value == null) {
            return $_SESSION[$name] ?? null;
        }

        $_SESSION[$name] = $value;
    }
}