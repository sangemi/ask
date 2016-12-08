    <style>
        #navbar-top {
            -moz-box-shadow: 0px 0px 10px #000;
            -webkit-box-shadow: 0px 0px 10px #000;
            box-shadow: 0px 0px 10px #000;
        }
        #navbar-top a.navbar-brand {
            font-size:1.7em; font-weight: 300; font-family: "Noto Sans CJK", "맑은 고딕";
            letter-spacing: -1.5px;
            color:goldenrod;
            text-shadow: 0px 2px 3px #555;
        }

    </style>
    <nav class="navbar navbar-inverse navbar-static-top" id="navbar-top"
         style="background-image: url(http://cdn.backgroundhost.com/backgrounds/subtlepatterns/always_grey.png);"
    >  {{--navbar-inverse--}}
        <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">줄3 아이콘</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}" style="">
                    {{--<nobr>
                        <img src="http://localhost/img/v1/peace_tree.png" style="width:52px;">
                    </nobr>--}}
                    QOOEI

                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                {{--메뉴 시작--}}
                {{--<ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}"></a></li>
                </ul>--}}

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('') }}">HOME</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/search') }}">SEARCH</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/ask') }}">ASK</a></li>
                </ul>

                {{--<ul class="nav navbar-nav">
                    <li><a href="{{ url('/payorder/sample') }}">지급명령</a></li>
                </ul>--}}

                {{--<ul class="nav navbar-nav">
                    <li><a href="{{ url('/consult') }}">승소체크</a></li> / 소송검토
                </ul>--}}

                {{-- 검색부분 시작 --}}
                <style>
                    .cf:before, .cf:after{
                        content:"";
                        display:table;
                    }
                    .cf:after{ clear:both; }

                    .cf{ zoom:1; }

                    /* Form wrapper styling */
                    .search-wrapper {
                        width: 75%;
                        margin: 45px auto 50px auto;
                    }

                    /* Form text input */
                    .search-wrapper input {
                        width: 87%;
                        height: 20px;
                        padding: 20px 15px;
                        float: left;
                        font: normal 16px 'Arial', 'Tahoma';
                        border: 0;
                        background: #fff;
                        border-radius: 5px 0 0 5px;
                    }
                    .search-wrapper input:hover + .search-wrapper button {
                        background: #ccc
                    }
                    .search-wrapper input:focus {
                        outline: 0;
                        background: #fff;
                    }
                    .search-wrapper input::-webkit-input-placeholder {
                        color: #c6c7c6;
                        font-weight: normal;
                    }
                    .search-wrapper input:-moz-placeholder {
                        color: #999;
                        font-weight: normal;
                        font-style: italic;
                    }
                    .search-wrapper input:-ms-input-placeholder {
                        color: #999;
                        font-weight: normal;
                        font-style: italic;
                    }

                    /* Form submit button */
                    .search-wrapper button {
                        overflow: visible;
                        position: relative;
                        float: right;
                        border: 0;
                        padding: 0;
                        cursor: pointer;
                        height: 40px;
                        width: 13%;
                        font: bold 18px 'Arial', 'Tahoma';
                        color: white;
                        background: #c1c1c1;
                        border-radius: 0 5px 5px 0;
                        transition: all 2.0s linear;
                        -webkit-transition: all 0.2s linear;
                        -moz-transition: all 0.2s linear;
                        -ms-transition: all 0.2s linear;
                        -o-transition: all 0.2s linear;
                    }

                    .search-wrapper button:hover{
                        background: #5cc924;
                        transition: all 2.0s linear;
                        -webkit-transition: all 0.2s linear;
                        -moz-transition: all 0.2s linear;
                        -ms-transition: all 0.2s linear;
                        -o-transition: all 0.2s linear;
                    }

                    .search-wrapper button:active,
                    .search-wrapper button:focus{
                        background: #329400;
                        outline: 0;
                        transition: all 0s linear;
                        -webkit-transition: all 0s linear;
                        -moz-transition: all 0s linear;
                        -ms-transition: all 0s linear;
                        -o-transition: all 0s linear;
                    }

                    .search-wrapper button:hover:before{
                        border-right-color: #e54040;
                    }

                    .search-wrapper button:focus:before,
                    .search-wrapper button:active:before{
                        border-right-color: #c42f2f;
                    }
                    .search-wrapper button::-moz-focus-inner { /* remove extra button spacing for Mozilla Firefox */
                        border: 0;
                        padding: 0;
                    }
                </style>
                <script>
                    $(document).ready(function(){
                        $(".search-wrapper input").mouseenter(function(){
                            $(".search-wrapper button").css("background-color", "#4aba10");


                        });
                        $(".search-wrapper input").mouseout(function(){
                            $(".search-wrapper button").css("background-color", "" );
                        });
                    });
                </script>

                <form name="srch_sample_f" method="get" action="{{Request::url()}}" no-error-return-url="true"
                      class="search-wrapper cf">
                    {{--<input type="hidden" name=cate1 value="{!! Request::input('cate1') !!}" />
                    <input type="hidden" name=cate2 value="{!! Request::input('cate2') !!}" />--}}
                    <input type=text name="q" value="<?=htmlspecialchars(stripslashes(Request::input('q')))?>"
                           placeholder="검색" maxlength="80" />
                    <button type=submit id="btn_srch_sample" style="" alt="검색" title="검색" >
                        <i class="fa fa-search"></i>
                    </button>
                </form>
                {{-- 검색부분 끝 --}}



                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ URL::to('/boon/status') }}"><small>fund</small></a></li>
                    @if (Auth::guest())
                        <li><a href="{{ url('/auth/login') }}">
                                <span class="icon icon-user fa fa-sign-in"></span>
                                log in </a></li>
                        <li><a href="{{ url('/auth/register') }}">sign in</a></li>
                    @else
                        {{--<li><img class="circ" src="{{ Gravatar::get(Auth::user()->email)  }}"></li>--}}
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img src="/img/v1/icon_people.svg" style="width:22px;" />
                                <span class="caret"></span></a>

                            <ul class="dropdown-menu" role="menu">

                                <li><a href="{{ url('/member/mypage') }}" >{{ Auth::user()->name }}</a></li>
                                <li><a href="{{ url('/auth/logout') }}">logout</a></li>

                                @if(Auth::check() && (Auth::user()->name == '김상겸' || Auth::user()->name == '정지혜'
                                                     || Auth::user()->name == '김수로' || Auth::user()->name == '최다현'  ) )
                                    <li><a href="/admin/">ADMIN</a></li>
                                @endif

                            </ul>
                        </li>
                    @endif

                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

{{--
@include('alerts.alert')--}}
