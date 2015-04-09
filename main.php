<?php
/**
 * Plugin Name: Star Wars Edge of the Empire Character Sheets
 * Plugin URI:
 * Description: Create and maintain your SW: Edge of the empire characters. Mobile Friendly.
 * Author: David Ellenburg
 * Version: 1.0
 * Author URI: http://www.ellenburgweb.com
 * License: GPL2
 **/


//Create menu pages
function sweecs_admin_actions() {
	add_menu_page( 'Star Wars Edge of the Empire Character Sheets', 'Character Sheets', 'manage_options', 'SWEECS', 'sweecs_information');
	//add_submenu_page( 'SWEECS', 'Star Wars Edge of the Empire Character Sheets', 'Setup', 'manage_options', 'SWEECSS', 'sweecs_admin');
}
function sweecs_admin() {
	//Admin Stuff
}
function sweecs_information() {
	//Gen Info
	?>
	<h1>Welcome to Star Wars Edge of the Empire Character Sheets</h1>
	<div>
		<p>
			You are currently running version 1.0. In this version you will have the following:
		</p>
		<ul>
			<li>Registered users can create one character.</li>
			<li>Registered users can view their character.</li>
			<li>Registered users can edit their character.</li>
			<li>Registered users can see what dice they are allowed to roll for each skill.</li>
		</ul>

		<p>
			This plugin requires the user to be logged in to see the any of the pages it provides. No need for you to create hidden pages.
		</p>
		<p>
			This plugin uses a simple shortcode. [sweecs page='']<br />
			Below are the pages that you will want to create and then add the shortcode. Only the shortcode is required, you can name the pages how ever you like.
		</p>

		<ul>
			<li>Page: Create new Character, Shortcode: [sweecs page='create']</li>
			<li>Page: Edit Character, Shortcode: [sweecs page='edit']</li>
			<li>Page: View Character, Shortcode: [sweecs page='view']</li>
			<li>Page: Your Dice, Shortcode: [sweecs page='dice']</li>
		</ul>

		<h2>Future Plans</h2>
		<ul>
			<li>Multiple Characters per user</li>
			<li>Talents</li>
			<li>Player Groups so a GM can access his players Characters</li>
			<li>Add expansions</li>
			<li>More as I find things to add</li>
		</ul>

		<p>
			If you like what I am doing with this plugin and have ideas to add to the future list, send me a message at <a href="mailto:ellenburgweb@gmail.com">ellenburgweb@gmail.com</a>
		</p>

	</div>
	<?php
}
// this actually adds the admin panel to the settings page
add_action('admin_menu', 'sweecs_admin_actions');

function sweecs_page($parms){
	if(is_user_logged_in()){
		//Start out by getting the current users info
		$user_info= wp_get_current_user();
		$user_id= $user_info->ID;
		//Set plugin paths
		$dir= plugin_dir_path( __FILE__ );
		$base_url= get_site_url();
		//set tables for pulling data
		global $wpdb;
		$character_table_name = $wpdb->prefix . 'sweecs_characters';
		$careers_table_name = $wpdb->prefix . 'sweecs_careers';
		$skills_table_name = $wpdb->prefix . 'sweecs_skills';
		//Call the page being asked for
		if(isset($parms['page'])){
			$page= $parms['page'];
			include_once("$dir/pages/$page.php");
		}
	}else{
		echo "You must be logged in to view this page.";
	}

}
//Shortcode [sweecs page='']
add_shortcode( 'sweecs', 'sweecs_page');


