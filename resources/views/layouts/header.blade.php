<header class="header {{\Illuminate\Support\Facades\Route::currentRouteName() === 'home' ? 'header--bg' : 'header--bg-no-photo'}}" id="section-home">
    <div class="container">
        <nav class="navbar" id="myHeader">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="{{\Illuminate\Support\Facades\Route::currentRouteName() === 'home' ? '#section-home' : route('home') . '#section-home'}}">HOME</a></li>
                    <li><a href="{{route('filter')}}">CV FILTER</a></li>
                    <li><a href="{{\Illuminate\Support\Facades\Route::currentRouteName() === 'home' ? '#section-about' : route('home') . '#section-about'}}">ABOUT</a></li>
                    <li><a href="{{\Illuminate\Support\Facades\Route::currentRouteName() === 'home' ? '#section-services' : route('home') . '#section-services'}}">SERVICES</a></li>
                    <li><a href="{{\Illuminate\Support\Facades\Route::currentRouteName() === 'home' ? '#section-team' : route('home') . '#section-team'}}">TEAM</a></li>
                    <li><a href="{{\Illuminate\Support\Facades\Route::currentRouteName() === 'home' ? '#section-contact' : route('home') . '#section-contact'}}">CONTACT</a></li>
                </ul>
            </div>
        </nav>
        @if(\Illuminate\Support\Facades\Route::currentRouteName() === 'home')
        <div class="header__content text-center">
            {{--<span class="header__content__block">MAKE</span>--}}
            <h1 class="header__content__title font-cursive">It's time to HR</h1>
            {{--<ul class="header__content__sub-title">--}}
                {{--<li>REMOTE <span class="padding">&#45;</span></li>--}}
                {{--<li>INTERVIEW <span class="padding">&#45;</span></li>--}}
                {{--<li>NO LIMITS</li>--}}
            {{--</ul>--}}
            <a class="header__button" href="{{\Illuminate\Support\Facades\Route::currentRouteName() === 'home' ? '#section-contact' : route('home') . '#section-contact'}}">CONTACT US</a>
        </div>
        {{--<div class="social-icon pull-right">--}}
            {{--<ul>--}}
                {{--<li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>--}}
                {{--<li><a href="#"><i class="flaticon-twitter-logo"></i></a></li>--}}
                {{--<li><a href="#"><i class="flaticon-behance-logo"></i></a></li>--}}
                {{--<li><a href="#"><i class="flaticon-dribbble-logo"></i></a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
        @endif
    </div>
</header>
