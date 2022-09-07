<?php
/*
* Customizer Config
*/
Kirki::add_config('wpbrsmedia_options', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
));

/*---------------Header Pannel & Section--------------------*/
Kirki::add_panel('header_settings', array(
    'priority'    => 60,
    'title'       => esc_html__('Header Settings', 'kirki'),
    'description' => esc_html__('Manage Header & Menu Layout', 'kirki'),
));
/*---------------Header Pannel & Section--------------------*/

/*---------------Home Pannel & Section--------------------*/
Kirki::add_panel('home_settings', array(
    'priority'    => 60,
    'title'       => esc_html__('Home Settings', 'kirki'),
    'description' => esc_html__('Manage Home Layout', 'kirki'),
));
/*---------------Home Pannel & Section--------------------*/

/*---------------Footer Pannel & Section--------------------*/

Kirki::add_panel('footer_settings', array(
    'priority'    => 60,
    'title'       => esc_html__('Footer Settings', 'kirki'),
    'description' => esc_html__('Manage Footer Layout', 'kirki'),
));

Kirki::add_section('footer_layout_settings', array(
    'title'          => esc_html__('Footer Layout Color', 'kirki'),
    'description'    => esc_html__('Manage Footer Layout.', 'kirki'),
    'panel'          => 'footer_settings',
    'priority'       => 160,
    'icon'  => 'dashicons-desktop' /* adding icons to menus layout*/
));

/*-----------------------------------*/

Kirki::add_section('header_layout_settings', array(
    'title'          => esc_html__('Logo Layout Color', 'kirki'),
    'description'    => esc_html__('Manage Header Layout.', 'kirki'),
    'panel'          => 'header_settings',
    'priority'       => 160,
    'icon'  => 'dashicons-desktop' /* adding icons to menus layout*/
));
Kirki::add_section('menu_settings', array(
    'title'          => esc_html__('Menu Settings', 'kirki'),
    'description'    => esc_html__('Manage Menu Layout and Settings.', 'kirki'),
    'panel'          => 'header_settings',
	'priority'       => 160,
	'icon'  => 'dashicons-layout'   /* adding icons to menus layout*/
));

Kirki::add_section('typography_settings', array(
    'title'          => esc_html__('Typography', 'kirki'),
    'description'    => esc_html__('Text Style & Options', 'kirki'),
    'panel'          => 'home_settings',
    'priority'       => 10,
    'icon'  => 'dashicons-editor-spellcheck'
));
Kirki::add_section('homepage_settings', array(
    'title'          => esc_html__('Homepage Layout', 'kirki'),
    'description'    => esc_html__('Manage Homepage Layout', 'kirki'),
    'panel'          => 'home_settings',
    'priority'       => 10,
    'icon'  => 'dashicons-layout'
));

Kirki::add_section('homeintro_settings', array(
    'title'          => esc_html__('Homeintro Layout', 'kirki'),
    'description'    => esc_html__('Manage Homeintro Layout', 'kirki'),
    'panel'          => 'home_settings',
    'priority'       => 10,
    'icon'  => 'dashicons-layout'
));

/*------------Footer Field-------------*/
Kirki::add_field('wpbrsmedia_options', [
    'type'        => 'background',
    'settings'    => 'footer_settings',
    'label'       => esc_html__('Background Control', 'kirki'),
    'description' => esc_html__('Background conrols are pretty complex - but extremely useful if properly used.', 'kirki'),
    'section'     => 'footer_layout_settings',
    'default'     => [
        'background-color'      => 'rgba(255,255,255,1)',
        'background-image'      => '',
        'background-repeat'     => 'repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '#footer',
        ],
    ],
]);
/*------------Footer Field-------------*/

Kirki::add_field('wpbrsmedia_options', [
    'type'        => 'background',
    'settings'    => 'header_background_setting',
    'label'       => esc_html__('Background Control', 'kirki'),
    'description' => esc_html__('Background conrols are pretty complex - but extremely useful if properly used.', 'kirki'),
    'section'     => 'header_layout_settings',
    'default'     => [
        'background-color'      => 'rgba(255,255,255,1)',
        'background-image'      => '',
        'background-repeat'     => 'repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '#header',
        ],
    ],
]);

