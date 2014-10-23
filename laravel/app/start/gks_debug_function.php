<?php

if (!function_exists('_pr')) {

    function _pr($arg) {
        echo "<pre>";
        print_r($arg);
        echo "</pre>";
    }

}

function last_sql() {
    $r = DB::getQueryLog();
    $last_query = end($r);
    echo "<pre>";
    print_r($last_query);
    echo "</pre>";
}