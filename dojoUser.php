<?php
/*
 * Plugin Name: Dojo User (shortcode)
 * Description: ....
 * Version:     0.3
 * Author:      EPFL Dojo
 * Author URI:  github.com/epfl-dojo
 */

 if (! defined('ABSPATH')) {
     die('Access denied.');
 }

add_action( 'admin_menu', 'plugin_menu');

function plugin_menu()
{
   add_menu_page(
      'Dojo',
      'Dojo',
      'read',
      'dojo',
      null,
      'dashicons-calendar',
      70
   );
   //add_menu_page('Dojo User', 'User Dojo Plugin', 'read', 'dojo-user');
}

class DojoUser
{


   function hook() {
      // run actions & filters
      add_action( 'admin_menu', array($this, "tata" ));
   }
   function tata(){
      return "tata";
   }
}



//$DU = new DojoUser;
//$DU->hook();
