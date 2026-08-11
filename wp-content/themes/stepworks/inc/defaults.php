<?php
/**
 * Default landing-page content (mirrors Figma copy).
 *
 * @package Stepworks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @return array<string,mixed>
 */
function stepworks_defaults() {
	$img = STEPWORKS_URI . '/assets/images';

	return array(
		'top_bar_label' => 'Consectetur adipis',
		'regions'       => array(
			array(
				'label'  => 'Excepteur',
				'flag'   => 'jp',
				'active' => 0,
			),
			array(
				'label'  => 'Non proident',
				'flag'   => 'sg',
				'active' => 1,
			),
		),
		'nav_items'     => array(
			array(
				'label'       => 'Ipsam voluptatem',
				'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis',
				'image'       => $img . '/mega-1.jpg',
				'links'       => array(
					array( 'label' => 'Sed ut perspicia' ),
					array( 'label' => 'Unde omnis iste natus' ),
					array( 'label' => 'Consectetur adipisci velit' ),
					array( 'label' => 'Quaerat voluptate' ),
				),
			),
			array(
				'label'       => 'Voluptas',
				'description' => 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus',
				'image'       => $img . '/mega-2.jpg',
				'links'       => array(
					array( 'label' => 'Odio dignissimos' ),
					array( 'label' => 'Blanditiis praesentium' ),
				),
			),
			array(
				'label'       => 'Quis nostrum',
				'description' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur.',
				'image'       => $img . '/mega-3.jpg',
				'links'       => array(
					array( 'label' => 'Deleniti atque' ),
					array( 'label' => 'Corrupti quos' ),
					array( 'label' => 'Dolores et quas' ),
				),
			),
			array(
				'label'       => 'Atque',
				'description' => 'Ut enim ad minima veniam, quis nostrum exercitationem ullam.',
				'image'       => $img . '/mega-4.jpg',
				'links'       => array(
					array( 'label' => 'Id est laborum' ),
					array( 'label' => 'Culpa qui officia' ),
					array( 'label' => 'Nam libero tempore' ),
				),
			),
			array(
				'label'       => 'Dignissim',
				'description' => 'Quis autem vel eum iure reprehenderit qui in ea voluptate.',
				'image'       => $img . '/mega-5.jpg',
				'links'       => array(
					array( 'label' => 'Omnis dolor repellendus' ),
					array( 'label' => 'Sint et molestiae' ),
				),
			),
		),
		'hero_slides'   => array(
			array(
				'image'        => $img . '/hero-1.jpg',
				'title'        => '<em>Lorem ipsum dolor sit</em>',
				'text'         => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem',
				'button_label' => 'Sit Amet',
				'button_url'   => '#',
			),
			array(
				'image'        => $img . '/hero-2.jpg',
				'title'        => '<em>Ut enim ad minima</em>',
				'text'         => 'Quis nostrum exercitationem ullam corporis suscipit laboriosam nisi ut aliquid',
				'button_label' => 'Sit Amet',
				'button_url'   => '#',
			),
			array(
				'image'        => $img . '/hero-3.jpg',
				'title'        => '<em>Nemo enim ipsam</em>',
				'text'         => 'Voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur',
				'button_label' => 'Sit Amet',
				'button_url'   => '#',
			),
			array(
				'image'        => $img . '/hero-4.jpg',
				'title'        => '<em>Quis autem vel eum</em>',
				'text'         => 'Iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur',
				'button_label' => 'Sit Amet',
				'button_url'   => '#',
			),
		),
		'features_heading' => 'Ullamco laboris, Duis aute irure, Sunt in culpa',
		'features'         => array(
			array(
				'icon'  => 'chart',
				'title' => 'Sed ut perspicia',
				'text'  => 'Veniam, quis nostrum exercitationem',
			),
			array(
				'icon'  => 'chat',
				'title' => 'Unde omnis iste natus',
				'text'  => 'Ullam corporis suscipit laboriosam',
			),
			array(
				'icon'  => 'idea',
				'title' => 'Consectetur adipisci velit',
				'text'  => 'Quis autem vel eum iure reprehenderit',
			),
			array(
				'icon'  => 'people',
				'title' => 'Quaerat voluptate',
				'text'  => 'Neque porro quisquam est qui dolorem',
			),
		),
		'cta_image'        => $img . '/cta-image.jpg',
		'cta_title'        => 'Accusantium doloremque.',
		'cta_text'         => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n\nUt enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.",
		'cta_button_label' => 'Sit Amet',
		'cta_button_url'   => '#',
		'news_heading'     => 'Nisi Ut Aliquid.',
		'news_items'       => array(
			array(
				'image' => $img . '/news-1.jpg',
				'title' => 'Finibus Bonorum et',
				'meta'  => 'Et Malorum 10/07/2025',
				'link_label' => 'Sit Amet',
				'link_url'   => '#',
			),
			array(
				'image' => $img . '/news-2.jpg',
				'title' => 'Finibus Bonorum et',
				'meta'  => 'Et Malorum 10/07/2025',
				'link_label' => 'Sit Amet',
				'link_url'   => '#',
			),
			array(
				'image' => $img . '/news-3.jpg',
				'title' => 'Finibus Bonorum et',
				'meta'  => 'Et Malorum 10/07/2025',
				'link_label' => 'Sit Amet',
				'link_url'   => '#',
			),
		),
		'news_button_label' => 'Sit Amet',
		'news_button_url'   => '#',
		'footer_tagline' => 'Lorem Ipsum Dolor Sit',
		'footer_text'    => 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam nisi ut aliquid ex ea commodi consequatur',
		'footer_columns' => array(
			array(
				'title' => 'Ipsam voluptatem',
				'links' => array(
					array( 'label' => 'Sed ut perspicia' ),
					array( 'label' => 'Unde omnis iste natus' ),
					array( 'label' => 'Consectetur adipisci velit' ),
					array( 'label' => 'Quaerat voluptate' ),
				),
			),
			array(
				'title' => 'Voluptas',
				'links' => array(
					array( 'label' => 'Odio' ),
					array( 'label' => 'dignissimos' ),
					array( 'label' => 'Blanditiis' ),
					array( 'label' => 'praesenium' ),
				),
			),
			array(
				'title' => 'Quis nostrum',
				'links' => array(
					array( 'label' => 'Deleniti atque' ),
					array( 'label' => 'Corrupti quos' ),
					array( 'label' => 'Dolores et quas' ),
				),
			),
			array(
				'title' => 'Atque',
				'links' => array(
					array( 'label' => 'Id est laborum' ),
					array( 'label' => 'Culpa qui officia' ),
					array( 'label' => 'Nam libero tempore' ),
				),
			),
			array(
				'title' => 'Dignissim',
				'links' => array(
					array( 'label' => 'Omnis dolor' ),
					array( 'label' => 'repellendus' ),
					array( 'label' => 'Sint et molestiae' ),
				),
			),
		),
		'footer_form_title' => 'At vero eos et accusamus et iusto odio',
		'footer_form_text'  => 'Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti',
		'footer_field_1'    => 'Nihil impedit',
		'footer_field_2'    => 'Nihil pedit',
		'footer_button'     => 'Sit Amet',
		'footer_disclaimer' => 'Maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.',
		'copyright'         => 'Copyright © 2026 Hic tenetur a sapiente delectus, ut aut reiciendis | Maiores',
	);
}