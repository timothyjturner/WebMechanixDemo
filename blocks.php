<?php

add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
   // register_block_type( __DIR__ . './blocks/hero/block.json' );
   
    acf_register_block_type(array(
    'name'              => 'hero',
    'title'             => __('Hero'),
    'description'       => __('A custom hero block.'),
		'render_template'   => './blocks/hero/hero.php',
		'render_callback'	=> 'my_acf_block_render_callback',
    'category'          => 'formatting',
    'icon'              => 'superhero',
		'keywords'          => array( 'hero' ),
		'mode' 	=> 'edit'
 ));
}