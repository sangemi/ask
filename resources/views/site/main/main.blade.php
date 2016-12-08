@extends('layouts.master') {{--master를 상속받음--}}

@section('title', 'Qooei - AskBottle')

@section('sidebar')
    @parent

    <p>Qooei.com</p>

@stop

@section('content')


<link rel="stylesheet" href="{{URL::asset('/css/main/main.css')}}">

sdf1111111111111111
{{--페이지 작은 네비바 대체--}}
<style>

    .breadcrumb > li + li.pull-right:last-child:before {
        content: " "; /* breadcrumb 특정슬래시 없애기. 공백이면안됨*/
    }
</style>

<ol class="breadcrumb">
    <li><a href="{{ URL::to('/') }}">
        <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Home</a></li>

    <li class="pull-right"><a href="{{ URL::to('wave/client/create') }}">
        <span class="btn btn-xs btn-default" aria-hidden="true">NEW <span class="fa fa-pencil"></span></span></a>
    </li>


</ol>




<?php
/*$prev_url = parse_url(URL::previous());
$now_url = parse_url(URL::current());
\App\Lib\skHelper::p($prev_url );
\App\Lib\skHelper::p($now_url);
//echo $prev_url['path'] .'='. $now_url['path'];
if( $prev_url['host'] != $now_url['host']){ //타사이트에서 유입. 아마 키워드광고
echo "ddddddd다름";
}*/
?>

<style>
    .btnCate1s {padding:8px 10px;}
    .btnCate1s span.fa {font-size:2.0em;}
    .cate1_text {font-size:0.8em;font-family:'맑은 고딕';}

    .bigbox {width:100%;border:1px solid white;background-color:#fff;float:left;margin-bottom:5px;
        border-radius:10px;
    }
    .bigbox h4 {border-bottom:1px solid tomato;padding:8px 0 3px 0;color:tomato;margin-top:0px;border-top-left-radius:10px;border-top-right-radius:10px;}
    h1 { color: #00BFFF; }

    }
</style>

    <div class="row text-center" style="padding:0 10px 10px 10px;">
        <div class="">
            <div class="col-sm-8 col-sm-offset-2" style="white-space:normal;">


                <div class="bigbox">
                    <div class="col-sm-12">
                        <div class="box_head" style="padding:5px;">
                            <div class="box_head_left col-xs-10 text-left" style="">
                                <span class="fa fa-pencel"></span> JukeMin
                            </div>
                            <div class="box_head_left col-xs-2 text-right" style="">
                                3일
                            </div>
                        </div>

                        <div class="box_body" style="padding:0px;min-height:300px;
                                border-top:1px solid gray;border-bottom:1px solid gray;
                                background-image:url('{{ asset('/public/upload/201612/20160609-183859.jpg') }}');
                                background-size:cover;
                                ">
                        </div>

                        <div class="box_comment" style="padding:5px;text-align:left;
                                border-top:1px solid gray;border-bottom:1px solid gray;
                                ">
                            <p>미워요 88개</p>
                            <p></p>
                            <p>
                                <span>HOZIMI</span> @kenny 닭쳐
                            </p>
                        </div>

                        <div class="box_tail" style="padding:5px;">
                            <div class="box_head_left col-xs-10 text-left" style="">
                                <input type="text" placeholder="Add comment" />
                            </div>
                            <div class="box_head_left col-xs-2 text-right" style="">
                                ···
                            </div>

                        </div>
                    </div>
                </div>




                <div class="bigbox">
                    <div class="col-sm-12">
                        <div class="box_head" style="padding:5px;">
                            <div class="box_head_left col-xs-10 text-left" style="">
                                <span class="fa fa-pencel"></span> JukeMin
                            </div>
                            <div class="box_head_left col-xs-2 text-right" style="">
                                3일
                            </div>
                        </div>

                        <div class="box_body" style="padding:0px;min-height:300px;
                                border-top:1px solid gray;border-bottom:1px solid gray;
                                background-image:url('{{ asset('/public/upload/201612/20160721_173306.jpg') }}');
                                background-size:cover;
                                ">
                        </div>

                        <div class="box_tail" style="padding:5px;">
                            <div class="box_head_left col-xs-10 text-left" style="">
                                <input type="text" placeholder="Add comment" />
                            </div>
                            <div class="box_head_left col-xs-2 text-right" style="">
                                ···
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

</div>


<div class="well bg-warning">
    <h4></h4>
    <p>
    </p>

    <p>Error report : <b style="font-size:1.2em;">cto@qooei.com</b></p>
</div>

{{--<div class="text-center" style="overflow-x:scroll;white-space: nowrap;padding:0 10px 10px 10px;">
{{dd( Request::input(), http_build_query (Request::input()) ) }}
</div>--}}

{{--    <div class="corner-ribbon top-left sticky red shadow">New</div>
<div class="corner-ribbon top-right sticky blue">Updated</div>
<div class="corner-ribbon bottom-left sticky orange">Popular</div>
<div class="corner-ribbon bottom-right sticky green shadow">Hello</div>

<h1>Corner Ribbons</h1>
<h2>(with custom settings and all...)</h2>--}}

{{-- 세션에 메세지 있으면 보여주기 --}}
@if (Session::has('message'))
<div class="alert alert-info" style="margin:10px 0;">{{ Session::get('message') }}</div>
@endif

{{--내용증명 리스트 간략 박스형태--}}
<div class="" style="margin-top:30px;">

</div>






{{--{{SKHelper::p($ccMails)}}--}}



@stop


{{--@if ($ccMail->done == 1)
<span style="text-decoration: line-through;">
@endif--}}
{{--@if ($ccMail->done == 1)
</span>
@endif--}}