<?php
    function createTag($url, $width, $height){
        $img = '<img src="'.$GLOBALS['img_path'].$url.'" width="'.$width.'" height="'.$height.'" alt="img">';
        return $img;
    }
?>