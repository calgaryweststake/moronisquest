<?php

extract(shortcode_atts(array(
    'page_title'            => '',
    'page_subtitle'         => '',
    'font_size'             => '50',
    'font_color'            => '#ddd',
    'font_weight'           => 'inherit',
    'text_align'            => 'center',
    'title_letter_spacing'  => '3',
    'underline'             => 'true',
    'padding'               => '20',
    'sub_font_size'         => '30',
    'sub_font_color'        => '',
    'sub_font_weight'       => 'inherit',
    'bg_type'               => 'image',
    'overlay'               => '',
    'mp4'                   => '',
    'webm'                  => '',
    'ogv'                   => '',
    'video_preview'         => '',
    'bg_image'              => '',
    'bg_color'              => '',
    'bg_image'              => '',
    'bg_image_portrait'     => '',
    'attachment'            => 'scroll',
    'bg_position'           => 'left top',
    'bg_repeat'             => 'repeat',
    'bg_stretch'            => 'false',
    'bg_effects'            => '',
    'section_height'        => 400,
    'title_force_font_size'       => 'false',
    'title_size_smallscreen'      => '0',
    'title_size_tablet'           => '0',
    'title_size_phone'            => '0',
    'subtitle_force_font_size'       => 'false',
    'subtitle_size_smallscreen'      => '0',
    'subtitle_size_tablet'           => '0',
    'subtitle_size_phone'            => '0',
    'visibility' 			=> '',
    'el_class'              => ''
), $atts));
Mk_Static_Files::addAssets('mk_page_title_box');