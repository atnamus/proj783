<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{@$subject}}</title>
    </head>
    <body>
        {{-- main email content --}}
        @yield('content')  
        {{-- Signature of the email--}}
        @include('emails.partials.signature')
    </body>
</html>