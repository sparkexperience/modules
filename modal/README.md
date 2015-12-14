# Modal Module

This is a library independent modal popup.

## Dependencies

* Include your module lower in the functions.php to ensure the spark_modal function exists

## Usage
```php
    $args = Array(
                       'tpl' => 'callOutBanner', // name of template file that goes in the modal/tpl folder
                       'modal_id' => $modal_id, // html ID for the modal
                       'modal_extra_classes' => 'modal--callOutBanner', // Any extra classes you want to add to the modal wrapper for styling
                       'modal_content' => $video_embed_code // Content for the modal if dynamic. This can be added to any content in your modal template file
                       );
    spark_modal($args);
```

### TODO
-----

* Update documentation if necessary
* Responsive / mobile
* Cross-browser test


### Change log
-----

* 2015-11-23
    * Initialized -- Chris

* 2015-12-09
    * Added arguments to make modal dynamic -- Earle
    * Added callOutBanner modal template / CSS -- Earle
    * Added README and documentation -- Earle