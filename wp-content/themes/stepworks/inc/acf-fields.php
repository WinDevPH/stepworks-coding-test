<?php
/**
 * ACF options page + field groups for non-technical editing.
 *
 * @package Stepworks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action(
	'acf/init',
	function () {
		if ( ! function_exists( 'acf_add_options_page' ) ) {
			return;
		}

		acf_add_options_page(
			array(
				'page_title' => 'Landing Page Content',
				'menu_title' => 'Landing Content',
				'menu_slug'  => 'stepworks-landing',
				'capability' => 'edit_theme_options',
				'redirect'   => false,
				'icon_url'   => 'dashicons-welcome-widgets-menus',
				'position'   => 3,
			)
		);
	}
);

add_action(
	'acf/include_fields',
	function () {
		if ( ! function_exists( 'acf_add_local_field_group' ) ) {
			return;
		}

		acf_add_local_field_group(
			array(
				'key'    => 'group_stepworks_landing',
				'title'  => 'Landing Page',
				'fields' => array(
					array(
						'key'   => 'field_tab_header',
						'label' => 'Header',
						'type'  => 'tab',
					),
					array(
						'key'   => 'field_top_bar_label',
						'label' => 'Top bar label',
						'name'  => 'top_bar_label',
						'type'  => 'text',
					),
					array(
						'key'          => 'field_regions',
						'label'        => 'Regions',
						'name'         => 'regions',
						'type'         => 'repeater',
						'layout'       => 'table',
						'button_label' => 'Add region',
						'sub_fields'   => array(
							array(
								'key'   => 'field_region_label',
								'label' => 'Label',
								'name'  => 'label',
								'type'  => 'text',
							),
							array(
								'key'     => 'field_region_flag',
								'label'   => 'Flag code (jp/sg)',
								'name'    => 'flag',
								'type'    => 'text',
							),
							array(
								'key'           => 'field_region_active',
								'label'         => 'Active',
								'name'          => 'active',
								'type'          => 'true_false',
								'ui'            => 1,
							),
						),
					),
					array(
						'key'          => 'field_nav_items',
						'label'        => 'Main navigation / mega menu',
						'name'         => 'nav_items',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add nav item',
						'sub_fields'   => array(
							array(
								'key'   => 'field_nav_label',
								'label' => 'Label',
								'name'  => 'label',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_nav_description',
								'label' => 'Description',
								'name'  => 'description',
								'type'  => 'textarea',
								'rows'  => 3,
							),
							array(
								'key'           => 'field_nav_image',
								'label'         => 'Mega menu image',
								'name'          => 'image',
								'type'          => 'image',
								'return_format' => 'array',
								'preview_size'  => 'medium',
							),
							array(
								'key'          => 'field_nav_links',
								'label'        => 'Links',
								'name'         => 'links',
								'type'         => 'repeater',
								'layout'       => 'table',
								'button_label' => 'Add link',
								'sub_fields'   => array(
									array(
										'key'   => 'field_nav_link_label',
										'label' => 'Label',
										'name'  => 'label',
										'type'  => 'text',
									),
								),
							),
						),
					),
					array(
						'key'   => 'field_tab_hero',
						'label' => 'Hero',
						'type'  => 'tab',
					),
					array(
						'key'          => 'field_hero_slides',
						'label'        => 'Hero slides',
						'name'         => 'hero_slides',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add slide',
						'sub_fields'   => array(
							array(
								'key'           => 'field_hero_image',
								'label'         => 'Background image',
								'name'          => 'image',
								'type'          => 'image',
								'return_format' => 'array',
							),
							array(
								'key'          => 'field_hero_title',
								'label'        => 'Title (HTML allowed for italics)',
								'name'         => 'title',
								'type'         => 'text',
							),
							array(
								'key'   => 'field_hero_text',
								'label' => 'Text',
								'name'  => 'text',
								'type'  => 'textarea',
								'rows'  => 3,
							),
							array(
								'key'   => 'field_hero_btn_label',
								'label' => 'Button label',
								'name'  => 'button_label',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_hero_btn_url',
								'label' => 'Button URL',
								'name'  => 'button_url',
								'type'  => 'url',
							),
						),
					),
					array(
						'key'   => 'field_tab_features',
						'label' => 'Features',
						'type'  => 'tab',
					),
					array(
						'key'   => 'field_features_heading',
						'label' => 'Section heading',
						'name'  => 'features_heading',
						'type'  => 'text',
					),
					array(
						'key'          => 'field_features',
						'label'        => 'Feature cards',
						'name'         => 'features',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add feature',
						'sub_fields'   => array(
							array(
								'key'           => 'field_feature_icon',
								'label'         => 'Icon',
								'name'          => 'icon',
								'type'          => 'select',
								'choices'       => array(
									'chart'  => 'Chart',
									'chat'   => 'Chat',
									'idea'   => 'Idea',
									'people' => 'People',
								),
							),
							array(
								'key'   => 'field_feature_title',
								'label' => 'Title',
								'name'  => 'title',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_feature_text',
								'label' => 'Text',
								'name'  => 'text',
								'type'  => 'textarea',
								'rows'  => 3,
							),
						),
					),
					array(
						'key'   => 'field_tab_cta',
						'label' => 'CTA',
						'type'  => 'tab',
					),
					array(
						'key'           => 'field_cta_image',
						'label'         => 'CTA image',
						'name'          => 'cta_image',
						'type'          => 'image',
						'return_format' => 'array',
					),
					array(
						'key'   => 'field_cta_title',
						'label' => 'CTA title',
						'name'  => 'cta_title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_cta_text',
						'label' => 'CTA text',
						'name'  => 'cta_text',
						'type'  => 'textarea',
						'rows'  => 5,
					),
					array(
						'key'   => 'field_cta_button_label',
						'label' => 'Button label',
						'name'  => 'cta_button_label',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_cta_button_url',
						'label' => 'Button URL',
						'name'  => 'cta_button_url',
						'type'  => 'url',
					),
					array(
						'key'   => 'field_tab_news',
						'label' => 'News',
						'type'  => 'tab',
					),
					array(
						'key'   => 'field_news_heading',
						'label' => 'News heading',
						'name'  => 'news_heading',
						'type'  => 'text',
					),
					array(
						'key'          => 'field_news_items',
						'label'        => 'News items',
						'name'         => 'news_items',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add news item',
						'sub_fields'   => array(
							array(
								'key'           => 'field_news_image',
								'label'         => 'Image',
								'name'          => 'image',
								'type'          => 'image',
								'return_format' => 'array',
							),
							array(
								'key'   => 'field_news_title',
								'label' => 'Title',
								'name'  => 'title',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_news_meta',
								'label' => 'Meta / date line',
								'name'  => 'meta',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_news_link_label',
								'label' => 'Link label',
								'name'  => 'link_label',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_news_link_url',
								'label' => 'Link URL',
								'name'  => 'link_url',
								'type'  => 'url',
							),
						),
					),
					array(
						'key'   => 'field_news_button_label',
						'label' => 'Section button label',
						'name'  => 'news_button_label',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_news_button_url',
						'label' => 'Section button URL',
						'name'  => 'news_button_url',
						'type'  => 'url',
					),
					array(
						'key'   => 'field_tab_footer',
						'label' => 'Footer',
						'type'  => 'tab',
					),
					array(
						'key'   => 'field_footer_tagline',
						'label' => 'Footer tagline',
						'name'  => 'footer_tagline',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_footer_text',
						'label' => 'Footer intro text',
						'name'  => 'footer_text',
						'type'  => 'textarea',
						'rows'  => 3,
					),
					array(
						'key'          => 'field_footer_columns',
						'label'        => 'Footer link columns',
						'name'         => 'footer_columns',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add column',
						'sub_fields'   => array(
							array(
								'key'   => 'field_footer_col_title',
								'label' => 'Column title',
								'name'  => 'title',
								'type'  => 'text',
							),
							array(
								'key'          => 'field_footer_col_links',
								'label'        => 'Links',
								'name'         => 'links',
								'type'         => 'repeater',
								'layout'       => 'table',
								'sub_fields'   => array(
									array(
										'key'   => 'field_footer_col_link_label',
										'label' => 'Label',
										'name'  => 'label',
										'type'  => 'text',
									),
								),
							),
						),
					),
					array(
						'key'   => 'field_footer_form_title',
						'label' => 'Form title',
						'name'  => 'footer_form_title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_footer_form_text',
						'label' => 'Form intro',
						'name'  => 'footer_form_text',
						'type'  => 'textarea',
						'rows'  => 3,
					),
					array(
						'key'   => 'field_footer_field_1',
						'label' => 'Field 1 label',
						'name'  => 'footer_field_1',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_footer_field_2',
						'label' => 'Field 2 label',
						'name'  => 'footer_field_2',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_footer_button',
						'label' => 'Form button',
						'name'  => 'footer_button',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_footer_disclaimer',
						'label' => 'Form disclaimer',
						'name'  => 'footer_disclaimer',
						'type'  => 'textarea',
						'rows'  => 2,
					),
					array(
						'key'   => 'field_copyright',
						'label' => 'Copyright',
						'name'  => 'copyright',
						'type'  => 'text',
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'options_page',
							'operator' => '==',
							'value'    => 'stepworks-landing',
						),
					),
				),
				'style' => 'seamless',
			)
		);
	}
);

add_action(
	'admin_notices',
	function () {
		if ( ! current_user_can( 'activate_plugins' ) ) {
			return;
		}
		if ( ! function_exists( 'get_field' ) ) {
			echo '<div class="notice notice-warning"><p><strong>Stepworks:</strong> Please activate the Advanced Custom Fields plugin so clients can edit landing content from <em>Landing Content</em>.</p></div>';
		}
	}
);