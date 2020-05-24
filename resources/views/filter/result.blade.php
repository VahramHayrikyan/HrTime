@extends('layouts.app')

@push('custom-styles')
    <style>
        .result-box {
            padding-bottom: 15px;
            background-color: #ffffff;
            box-shadow: 0 2px 7px #292929;
            -moz-box-shadow: 0 2px 7px #292929;
            -webkit-box-shadow: 0 2px 7px #292929;
            border-radius: 10px;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
        }

        .box-header,
        .box-footer {
            padding: 10px;
        }

        .mainbody {
            margin-top: 0;
            padding: 0 20px 10px 20px;
            /*min-height: 150px;*/
            /*max-height: 388px;*/
            height: 250px;
            overflow: auto;
        }

        .box-header {
            height: 40px;
            color: #ffffff;
            border-bottom: 1px solid #EEE;
            background-color: whiteSmoke;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .box-footer {
            height: 40px;
            background-color: whiteSmoke;
            border-top: 1px solid #DDD;
            -webkit-border-bottom-left-radius: 5px;
            -webkit-border-bottom-right-radius: 5px;
            -moz-border-radius-bottomleft: 5px;
            -moz-border-radius-bottomright: 5px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .overview--bg{
            padding: 40px 60px;
        }

        .child-note{
            margin: 0 215px;
            display: flex;

        }

        .square{
            display: inline-block;
            margin-right: 5px;
            border: none;
            width:  16px;
            height: 15px;
        }

        .persentage{
            width: max-content;
        }

        .notes-header{
            font-size: 16px;
        }

        .low-bg{background-color: rgb(187, 167, 252)}
        .middle-bg{background-color: rgb(127, 86, 253)}
        .best-bg{background-color: rgb(114, 84, 167)}
    </style>
@endpush

@section('content')

    {{--<div class="overview--bg">--}}
    <div class="">
        <div style="padding: 15px 0 0 15px;">
            <a class="btn btn-primary" href="{{route('filter')}}"><< Back</a>
        </div>
        <div class="notes text-center">
            <div class="notes-header text-center">
                <p>Percentage of matched keywords.</p>
            </div>
            <div class="child-note" style="margin: auto; width: 100px">
                <div style="float: left">
                    <div class="square best-bg"></div>
                    <span class="persentage">67-100%</span>

                </div>
            </div>
            <div class="child-note" style="margin: auto; width: 100px">
                <div style="float: left">
                    <div class="square middle-bg"></div>
                <span class="persentage">34-66%</span>

                </div>
            </div>
            <div class="child-note" style="margin: auto; width: 100px">
                <div>
                    <div class="square low-bg"></div>
                <span class="persentage">1-33%</span>

                </div>
            </div>
        </div>
        <div class="cv-list row" style="margin-right: 0!important; margin-left: 0!important; margin-bottom: 15px;">

            @foreach($result as $key => $row)
                @if(array_key_exists('match', $row))
                    <div class="col-md-4" >
                        <div class="result-box" style="margin-top: 15px; height: auto">
                            <div class="box-header {{$row['percentage'] <= 33 ? 'low-bg'
                                        : (($row['percentage'] > 33 && $row['percentage'] <= 66) ? 'middle-bg'
                                        : 'best-bg')}}">
                                <b>{{$key}} ({{$row['percentage']}}%) </b>
                            </div>
                            <div class="mainbody">
                                <h3><b>Matches</b></h3>
                                @foreach($row['match'] as $keyword => $count)
                                    <p>{{$keyword}} {{$count > 1 ? $count . ' times' : $count . ' time'}}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @else
                    <div class="text-center">
                        <h3>No matches found.</h3>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

@endsection

@push('footer-script')
    <script>
        let isMobile = window.matchMedia("(max-width: 767px)").matches;
        if(isMobile){
            $('.result-box').css({
                width: "auto"
            });
            $('.notes').css({
                display: "block"
            });
            $('.child-note').css({
                margin: "5px auto"
            });
        }
    </script>
@endpush
