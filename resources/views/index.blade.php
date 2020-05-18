@extends('layouts.app')

@push('custom-styles')
    <style>
        .sticky {
            position: fixed;
            top: 0;
            right: 0;
            z-index: 2 !important;
            width: 100%;
            padding-right: 100px;
            padding-left: 100px;
            text-align: center;
            background-color: rgba(127,86,253, .9);
        }
    </style>
@endpush

@section('content')
    <section class="about" id="section-about">
        <div class="container about__container--narrow">
            <div class="page-section">
                <h2 class="page-section__title">ABOUT US</h2>
                <img class="page-section__title-style" src="assets/images/title-style.png" alt="">
                <p class="page-section__paragraph">
                    If you are at the HR universe we are glade to be with you.
                    Chronos CV filter website makes your daily work easier.
                    Chronos was the personification of time in ancient Greeke philosophy.
                    We are named Chronos to help you save your precious time giving you an opportunity to easily overcome in screening stage of CVs and let you  concentrate on your strategic and more creative tasks.
                    <br>Our slogan It's time to HR
                    <br>So let's HR together
                </p>
            </div>
        </div>
    </section>

    <section class="overview overview--bg">
        <div class="container">
            <div class="page-section">
                <div class="row gutters-140">
                    <div class="col-xs-6 col-lg-3 overview__single-section">
                        <i class="material-icons">picture_as_pdf</i>
                        <h2 class="overview__single-section__number">55</h2>
                        <p class="overview__single-section__title">CVs filtered</p>
                    </div>
                    <div class="col-xs-6 col-lg-3 overview__single-section">
                        <i class="material-icons">mood</i>
                        <h2 class="overview__single-section__number">1</h2>
                        <p class="overview__single-section__title">Happy Client</p>
                    </div>
                    <div class="col-xs-6 col-lg-3 overview__single-section">
                        <i class="material-icons">assignment_turned_in</i>
                        <h2 class="overview__single-section__number">1</h2>
                        <p class="overview__single-section__title">Finished Project</p>
                    </div>
                    <div class="col-xs-6 col-lg-3 overview__single-section">
                        <i class="material-icons">local_bar</i>
                        <h2 class="overview__single-section__number">99999</h2>
                        <p class="overview__single-section__title">Cups of coffee</p>
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
                {{--<p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do--}}
                    {{--eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>--}}
                <div class="row gutters-70">
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <a href="{{route('filter')}}"><img src="assets/images/logo-design.png" alt=""></a>
                            <h4 class="service__single-section__title">CV FILTER</h4>
                            <p class="service__single-section__paragraph">
                                You can filter CVs by keywords
                                <br>Upload CVs, type keywords, save time.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="assets/images/website-design.png" alt="">
                            <h4 class="service__single-section__title">UNLIMITED</h4>
                            <p class="service__single-section__paragraph">
                                Use services without any limit,
                                <br>without any payment.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <a href="#section-contact"><img src="assets/images/support.png" alt=""></a>
                            <h4 class="service__single-section__title">SUPPORT</h4>
                            <p class="service__single-section__paragraph">
                                We will be happy to answer your question.
                                <br>Contact us whenever you need.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="slider slider--bg">
        <div id="myCarousel" class="carousel container slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                {{--<li data-target="#myCarousel" data-slide-to="2"></li>--}}
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <div class="carousel-content">
                        <div class="">
                            <div class="text-center">
                                <img src="assets/images/me.png" alt="">
                                <h4>Michael T. Hill</h4>
                                <h6>HR specialist</h6>
                                <p>
                                    We have been extremely happy with the relationship and the services we have received from Chronos.
                                    <br>We will continue our partnership with Chronos and its team.
                                </p>
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
                                <h6>HR specialist</h6>
                                <p>
                                    I would like to thank team of Chronos for valuable contribution
                                    <br>and professional work.
                                </p>
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
                {{--<p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do--}}
                    {{--eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>--}}
                <div class="row gutters-40">
                    <div class="col-md-6">
                        <div class="thumbnail">
                            <img class="team-img" src="{{asset('assets/images/team-shushan.JPG')}}" alt="">
                            <h4 class="team__single-section__name">SHUSHAN HAYRIKYAN</h4>
                            <p class="team__single-section__title">Founder</p>
                            <hr style="border: 0;border-bottom: 1px solid #ECEFF1;display:block;">
                            <div class="social-icons">
                                <ul class="social-icons-list">
                                    <li><a href="https://www.linkedin.com/in/shushan-hayrikyan/"><img class="social-logos" src="{{asset('assets/images/linkedin-logo.png')}}"></a></li>
                                    <li class="team-email"><a href="mailto:shushanhayrikyan@gmail.com">Email</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="thumbnail">
                            <img class="team-img" src="{{asset('assets/images/team-vahram.JPG')}}" alt="">
                            <h4 class="team__single-section__name">VAHRAM HAYRIKYAN</h4>
                            <p class="team__single-section__title">CTO, Developer</p>
                            <hr style="border: 0;border-bottom: 1px solid #ECEFF1;display:block;">
                            <div class="social-icons">
                                <ul class="social-icons-list">
                                    <li><a href="https://www.linkedin.com/in/vahram-hayrikyan/"><img class="social-logos" src="{{asset('assets/images/linkedin-logo.png')}}"></a></li>
                                    <li class="team-email"><a href="mailto:vahramhayrikyan@gmail.com">Email</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('footer-script')

    <script>

        let header = $("#myHeader");
        let isMobile = window.matchMedia("(max-width: 767px)").matches;

        $(window).scroll(function(){
            if(window.scrollY > 0 && !isMobile)
                header.addClass('sticky');
            else
                header.removeClass('sticky');
        });

    </script>
@endpush
