<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;
use Zizaco\Entrust\HasRole;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends BaseModel implements ConfideUserInterface {

    use SoftDeletingTrait;

use ConfideUser;

use HasRole;

    protected $dates = ['deleted_at'];
    protected $fillable = ['name'];

    public function roles() {
        return $this->belongsToMany('Role', 'assigned_roles');
    }

    public function restaurant() {
        return $this->hasOne('Restaurant', 'owner_id');
    }

    public function getRestaurantId() {
        //Restaurant::
        return $this->restaurant->id;
    }

}