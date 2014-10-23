<?php

class AdminSettingsController extends AdminController {

    public function __construct() {
        parent::__construct();
        breadCrumb::add('Settings', route('admin.settings.index'));
        $this->page_title = "Settings";
    }

    /**
     * Display a listing of the resource.
     * GET /admin/adminsettings
     *
     * @return Response
     */
    public function index() {

        $data = array();
        $tab = Input::get('tab') == FALSE ? 1 : input::get('tab');
        /* if ($this->session->userdata('tab')) {
          $data['tab'] = $this->session->userdata('tab');
          $data['success_msg'] = 'Your options were saved!';
          $this->session->unset_userdata('tab');
          } else {
          $data['tab'] = 1;
          } */
        $data['tab'] = 1;
        $modules = SiteSettings::all();
        $system_tab = array();

        // $systems[] = array('title' => 'PHP Version', 'value' => phpversion() . '&nbsp&nbsp<a href="' . base_url('settings/phpinfo') . '" target="_blank">Complete PHP Info</a>');
        $systems[] = array('title' => 'MySQL Version', 'value' => Sitesettings::mysql_version());
        //$systems[] = array('title' => 'Backup Your Database', 'value' => '<a href="' . base_url('settings/db/backup') . '">Click</a>');
        foreach ($systems as $system) {
            $system_tab[] = (object) array(
                        'slug' => isset($system['slug']) ? $system['slug'] : '',
                        'title' => isset($system['title']) ? $system['title'] : '',
                        'description' => isset($system['description']) ? $system['description'] : '',
                        'type' => isset($system['type']) ? $system['type'] : '',
                        'default' => isset($system['default']) ? $system['default'] : '',
                        'value' => isset($system['value']) ? $system['value'] : '',
                        'options' => isset($system['options']) ? $system['options'] : '',
                        'is_required' => isset($system['is_required']) ? $system['is_required'] : '',
                        'is_gui' => isset($system['is_gui']) ? $system['is_gui'] : '',
                        'module' => 'System',
                        'order' => isset($system['order']) ? $system['order'] : '',
            );
        }
        $modules['System'] = $system_tab;
        $data['modules'] = $modules;
        return $this->render('settings.index', $data);
    }

    public function update($id) {
        //return Response::json($_POST);
        $inputData = Input::get('settings');
        foreach ($inputData as $slug => $value) {
            DB::update('update site_settings set value = ? where module = ? AND slug = ?', [$value, $id, $slug]);
        }
        $this->ajax_success = TRUE;
        $this->ajax_message = "Successfully updated.";
        return $this->ajaxResponse();
    }

}