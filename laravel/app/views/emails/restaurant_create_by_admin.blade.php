@extends('emails.layouts.main')

@section('content')
Hi {{$user['username']}},<br/>
<h3>Administrator of <a href="{{route('home')}}">makananas.com</a> has been created your restaurant behalf of you with following data.</h3>
<div>    
    <p>Restaurant Name : {{$resto['name']}}</p>
    <p>Username : {{$user['username']}}</p>
    <p>Owner Email : {{$user['email']}}</p> 
</div>
<div>
    Please <a href="{{URL::action('UsersController@confirm',$user['confirmation_code'])}}">click this</a> to confirm your account or copy the bellow URL and paste it in your browser's address bar.<br/>
        {{URL::action('UsersController@confirm',$user['confirmation_code'])}}
</div>
@stop