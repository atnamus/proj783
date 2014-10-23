@extends('admin::layouts.login')
@section('content')
{{ Confide::makeLoginForm()->render() }}
@stop