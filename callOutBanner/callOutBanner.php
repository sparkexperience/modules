<?php

function spark_call_out_banner($args=false){

    if(!$args){
		return false;
	}

    $content_type = false;
    $video_embed_code = false;
    $featured_image = false;
    $title = false;
    $description = false;
    $button_text = false;
    $button_link = false;
    $open_in_new_window = false;

    extract( $args, EXTR_OVERWRITE );

    ## HTML Output
	include 'tpl/callOutBanner--default.tpl.php';

}
