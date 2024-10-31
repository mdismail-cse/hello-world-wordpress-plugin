<?php

/**
 * Plugin Name: Hello world
 * Description: this is my first plugin to tes my skills
 * Author: Md Ismail
 * Version: 0.01
 * Author URI: https://google.com
 * Plugin URI: https://google.com
 */

 // admin notices

 add_action("admin_notices", "hw_show_success_message");

 function hw_show_success_message(){
    echo '<div class= "notice notice-success is-dismissible"><p>why do not you know</p></div>';
 }

 //admin dashboard widget

 add_action("wp_dashboard_setup", "hw_hello_world_dashboard_widget");

 function hw_hello_world_dashboard_widget(){
    wp_add_dashboard_widget("hw_hello_world", "HW - Hello world", "hw_custom_admin_widget");
 }

 function hw_custom_admin_widget(){
    echo 'This is Hello world custom admin widget';
 }

