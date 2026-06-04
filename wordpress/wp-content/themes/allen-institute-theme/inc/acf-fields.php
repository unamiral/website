<?php
/**
 * Register ACF Fields via PHP for the Free Version of ACF
 */

if( function_exists('acf_add_local_field_group') ):

    // Front Page Field Group
    acf_add_local_field_group(array(
        'key' => 'group_front_page',
        'title' => 'Front Page Settings',
        'fields' => array(
            // --- TAB: HERO ---
            array(
                'key' => 'field_tab_hero',
                'label' => 'Hero Section',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
                'instructions' => 'The main large text displayed at the top of the homepage over the background video.',
                'default_value' => 'accelerating science',
            ),
            array(
                'key' => 'field_media_cards_title',
                'label' => 'Section Title',
                'name' => 'media_cards_title',
                'type' => 'text',
                'instructions' => 'The heading for the podcasts and media links section.',
                'default_value' => 'allen institute media',
            ),
            array(
                'key' => 'field_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'text',
                'default_value' => 'for a healthier world',
            ),
            array(
                'key' => 'field_hero_video_desktop',
                'label' => 'Hero Video (Desktop)',
                'name' => 'hero_video_desktop',
                'type' => 'file',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_hero_video_mobile',
                'label' => 'Hero Video (Mobile)',
                'name' => 'hero_video_mobile',
                'type' => 'file',
                'instructions' => 'Upload an MP4 video file optimized for mobile screens (portrait orientation).',
                'return_format' => 'url',
            ),
            
            // --- TAB: ACCELERATORS ---
            array(
                'key' => 'field_tab_accelerators',
                'label' => 'Accelerators Section',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_accelerators_heading',
                'label' => 'Main Heading',
                'name' => 'accelerators_heading',
                'type' => 'text',
                'default_value' => 'science done differently. shared openly.',
            ),
            array(
                'key' => 'field_accelerators_subheading',
                'label' => 'Subheading',
                'name' => 'accelerators_subheading',
                'type' => 'textarea',
            ),
            array(
                'key' => 'field_accelerators_description',
                'label' => 'Description',
                'name' => 'accelerators_description',
                'type' => 'wysiwyg',
            ),
            // The repeating accelerators can be standard WP Queries of a CPT or a Repeater (Repeater is Pro though!).
            // Since it's Free ACF, we will use a Custom Post Type 'Accelerator' to loop through them, or just standard Posts with a category.
            // Wait, Repeater is Pro. We must use a CPT for repeating items if we only have Free ACF.
            
            // --- TAB: EXPLORE UPDATES ---
            array(
                'key' => 'field_tab_explore_updates',
                'label' => 'Explore Updates Section',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_updates_heading',
                'label' => 'Updates Heading',
                'name' => 'updates_heading',
                'type' => 'text',
                'default_value' => 'explore updates',
            ),

            // --- TAB: DISCOVER MORE ---
            array(
                'key' => 'field_tab_discover_more',
                'label' => 'Discover More Section',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_discover_heading',
                'label' => 'Discover Heading',
                'name' => 'discover_heading',
                'type' => 'text',
                'default_value' => 'discover more',
            ),
            array(
                'key' => 'field_discover_more_title',
                'label' => 'Title',
                'name' => 'discover_more_title',
                'type' => 'text',
                'instructions' => 'The heading for the section below the accelerators.',
                'default_value' => 'discover more at the allen institute',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'front-page.php',
                ),
            ),
            // Alternatively, allow it if it is the static front page
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => true,
        'description' => '',
    ));

    // Accelerator Fields
    acf_add_local_field_group(array(
        'key' => 'group_accelerators',
        'title' => 'Accelerator Details',
        'fields' => array(
            array(
                'key' => 'field_accelerator_link',
                'label' => 'Link URL',
                'name' => 'accelerator_link',
                'type' => 'url',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'accelerators',
                ),
            ),
        ),
    ));

    // Carousel Slide Fields
    acf_add_local_field_group(array(
        'key' => 'group_slides',
        'title' => 'Slide Details',
        'fields' => array(
            array(
                'key' => 'field_slide_type',
                'label' => 'Slide Type Label',
                'name' => 'slide_type',
                'type' => 'text',
                'default_value' => 'news',
                'instructions' => 'e.g., news, podcasts',
            ),
            array(
                'key' => 'field_slide_link',
                'label' => 'Link URL',
                'name' => 'slide_link',
                'type' => 'url',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'slides',
                ),
            ),
        ),
    ));

    // Updates Fields
    acf_add_local_field_group(array(
        'key' => 'group_updates',
        'title' => 'Update Details',
        'fields' => array(
            array(
                'key' => 'field_update_link',
                'label' => 'Link URL',
                'name' => 'update_link',
                'type' => 'url',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'updates',
                ),
            ),
        ),
    ));



    acf_add_local_field_group(array(
        'key' => 'group_page_about',
        'title' => 'About Page Settings',
        'fields' => array(
            array(
                'key' => 'field_about_1',
                'label' => 'H1 Text 1',
                'name' => 'about_field_1',
                'type' => 'text',
                'default_value' => 'impact',
            ),
            array(
                'key' => 'field_about_2',
                'label' => 'H2 Text 2',
                'name' => 'about_field_2',
                'type' => 'text',
                'default_value' => 'Our research and open science resources are empowering scientists around the world to pursue bold solutions to the most pressing challenges in human health.',
            ),
            array(
                'key' => 'field_about_3',
                'label' => 'P Text 3',
                'name' => 'about_field_3',
                'type' => 'textarea',
                'default_value' => 'From the lab to the clinic to the classroom, the work of the Allen Institute is designed to create impact that compounds over time.',
            ),
            array(
                'key' => 'field_about_4',
                'label' => 'P Text 4',
                'name' => 'about_field_4',
                'type' => 'textarea',
                'default_value' => '‍We generate foundational knowledge and tools that scientists everywhere build on — accelerating progress on diseases like Alzheimer\'s, cancer, autoimmune conditions, and more.',
            ),
            array(
                'key' => 'field_about_5',
                'label' => 'P Text 5',
                'name' => 'about_field_5',
                'type' => 'textarea',
                'default_value' => 'Our commitment to open science means every dataset, tool, and discovery we produce belongs to the world — multiplying our impact across the entire science community.',
            ),
            array(
                'key' => 'field_about_6',
                'label' => 'H2 Text 6',
                'name' => 'about_field_6',
                'type' => 'text',
                'default_value' => 'explore our impact',
            ),
            array(
                'key' => 'field_about_7',
                'label' => 'H2 Text 7',
                'name' => 'about_field_7',
                'type' => 'text',
                'default_value' => 'open science,unlimited impact',
            ),
            array(
                'key' => 'field_about_8',
                'label' => 'P Text 8',
                'name' => 'about_field_8',
                'type' => 'textarea',
                'default_value' => 'Since our founding, the Allen Institute has made open science central to everything we do. We freely share our data, analytical tools, models, methods, and discoveries — so that scientists anywhere can build on our work and accelerate their own. Our open resources have been accessed by researchers in more than 200 countries, cited thousands of times, and used to advance research into some of the most devastating diseases affecting humanity today.',
            ),
            array(
                'key' => 'field_about_9',
                'label' => 'H2 Text 9',
                'name' => 'about_field_9',
                'type' => 'text',
                'default_value' => 'our impact in action',
            ),
            array(
                'key' => 'field_about_10',
                'label' => 'H1 Text 10',
                'name' => 'about_field_10',
                'type' => 'text',
                'default_value' => 'science donedifferently. shared openly.',
            ),
            array(
                'key' => 'field_about_11',
                'label' => 'H3 Text 11',
                'name' => 'about_field_11',
                'type' => 'text',
                'default_value' => 'explore our accelerators',
            ),
            array(
                'key' => 'field_about_12',
                'label' => 'H3 Text 12',
                'name' => 'about_field_12',
                'type' => 'text',
                'default_value' => 'brain science',
            ),
            array(
                'key' => 'field_about_13',
                'label' => 'H3 Text 13',
                'name' => 'about_field_13',
                'type' => 'text',
                'default_value' => 'cell science',
            ),
            array(
                'key' => 'field_about_14',
                'label' => 'H3 Text 14',
                'name' => 'about_field_14',
                'type' => 'text',
                'default_value' => 'neural dynamics',
            ),
            array(
                'key' => 'field_about_15',
                'label' => 'H3 Text 15',
                'name' => 'about_field_15',
                'type' => 'text',
                'default_value' => 'immunology',
            ),
            array(
                'key' => 'field_about_16',
                'label' => 'H3 Text 16',
                'name' => 'about_field_16',
                'type' => 'text',
                'default_value' => 'synthetic biology',
            ),
            array(
                'key' => 'field_about_17',
                'label' => 'H3 Text 17',
                'name' => 'about_field_17',
                'type' => 'text',
                'default_value' => 'Brain Health',
            ),
            array(
                'key' => 'field_about_18',
                'label' => 'H3 Text 18',
                'name' => 'about_field_18',
                'type' => 'text',
                'default_value' => 'research',
            ),
            array(
                'key' => 'field_about_19',
                'label' => 'H3 Text 19',
                'name' => 'about_field_19',
                'type' => 'text',
                'default_value' => 'education',
            ),
            array(
                'key' => 'field_about_20',
                'label' => 'H3 Text 20',
                'name' => 'about_field_20',
                'type' => 'text',
                'default_value' => 'impact',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-about.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_page_our-research',
        'title' => 'Research Page Settings',
        'fields' => array(
            array(
                'key' => 'field_our-research_1',
                'label' => 'H2 Text 1',
                'name' => 'our-research_field_1',
                'type' => 'text',
                'default_value' => 'one institute, many interconnected questions',
            ),
            array(
                'key' => 'field_our-research_2',
                'label' => 'P Text 2',
                'name' => 'our-research_field_2',
                'type' => 'textarea',
                'default_value' => 'Ouracceleratorsspan scientific fields and disciplines, but they don\'t operate in isolation. Discoveries in one area illuminate questions in another, and our multidisciplinary teams work across boundaries. Each program runs ambitious projects with defined outcomes, generating data, tools, and knowledge shared freely with the global scientific community. This is how we accelerate discovery — not just here, but everywhere.',
            ),
            array(
                'key' => 'field_our-research_3',
                'label' => 'H1 Text 3',
                'name' => 'our-research_field_3',
                'type' => 'text',
                'default_value' => 'science donedifferently. shared openly.',
            ),
            array(
                'key' => 'field_our-research_4',
                'label' => 'H3 Text 4',
                'name' => 'our-research_field_4',
                'type' => 'text',
                'default_value' => 'explore our accelerators',
            ),
            array(
                'key' => 'field_our-research_5',
                'label' => 'H3 Text 5',
                'name' => 'our-research_field_5',
                'type' => 'text',
                'default_value' => 'brain science',
            ),
            array(
                'key' => 'field_our-research_6',
                'label' => 'H3 Text 6',
                'name' => 'our-research_field_6',
                'type' => 'text',
                'default_value' => 'cell science',
            ),
            array(
                'key' => 'field_our-research_7',
                'label' => 'H3 Text 7',
                'name' => 'our-research_field_7',
                'type' => 'text',
                'default_value' => 'neural dynamics',
            ),
            array(
                'key' => 'field_our-research_8',
                'label' => 'H3 Text 8',
                'name' => 'our-research_field_8',
                'type' => 'text',
                'default_value' => 'immunology',
            ),
            array(
                'key' => 'field_our-research_9',
                'label' => 'H3 Text 9',
                'name' => 'our-research_field_9',
                'type' => 'text',
                'default_value' => 'synthetic biology',
            ),
            array(
                'key' => 'field_our-research_10',
                'label' => 'H3 Text 10',
                'name' => 'our-research_field_10',
                'type' => 'text',
                'default_value' => 'Brain Health',
            ),
            array(
                'key' => 'field_our-research_11',
                'label' => 'H2 Text 11',
                'name' => 'our-research_field_11',
                'type' => 'text',
                'default_value' => 'find us at these events',
            ),
            array(
                'key' => 'field_our-research_12',
                'label' => 'H3 Text 12',
                'name' => 'our-research_field_12',
                'type' => 'text',
                'default_value' => 'research',
            ),
            array(
                'key' => 'field_our-research_13',
                'label' => 'H3 Text 13',
                'name' => 'our-research_field_13',
                'type' => 'text',
                'default_value' => 'education',
            ),
            array(
                'key' => 'field_our-research_14',
                'label' => 'H3 Text 14',
                'name' => 'our-research_field_14',
                'type' => 'text',
                'default_value' => 'impact',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-our-research.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_page_news',
        'title' => 'News Page Settings',
        'fields' => array(
            array(
                'key' => 'field_news_1',
                'label' => 'H2 Text 1',
                'name' => 'news_field_1',
                'type' => 'text',
                'default_value' => 'Brain Health accelerator to transform our understanding of brain disorders and develop new treatments',
            ),
            array(
                'key' => 'field_news_2',
                'label' => 'H1 Text 2',
                'name' => 'news_field_2',
                'type' => 'text',
                'default_value' => 'latest stories',
            ),
            array(
                'key' => 'field_news_3',
                'label' => 'P Text 3',
                'name' => 'news_field_3',
                'type' => 'textarea',
                'default_value' => 'Get in touch for media inquiries and resources for covering science at the scale of greatest impact.',
            ),
            array(
                'key' => 'field_news_4',
                'label' => 'H1 Text 4',
                'name' => 'news_field_4',
                'type' => 'text',
                'default_value' => 'explore press & media',
            ),
            array(
                'key' => 'field_news_5',
                'label' => 'H1 Text 5',
                'name' => 'news_field_5',
                'type' => 'text',
                'default_value' => 'science donedifferently. shared openly.',
            ),
            array(
                'key' => 'field_news_6',
                'label' => 'H3 Text 6',
                'name' => 'news_field_6',
                'type' => 'text',
                'default_value' => 'explore our accelerators',
            ),
            array(
                'key' => 'field_news_7',
                'label' => 'H3 Text 7',
                'name' => 'news_field_7',
                'type' => 'text',
                'default_value' => 'brain science',
            ),
            array(
                'key' => 'field_news_8',
                'label' => 'H3 Text 8',
                'name' => 'news_field_8',
                'type' => 'text',
                'default_value' => 'cell science',
            ),
            array(
                'key' => 'field_news_9',
                'label' => 'H3 Text 9',
                'name' => 'news_field_9',
                'type' => 'text',
                'default_value' => 'neural dynamics',
            ),
            array(
                'key' => 'field_news_10',
                'label' => 'H3 Text 10',
                'name' => 'news_field_10',
                'type' => 'text',
                'default_value' => 'immunology',
            ),
            array(
                'key' => 'field_news_11',
                'label' => 'H3 Text 11',
                'name' => 'news_field_11',
                'type' => 'text',
                'default_value' => 'synthetic biology',
            ),
            array(
                'key' => 'field_news_12',
                'label' => 'H3 Text 12',
                'name' => 'news_field_12',
                'type' => 'text',
                'default_value' => 'Brain Health',
            ),
            array(
                'key' => 'field_news_13',
                'label' => 'H3 Text 13',
                'name' => 'news_field_13',
                'type' => 'text',
                'default_value' => 'research',
            ),
            array(
                'key' => 'field_news_14',
                'label' => 'H3 Text 14',
                'name' => 'news_field_14',
                'type' => 'text',
                'default_value' => 'education',
            ),
            array(
                'key' => 'field_news_15',
                'label' => 'H3 Text 15',
                'name' => 'news_field_15',
                'type' => 'text',
                'default_value' => 'impact',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-news.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_page_events',
        'title' => 'Events Page Settings',
        'fields' => array(
            array(
                'key' => 'field_events_1',
                'label' => 'H1 Text 1',
                'name' => 'events_field_1',
                'type' => 'text',
                'default_value' => 'events',
            ),
            array(
                'key' => 'field_events_2',
                'label' => 'H2 Text 2',
                'name' => 'events_field_2',
                'type' => 'text',
                'default_value' => 'Summer Workshop on the Dynamic Brain 2026',
            ),
            array(
                'key' => 'field_events_3',
                'label' => 'H2 Text 3',
                'name' => 'events_field_3',
                'type' => 'text',
                'default_value' => 'explore all events',
            ),
            array(
                'key' => 'field_events_4',
                'label' => 'H2 Text 4',
                'name' => 'events_field_4',
                'type' => 'text',
                'default_value' => 'safety, respect, inclusion: our event code of conduct',
            ),
            array(
                'key' => 'field_events_5',
                'label' => 'H1 Text 5',
                'name' => 'events_field_5',
                'type' => 'text',
                'default_value' => 'science donedifferently. shared openly.',
            ),
            array(
                'key' => 'field_events_6',
                'label' => 'H3 Text 6',
                'name' => 'events_field_6',
                'type' => 'text',
                'default_value' => 'explore our accelerators',
            ),
            array(
                'key' => 'field_events_7',
                'label' => 'H3 Text 7',
                'name' => 'events_field_7',
                'type' => 'text',
                'default_value' => 'brain science',
            ),
            array(
                'key' => 'field_events_8',
                'label' => 'H3 Text 8',
                'name' => 'events_field_8',
                'type' => 'text',
                'default_value' => 'cell science',
            ),
            array(
                'key' => 'field_events_9',
                'label' => 'H3 Text 9',
                'name' => 'events_field_9',
                'type' => 'text',
                'default_value' => 'neural dynamics',
            ),
            array(
                'key' => 'field_events_10',
                'label' => 'H3 Text 10',
                'name' => 'events_field_10',
                'type' => 'text',
                'default_value' => 'immunology',
            ),
            array(
                'key' => 'field_events_11',
                'label' => 'H3 Text 11',
                'name' => 'events_field_11',
                'type' => 'text',
                'default_value' => 'synthetic biology',
            ),
            array(
                'key' => 'field_events_12',
                'label' => 'H3 Text 12',
                'name' => 'events_field_12',
                'type' => 'text',
                'default_value' => 'Brain Health',
            ),
            array(
                'key' => 'field_events_13',
                'label' => 'H3 Text 13',
                'name' => 'events_field_13',
                'type' => 'text',
                'default_value' => 'research',
            ),
            array(
                'key' => 'field_events_14',
                'label' => 'H3 Text 14',
                'name' => 'events_field_14',
                'type' => 'text',
                'default_value' => 'education',
            ),
            array(
                'key' => 'field_events_15',
                'label' => 'H3 Text 15',
                'name' => 'events_field_15',
                'type' => 'text',
                'default_value' => 'impact',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-events.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_page_careers',
        'title' => 'Careers Page Settings',
        'fields' => array(
            array(
                'key' => 'field_careers_1',
                'label' => 'H2 Text 1',
                'name' => 'careers_field_1',
                'type' => 'text',
                'default_value' => 'we are exploring the mysteries of bioscience',
            ),
            array(
                'key' => 'field_careers_2',
                'label' => 'P Text 2',
                'name' => 'careers_field_2',
                'type' => 'textarea',
                'default_value' => 'Curiosity fuels everything we do and we know that breakthroughs don’t happen alone. Together, we tackle massive research projects to move human health forward throughexcellence,integrity,respect and inclusion,stewardshipandcreativity. We are highly collaborative and multidisciplinary – bringing together neuroscientists, cell biologists, immunologists, computer scientists, engineers, mathematicians, and science-support professionals to push the limits of exploration.',
            ),
            array(
                'key' => 'field_careers_3',
                'label' => 'P Text 3',
                'name' => 'careers_field_3',
                'type' => 'textarea',
                'default_value' => 'Whether you stay for two years or 20, you’ll see we combine the best of technology, large‑scale research, and open science to accelerate discovery in human health.',
            ),
            array(
                'key' => 'field_careers_4',
                'label' => 'H2 Text 4',
                'name' => 'careers_field_4',
                'type' => 'text',
                'default_value' => 'building an inclusive culture',
            ),
            array(
                'key' => 'field_careers_5',
                'label' => 'P Text 5',
                'name' => 'careers_field_5',
                'type' => 'textarea',
                'default_value' => 'We believe science is for everyone — and our workplace reflects that. At the Allen Institute, every person is respected, valued, and encouraged to bring their authentic selves to work each day. Different ideas, backgrounds, and perspectives aren’t just welcomed, they’re essential to our work, because different backgrounds and viewpoints make science stronger.',
            ),
            array(
                'key' => 'field_careers_6',
                'label' => 'P Text 6',
                'name' => 'careers_field_6',
                'type' => 'textarea',
                'default_value' => 'The Allen Institute has seven Employee Resource Groups: voluntary, employee-driven communities - that promote cultural awareness, encourage professional growth, and create space to learn and grow together.',
            ),
            array(
                'key' => 'field_careers_7',
                'label' => 'P Text 7',
                'name' => 'careers_field_7',
                'type' => 'textarea',
                'default_value' => 'We’re committed to providing a competitive and robust benefits package that includes perks for employees and their families because a healthy, balanced life helps Allenites do great work.',
            ),
            array(
                'key' => 'field_careers_8',
                'label' => 'P Text 8',
                'name' => 'careers_field_8',
                'type' => 'textarea',
                'default_value' => 'Healthcare:We offer comprehensive healthcare plans that include medical, dental, and vision coverage for eligible employees and dependents.',
            ),
            array(
                'key' => 'field_careers_9',
                'label' => 'P Text 9',
                'name' => 'careers_field_9',
                'type' => 'textarea',
                'default_value' => 'Time Off:Employees receive paid vacation, personal days, sick time, and paid holidays. The Allen Institute is also closed for an additional “paid winter break” (typically the week between Christmas and New Year’s Day).',
            ),
            array(
                'key' => 'field_careers_10',
                'label' => 'P Text 10',
                'name' => 'careers_field_10',
                'type' => 'textarea',
                'default_value' => 'Wellness:We offer $140/month as a taxable Lifestyle Spending Account benefit, which employees may use towards health and wellness classes, memberships and more!',
            ),
            array(
                'key' => 'field_careers_11',
                'label' => 'P Text 11',
                'name' => 'careers_field_11',
                'type' => 'textarea',
                'default_value' => '401(k) Plan:We offer an excellent employer 401(k) program, matching $.50 on every dollar an eligible employee contributes up to the annual IRS dollar limit.',
            ),
            array(
                'key' => 'field_careers_12',
                'label' => 'P Text 12',
                'name' => 'careers_field_12',
                'type' => 'textarea',
                'default_value' => 'Other Benefits:',
            ),
            array(
                'key' => 'field_careers_13',
                'label' => 'H1 Text 13',
                'name' => 'careers_field_13',
                'type' => 'text',
                'default_value' => 'science donedifferently. shared openly.',
            ),
            array(
                'key' => 'field_careers_14',
                'label' => 'H3 Text 14',
                'name' => 'careers_field_14',
                'type' => 'text',
                'default_value' => 'explore our accelerators',
            ),
            array(
                'key' => 'field_careers_15',
                'label' => 'H3 Text 15',
                'name' => 'careers_field_15',
                'type' => 'text',
                'default_value' => 'brain science',
            ),
            array(
                'key' => 'field_careers_16',
                'label' => 'H3 Text 16',
                'name' => 'careers_field_16',
                'type' => 'text',
                'default_value' => 'cell science',
            ),
            array(
                'key' => 'field_careers_17',
                'label' => 'H3 Text 17',
                'name' => 'careers_field_17',
                'type' => 'text',
                'default_value' => 'neural dynamics',
            ),
            array(
                'key' => 'field_careers_18',
                'label' => 'H3 Text 18',
                'name' => 'careers_field_18',
                'type' => 'text',
                'default_value' => 'immunology',
            ),
            array(
                'key' => 'field_careers_19',
                'label' => 'H3 Text 19',
                'name' => 'careers_field_19',
                'type' => 'text',
                'default_value' => 'synthetic biology',
            ),
            array(
                'key' => 'field_careers_20',
                'label' => 'H3 Text 20',
                'name' => 'careers_field_20',
                'type' => 'text',
                'default_value' => 'Brain Health',
            ),
            array(
                'key' => 'field_careers_21',
                'label' => 'H3 Text 21',
                'name' => 'careers_field_21',
                'type' => 'text',
                'default_value' => 'research',
            ),
            array(
                'key' => 'field_careers_22',
                'label' => 'H3 Text 22',
                'name' => 'careers_field_22',
                'type' => 'text',
                'default_value' => 'education',
            ),
            array(
                'key' => 'field_careers_23',
                'label' => 'H3 Text 23',
                'name' => 'careers_field_23',
                'type' => 'text',
                'default_value' => 'impact',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-careers.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => true,
        'description' => '',
    ));
endif;
