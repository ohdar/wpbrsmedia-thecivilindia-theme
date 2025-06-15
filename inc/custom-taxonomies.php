<?php
// Register Custom Taxonomy Type CurrentAffair
// Taxonomy Type Key: location

// Register Taxonomy Location
function create_location_tax() {

	$labels = array(
		'name'              => _x( 'Locations', 'taxonomy general name', 'wpbrsmedia' ),
		'singular_name'     => _x( 'Location', 'taxonomy singular name', 'wpbrsmedia' ),
		'search_items'      => __( 'Search Locations', 'wpbrsmedia' ),
		'all_items'         => __( 'All Locations', 'wpbrsmedia' ),
		'parent_item'       => __( 'Parent Location', 'wpbrsmedia' ),
		'parent_item_colon' => __( 'Parent Location:', 'wpbrsmedia' ),
		'edit_item'         => __( 'Edit Location', 'wpbrsmedia' ),
		'update_item'       => __( 'Update Location', 'wpbrsmedia' ),
		'add_new_item'      => __( 'Add New Location', 'wpbrsmedia' ),
		'new_item_name'     => __( 'New Location Name', 'wpbrsmedia' ),
		'menu_name'         => __( 'Location', 'wpbrsmedia' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Locations Area', 'wpbrsmedia' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
		'query_var' => 'true',
  		'rewrite' => array( 'slug' => 'districts' ),
	);
	register_taxonomy( 'location', array('currentaffair', 'cityprofile','naturalfood','indiatourism','govtprogram', 'education','leader', 'infrastructure','business', 'businessplan'), $args );

}
add_action( 'init', 'create_location_tax' );

function add_indian_states_and_uts_to_location_taxonomy() {
    $locations = array(
  		// Country
  		'India',
        // States of India
        'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 
        'Goa', 'Gujarat', 'Haryana', 'Himachal Pradesh', 'Jharkhand', 
        'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra', 'Manipur', 
        'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab', 
        'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Telangana', 'Tripura', 
        'Uttar Pradesh', 'Uttarakhand', 'West Bengal', 

        // Union Territories of India
        'Andaman and Nicobar Islands', 'Chandigarh', 'Dadra and Nagar Haveli and Daman and Diu', 
        'Lakshadweep', 'Delhi', 'Puducherry', 'Ladakh', 'Jammu and Kashmir'
    );

    foreach ($locations as $location) {
        // Insert each location as a term under the 'location' taxonomy
        wp_insert_term(
            $location,      // Term name
            'location'      // Taxonomy name
        );
    }
}
//add_action('init', 'add_indian_states_and_uts_to_location_taxonomy'); // Run once manually, then remove the hook because it will slow the server by running again and again


function add_indian_states_and_uts_with_descriptions() {
    $locations = array(
  		'India' => 'India is a country in South Asia, known for its diverse culture, history, and rich traditions. It is the worlds largest democracy, home to a variety of languages, religions, and cuisines.',
        'Andhra Pradesh' => 'Andhra Pradesh is a state in the southeastern coastal region of India. It is known for its rich culture, history, and beautiful beaches.',
        'Arunachal Pradesh' => 'Arunachal Pradesh is the northeastern state of India. It is known for its scenic beauty and is the easternmost state of India.',
        'Assam' => 'Assam is a state in northeastern India, known for its tea gardens, rich culture, and the Kaziranga National Park.',
        'Bihar' => 'Bihar is located in eastern India, known for its historical significance and being the center of ancient Indian culture and learning.',
        'Chhattisgarh' => 'Chhattisgarh is a state in central India, known for its dense forests, waterfalls, and tribal culture.',
        'Goa' => 'Goa is a state located on the western coast of India, famous for its beaches, Portuguese influence, and vibrant nightlife.',
        'Gujarat' => 'Gujarat is a state located on the western coast of India, known for its rich history, culture, and the Rann of Kutch.',
        'Haryana' => 'Haryana is a northern state in India, known for its agriculture, and proximity to the national capital, Delhi.',
        'Himachal Pradesh' => 'Himachal Pradesh is a northern state known for its mountainous terrain and beautiful hill stations.',
        'Jharkhand' => 'Jharkhand is a state in eastern India known for its forests, wildlife, and rich mineral resources.',
        'Karnataka' => 'Karnataka is a state in southern India, known for its IT hub, Bengaluru, and rich history and culture.',
        'Kerala' => 'Kerala is a state in southern India, famous for its backwaters, beaches, and unique culture.',
        'Madhya Pradesh' => 'Madhya Pradesh is a central Indian state known for its historical sites, temples, and wildlife.',
        'Maharashtra' => 'Maharashtra is a state in western India, home to Mumbai, the financial capital of India, and a rich cultural heritage.',
        'Manipur' => 'Manipur is a state in northeastern India, known for its classical dance, Imphal Valley, and vibrant culture.',
        'Meghalaya' => 'Meghalaya is a northeastern state of India, known for its high rainfall, picturesque landscapes, and vibrant culture.',
        'Mizoram' => 'Mizoram is a state in northeastern India, known for its lush green hills and strong tribal traditions.',
        'Nagaland' => 'Nagaland is a state in northeastern India, known for its rich cultural diversity and festivals.',
        'Odisha' => 'Odisha is a state on the eastern coast of India, famous for its temples, beaches, and the annual Rath Yatra.',
        'Punjab' => 'Punjab is a northern state of India known for its rich history, culture, and being the birthplace of Sikhism.',
        'Rajasthan' => 'Rajasthan is a northwestern state in India, famous for its palaces, forts, and desert landscapes.',
        'Sikkim' => 'Sikkim is a northeastern state known for its beautiful landscapes, the Kanchenjunga mountain, and Buddhist culture.',
        'Tamil Nadu' => 'Tamil Nadu is a state in southern India known for its ancient temples, culture, and the city of Chennai.',
        'Telangana' => 'Telangana is a state in southern India, with Hyderabad as its capital, known for its IT industry and rich cultural heritage.',
        'Tripura' => 'Tripura is a northeastern state known for its palaces, temples, and scenic beauty.',
        'Uttar Pradesh' => 'Uttar Pradesh is a northern state, home to the Taj Mahal, and is rich in history, culture, and religion.',
        'Uttarakhand' => 'Uttarakhand is a state in northern India known for its Himalayan mountains, pilgrimage sites, and natural beauty.',
        'West Bengal' => 'West Bengal is a state in eastern India, famous for its culture, literature, and Kolkata, the cultural capital.',
        'Andaman and Nicobar Islands' => 'Andaman and Nicobar Islands are a group of islands in the Bay of Bengal, known for their beaches, forests, and marine life.',
        'Chandigarh' => 'Chandigarh is a union territory and the capital of Punjab and Haryana, known for its modern architecture and clean streets.',
        'Dadra and Nagar Haveli and Daman and Diu' => 'Dadra and Nagar Haveli and Daman and Diu is a union territory in western India, known for its beaches and Portuguese influence.',
        'Lakshadweep' => 'Lakshadweep is a group of islands in the Arabian Sea, known for its coral reefs, beaches, and tropical climate.',
        'Delhi' => 'Delhi is the capital of India, known for its rich history, landmarks, and being the political and cultural center of the country.',
        'Puducherry' => 'Puducherry is a union territory known for its French colonial architecture, beaches, and vibrant culture.',
        'Ladakh' => 'Ladakh is a region in northern India, known for its Buddhist culture, monasteries, and breathtaking landscapes.',
        'Jammu and Kashmir' => 'Jammu and Kashmir is a northern state famous for its scenic beauty, lakes, and the Valley of Kashmir.'
    );

    foreach ($locations as $location => $description) {
        // Insert each location with a description into the 'location' taxonomy
        wp_insert_term(
            $location,      // Term name
            'location',     // Taxonomy name
            array(
                'description' => $description // Term description
            )
        );
    }
}
//add_action('init', 'add_indian_states_and_uts_with_descriptions'); // Run once manually, then remove the hook because it will slow the server by running again and again



function update_indian_states_and_uts_descriptions() {
    $locations = array(
		'India' => 'India is a country in South Asia, known for its diverse culture, history, and rich traditions. It is the worlds largest democracy, home to a variety of languages, religions, and cuisines.',
        'Andhra Pradesh' => 'Andhra Pradesh is a state in the southeastern coastal region of India. It is known for its rich culture, history, and beautiful beaches.',
        'Arunachal Pradesh' => 'Arunachal Pradesh is the northeastern state of India. It is known for its scenic beauty and is the easternmost state of India.',
        'Assam' => 'Assam is a state in northeastern India, known for its tea gardens, rich culture, and the Kaziranga National Park.',
        'Bihar' => 'Bihar is located in eastern India, known for its historical significance and being the center of ancient Indian culture and learning.',
        'Chhattisgarh' => 'Chhattisgarh is a state in central India, known for its dense forests, waterfalls, and tribal culture.',
        'Goa' => 'Goa is a state located on the western coast of India, famous for its beaches, Portuguese influence, and vibrant nightlife.',
        'Gujarat' => 'Gujarat is a state located on the western coast of India, known for its rich history, culture, and the Rann of Kutch.',
        'Haryana' => 'Haryana is a northern state in India, known for its agriculture, and proximity to the national capital, Delhi.',
        'Himachal Pradesh' => 'Himachal Pradesh is a northern state known for its mountainous terrain and beautiful hill stations.',
        'Jharkhand' => 'Jharkhand is a state in eastern India known for its forests, wildlife, and rich mineral resources.',
        'Karnataka' => 'Karnataka is a state in southern India, known for its IT hub, Bengaluru, and rich history and culture.',
        'Kerala' => 'Kerala is a state in southern India, famous for its backwaters, beaches, and unique culture.',
        'Madhya Pradesh' => 'Madhya Pradesh is a central Indian state known for its historical sites, temples, and wildlife.',
        'Maharashtra' => 'Maharashtra is a state in western India, home to Mumbai, the financial capital of India, and a rich cultural heritage.',
        'Manipur' => 'Manipur is a state in northeastern India, known for its classical dance, Imphal Valley, and vibrant culture.',
        'Meghalaya' => 'Meghalaya is a northeastern state of India, known for its high rainfall, picturesque landscapes, and vibrant culture.',
        'Mizoram' => 'Mizoram is a state in northeastern India, known for its lush green hills and strong tribal traditions.',
        'Nagaland' => 'Nagaland is a state in northeastern India, known for its rich cultural diversity and festivals.',
        'Odisha' => 'Odisha is a state on the eastern coast of India, famous for its temples, beaches, and the annual Rath Yatra.',
        'Punjab' => 'Punjab is a northern state of India known for its rich history, culture, and being the birthplace of Sikhism.',
        'Rajasthan' => 'Rajasthan is a northwestern state in India, famous for its palaces, forts, and desert landscapes.',
        'Sikkim' => 'Sikkim is a northeastern state known for its beautiful landscapes, the Kanchenjunga mountain, and Buddhist culture.',
        'Tamil Nadu' => 'Tamil Nadu is a state in southern India known for its ancient temples, culture, and the city of Chennai.',
        'Telangana' => 'Telangana is a state in southern India, with Hyderabad as its capital, known for its IT industry and rich cultural heritage.',
        'Tripura' => 'Tripura is a northeastern state known for its palaces, temples, and scenic beauty.',
        'Uttar Pradesh' => 'Uttar Pradesh is a northern state, home to the Taj Mahal, and is rich in history, culture, and religion.',
        'Uttarakhand' => 'Uttarakhand is a state in northern India known for its Himalayan mountains, pilgrimage sites, and natural beauty.',
        'West Bengal' => 'West Bengal is a state in eastern India, famous for its culture, literature, and Kolkata, the cultural capital.',
        'Andaman and Nicobar Islands' => 'Andaman and Nicobar Islands are a group of islands in the Bay of Bengal, known for their beaches, forests, and marine life.',
        'Chandigarh' => 'Chandigarh is a union territory and the capital of Punjab and Haryana, known for its modern architecture and clean streets.',
        'Dadra and Nagar Haveli and Daman and Diu' => 'Dadra and Nagar Haveli and Daman and Diu is a union territory in western India, known for its beaches and Portuguese influence.',
        'Lakshadweep' => 'Lakshadweep is a group of islands in the Arabian Sea, known for its coral reefs, beaches, and tropical climate.',
        'Delhi' => 'Delhi is the capital of India, known for its rich history, landmarks, and being the political and cultural center of the country.',
        'Puducherry' => 'Puducherry is a union territory known for its French colonial architecture, beaches, and vibrant culture.',
        'Ladakh' => 'Ladakh is a region in northern India, known for its Buddhist culture, monasteries, and breathtaking landscapes.',
        'Jammu and Kashmir' => 'Jammu and Kashmir is a northern state famous for its scenic beauty, lakes, and the Valley of Kashmir.'
    );

    foreach ($locations as $location => $description) {
        // Get the term by its name
        $term = get_term_by('name', $location, 'location');
        
        // If the term exists, update the description
        if ($term) {
            wp_update_term(
                $term->term_id, // Term ID
                'location',     // Taxonomy
                array(
                    'description' => $description // Update the description
                )
            );
        }
    }
}
//add_action('init', 'update_indian_states_and_uts_descriptions'); // Run once manually, then remove the hook because it will slow the server by running again and again





