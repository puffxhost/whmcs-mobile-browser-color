<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

/**
 * Puffx Host - Mobile Browser Tab Color Module
 * Version: 1.0.0
 * Author: Puffx Host
 * Description: Change the browser tab color for mobile devices.
 */

use Illuminate\Database\Capsule\Manager as Capsule;

function puffxmbcolor_config()
{
    return [
        "name" => "Puffx Host - Mobile Browser Tab Color",
        "description" => "This addon changes the color of the mobile browser address/search bar.",
        "version" => "1.0.0",
        "author" => "Puffx Host",
        "language" => "english",
        "fields" => []
    ];
}

function puffxmbcolor_activate()
{
    \WHMCS\Config\Setting::setValue('PUFFX_MBC_STATUS', '');
    \WHMCS\Config\Setting::setValue('PUFFX_MBC_COLOR', '#4f46e5'); // Default Puffx Host purple
    return [
        "status" => "success",
        "description" => "Puffx Host Mobile Browser Tab Color has been activated."
    ];
}

function puffxmbcolor_deactivate()
{
    return [
        "status" => "success",
        "description" => "Puffx Host Mobile Browser Tab Color has been deactivated."
    ];
}

function puffxmbcolor_output($vars)
{
    if (isset($_POST['save'])) {
        check_token("WHMCS.admin.default");

        \WHMCS\Config\Setting::setValue('PUFFX_MBC_STATUS', (isset($_REQUEST['status']) ? 'ON' : ''));
        \WHMCS\Config\Setting::setValue('PUFFX_MBC_COLOR', (!empty($_REQUEST['color']) ? $_REQUEST['color'] : ''));

        redir('module=puffxmbcolor&saved=1');
    }

    if (isset($_REQUEST['saved'])) {
        echo '<div class="alert alert-success">✅ Changes saved successfully.</div>';
    }

    global $CONFIG;

    $status = \WHMCS\Config\Setting::getValue('PUFFX_MBC_STATUS');
    $color  = \WHMCS\Config\Setting::getValue('PUFFX_MBC_COLOR');

    echo '<form action="" method="post">
        <input type="hidden" name="save" value="1">
        <table class="form" width="100%" cellspacing="2" cellpadding="3" border="0">
        <tbody>
        <tr>
            <td class="fieldlabel" style="min-width:200px;">Enable Theme Color</td>
            <td class="fieldarea">
                <label class="checkbox-inline">
                    <input ' . ($status ? 'checked="checked"' : '') . ' type="checkbox" name="status">
                    Tick this box to enable mobile browser theme color
                </label>
            </td>
        </tr>
        <tr>
            <td class="fieldlabel">Theme Color:</td>
            <td class="fieldarea">
                <input ' . ($color ? 'value="' . $color . '"' : '') . ' type="text" name="color" class="colorpicker">
                Enter your custom background theme color
            </td>
        </tr>
        </tbody>
        </table>
        <div class="btn-container">
            <input id="saveChanges" type="submit" value="Save Changes" class="btn btn-primary">
        </div>
    </form>';

    echo '<script type="text/javascript" src="' . $CONFIG['SystemURL'] . '/assets/js/jquery.miniColors.js"></script>
        <link rel="stylesheet" type="text/css" href="' . $CONFIG['SystemURL'] . '/assets/css/jquery.miniColors.css" />
        <script>$(document).ready(function(){ $(".colorpicker").miniColors(); });</script>';
}
