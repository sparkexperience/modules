<section class="callOutBanner">
    <div class="callOutBanner__container">
       <div class="callOutBanner__image">
            <img src="<?php echo $featured_image['sizes']['callOutBanner']; ?>" alt="" />
       </div>
    <?php if ($content_type == 'Page'){ ?>
       <div class="callOutBanner__content">
            <h5 class="callOutBanner__title callOutBanner__title--green"><?php echo $title; ?></h5>
            <?php echo nl2br(stripslashes($description)); ?>
            <?php if ($button_text){ ?>
                <a href="<?php echo $button_link; ?>" class="button callOutBanner__button--green" <?php echo $open_in_new_window ? 'target="_blank"' : ''; ?>><?php echo $button_text; ?></a>
            <?php } ?>
       </div>
    <?php } if ($content_type == 'Video'){
    ## ED:
    ## we md5 the oembed content so that we always have a unique anchor ID to target
    ## also we append the callOutBanner- to the front because md5 can start with numbers which is invalid
    $modal_id = 'callOutBanner-'.md5($video_embed_code);
    ?>
       <div class="callOutBanner__content callOutBanner__content--video">
            <div class="callOutBanner__titleWrapper">
                <a href="#" data-action="modal-trigger" class="modal-trigger" data-modal-id="<?php echo $modal_id; ?>">
                    <div class="callOutBanner__titleWrapper--left callOutBanner__playbtn callOutBanner__playbtn--green">
                        <?php echo file_get_contents(IMAGES_SERVER . '/play.svg'); ?>
                    </div>
                    <div class="callOutBanner__titleWrapper--right">
                        <h6>WATCH VIDEO</h6>
                        <h5 class="callOutBanner__title callOutBanner__title--green"><?php echo $title; ?></h5>
                    </div>
                </a>
            </div>
            <?php echo nl2br(stripslashes($description)); ?>
       </div>
       <?php
            $modal_args = Array(
                               'tpl' => 'callOutBanner',
                               'modal_id' => $modal_id,
                               'modal_extra_classes' => 'modal--callOutBanner',
                               'modal_content' => $video_embed_code
                               );
            spark_modal($modal_args);
       ?>
    <?php } ?>
    </div><!-- END .container -->
</section><!-- END .call-out-banner -->
