<?php
/**
 * Register ACF Fields via PHP for the Free Version of ACF
 */

if ( function_exists('acf_add_local_field_group') ) {

    // ==========================================
    // 1. Front Page Settings
    // ==========================================
    acf_add_local_field_group(array(
        'key' => 'group_front_page',
        'title' => 'Front Page Settings',
        'fields' => array(
            array(
                'key' => 'field_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
                'default_value' => 'Visual Systems Neuroscience & Brain Imaging Signals',
            ),
            array(
                'key' => 'field_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'text',
                'default_value' => 'Dr. Amir Shmuel Lab | McGill University',
            ),
            array(
                'key' => 'field_hero_bg_image',
                'label' => 'Hero Background Image',
                'name' => 'hero_bg_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_about_lab',
                'label' => 'About the Lab',
                'name' => 'about_lab',
                'type' => 'wysiwyg',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
    ));

    // ==========================================
    // 2. Team Member Settings
    // ==========================================
    acf_add_local_field_group(array(
        'key' => 'group_team_member',
        'title' => 'Team Member Details',
        'fields' => array(
            array(
                'key' => 'field_member_role',
                'label' => 'Role',
                'name' => 'member_role',
                'type' => 'select',
                'choices' => array(
                    'Principal Investigator' => 'Principal Investigator',
                    'Postdoctoral Fellow' => 'Postdoctoral Fellow',
                    'PhD Candidate' => 'PhD Candidate',
                    'Master Student' => 'Master Student',
                    'Alumni' => 'Alumni'
                ),
            ),
            array(
                'key' => 'field_member_email',
                'label' => 'Email',
                'name' => 'member_email',
                'type' => 'email',
            ),
            array(
                'key' => 'field_member_scholar',
                'label' => 'Google Scholar URL',
                'name' => 'member_scholar',
                'type' => 'url',
            ),
            array(
                'key' => 'field_member_bio',
                'label' => 'Biography',
                'name' => 'member_bio',
                'type' => 'textarea',
            ),
            array(
                'key' => 'field_member_order',
                'label' => 'Display Order',
                'name' => 'member_order',
                'type' => 'number',
                'default_value' => 10,
                'instructions' => 'Lower numbers show first.',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'team_member',
                ),
            ),
        ),
    ));

    // ==========================================
    // 3. Publication Settings
    // ==========================================
    acf_add_local_field_group(array(
        'key' => 'group_publication',
        'title' => 'Publication Details',
        'fields' => array(
            array(
                'key' => 'field_pub_pmid',
                'label' => 'PubMed ID (PMID)',
                'name' => 'pub_pmid',
                'type' => 'text',
                'instructions' => 'Unique ID used by the PubMed sync script.',
            ),
            array(
                'key' => 'field_pub_authors',
                'label' => 'Authors',
                'name' => 'pub_authors',
                'type' => 'textarea',
                'instructions' => 'Full list of authors.',
            ),
            array(
                'key' => 'field_pub_journal',
                'label' => 'Journal',
                'name' => 'pub_journal',
                'type' => 'text',
            ),
            array(
                'key' => 'field_pub_year',
                'label' => 'Year',
                'name' => 'pub_year',
                'type' => 'number',
            ),
            array(
                'key' => 'field_pub_doi',
                'label' => 'DOI',
                'name' => 'pub_doi',
                'type' => 'text',
            ),
            array(
                'key' => 'field_pub_url',
                'label' => 'Publication URL',
                'name' => 'pub_url',
                'type' => 'url',
            ),
            array(
                'key' => 'field_pub_abstract',
                'label' => 'Abstract',
                'name' => 'pub_abstract',
                'type' => 'textarea',
            ),
            array(
                'key' => 'field_pub_featured',
                'label' => 'Featured on Homepage',
                'name' => 'pub_featured',
                'type' => 'true_false',
                'ui' => 1,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'publication',
                ),
            ),
        ),
    ));

}
