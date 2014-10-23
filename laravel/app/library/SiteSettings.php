<?php

class SiteSettings {

    const TABLE = 'site_settings';

    function __construct() {
        
    }

    /**
     * Get
     *
     * Gets a setting based on the $where param.  $where can be either a string
     * containing a slug name or an array of WHERE options.
     *
     * @access	public
     * @param	mixed	$where
     * @return	object
     */
    public static function get($slug) {
        if (!is_array($where)) {
            $where = array('slug' => $slug);
        }
        $result = LaravelDB()->select('*, IF(`value` = "", `default`, `value`) as `value`', FALSE)
                ->from(self::TABLE)
                ->where($where)
                ->get()
                ->row();
        if (is_object($result)) {
            return $result->value;
        } else {
            return '';
        }
    }

    public static function get_value($where) {
        return self::get($where);
    }

    /**
     * Get Many By
     *
     * Gets all settings based on the $where param.  $where can be either a string
     * containing a module name or an array of WHERE options.
     *
     * @access	public
     * @param	mixed	$where
     * @return	object
     */
    public static function get_many_by($where) {
        return LaravelDB()->select('*', DB::raw('IF(`value` = "", `default`, `value`) as `value`'))
                        ->where('module', '=', $where)
                        ->orderBy('row_order', 'DESC')
                        ->get();
    }

    /**
     * Update
     *
     * Updates a setting for a given $slug.
     *
     * @access	public
     * @param	string	$slug
     * @param	array	$params
     * @return	bool
     */
    public static function update($data) {
        return LaravelDB()->update_batch(self::TABLE, $data, 'slug');
    }

    /**
     * Sections
     *
     * Gets all the sections (modules) from the settings table.
     *
     * @access	public
     * @return	array
     */
    public static function sections() {
        $sections = LaravelDB()->select('module')->distinct('module')->get();
        $result = array();
        foreach ($sections as $section) {
            $result[] = $section->module;
        }

        return $result;
    }

    /**
     * Sections
     *
     * Gets all the sections (modules) from the settings table.
     *
     * @access	public
     * @return	array
     */
    public static function all() {
        $result = self::sections();
        $re_result = array();
        foreach ($result as $module) {
            $f = self::get_many_by($module);
            //'text','textarea','password','select','select-multiple','radio','checkbox'
            $haystack = array('select', 'select-multiple', 'radio', 'checkbox');
            foreach ($f as $val) {
                if ('func:' === substr($val->options, 0, 5)) {
                    $method = str_replace('func:', '', $val->options);
                    $val->options = self::$method();
                } else if (in_array($val->type, $haystack)) {
                    $final_options = array();
                    $options = explode('|', $val->options);
                    foreach ($options as $k => $v) {
                        $temp = explode("=", $v);
                        $final_options[$temp[0]] = $temp[1];
                    }
                    $val->options = $final_options;
                }
            }
            $re_result[$module] = $f;
        }
        return $re_result;
    }

    public static function get_supported_lang() {
        return array('en' => 'English', 'fr' => 'French');
    }

    public static function mysql_version() {
        $version =  DB::select('SELECT VERSION() as version');
       
        if (is_array($version) && isset($version[0]))
            return $version[0]->version;
        else
            return '';
    }

    public static function all_module_name() {
        $r_module = array();
        $modules = LaravelDB()->select('module as name')->from(self::TABLE)->group_by('module')->order_by('module', 'ASC')->get()->result_object();
        foreach ($modules as $module) {
            $r_module[$module->name] = $module->name;
        }
        $r_module = array_merge(array('' => '--Select an option--'), $r_module);
        return array_merge($r_module, array('_another_new' => 'Create new module'));
    }

    public static function add($data = array()) {
        //$data 
        if (empty($data)) {

            if ($this->input->post('module') == "_another_new") {
                if ($this->input->post('new_module') !== '') {
                    $data['module'] = ucfirst($this->input->post('new_module'));
                } else {
                    $data['module'] = 'General';
                }
            } else {
                $data['module'] = ucfirst($this->input->post('module'));
            }
            $data['slug'] = $this->input->post('slug');
            $data['title'] = $this->input->post('label');
            $data['description'] = $this->input->post('description');
            $data['type'] = $this->input->post('type');
            $data['default'] = $this->input->post('default');
            $data['value'] = $this->input->post('value');
            $data['options'] = $this->input->post('options');
            $data['is_required'] = 1; //un used
            $data['is_gui'] = 1; //un used
            $data['order'] = 9999;
        }
        LaravelDB()->insert(self::TABLE, $data);
    }

}

function LaravelDB() {
    return DB::table('settings');
}