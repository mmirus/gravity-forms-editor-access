<?php
/*
Plugin Name: Gravity Forms Editor Access
Plugin URI: https://github.com/mmirus/gravity-forms-editor-access
Description: Give editor users access to Gravity Forms.
Author: Matt Mirus
Author URI: https://github.com/mmirus
Version: 1.0
GitHub Plugin URI: https://github.com/mmirus/gravity-forms-editor-access
*/

/**
 * Add all Gravity Forms capabilities to Editor role.
 * Runs during plugin activation.
 *
 * @access public
 * @return void
 */
function activate_gravity_forms_editor_access() {
  $role = get_role( 'editor' );
  $role->add_cap( 'gform_full_access' );
}
// Register our activation hook
register_activation_hook( __FILE__, 'activate_gravity_forms_editor_access' );

/**
 * Remove Gravity Forms capabilities from Editor role.
 * Runs during plugin deactivation.
 *
 * @access public
 * @return void
 */
function deactivate_gravity_forms_editor_access() {
 
 $role = get_role( 'editor' );
 $role->remove_cap( 'gform_full_access' );
}
// Register our de-activation hook
register_deactivation_hook( __FILE__, 'deactivate_gravity_forms_editor_access' );
