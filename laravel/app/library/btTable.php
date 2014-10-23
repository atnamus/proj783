<?php

class btTable {

    public static function edit($url, $options = []) {
        $options['class'] = isset($options['class']) ? $options['class'] : 'btn btn-xs blue filter-submit margin-bottom';
        return str_replace("##ICON##", '<i class="fa fa-pencil"></i>', HTML::link($url, '##ICON## Edit', $options)); //<a href="" class="btn btn-xs blue filter-submit margin-bottom"><i class="fa fa-edit"></i> Edit</a>
    }

    public static function delete($url, $options = []) {
        $options['class'] = isset($options['class']) ? $options['class'] : 'btn btn-xs red filter-submit margin-bottom confirm';
        return str_replace("##ICON##", '<i class="fa fa-trash"></i>', HTML::link($url, '##ICON## Delete', $options)); //<a href="" class="btn btn-xs blue filter-submit margin-bottom"><i class="fa fa-edit"></i> Edit</a>
    }

}
