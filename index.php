<?php
/**
* Plugin Name: Simple Maintenance Mode
* Plugin URI: https://www.andrestanidi.com/wp/plugins/simple-maintenance-mode
* Description: Test.
* Version: 0.1
* Author: Andres Tanidi
* Author URI: https://www.andrestanidi.com/
**/

if (!is_user_logged_in())
{
    exit("Maintenance Mode is activated!");
}
