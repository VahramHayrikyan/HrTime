<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>HrTime | Recruitment | Jobs | Employees</title>
    <meta name="keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">

    <link rel="stylesheet" href="{{asset('assets/fonts/flat-icon/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
<div id="content-wrapper">
    <header class="header header--bg" id="section-home">
        <div class="container">
            <nav class="navbar">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">HrTime</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#section-home">HOME</a></li>
                        <li><a href="#section-about">ABOUT</a></li>
                        <li><a href="#section-services">SERVICES</a></li>
                        <li><a href="#section-team">TEAM</a></li>
                        <li><a href="#section-contact">CONTACT</a></li>
                    </ul>
                </div>
            </nav>
            <div class="header__content text-center">
                <span class="header__content__block">MAKE</span>
                <h1 class="header__content__title">TIME TO WORK FOR YOU</h1>
                <ul class="header__content__sub-title">
                    <li>REMOTE <span class="padding">&#45;</span></li>
                    <li>INTERVIEW <span class="padding">&#45;</span></li>
                    <li>NO LIMITS</li>
                </ul>
                <a class="header__button" href="#section-contact">CONTACT US</a>
            </div>
            <div class="social-icon pull-right">
                <ul>
                    <li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>
                    <li><a href="#"><i class="flaticon-twitter-logo"></i></a></li>
                    <li><a href="#"><i class="flaticon-behance-logo"></i></a></li>
                    <li><a href="#"><i class="flaticon-dribbble-logo"></i></a></li>
                </ul>
            </div>
        </div>
    </header>

    <section class="about" id="section-about">
        <div class="container about__container--narrow">
            <div class="page-section">
                <h2 class="page-section__title">ABOUT US</h2>
                <img class="page-section__title-style" src="assets/images/title-style.png" alt="">
                <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
    </section>

    <section class="overview overview--bg">
        <div class="container">
            <div class="page-section">
                <div class="row gutters-140">
                    <div class="col-xs-6 col-lg-3 overview__single-section">
                        <i class="material-icons">headset_mic</i>
                        <h2 class="overview__single-section__number">220</h2>
                        <p class="overview__single-section__title">Hand to Work</p>
                    </div>
                    <div class="col-xs-6 col-lg-3 overview__single-section">
                        <i class="material-icons">mood</i>
                        <h2 class="overview__single-section__number">530</h2>
                        <p class="overview__single-section__title">Happy Client</p>
                    </div>
                    <div class="col-xs-6 col-lg-3 overview__single-section">
                        <i class="material-icons">assignment_turned_in</i>
                        <h2 class="overview__single-section__number">780</h2>
                        <p class="overview__single-section__title">Finished Project</p>
                    </div>
                    <div class="col-xs-6 col-lg-3 overview__single-section">
                        <i class="material-icons">local_bar</i>
                        <h2 class="overview__single-section__number">970</h2>
                        <p class="overview__single-section__title">Cups of coffe</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service" id="section-services">
        <div class="container">
            <div class="page-section">
                <h2 class="page-section__title">OUR SERVICES</h2>
                <img class="page-section__title-style" src="assets/images/title-style.png" alt="">
                <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <div class="row gutters-70">
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="assets/images/logo-design.png" alt="">
                            <h4 class="service__single-section__title">LOGO DESIGN</h4>
                            <p class="service__single-section__paragraph">magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="assets/images/website-design.png" alt="">
                            <h4 class="service__single-section__title">WEBSITE DESIGN</h4>
                            <p class="service__single-section__paragraph">magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="assets/images/support.png" alt="">
                            <h4 class="service__single-section__title">SUPPORT</h4>
                            <p class="service__single-section__paragraph">magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--<section class="skill skill--bg">
        <div class="container skill__container--narrow">
            <div class="page-section">
                <h2 class="page-section__title page-section__title--white">MY SKILL</h2>
                <img class="page-section__title-style" src="assets/images/title-style-white.png" alt="">
                <p class="page-section__paragraph page-section__paragraph--white">Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. </p>
                <div class="row gutters-60">
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="assets/images/adobe-photoshop.png" alt="">
                            <h4 class="skill__single-part__title">ADOBE PHOTOSHOP</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                     style="width:80%;background-color: #7FB7FA;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="assets/images/adobe-illustrator.png" alt="">
                            <h4 class="skill__single-part__title">ADOBE PHOTOSHOP</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                     style="width:80%;background-color: #FFAC1B;;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="assets/images/adobe-after-effects.png" alt="">
                            <h4 class="skill__single-part__title">ADOBE PHOTOSHOP</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                     style="width:80%;background-color: #C99AFF;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}

    {{--<section class="portfolio">
        <div class="container">
            <div class="page-section">
                <h2 class="page-section__title">MY PORTFOLIO</h2>
                <img class="page-section__title-style" src="assets/images/title-style.png" alt="">
                <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <div class="portfolio__button-group">
                    <a class="button button--default" data-filter="all" href="#">ALL</a>
                    <a class="button button--default" data-filter=".category-a" href="#">DEVELOPMENT</a>
                    <a class="button button--default" data-filter=".category-b" href="#">DESIGN</a>
                    <a class="button button--default" data-filter=".category-c" href="#">HTML</a>
                    <a class="button button--default" data-filter=".category-d" href="#">JAVA</a>
                </div>
                <div class="row gutters-40">
                    <div class="col-md-4">
                        <div class="portfolio__single-section mix category-a category-b category-c" data-order="1">
                            <img class="portfolio__single-section__image img-responsive"
                                 src="assets/images/portfolio-1.png" alt="">
                            <div class="portfolio__single-section__overlay">
                                <div class="overlay-content">
                                    <h4>LOGO DESIGN</h4>
                                    <p>Designer</p>
                                </div>
                                <div class="portfolio__single-section__search-icon">
                                    <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="portfolio__single-section mix category-a category-c" data-order="2">
                            <img class="portfolio__single-section__image img-responsive"
                                 src="assets/images/portfolio-2.png" alt="">
                            <div class="portfolio__single-section__overlay">
                                <div class="overlay-content">
                                    <h4>WEBSITE DESIGN</h4>
                                    <p>Designer</p>
                                </div>
                                <div class="portfolio__single-section__search-icon">
                                    <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="portfolio__single-section mix category-c" data-order="3">
                            <img class="portfolio__single-section__image img-responsive"
                                 src="assets/images/portfolio-3.png" alt="">
                            <div class="portfolio__single-section__overlay">
                                <div class="overlay-content">
                                    <h4>LOGO DESIGN</h4>
                                    <p>Designer</p>
                                </div>
                                <div class="portfolio__single-section__search-icon">
                                    <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-40">
                    <div class="col-md-4">
                        <div class="portfolio__single-section mix category-b category-d" data-order="4">
                            <img class="portfolio__single-section__image img-responsive"
                                 src="assets/images/portfolio-4.png" alt="">
                            <div class="portfolio__single-section__overlay">
                                <div class="overlay-content">
                                    <h4>PHOTOGRAPHY</h4>
                                    <p>photographer</p>
                                </div>
                                <div class="portfolio__single-section__search-icon">
                                    <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="portfolio__single-section mix category-b category-d" data-order="5">
                            <img class="portfolio__single-section__image img-responsive"
                                 src="assets/images/portfolio-5.png" alt="">
                            <div class="portfolio__single-section__overlay">
                                <div class="overlay-content">
                                    <h4>WEBSITE DESIGN</h4>
                                    <p>Designer</p>
                                </div>
                                <div class="portfolio__single-section__search-icon">
                                    <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="portfolio__single-section mix category-d" data-order="6">
                            <img class="portfolio__single-section__image img-responsive"
                                 src="assets/images/portfolio-6.png" alt="">
                            <div class="portfolio__single-section__overlay">
                                <div class="overlay-content">
                                    <h4>LOGO DESIGN</h4>
                                    <p>Designer</p>
                                </div>
                                <div class="portfolio__single-section__search-icon">
                                    <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}

    <section class="slider slider--bg">
        <div id="myCarousel" class="carousel container slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <div class="carousel-content">
                        <div class="">
                            <div class="text-center">
                                <img src="assets/images/me.png" alt="">
                                <h4>Michael T. Hill</h4>
                                <h6>Designer</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, </p>
                                <div class="rating">
                                    <ul>
                                        <li><i class="material-icons">star</i></li>
                                        <li><i class="material-icons">star</i></li>
                                        <li><i class="material-icons">star</i></li>
                                        <li><i class="material-icons">star</i></li>
                                        <li><i class="material-icons">star</i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="carousel-content">
                        <div class="">
                            <div class="text-center">
                                <img class="carousel-person-image" src="assets/images/team-2.png" alt="">
                                <h4>Leonard D. Downing</h4>
                                <h6>Photographer</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, </p>
                                <div class="rating">
                                    <ul>
                                        <li><i class="material-icons">star</i></li>
                                        <li><i class="material-icons">star</i></li>
                                        <li><i class="material-icons">star</i></li>
                                        <li><i class="material-icons">star</i></li>
                                        <li><i class="material-icons">star</i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="carousel-content">
                        <div class="">
                            <div class="text-center">
                                <img class="carousel-person-image" src="assets/images/team-3.png" alt="">
                                <h4>Paula R. Mullins</h4>
                                <h6>Designer</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, </p>
                                <div class="rating">
                                    <ul>
                                        <li><i class="material-icons">star</i></li>
                                        <li><i class="material-icons">star</i></li>
                                        <li><i class="material-icons">star</i></li>
                                        <li><i class="material-icons">star</i></li>
                                        <li><i class="material-icons">star</i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team" id="section-team">
        <div class="container">
            <div class="page-section">
                <h2 class="page-section__title">OUR TEAM</h2>
                <img class="page-section__title-style" src="assets/images/title-style.png" alt="">
                <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <div class="row gutters-40">
                    <div class="col-md-6">
                        <div class="thumbnail">
                            <img src="{{asset('assets/images/team-shushan-1.JPG')}}" alt="">
                            <h4 class="team__single-section__name">SHUSHAN HAYRIKYAN</h4>
                            <p class="team__single-section__title">Founder</p>
                            <div class="team__overlay">
                                <div class="team__overlay__content">
                                    <div class="team__single-section--backPage">
                                        <h4 style="padding-left: 0;" class="team__single-section__name">SHUSHAN HAYRIKYAN</h4>
                                        <p style="padding-left: 0;" class="team__single-section__title">Founder</p>
                                        <p class="team__single-section--backPage__title">Adobe Photoshop <span
                                                class="team__single-section--backPage__percent90">90&#37;</span></p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar"
                                                 style="width:90%;background-color: #7F56FD;">
                                                <span class="progress-bar--dot-main"></span>
                                                <span class="progress-bar--dot"></span>
                                            </div>
                                        </div>
                                        <p class="team__single-section--backPage__title">Adobe Illustrator <span
                                                class="team__single-section--backPage__percent80">80&#37;</span></p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar"
                                                 style="width:80%;background-color: #7F56FD;">
                                                <span class="progress-bar--dot-main"></span>
                                                <span class="progress-bar--dot"></span>
                                            </div>
                                        </div>
                                        <p class="team__single-section--backPage__title">After Effect <span
                                                class="team__single-section--backPage__percent70">70&#37;</span></p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar"
                                                 style="width:70%;background-color: #7F56FD;">
                                                <span class="progress-bar--dot-main"></span>
                                                <span class="progress-bar--dot"></span>
                                            </div>
                                        </div>
                                        <hr style="border: 0;border-bottom: 1px solid #ECEFF1;display:block;padding-top: 45px;">
                                        <div class="social-icons">
                                            <ul>
                                                <li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>
                                                <li><a href="#"><i class="flaticon-twitter-logo"></i></a></li>
                                                <li><a href="#"><i class="flaticon-dribbble-logo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="thumbnail">
                            <img src="{{asset('assets/images/team-vahram.JPG')}}" alt="">
                            <h4 class="team__single-section__name">VAHRAM HAYRIKYAN</h4>
                            <p class="team__single-section__title">CTO</p>
                            <div class="team__overlay">
                                <div class="team__overlay__content">
                                    <div class="team__single-section--backPage">
                                        <h4 style="padding-left: 0;" class="team__single-section__name">VAHRAM HAYRIKYAN</h4>
                                        <p style="padding-left: 0;" class="team__single-section__title">CTO</p>
                                        <p class="team__single-section--backPage__title">Adobe Photoshop <span
                                                class="team__single-section--backPage__percent90">90&#37;</span></p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar"
                                                 style="width:90%;background-color: #7F56FD;">
                                                <span class="progress-bar--dot-main"></span>
                                                <span class="progress-bar--dot"></span>
                                            </div>
                                        </div>
                                        <p class="team__single-section--backPage__title">Adobe Illustrator <span
                                                class="team__single-section--backPage__percent80">80&#37;</span></p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar"
                                                 style="width:80%;background-color: #7F56FD;">
                                                <span class="progress-bar--dot-main"></span>
                                                <span class="progress-bar--dot"></span>
                                            </div>
                                        </div>
                                        <p class="team__single-section--backPage__title">After Effect <span
                                                class="team__single-section--backPage__percent70">70&#37;</span></p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar"
                                                 style="width:70%;background-color: #7F56FD;">
                                                <span class="progress-bar--dot-main"></span>
                                                <span class="progress-bar--dot"></span>
                                            </div>
                                        </div>
                                        <hr style="border: 0;border-bottom: 1px solid #ECEFF1;display:block;padding-top: 45px;">
                                        <div class="social-icons">
                                            <ul>
                                                <li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>
                                                <li><a href="#"><i class="flaticon-twitter-logo"></i></a></li>
                                                <li><a href="#"><i class="flaticon-dribbble-logo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--<section class="brand-logo brand-logo--bg">
        <div class="container">
            <div class="row">
                <div class="brand-logo__wrapper">
                    <li><img class="img-responsive" src="assets/images/brand-1.png" alt=""></li>
                    <li><img class="img-responsive" src="assets/images/brand-2.png" alt=""></li>
                    <li><img class="img-responsive" src="assets/images/brand-3.png" alt=""></li>
                    <li><img class="img-responsive" src="assets/images/brand-4.png" alt=""></li>
                    <li><img class="img-responsive" src="assets/images/brand-1.png" alt=""></li>
                </div>
            </div>
        </div>
    </section>--}}

    {{--<section class="blog">
        <div class="container">
            <div class="page-section">
                <h2 class="page-section__title">BLOG POST</h2>
                <img class="page-section__title-style" src="assets/images/title-style.png" alt="">
                <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <div class="row gutters-40">
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img class="img-responsive" src="assets/images/blog-1.png" alt="">
                            <p class="blog__single__date">MAY 25 , 2017 </p>
                            <i class="material-icons">comment</i> 5
                            <a href="#"><h4 class="blog__single__title">HEADLINE LATEST WORLD NEWS</h4></a>
                            <p class="blog__single__paragraph">orem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore Ut enim ad minim veniam <a
                                    href="#"><span class="blog__single__paragraph--read-more">READ MORE...</span></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="assets/images/blog-2.png" alt="">
                            <p class="blog__single__date">MAY 25 , 2017 </p>
                            <i class="material-icons">comment</i> 5
                            <a href="#"><h4 class="blog__single__title">HEADLINE LATEST WORLD NEWS</h4></a>
                            <p class="blog__single__paragraph">orem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore Ut enim ad minim veniam <a
                                    href="#"><span class="blog__single__paragraph--read-more">READ MORE...</span></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="assets/images/blog-3.png" alt="">
                            <p class="blog__single__date">MAY 25 , 2017 </p>
                            <i class="material-icons">comment</i> 5
                            <a href="#"><h4 class="blog__single__title">HEADLINE LATEST WORLD NEWS</h4></a>
                            <p class="blog__single__paragraph">orem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore Ut enim ad minim veniam <a
                                    href="#"><span class="blog__single__paragraph--read-more">READ MORE...</span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}

    <footer class="footer footer--bg" id="section-contact">
        <div class="container text-center">
            <h1 class="footer__title">HrTime</h1>
            <ul class="footer__contact-information">
                <li><a href="tel:5555555555"><i class="material-icons">phone</i> Hotline (+123) 45 67 89 21</a></li>
                <li><a href="mailto:sshariar458@gmail.com"><i class="material-icons">email</i>sshahriar458@gmail.com</a></li>
                <li><a href="#"><i class="material-icons">location_on</i> 15 Movses Khorenatsi Street, Yerevan, Armenia</a></li>
            </ul>
        </div>
        <hr style="border: 0;border-top: 1px solid #525B60;display:block;margin-top: 40px;">
        <div class="container text-center">
            <div class="social-icon">
                <ul>
                    <li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>
                    <li><a href="#"><i class="flaticon-twitter-logo"></i></a></li>
                    <li><a href="#"><i class="flaticon-behance-logo"></i></a></li>
                    <li><a href="#"><i class="flaticon-dribbble-logo"></i></a></li>
                </ul>
            </div>
            <p class="footer__paragraph">Copyright &copy; {{date('Y')}} DartThemes , All Rights Reserved.</p>
        </div>
    </footer>
</div>
<script src="{{asset('assets/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/mixitup.js')}}"></script>

<script>
    // $('a').click(function (e) {
    //     e.preventDefault();
    // });

    // calling mixitup
    var mixer = mixitup(".portfolio");
</script>
</body>
</html>  
