<?php 
//company template fields

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_5fa8a3ea5eb70',
    'title' => 'Company page info',
    'fields' => array(
        array(
            'key' => 'field_5fa8a468eec3d',
            'label' => 'company symbol',
            'name' => 'company_symbol',
            'type' => 'text',
            'instructions' => 'eg: enter SBUX for Starbucks',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_5fa8a495eec3e',
            'label' => 'Recommended',
            'name' => 'recommended',
            'type' => 'checkbox',
            'instructions' => 'if checked recommendation articles for this company will be displayed from the stock articles post type',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'true' => 'Show',
                'false' => 'Don\'t show',
            ),
            'allow_custom' => 0,
            'default_value' => array(
            ),
            'layout' => 'vertical',
            'toggle' => 0,
            'return_format' => 'value',
            'save_custom' => 0,
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'company.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
));

endif;