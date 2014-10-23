@extends('frontend::layouts.master')
{{-- Assignment --}}
@if ($body_class = 'home-page') @endif
@section('main_content')
<header class="header">
    <div class="language_holder">
        <a href="#" class="language select"><img src="{{url('frontend/images/indo.png')}}" alt="icon"></a>
        <a href="#" class="language"><img src="{{url('frontend/images/eng.png')}}" alt="icon"></a>
    </div>
</header>
<div  id="wrapper">
   @yield('content')      
</div>
<section class="home_category">
    <ul class="category_listing clearfix">
        <li>
            <i><img src="{{url('frontend/images/label-new.png')}}" alt="icon"></i>
            <div><a href="#">Tandoor</a> Antonigasse 9, 1180 Wien</div>
        </li>
        <li>
            <i><img src="{{url('frontend/images/label-new.png')}}" alt="icon"></i>
            <div><a href="#">The Burgur Bar</a> Liechtensteinstrabe 8, 1090 Wien</div>
        </li>
        <li>
            <i><img src="{{url('frontend/images/label-ordernow.png')}}" alt="icon"></i>
            <div><a href="#">Order by : Mr. nemo </a> Liechtensteinstrabe 8, 1090 Wien</div>
        </li>
        <li>
            <i><img src="{{url('frontend/images/label-new.png')}}" alt="icon"></i>
            <div><a href="#">3raum</a> Antoni Gassa 9, 1180 Vienna</div>
        </li>
        <li>
            <i><img src="{{url('frontend/images/label-ordernow.png')}}" alt="icon"></i>
            <div><a href="#">Order by: Mr.Krab</a> 6 Hours 12 Minutes</div>
        </li>
    </ul>
</section>
<footer class="site_footer">
    <div class="find_us"><a href="#">Find Us</a></div>
    <div class="footer-wrapper">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h3 class="footer-title">Office</h3>
                <p>Ji. pluit samudra II<br> Menara marine, Unit BM3B<br> Jakarta Utara 14450, indonesia</p>
            </div>
            <div class="col-md-4 col-sm-4">
                <h3 class="footer-title">Contact Us</h3>
                <ul class="footer_contact">
                    <li><a href="#">Makananas.com</a></li>
                    <li><a href="#">Contact@makananas.com</a></li>
                    <li>+628159913903</li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-2">
                <ul class="footer_link">
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Faq</a></li>
                    <li><a href="#">T&C</a></li>
                    <li><a href="#">Career</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>  
@stop