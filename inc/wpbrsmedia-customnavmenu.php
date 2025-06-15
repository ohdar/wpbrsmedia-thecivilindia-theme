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

// 11. Register custom navigation menus
function cityprofilemenu() {

	$locations = array(
		'cityprofilemenu' => __( 'City Profile Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'cityprofilemenu' );

// 12. Register custom navigation menus
function stateprofilemenu() {

	$locations = array(
		'stateprofilemenu' => __( 'State Profile Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'stateprofilemenu' );

// 13. Register custom navigation menus Agrifoods
function agrifoodsmenu() {

	$locations = array(
		'agrifoodsmenu' => __( 'Agricultural Foods Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'agrifoodsmenu' );

// 14. Register custom navigation menus Treefoods
function treefoodsmenu() {

	$locations = array(
		'treefoodsmenu' => __( 'Tree Foods Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'treefoodsmenu' );


// 15. Register custom navigation menus

// 15. Mythology
function mythologymenu() {
	$locations = array(
		'mythologymenu' => __( 'Mythology Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'mythologymenu' );

// 16. Yoga
function yogamenu() {
	$locations = array(
		'yogamenu' => __( 'Yoga Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'yogamenu' );

// 17. Ayurveda
function ayurvedamenu() {
	$locations = array(
		'ayurvedamenu' => __( 'Ayurveda Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'ayurvedamenu' );

// 18. Healthcare
function healthcaremenu() {
	$locations = array(
		'healthcaremenu' => __( 'Healthcare Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'healthcaremenu' );

// 19. Animal Kingdom
function animalkingdommenu() {
	$locations = array(
		'animalkingdommenu' => __( 'Animal Kingdom Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'animalkingdommenu' );

// 20. Plant Kingdom
function plantkingdommenu() {
	$locations = array(
		'plantkingdommenu' => __( 'Plant Kingdom Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'plantkingdommenu' );

// 21. School Profile
function schoolprofilemenu() {
	$locations = array(
		'schoolprofilemenu' => __( 'School Profile Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'schoolprofilemenu' );

// 22. Company Profile
function companyprofilemenu() {
	$locations = array(
		'companyprofilemenu' => __( 'Company Profile Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'companyprofilemenu' );

// 23. Non-Profit Organization
function nonprofitorgmenu() {
	$locations = array(
		'nonprofitorgmenu' => __( 'Non-Profit Organization Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'nonprofitorgmenu' );

// 24. Government Organization
function govtorganizationmenu() {
	$locations = array(
		'govtorganizationmenu' => __( 'Government Organization Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'govtorganizationmenu' );

// 25. Ministry Profile
function ministryprofilemenu() {
	$locations = array(
		'ministryprofilemenu' => __( 'Ministry Profile Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'ministryprofilemenu' );

// 26. Business Plan
function businessplanmenu() {
	$locations = array(
		'businessplanmenu' => __( 'Business Plan Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'businessplanmenu' );

// 27. Food Recipes
function foodrecipesmenu() {
	$locations = array(
		'foodrecipesmenu' => __( 'Food Recipes Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'foodrecipesmenu' );

// 28. Food indianrivers
function indianriversmenu() {
	$locations = array(
		'indianriversmenu' => __( 'Indian Rivers Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'indianriversmenu' );

// 29. Multipurpose Menu for More Links
function multipurposemenu() {
	$locations = array(
		'multipurposemenu' => __( 'Multipurpose Menu', 'wpbrsmedia' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'multipurposemenu' );


