<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the framework's
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @see: https://codeigniter.com/user_guide/extending/common.html
 */


function st_is_login(): bool
{
    $IonAuth = new \App\Libraries\IonAuth;
    return $IonAuth->loggedIn() ? false : true;
}

function st_is_admin(): bool
{
    $IonAuth = new \App\Libraries\IonAuth;
    return $IonAuth->isAdmin();
}

function st_print($output = [])
{
    echo "<pre>";
    print_r($output);
    echo "</pre>";
    exit;
}
