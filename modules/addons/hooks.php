<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Puffx Host - Mobile Browser Tab Color Hook
 * Adds <meta name="theme-color"> in client area
 */

add_hook('ClientAreaHeadOutput', 1, function ($vars) {
    if (\WHMCS\Config\Setting::getValue('PUFFX_MBC_STATUS')) {
        $color = \WHMCS\Config\Setting::getValue('PUFFX_MBC_COLOR');
        return '<meta name="msapplication-TileColor" content="' . $color . '">
                <meta name="theme-color" content="' . $color . '">';
    }
});
