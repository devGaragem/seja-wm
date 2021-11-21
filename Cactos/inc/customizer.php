<?php

/**
 *
 * @package metal_art
 */

function metalart_customize_register($wp_customize)
{

  /*Banner*/
  $wp_customize->add_section(
    'sobre_section',
    array(
      'title' => __('Seção Sobre', 'metal_art'),
      'priority' => 30,
    )
  );


  $wp_customize->add_control(
    'sobre_image',
    array(
      'label' => __('Sobre Imagem', 'metal_art'),
      'section' => 'sobre_section',
      'type' => 'text',
    )
  );

  $wp_customize->add_setting(
    'header_bg_color_setting',
    array(
      'default' => '#fff',
      'sanitize_callback' => 'sanitize_hex_color',
    )
  );

  $wp_customize->add_setting( 'sobre_section_title', array(
    'default' => __( 'MetalArt', 'metal_art' ),
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  ) );
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sobre_section_title', array(
    'label' => __( 'Título da seção', 'metal_art' ),
    'section'    => 'sobre_section',
    'settings'   => 'sobre_section_title',
    'type' => 'text'
  )));

  
  $wp_customize->add_setting( 'sobre_section_content', array(
    'default' => __( 'MetalArt', 'metal_art' ),
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  ) );
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sobre_section_content', array(
    'label' => __( 'Conteúdo da seção', 'metal_art' ),
    'section'    => 'sobre_section',
    'settings'   => 'sobre_section_content',
    'type' => 'text'
  )));
  
  $wp_customize->add_setting( 'image_setting', array(
    'default' => __( 'MetalArt', 'metal_art' ),
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sobre_section_image_control', array(
    'label'             => __('Imagem de destaque', 'metal_art'),
    'section'           => 'sobre_section',
    'settings'          => 'image_setting',    
  )));

}

add_action( 'customize_register', 'metalart_customize_register' );