//data base insert info
global $sweecs_db_version;
$sweecs_db_version = '1.0';
function sweecs_install() {
	global $wpdb;
	global $sweecs_db_version;
	$character_table_name = $wpdb->prefix . 'sweecs_characters';
	$careers_table_name = $wpdb->prefix . 'sweecs_careers';
	$skills_table_name = $wpdb->prefix . 'sweecs_skills';

	$charset_collate = $wpdb->get_charset_collate();
	$sql = "CREATE TABLE $character_table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		userID text NOT NULL,
		player text NOT NULL,
		character_name text NOT NULL,
		race text NOT NULL,
		career text NOT NULL,
		specialization text NOT NULL,
		soak text NOT NULL,
		wounds text NOT NULL,
		strain text NOT NULL,
		defence text NOT NULL,
		brawn text NOT NULL,
		agility text NOT NULL,
		intellect text NOT NULL,
		cunning text NOT NULL,
		willpower text NOT NULL,
		presence text NOT NULL,
		Astrogation text NOT NULL,
		Athletics text NOT NULL,
		Brawl text NOT NULL,
		Charm text NOT NULL,
		Coercion text NOT NULL,
		Computers text NOT NULL,
		Cool text NOT NULL,
		Coordination text NOT NULL,
		Deception text NOT NULL,
		Discipline text NOT NULL,
		Gunnery text NOT NULL,
		Knowledge text NOT NULL,
		Knowledge_Core_Worlds text NOT NULL,
		Knowledge_Education text NOT NULL,
		Knowledge_Lore text NOT NULL,
		Knowledge_Outer_Rim text NOT NULL,
		Knowledge_Underworld text NOT NULL,
		Knowledge_Xenology text NOT NULL,
		Knowledge_Warfare text NOT NULL,
		Leadership text NOT NULL,
		Mechanics text NOT NULL,
		Medicine text NOT NULL,
		Melee text NOT NULL,
		Negotiation text NOT NULL,
		Perception text NOT NULL,
		Piloting_Planetary text NOT NULL,
		Piloting_Space text NOT NULL,
		Ranged_Heavy text NOT NULL,
		Ranged_Light text NOT NULL,
		Resilience text NOT NULL,
		Skulduggery text NOT NULL,
		Stealth text NOT NULL,
		Streetwise text NOT NULL,
		Survival text NOT NULL,
		Vigilance text NOT NULL,
		UNIQUE KEY id (id)
	) $charset_collate;";
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
	//Version 1.1.1 added Careers
	$sql = "CREATE TABLE $careers_table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		career text NOT NULL,
		UNIQUE KEY id (id)
	) $charset_collate;";
	dbDelta( $sql );
	//insert data
	$careers= array('Bounty_Hunter', 'Colonist', 'Explorer', 'Hired_Gun', 'Smuggler', 'Technician');
	foreach($careers as $career){
		$wpdb->insert(
			$careers_table_name,
			array(
				'career' => $career
			)
		);
	}
	//Version 1.1.2 added skills
	$sql = "CREATE TABLE $skills_table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		skill text NOT NULL,
		ability text NOT NULL,
		UNIQUE KEY id (id)
	) $charset_collate;";
	dbDelta( $sql );
	//insert data
	$skills= array(
		array('Astrogation','intellect'),
		array('Athletics','brawn'),
		array('Brawl','brawn'),
		array('Charm','presence'),
		array('Coercion','willpower'),
		array('Computers','intellect'),
		array('Cool','presence'),
		array('Coordination','agility'),
		array('Deception','cunning'),
		array('Discipline','willpower'),
		array('Gunnery','agility'),
		array('Knowledge','intellect'),
		array('Knowledge_Core_Worlds','intellect'),
		array('Knowledge_Education','intellect'),
		array('Knowledge_Lore','intellect'),
		array('Knowledge_Outer_Rim','intellect'),
		array('Knowledge_Underworld','intellect'),
		array('Knowledge_Xenology','intellect'),
		array('Knowledge_Warfare','intellect'),
		array('Leadership','presence'),
		array('Mechanics','intellect'),
		array('Medicine','intellect'),
		array('Melee','brawn'),
		array('Negotiation','presence'),
		array('Perception','cunning'),
		array('Piloting_Planetary','agility'),
		array('Piloting_Space','agility'),
		array('Ranged_Heavy','agility'),
		array('Ranged_Light','agility'),
		array('Resilience','brawn'),
		array('Skulduggery','cunning'),
		array('Stealth','agility'),
		array('Streetwise','cunning'),
		array('Survival','cunning'),
		array('Vigilance','willpower')
		);
	foreach($skills as $skill){
		$wpdb->insert(
			$skills_table_name,
			array(
				'skill' => $skill[0],
				'ability' => $skill[1]
			)
		);
	}
	update_option( 'sweecs_db_version', $sweecs_db_version );
}
//calling the db install only on activation
register_activation_hook( __FILE__, 'sweecs_install' );
//Update DB Tables
function sweecs_update_db_check() {
	global $sweecs_db_version;
	if ( get_option( 'sweecs_db_version' ) != $sweecs_db_version ) {
		sweecs_install();
	}
}
add_action( 'plugins_loaded', 'sweecs_update_db_check' );