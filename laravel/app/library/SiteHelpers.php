<?php

class SiteHelpers {

    public static function alert($task, $message) {
        if ($task == 'error') {
            $alert = '
			<div class="alert alert-danger  fade in block-inner">
				<button data-dismiss="alert" class="close" type="button"> x </button>
			<i class="icon-cancel-circle"></i> ' . $message . ' </div>
			';
        } elseif ($task == 'success') {
            $alert = '
			<div class="alert alert-success fade in block-inner">
				<button data-dismiss="alert" class="close" type="button"> x </button>
			<i class="icon-checkmark-circle"></i> ' . $message . ' </div>
			';
        } elseif ($task == 'warning') {
            $alert = '
			<div class="alert alert-warning fade in block-inner">
				<button data-dismiss="alert" class="close" type="button"> x </button>
			<i class="icon-warning"></i> ' . $message . ' </div>
			';
        } else {
            $alert = '
			<div class="alert alert-info  fade in block-inner">
				<button data-dismiss="alert" class="close" type="button"> x </button>
			<i class="icon-info"></i> ' . $message . ' </div>
			';
        }
        return $alert;
    }

    public static function getControllerName() {
        return substr(Route::currentRouteAction(), 0, (strpos(Route::currentRouteAction(), '@')));
    }

    static public function cropImage($nw, $nh, $source, $stype, $dest) {
        $size = getimagesize($source); // ukuran gambar
        $w = $size[0];
        $h = $size[1];
        switch ($stype) { // format gambar
            case 'gif':
                $simg = imagecreatefromgif($source);
                break;
            case 'jpg':
                $simg = imagecreatefromjpeg($source);
                break;
            case 'png':
                $simg = imagecreatefrompng($source);
                break;
        }
        $dimg = imagecreatetruecolor($nw, $nh); // menciptakan image baru
        $wm = $w / $nw;
        $hm = $h / $nh;
        $h_height = $nh / 2;
        $w_height = $nw / 2;
        if ($w > $h) {
            $adjusted_width = $w / $hm;
            $half_width = $adjusted_width / 2;
            $int_width = $half_width - $w_height;
            imagecopyresampled($dimg, $simg, -$int_width, 0, 0, 0, $adjusted_width, $nh, $w, $h);
        } elseif (($w < $h) || ($w == $h)) {
            $adjusted_height = $h / $wm;
            $half_height = $adjusted_height / 2;
            $int_height = $half_height - $h_height;
            imagecopyresampled($dimg, $simg, 0, -$int_height, 0, 0, $nw, $adjusted_height, $w, $h);
        } else {
            imagecopyresampled($dimg, $simg, 0, 0, 0, 0, $nw, $nh, $w, $h);
        }
        imagejpeg($dimg, $dest, 100);
    }

    public static function seoUrl($str, $separator = 'dash', $lowercase = FALSE) {
        if ($separator == 'dash') {
            $search = '_';
            $replace = '-';
        } else {
            $search = '-';
            $replace = '_';
        }

        $trans = array(
            '&\#\d+?;' => '',
            '&\S+?;' => '',
            '\s+' => $replace,
            '[^a-z0-9\-\._]' => '',
            $replace . '+' => $replace,
            $replace . '$' => $replace,
            '^' . $replace => $replace,
            '\.+$' => ''
        );
        $str = strip_tags($str);
        foreach ($trans as $key => $val) {
            $str = preg_replace("#" . $key . "#i", $val, $str);
        }
        if ($lowercase === TRUE) {
            $str = strtolower($str);
        }
        return trim(stripslashes(strtolower($str)));
    }

    public static function priceFormat($value) {
        return sprintf("%0.2f", $value);
    }

}
