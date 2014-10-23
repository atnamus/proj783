<?php

/*
  |--------------------------------------------------------------------------
  |Add name space to a front end
  |--------------------------------------------------------------------------
  |All custommization settings for this app is loaded
  |
 */
View::addNamespace('frontend', app_path() . '/views/frontend');
View::addNamespace('admin', app_path() . '/views/admin');
View::addNamespace('resto', app_path() . '/views/resto');

//View::addNamespace('email', app_path() . '/views/backend');

/* Custom helper function */

function email_path($template, $lang = null) {
    //File::exists() 
    if (is_null($lang)) {
        $lang = App::getLocale();
    }
    $file = $template . ".blade.php";
    if (file_exists(app_path("views/emails/{$lang}/{$file}"))) {
        return "emails.{$lang}.$template";
    } else if (file_exists(app_path("views/emails/en/{$file}"))) {
        return "emails.en.{$template}";
    } else {
        throw new Exception(
        'Error :: Email template not found.'
        . 'File :: ' . $template . " , "
        . 'Location::' . app_path("views/emails/$lang"));
    }
}

//usage domain_exists('user@davidwalsh.name')
function domain_exists($email, $record = 'MX') {
    list($user, $domain) = split('@', $email);
    return checkdnsrr($domain, $record);
}

class breadCrumb {

    public static $bread = [];

    public static function add($title, $url = null) {
        self::$bread[] = ['url' => $url, 'title' => $title];
    }

    public static function generate() {
        if (count(self::$bread)) {
            $html = '<ul class="page-breadcrumb">';
            $total_items = count(self::$bread);
            foreach (self::$bread as $i => $val) {
                $html .='<li>';
                //add icon in only home
                if (!$i)
                    $html .='<i class="fa fa-home"></i>';
                $url = '';
                if ($total_items == 1 || ($total_items == ($i + 1))) {
                    $html .=$val['title'];
                } else {
                    $html .='<a href="' . $val['url'] . '">' . $val['title'] . '</a>';
                }
                if ($total_items > 1 && $total_items != ($i + 1))
                    $html .='<i class="fa fa-angle-right"></i>';

                $html .='</li>';
            }
            echo $html;
        }
    }

}


//=====================
//View::composer('admin::layouts.master', function($view) {
//            //$menus = Page::getMenu();            
//            $view->with('skg', '52541');
//        });