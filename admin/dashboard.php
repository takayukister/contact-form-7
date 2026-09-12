<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$formatter = new WPCF7_HTMLFormatter();

$formatter->append_start_tag( 'div', array(
	'class' => 'wrap',
) );

$formatter->append_start_tag( 'h1' );

$formatter->append_preformatted(
	esc_html( __( 'Contact Form 7 Dashboard', 'contact-form-7' ) )
);

$formatter->end_tag( 'h1' );

$formatter->print();
