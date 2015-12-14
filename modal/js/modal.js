jQuery(document).ready(function(){
	
	// on click of .modal-trigger
	jQuery('[data-action="modal-trigger"]').click(function(e){   

		// prevent default behavior
		e.preventDefault();

		// get id attr
		trigger_id = jQuery(this).attr('data-modal-id');

		jQuery('#' + trigger_id).addClass('animated');

		jQuery('html').addClass('no-scroll');
		
	});

	// click outside modal
	jQuery(document).mouseup(function (e){

        // store element related to click
        var container = jQuery('.modal__content');

        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            jQuery('.modal').removeClass('animated');
            jQuery('html').removeClass('no-scroll');
        }

    });

	// click on .modal-close
    jQuery('[data-action="modal__close"]').click(function(){
    	jQuery('.modal').removeClass('animated');
    	jQuery('html').removeClass('no-scroll');
    });

});