Kirki::add_field('wpbrsmedia_options', [
    'type'        => 'background',
    'settings'    => 'menu_background_setting',
    'label'       => esc_html__('Menu Background', 'kirki'),
    'description' => esc_html__('', 'kirki'),
    'section'     => 'menu_settings',
    'default'     => [
        'background-color'      => '#222',
        'background-image'      => '',
        'background-repeat'     => 'repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '#nav',
        ],
    ],
]);

Kirki::add_field('wpbrsmedia_options', [
    'type'        => 'background',
    'settings'    => 'menu_active_background_setting',
    'label'       => esc_html__('Menu Acvtive & Hover', 'kirki'),
    'description' => esc_html__('', 'kirki'),
    'section'     => 'menu_settings',
    'default'     => [
        'background-color'      => '#d52349',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '#nav > ul > li > a:hover, #nav > ul > li.current-menu-item > a',
        ],
    ],
]);

Kirki::add_field('wpbrsmedia_options', [
    'type'        => 'typography',
    'settings'    => 'heading_settings',
    'label'       => esc_html__('Heading 1', 'kirki'),
    'section'     => 'typography_settings',
    'default'     => [
        'font-family'    => 'Roboto',
        'variant'        => 'regular',
        'font-size'      => '48px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'color'          => '#333333',
        'text-transform' => 'none',
        'text-align'     => 'left',
    ],
    'choices' => [
        'fonts' => [
            'google'   => [ 'popularity', 50 ],
            'standard' => [
                'Georgia,Times,"Times New Roman",serif',
                'Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
            ],
        ],
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => 'h2',
        ],
    ],
]);


/*---------Banner Enable Disable---------*/

Kirki::add_field('wpbrsmedia_options', [
    'type'        => 'switch',
    'settings'    => 'toggle_home_banner',
    'label'       => esc_html__('Homepage Banner', 'kirki'),
    'section'     => 'homepage_settings',
    'default'     => '1',
    'priority'    => 1,
    'choices'     => [
        'on'  => esc_html__('Enable', 'kirki'),
        'off' => esc_html__('Disable', 'kirki'),
    ],
]);

Kirki::add_field('wpbrsmedia_options', [
    'type'        => 'background',
    'settings'    => 'background_setting',
    'label'       => esc_html__('Home Banner Background Control', 'kirki'),
    'description' => esc_html__('Background conrols are pretty complex - but extremely useful if properly used.', 'kirki'),
    'section'     => 'homepage_settings',
    'default'     => [
        'background-color'      => 'rgba(255,255,255,1)',
        'background-image'      => '',
        'background-repeat'     => 'repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '#banner',
        ],
    ],
]);

Kirki::add_field('wpbrsmedia_options', [
    'type'     => 'text',
    'settings' => 'home_banner_heading_text',
    'label'    => esc_html__('Banner Heading', 'kirki'),
    'section'  => 'homepage_settings',
    'default'  => esc_html__('Howdy. This is Dopetrope.', 'kirki'),
    'priority' => 10,
]);


Kirki::add_field('wpbrsmedia_options', [
    'type'     => 'textarea',
    'settings' => 'home_banner_paragraph_text',
    'label'    => esc_html__('Banner Pragarph Text', 'kirki'),
    'section'  => 'homepage_settings',
    'default'  => esc_html__('A responsive template by HTML5 UP.', 'kirki'),
    'priority' => 10,
]);

/*---------Banner Enable Disable---------*/

/*---------Intro Section Enable Disable---------*/
Kirki::add_field('wpbrsmedia_options', [
    'type'        => 'switch',
    'settings'    => 'toggle_home_intro',
    'label'       => esc_html__('Homepage Intro', 'kirki'),
    'section'     => 'homeintro_settings',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__('Enable', 'kirki'),
        'off' => esc_html__('Disable', 'kirki'),
    ],
]);

Kirki::add_field('wpbrsmedia_options', [
    'type'        => 'background',
    'settings'    => 'intro_background_setting',
    'label'       => esc_html__('Home Intro Background Control', 'kirki'),
    'description' => esc_html__('Background conrols are pretty complex - but extremely useful if properly used.', 'kirki'),
    'section'     => 'homeintro_settings',
    'default'     => [
        'background-color'      => 'rgba(255,255,255,1)',
        'background-image'      => '',
        'background-repeat'     => 'repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '#homeintro',
        ],
    ],
]);


