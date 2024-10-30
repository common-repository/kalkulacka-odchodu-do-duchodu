<?php

add_shortcode( $GLOBALS['kalkulacka_odchodu_do_duchodu_config']['shortcode'], 'generate_iframe_kalkulacka_odchodu_do_duchodu' );

function generate_iframe_kalkulacka_odchodu_do_duchodu(){
   $settings = get_option('kalkulacka_odchodu_do_duchodu_settings');
   $width = $settings['width'] ? $settings['width'] : $GLOBALS['kalkulacka_odchodu_do_duchodu_config']['width'];
   $height = $settings['height'] ? $settings['height'] : $GLOBALS['kalkulacka_odchodu_do_duchodu_config']['height'];
   $data = '<div>'.$GLOBALS['kalkulacka_odchodu_do_duchodu_config']['information_text'].'</div>
<iframe src="'.$GLOBALS['kalkulacka_odchodu_do_duchodu_config']['source'].'" width="'.$width.'" height="'.$height.'" frameborder="0"></iframe>';
   return $data;
}
