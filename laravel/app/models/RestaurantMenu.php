<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class RestaurantMenu extends BaseModel {

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    public $timestamps = true;
    protected $table = 'restaurant_menu';

    // Restaurant  __belongs_to__user
    public function category() {
        return $this->belongsTo('MenuCategory');
    }

    public function restaurant() {
        return $this->belongsTo('Restaurant');
    }

}