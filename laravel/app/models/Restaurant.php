<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Restaurant extends BaseModel {

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    const INACTIVE = 0;
    const ACTIVE = 1;
    const DELETE = 2;

    //protected $fillable = ['user_id', 'device', 'platform', 'browser', 'browser_version', 'ip', 'created_at'];
    public $timestamps = true;
    protected $table = 'restaurant';

    // Restaurant  __belongs_to__user
    public function owner() {
        return $this->belongsTo('User');
    }

}