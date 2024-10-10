<?php

/**
 * WPBRSMEDIA Theme Styles & Scripts.
 */

// 1. Register custom navigation menus
function administrationmenu() {

	$locations = array(
		'administrationmenu' => __( 'Administration Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'administrationmenu' );
// 1a. Register custom navigation menus
function govtprograms() {

	$locations = array(
		'govtprograms' => __( 'Major Govt. Programs', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'govtprograms' );

// 2. Register custom navigation menus
function politicsmenu() {

	$locations = array(
		'politicsmenu' => __( 'Politics Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'politicsmenu' );

// 3. Register custom navigation menus
function educationmenu() {

	$locations = array(
		'educationmenu' => __( 'Education Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'educationmenu' );

// 4. Register custom navigation menus
function leadersmenu() {

	$locations = array(
		'leadersmenu' => __( 'Leaders Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'leadersmenu' );
// 4a. Register custom navigation menus
function politicalleadersmenu() {

	$locations = array(
		'politicalleadersmenu' => __( 'Political Leaders Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'politicalleadersmenu' );
// 4b. Register custom navigation menus
function corporateleadersmenu() {

	$locations = array(
		'corporateleadersmenu' => __( 'Corporate Leaders Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'corporateleadersmenu' );
// 4c. Register custom navigation menus
function socialleadersmenu() {

	$locations = array(
		'socialleadersmenu' => __( 'Social Leaders Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'socialleadersmenu' );
// 4d. Register custom navigation menus
function martyrsleadersmenu() {

	$locations = array(
		'martyrsleadersmenu' => __( 'Martyrs Leaders Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'martyrsleadersmenu' );

// 5. Register custom navigation menus
function businessmenu() {

	$locations = array(
		'businessmenu' => __( 'Business Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'businessmenu' );

// 6. Register custom navigation menus
function bankingmenu() {

	$locations = array(
		'bankingmenu' => __( 'Banking Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'bankingmenu' );

// 7. Register custom navigation menus
function infrastructuremenu() {

	$locations = array(
		'infrastructuremenu' => __( 'Infrastructure Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'infrastructuremenu' );

// 8. Register custom navigation menus
function indiatourismmenu() {

	$locations = array(
		'indiatourismmenu' => __( 'India Tourism Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'indiatourismmenu' );

// 9. Register custom navigation menus
function currentaffairsmenu() {

	$locations = array(
		'currentaffairsmenu' => __( 'Current Affairs Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'currentaffairsmenu' );

// 10. Register custom navigation menus
function technologymenu() {

	$locations = array(
		'technologymenu' => __( 'Technology Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'technologymenu' );



