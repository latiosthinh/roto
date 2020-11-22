<?php
/**
 * Template Name: Home
 */
get_header();

get_template_part( 'template-parts/home/banner' );
get_template_part( 'template-parts/home/intro' );
get_template_part( 'template-parts/home/collection' );
get_template_part( 'template-parts/home/project' );
get_template_part( 'template-parts/home/partner' );
get_template_part( 'template-parts/home/contact' );
get_template_part( 'template-parts/home/video' );

get_footer();