<?php

function spark_modal($args=false) {

    if(!$args){
		return false;
	}

    $tpl = false;
    $modal_id = false;
    $modal_content = false;
    $modal_extra_classes = false;

    extract( $args, EXTR_OVERWRITE );

	echo '<div class="modal '. $modal_extra_classes . '" id="' . $modal_id . '">';
	echo '<div class="modal__bg"></div>';
	echo '<div class="modal--inner">';
	echo '<div class="modal__content">';
	echo '<div class="modal__content--inner">';
	echo '<span class="modal__close" data-action="modal__close"></span>';
	if( $tpl ) {
		### Get HTML
		include 'tpl/' . $tpl . '.tpl.php';

	} else {
		return false;
	}
	echo '</div></div></div></div>';

}