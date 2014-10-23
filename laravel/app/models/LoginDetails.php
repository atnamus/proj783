<?php

class LoginDetails extends \Eloquent {

    protected $fillable = ['user_id', 'device', 'platform', 'browser', 'browser_version', 'ip', 'created_at'];
    public $timestamps = false;
    protected $table = 'login_details';

}