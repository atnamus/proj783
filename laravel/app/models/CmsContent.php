<?php

class CmsContent extends BaseModel {

    public $timestamps = false;
    protected $table = 'cms_content';
    public function cms() {
        return $this->belongsTo('Cms');
    }

}