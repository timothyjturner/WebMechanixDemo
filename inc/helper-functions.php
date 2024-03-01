<?php
function wmd_get_srcset(
    $heroImageID,
    $sizes = array('500w', '800w', '1080w', '1600w')
) {

    $size_map = array(
        '150w' => 'thumbnail',
        '500w' => 'small',
        '800w' => 'medium',
        '1080w' => 'large',
        '1600w' => 'hero',
    );
    $srcset_string = '';
    if ($heroImageID) {
        foreach ($sizes as $size) {
            if ($size_map[$size]) {
                $srcset_string .= wp_get_attachment_image_src($heroImageID, $size_map[$size])[0] . ' ' . $size . ', ';
            }
        }
    }
    return $srcset_string;
}