<?php

class Cms extends BaseModel {

    //protected $fillable = ['user_id', 'device', 'platform', 'browser', 'browser_version', 'ip', 'created_at'];
    public $timestamps = true;
    protected $table = 'cms';

    public function content() {
        return $this->hasMany('cms_content');
    }

}