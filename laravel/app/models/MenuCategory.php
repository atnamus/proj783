<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class MenuCategory extends BaseModel {

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    public $timestamps = true;
    protected $table = 'menu_category';

    // Restaurant  __belongs_to__user
    public function menu() {
        return $this->hasMany('RetaurantMenu');
    }

    public static function lists2($name, $id) {
        return array_merge(['' => '---select---'], parent::lists($name, $id));
    }

}