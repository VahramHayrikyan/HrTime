@extends('layouts.app')

@push('custom-styles')
    <link rel="stylesheet" href="{{asset('css/filter.css')}}">
@endpush

@section('content')
    <div class="filter-container overview--bg">
        <form action="{{route('filter-cv')}}" id="form-cv-filter" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-wrap">
                <div class="modal-header"><span class="is-active"></span><span></span><span></span></div>
                <div class="modal-bodies">

                    <div class="modal-body is-showing">
                        {{--<div class="title">Step 1</div>--}}
                        <div class="greeting">
                            <img class="greeting-robotik" src="{{asset('assets/images/robotik.jpg')}}" alt="Helper Bot">

                            <div class="css-typing">
                                <p>
                                    Hello there, I am Robotik.
                                </p>
                                <p>
                                    I will help you to filter all CVs you want.
                                </p>
                                <p>
                                    Let's go.
                                </p>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="button">Start</div>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="description">
                            <img class="robotik" src="{{asset('assets/images/robotik.jpg')}}" alt="Helper Bot">
                            <p>
                                Let's upload <b>pdf file/files.</b>
                                <br>
                                <b>Note:</b> none pdf files will not be considered.
                            </p>
                        </div>

                        <div class="wrapper">
                            <input onchange="validateFileUpload(this);" type="file" id="file" name="cv_file[]" multiple>
                            <label for="file" class="btn-2">upload</label>
                            <p style="display: none;" id="showCount">Selected <span id="fileCount"></span></p>
                            <p class="error-text" id="extensionError" style="display: none;">Please select only files in <b>pdf</b> format.</p>
                            <p class="error-text" id="noFilesError" style="display: none;">Please select at least 1 file.</p>
                            <p class="error-text" id="sizeError" style="display: none;">Please select files less then 8 mb.</p>
                            <p class="error-text" id="countError" style="display: none;">Please select less then 20 files.</p>
                        </div>

                        <div class="text-center fade-in">
                            <div class="button custom-disabled" disabled="true">Next</div>
                        </div>

                    </div>

                    <div class="modal-body">
                        <div class="description">
                            <img class="robotik" src="{{asset('assets/images/robotik.jpg')}}" alt="Helper Bot">
                            <div>
                                <p>
                                    Filtering will be based on keywords.
                                    <br>
                                    Here are few examples for you:
                                </p>
                                <p class="typewrite" data-period="500"
                                   data-type='[ "keyword1, keyword-1, keyword 1", "web, laravel, react, view, developer", "hr, human resources, recruitment, recruiter"]'>
                                    <span class="wrap"></span>
                                </p>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="keywords-container">
                                <span>
                                  <input class="swing" name="keywords" id="artist" type="text"
                                         placeholder="Keywords"/><label for="artist">Keywords</label>
                                </span>
                                <p class="error-text" id="keywordError" style="display: none;">Please type at least 1 keyword.</p>
                                <p class="error-text" id="keywordCountError" style="display: none;">Please select less than 20 keywords.</p>
                            </div>
                        </div>

                        <div class="text-center fade-in">
                            <div class="button" id="form-submit">Submit</div>
                        </div>
                    </div>

                </div>
            </div>
            {{--<div class="text-center">--}}
                {{--<div class="rerun-button">ReRun</div>--}}
                {{--<button type="submit">Submit</button>--}}
            {{--</div>--}}
        </form>
    </div>
@endsection

@push('footer-script')
    <script>

        let isMobile = window.matchMedia("(max-width: 767px)").matches;
        if(isMobile) $('.modal-body').css({
            'overflow-x': 'scroll',
            padding: '10px'
        });

        $('.button').click(function(){
            let $btn = $(this),
                $step = $btn.parents('.modal-body'),
                stepIndex = $step.index(),
                $headerCircle = $('.modal-header span').eq(stepIndex);

            if(stepIndex === 0 || stepIndex === 1) { nextStep($step, $headerCircle); }
            // else { finalStep($step); }
            if(stepIndex === 1) examplesTyping();

        });


        function nextStep($step, $headerCircle){
            // animate the step out
            $step.addClass('animate-out');

            // animate the step in
            setTimeout(function(){
                $step.removeClass('animate-out is-showing')
                    .next().addClass('animate-in');
                $headerCircle.removeClass('is-active')
                    .next().addClass('is-active');
            }, 600);

            // after the animation, adjust the classes
            setTimeout(function(){
                $step.next().removeClass('animate-in')
                    .addClass('is-showing');
            }, 1200);
        }


        // function finalStep($step){
        //     // animate the step out
        //     $step.parents('.modal-wrap').addClass('animate-up');
        //
        //     setTimeout(function(){
        //         $('.rerun-button').css('display', 'inline-block');
        //     }, 300);
        // }

        $('.rerun-button').click(function(){
            $('.modal-wrap').removeClass('animate-up')
                .find('.modal-body')
                .first().addClass('is-showing')
                .siblings().removeClass('is-showing');

            $('.modal-header span').first().addClass('is-active')
                .siblings().removeClass('is-active');
            $(this).hide();
        });

        function validateFileUpload(_this){
            let maxFileSize = 8000000;//8mb
            let totalFileSize = 0;
            let files = _this.files;
            let filesLength = files.length;
            if(filesLength === 0) {
                $('#noFilesError').fadeIn(800).delay(3000).fadeOut(800);
                return;
            }else if (filesLength > 20){
                $('#countError').fadeIn(800).delay(3000).fadeOut(800);
                return;
            }
            for(let i = 0; i < files.length; i++) {
                let fileName = files[i].name;
                let fileExtension = fileName.split('.').pop().toLowerCase();
                let fileSize = files[i].size;
                totalFileSize += fileSize;

                if(fileExtension !== 'pdf'){
                    $('#extensionError').fadeIn(800).delay(3000).fadeOut(800);
                    return;
                }
            }

            if(totalFileSize > maxFileSize) {
                $('#sizeError').fadeIn(800).delay(3000).fadeOut(800);
                return;
            }

            let countText = filesLength === 1 ? '1 file.' : filesLength + ' files.';
            $('#fileCount').text(countText);
            $('#showCount').show(1000);
            $(_this).parents('.modal-body').find('.custom-disabled').removeClass('custom-disabled');
        }


        $('#form-submit').click(function(){
            let keywordsVal = $('#artist').val();
            if(!keywordsVal){
                $('#keywordError').fadeIn(800).delay(3000).fadeOut(800);
                return;
            }
            let array = keywordsVal.split(',');
            if (array.length > 20){
                $('#keywordCountError').fadeIn(800).delay(3000).fadeOut(800);
                return;
            }
            $('#form-cv-filter').submit();
            $(this).addClass('custom-disabled');
        });

        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 500;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

            var that = this;
            // var delta = 200 - Math.random() * 100;
            var delta = 80;

            if (this.isDeleting) { delta /= 2; }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        function examplesTyping() {
            setTimeout(function () {
                var elements = document.getElementsByClassName('typewrite');
                for (var i = 0; i < elements.length; i++) {
                    var toRotate = elements[i].getAttribute('data-type');
                    var period = elements[i].getAttribute('data-period');
                    if (toRotate) {
                        new TxtType(elements[i], JSON.parse(toRotate), period);
                    }
                }
                // INJECT CSS
                var css = document.createElement("style");
                css.type = "text/css";
                css.innerHTML = ".typewrite > .wrap { border-right: .15em solid #FF6F00}";
                document.body.appendChild(css);
            }, 2000);
        }

    </script>
@endpush
