<?php

class RestoRestaurantController extends RestoController {

    public function __construct() {
        parent::__construct();
        breadCrumb::add('Restaurant', route('my-restaurant'));
        $this->page_title = "Restaurant";
    }

    /**
     * Display a listing of the restaurant.
     * GET /restaurant
     *
     * @return Response
     */
    public function getRestaurant() {
        $data['model'] = Restaurant::with('owner')->where('owner_id', '=', Auth::id())->first();
        return $this->render('restaurant.edit', $data);
    }

    public function postRestaurant() {
        $validationRules = array(
            'name' => 'between:4,255',
            'address' => 'required',
            'phone' => 'required',
            'taxes' => 'required',
            'facebook' => 'url',
            'twitter' => 'url',
            'google_plus' => 'url',
        );
        $validator = Validator::make(Input::all(), $validationRules);

        // If validation fails, we'll exit the operation now.
        if ($validator->fails()) {
            // Ooops.. something went wrong
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            $resto = Restaurant::where('owner_id', '=', Auth::id())->first();
            $resto->name = Input::get('name');
            $resto->address = Input::get('address');
            $resto->phone = Input::get('phone');
            $resto->backup_phone = Input::get('backup_phone');
            $resto->taxes = Input::get('taxes');
            $resto->facebook = Input::get('facebook');
            $resto->twitter = Input::get('twitter');
            $resto->google_plus = Input::get('google_plus');
            $resto->save();
        }
        return Redirect::to(route('my-restaurant'))->with('message', SiteHelpers::alert("success", "Successfully updated."));
    }

}