Kirki::add_field('wpbrsmedia_options', [
    'type'     => 'dashicons',
    'settings' => 'intro_box_1_icon',
    'label'    => esc_html__('Box 1 Icon', 'kirki'),
    'section'  => 'homeintro_settings',
    'default'  => 'admin-generic',
    'priority' => 10,
]);

Kirki::add_field('wpbrsmedia_options', [
    'type'     => 'text',
    'settings' => 'intro_box_1_heading_text',
    'label'    => esc_html__('Intro One Heading', 'kirki'),
    'section'  => 'homeintro_settings',
    'default'  => esc_html__('Howdy. This is Dopetrope.', 'kirki'),
    'priority' => 10,
]);

Kirki::add_field('wpbrsmedia_options', [
    'type'     => 'textarea',
    'settings' => 'intro_box_1_paragraph_text',
    'label'    => esc_html__('Intro One Pragarph Text', 'kirki'),
    'section'  => 'homeintro_settings',
    'default'  => esc_html__('A responsive template by HTML5 UP.', 'kirki'),
    'priority' => 10,
]);


Kirki::add_field('wpbrsmedia_options', [
    'type'     => 'dashicons',
    'settings' => 'intro_box_2_icon',
    'label'    => esc_html__('Box 2 Icon', 'kirki'),
    'section'  => 'homeintro_settings',
    'default'  => 'admin-generic',
    'priority' => 10,
]);

Kirki::add_field('wpbrsmedia_options', [
    'type'     => 'text',
    'settings' => 'intro_box_2_heading_text',
    'label'    => esc_html__('Intro Two Heading', 'kirki'),
    'section'  => 'homeintro_settings',
    'default'  => esc_html__('Howdy. This is Dopetrope.', 'kirki'),
    'priority' => 10,
]);

Kirki::add_field('wpbrsmedia_options', [
    'type'     => 'textarea',
    'settings' => 'intro_box_2_paragraph_text',
    'label'    => esc_html__('Intro Two Pragarph Text', 'kirki'),
    'section'  => 'homeintro_settings',
    'default'  => esc_html__('A responsive template by HTML5 UP.', 'kirki'),
    'priority' => 10,
]);

Kirki::add_field('wpbrsmedia_options', [
    'type'     => 'dashicons',
    'settings' => 'intro_box_3_icon',
    'label'    => esc_html__('Box 3 Icon', 'kirki'),
    'section'  => 'homeintro_settings',
    'default'  => 'admin-generic',
    'priority' => 10,
]);

Kirki::add_field('wpbrsmedia_options', [
    'type'     => 'text',
    'settings' => 'intro_box_3_heading_text',
    'label'    => esc_html__('Intro Three Heading', 'kirki'),
    'section'  => 'homeintro_settings',
    'default'  => esc_html__('Howdy. This is Dopetrope.', 'kirki'),
    'priority' => 10,
]);

Kirki::add_field('wpbrsmedia_options', [
    'type'     => 'textarea',
    'settings' => 'intro_box_3_paragraph_text',
    'label'    => esc_html__('Intro Three Pragarph Text', 'kirki'),
    'section'  => 'homeintro_settings',
    'default'  => esc_html__('A responsive template by HTML5 UP.', 'kirki'),
    'priority' => 10,
]);

Kirki::add_field('wpbrsmedia_options', [
    'type'     => 'dashicons',
    'settings' => 'intro_box_4_icon',
    'label'    => esc_html__('Box 4 Icon', 'kirki'),
    'section'  => 'homeintro_settings',
    'default'  => 'admin-generic',
    'priority' => 10,
]);

Kirki::add_field('wpbrsmedia_options', [
    'type'     => 'text',
    'settings' => 'intro_box_4_heading_text',
    'label'    => esc_html__('Intro Four Heading', 'kirki'),
    'section'  => 'homeintro_settings',
    'default'  => esc_html__('Howdy. This is Dopetrope.', 'kirki'),
    'priority' => 10,
]);

Kirki::add_field('wpbrsmedia_options', [
    'type'     => 'textarea',
    'settings' => 'intro_box_4_paragraph_text',
    'label'    => esc_html__('Intro Four Pragarph Text', 'kirki'),
    'section'  => 'homeintro_settings',
    'default'  => esc_html__('A responsive template by HTML5 UP.', 'kirki'),
    'priority' => 10,
]);

/*---------Intro Section Enable Disable---------*/




