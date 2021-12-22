<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--[if IE 7]><html lang="{{ app()->getLocale() }}" class="ie7"><![endif]-->
<!--[if IE 8]><html lang="{{ app()->getLocale() }}" class="ie8"><![endif]-->
<!--[if IE 9]><html lang="{{ app()->getLocale() }}" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><html lang="{{ app()->getLocale() }}"><![endif]-->
<!--[if !IE]><html lang="{{ app()->getLocale() }}"><![endif]-->
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="Meta Beschrijving" />
    <meta name="keywords" content="Keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
    <link href="//db.onlinewebfonts.com/c/247337a1c1af6633c9ed10e68a850825?family=RomainBPTextRegular" rel="stylesheet" type="text/css"/>
    <!-- Admin scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.nav.js') }}"></script>
    <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
</head>
<body>
@include('includes.header', [
    'url' => 'http://www.pixeltijgers.nl',
    'imgSrc' => asset('img/Pixeltijgers-logo.svg'),
    'altTag' => 'Dit is een alt tag'
])

<main id="home" class="grid grid-cols-12">

    @include('includes.main', [
        'iframe' => '<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/542261740?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Degroof Petercam"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>',
        'meta' => false,
        'title' => 'Naam livestream: Bedrijf',
        'description' => 'In erat augue, pretium id nibh eu, sollicitudin hendrerit est. Ut tempus rutrum aliquet. Nulla tempus nisl at quam ornare euismod. Sed mollis velit at lacinia vulputate. Etiam sit amet ultricies dui, id mollis ipsum. Duis congue sagittis enim vel scelerisque.'
    ])

    @include('includes.aside', [
        'user' => $user,
    ])

    <div class="col-start-0 lg:col-start-2 col-span-12 lg:col-span-12 my-10 lg:my-5 ml-3 lg:ml-0">

        <audio controls preload="auto">

            <source src="https://player.castr.com/live_113f3660810f11eb9d9f7ba439872695?onlyAudio=true" type="audio/mpeg"/>

        </audio>

        <p class="lg:ml-5 mt-5">Video stream not available? Click the player for audio only.</p>

    </div>

    <div id="request" class="col-start-2 col-span-10 request-wrapper mt-5 lg:mt-12 mb-2">

        <div id="qp_all3895407" style="width:100%;max-width:100%;padding: 15px; background-size: cover; background-position: center; font-family: -apple-system, BlinkMacSystemFont,Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell,Helvetica Neue, sans-serif; overflow: auto; background: url(//www.quiz-maker.com/images/dotty.png) 100% 100% / cover no-repeat; overflow: auto; font-size:12px; font-weight:400!important; text-align:left; background-size:cover; background-repeat: no-repeat; background-attachment: local!important; margin: 0 auto; max-width: 820px; color:white; box-sizing: border-box;order:initial"><div style='padding:10px 0;'><link href='//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'><STYLE>#qp_main3895407 .qp_a > SPAN INPUT {display:none;} #qp_main3895407[results='0'] .qp_a > SPAN:before {content:"\f1db"; position:absolute;width:2em;margin-left:-2em;display:block;color:inherit;font-family:'FontAwesome';text-align:center;box-sizing:border-box;border-left:1px solid transparent} #qp_main3895407[results='0'] .qp_a[sel='1'] > SPAN:before {content:"\f192"; color:inherit;} #qp_main3895407 .qp_btna:hover input {background:#0095ff!important;color:white!important;box-shadow: 3px 3px 5px rgb(103 103 103 / 88%)} #qp_main3895407[results='0'] .qp_a:hover {color:black!important;                        background-color: #e2e2e2!important} #qp_main3895407[results='0'] .qp_a[sel='1'] {border:1px solid black!important}#qp_all3895407 {padding: 15px;                         background-size: cover;                        background-position: center;                        font-family: -apple-system, BlinkMacSystemFont,Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell,Helvetica Neue, sans-serif;                        overflow: auto;      background: url(//www.quiz-maker.com/images/dotty.png) 100% 100% / cover no-repeat;                        overflow: auto;                        font-size:12px;                        font-weight:400!important;                        text-align:left;                        background-size:cover;                        background-repeat: no-repeat;                        background-attachment: local!important;                        margin: 0 auto;                        max-width: 820px;                        color:white;                        box-sizing: border-box;order:initial; font-weight:300; font-size:14px;  background-attachment:fixed!important}</STYLE><style>
                    #content {border-radius: 5px;
                        box-shadow: rgb(57 73 76 / 35%) 0px 1px 6px 0px;
                        background: rgb(255 255 255 / 100%);
                        padding: 5%;
                        margin-top: calc(0px + (40-0) * (100vw - 320px)/(1600-320))!important;}

                    .container.results {border-radius: 5px;
                        box-shadow: rgb(57 73 76 / 35%) 0px 1px 6px 0px;
                        background: rgb(255 255 255 / 100%);
                        padding: 5%;
                        margin-top: calc(0px + (40-0) * (100vw - 320px)/(1600-320))!important;}

                    BODY .tfooter {background: initial;border: none;}
                </style><div id="qp_main3895407" fp='b3eA4996-123' results=0 style='border-radius:5px; box-shadow:rgb(57 73 76 / 35%) 0px 1px 6px 0px; background:rgb(255 255 255 / 100%); padding:5%;'><div style="color:#000;                        font-size: 18px;                        font-size: calc(18px + (22 - 18) * ((100vw - 300px) / (1600 - 300)));                        margin-bottom: 0.8em"><div style="padding:0;display:table-cell;vertical-align:middle;text-align:left;line-height:1.3em">Which song do you want to hear?</div></div><form id="qp_form3895407" action="//www.poll-maker.com/results3895407xb3eA4996-123" method="post" target="_blank" style="display:inline;margin:0px;padding:0px"><div style="padding:0px"><input type=hidden name="qp_d3895407" value="44461.6738310190-44461.6738794349"><div style="clear: both;                        padding: 20px 5px;                        margin-bottom: 0.8em;                        display: block;                        background:#FFF;                        color: #000;                        font-size: 16px;                        font-size: calc(16px + (16 - 14) * ((100vw - 300px) / (1600 - 300)));                        line-height: 1;                        transition: box-shadow .2s, -webkit-box-shadow .2s;                        border-radius: 0px;                        border: 1px solid #e0e0e0" class="qp_a" onClick="var c=this.getElementsByTagName('INPUT')[0]; if((!event.target?event.srcElement:event.target).tagName!='INPUT'){c.checked=(c.type=='radio'?true:!c.checked)};var i=this.parentNode.parentNode.parentNode.getElementsByTagName('INPUT');for(var k=0;k!=i.length;k=k+1){i[k].parentNode.parentNode.setAttribute('sel',i[k].checked?1:0)}"><span style="padding-left:2em;display:inline-block;cursor:inherit"><input style="float:left;width:20px;height:20px;padding:0px;margin-left:-25px;margin-top:2px;line-height:2em;-webkit-appearance:radio;" name="qp_v3895407" type="radio" value="1" />Hotel California - The Eagles</span></div><div style="clear: both;                        padding: 20px 5px;                        margin-bottom: 0.8em;                        display: block;                        background:#FFF;                        color: #000;                        font-size: 16px;                        font-size: calc(16px + (16 - 14) * ((100vw - 300px) / (1600 - 300)));                        line-height: 1;                        transition: box-shadow .2s, -webkit-box-shadow .2s;                        border-radius: 0px;                        border: 1px solid #e0e0e0" class="qp_a" onClick="var c=this.getElementsByTagName('INPUT')[0]; if((!event.target?event.srcElement:event.target).tagName!='INPUT'){c.checked=(c.type=='radio'?true:!c.checked)};var i=this.parentNode.parentNode.parentNode.getElementsByTagName('INPUT');for(var k=0;k!=i.length;k=k+1){i[k].parentNode.parentNode.setAttribute('sel',i[k].checked?1:0)}"><span style="padding-left:2em;display:inline-block;cursor:inherit"><input style="float:left;width:20px;height:20px;padding:0px;margin-left:-25px;margin-top:2px;line-height:2em;-webkit-appearance:radio;" name="qp_v3895407" type="radio" value="2" />Are You With Me - Lost Frequencies</span></div><div style="clear: both;                        padding: 20px 5px;                        margin-bottom: 0.8em;                        display: block;                        background:#FFF;                        color: #000;                        font-size: 16px;                        font-size: calc(16px + (16 - 14) * ((100vw - 300px) / (1600 - 300)));                        line-height: 1;                        transition: box-shadow .2s, -webkit-box-shadow .2s;                        border-radius: 0px;                        border: 1px solid #e0e0e0" class="qp_a" onClick="var c=this.getElementsByTagName('INPUT')[0]; if((!event.target?event.srcElement:event.target).tagName!='INPUT'){c.checked=(c.type=='radio'?true:!c.checked)};var i=this.parentNode.parentNode.parentNode.getElementsByTagName('INPUT');for(var k=0;k!=i.length;k=k+1){i[k].parentNode.parentNode.setAttribute('sel',i[k].checked?1:0)}"><span style="padding-left:2em;display:inline-block;cursor:inherit"><input style="float:left;width:20px;height:20px;padding:0px;margin-left:-25px;margin-top:2px;line-height:2em;-webkit-appearance:radio;" name="qp_v3895407" type="radio" value="3" />Happy - Pharell Williams</span></div><div style="clear: both;                        padding: 20px 5px;                        margin-bottom: 0.8em;                        display: block;                        background:#FFF;                        color: #000;                        font-size: 16px;                        font-size: calc(16px + (16 - 14) * ((100vw - 300px) / (1600 - 300)));                        line-height: 1;                        transition: box-shadow .2s, -webkit-box-shadow .2s;                        border-radius: 0px;                        border: 1px solid #e0e0e0" class="qp_a" onClick="var c=this.getElementsByTagName('INPUT')[0]; if((!event.target?event.srcElement:event.target).tagName!='INPUT'){c.checked=(c.type=='radio'?true:!c.checked)};var i=this.parentNode.parentNode.parentNode.getElementsByTagName('INPUT');for(var k=0;k!=i.length;k=k+1){i[k].parentNode.parentNode.setAttribute('sel',i[k].checked?1:0)}"><span style="padding-left:2em;display:inline-block;cursor:inherit"><input style="float:left;width:20px;height:20px;padding:0px;margin-left:-25px;margin-top:2px;line-height:2em;-webkit-appearance:radio;" name="qp_v3895407" type="radio" value="4" />Blinding Lights - The Weekend</span></div><div style="clear: both;                        padding: 20px 5px;                        margin-bottom: 0.8em;                        display: block;                        background:#FFF;                        color: #000;                        font-size: 16px;                        font-size: calc(16px + (16 - 14) * ((100vw - 300px) / (1600 - 300)));                        line-height: 1;                        transition: box-shadow .2s, -webkit-box-shadow .2s;                        border-radius: 0px;                        border: 1px solid #e0e0e0" class="qp_a" onClick="var c=this.getElementsByTagName('INPUT')[0]; if((!event.target?event.srcElement:event.target).tagName!='INPUT'){c.checked=(c.type=='radio'?true:!c.checked)};var i=this.parentNode.parentNode.parentNode.getElementsByTagName('INPUT');for(var k=0;k!=i.length;k=k+1){i[k].parentNode.parentNode.setAttribute('sel',i[k].checked?1:0)}"><span style="padding-left:2em;display:inline-block;cursor:inherit"><input style="float:left;width:20px;height:20px;padding:0px;margin-left:-25px;margin-top:2px;line-height:2em;-webkit-appearance:radio;" name="qp_v3895407" type="radio" value="5" />Alors on Dance - Stromae</span></div></div><div style="clear: both;                                                        padding-left: 0px;                                                        text-align: left;                                                        margin: 0.8em 0 0.8em 0"><a style="display:inline-block;padding-right:0px;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-ms-box-sizing:border-box;-o-box-sizing:border-box;text-decoration:none;width:100%" class="qp_btna" href="#"><input name="qp_b3895407" style="border: .08em solid rgba(0,0,0,.1);                         background-color:#0095ff;                        color: #fff;                        font-size:20px;                        font-size: calc(18px + (22 - 18) * ((100vw - 300px) / (1600 - 300)));cursor:pointer;cursor:hand;-webkit-appearance:none;box-shadow:0 1px 2px rgba(0,0,0,.2);                        width: 100%;                        padding: 20px 5px;                        box-sizing: border-box;                        line-height: 1" type="submit" btype="v" value="Vote" /></a><a style="padding:0px;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-ms-box-sizing:border-box;-o-box-sizing:border-box;text-decoration:nonewidth: 100%;margin-top:15px;display: none" class="qp_btna" href="#"></a></div></form><div style="display:none"><div id="qp_rp3895407" style="position:absolute;right:5px;width:5ex;height:2.5em;font-size:1em;text-align:right;overflow:hidden;line-height:2.5em"></div><div id="qp_rv3895407" style="width:0%;padding-right:3px;color:#F4F4F4;font-size: .9em;line-height:2.5em;text-align:right;box-sizing:border-box"></div><div id="qp_rb3895407" style="margin-top:2.5em;display:block;color:#FFFFFF;font-size:0.9em;line-height:1.5em"></div><div id="qp_rva3895407" style="background-color:#000000;line-height: 44px;margin-bottom:-15px;margin-top:-0px"></div><div id="qp_rvb3895407" style="background-color:#000000;line-height: 44px;margin-bottom:-15px;margin-top:-0px"></div><div id="qp_rvc3895407" style="background-color:#353535;line-height: 44px;margin-bottom:-15px;margin-top:-0px"></div></div></div></div><STYLE t=1140>

                BODY #tfooter {background: initial;border-top: none;}</STYLE>
            <SCRIPT t=1140>try{


                }catch(e){console.log('error',e)}</SCRIPT>
            <STYLE t=1179>span.qp_t {font-weight:500}

                .qp_q {font-weight:500;}</STYLE>
            <STYLE t=1202>.nlayout .ppc1 {
                    color: rgb(255 255 255);
                    mix-blend-mode: difference;
                    font-weight:400!important;
                }

                .ppd {background: black!important;}

                .res-btn-sort:after, .res-btn-num:after {
                    color: rgb(0 0 0);
                    mix-blend-mode: difference;
                    font-weight:400;
                }

                .res-btn-sort:after {content:"Sort"}

                .nlayout .res-btn-num:after {
                    content: "Show Count";
                    text-align: right;
                    float: right;
                    font-size: 14px;
                }

                .ppp, .ppd div {
                    color: rgb(255 255 255)!important;
                    mix-blend-mode: difference;
                    font-weight:300!important;
                }

                .results-data.results-time {
                    width: 100%;
                }

                div#pie-canvas, div#time-canvas {
                    min-height: 300px;
                }

                .tab-nav {
                    height: 46px!important;
                    line-height:46px!important;
                    font-size: 16px;
                }
            </STYLE>
            <STYLE t=1204>.container.results {
                    margin-bottom: 100px;
                }

                .footer {
                    z-index: 50;
                }</STYLE>
            <div style='text-align:center; margin:5px;'>Create polls <a id="qp_foot3895407" href="https://www.poll-maker.com/Strawpoll">here</a></div></div><script src="//scripts.poll-maker.com/3012/scpolls.js" language="javascript"></script>

        <h3>Request a song</h3>

        <p>Would you like to request a song? You can! For this show, we already received plenty requests, but let us know what we can play for you and why we will gladly include it in one of the next broadcasts of DP on air.</p>

        <a href="https://response.questback.com/isa/qbv.dll/bylink?p=8sDoYGSua8f-FEe96DXKFByt0FU3oaTQ9W-gBvGwiyATy_2ZiIpUaG0giPh_ssUYXomZz3-SIb3qQgF91JALAw2" target="_blank">Request a song</a>

    </div>

    <div id="bio" class="bio col-span-12 md:col-start-2 md:col-span-6 mb-10">

        <img
            class="dp-onair"
            src="{{ asset('img/bio.png') }}"
            alt="Logo: DPonAir"
        />

    </div>

    <div class="bio-text col-span-12 lg:col-start-8 lg:col-span-4">

        <div class="host-container">

            <div class="bio-host">

                <h3 class="mt-0">Bert Van Steenberghe</h3>
                <p>Bert is active as a radio host for seven years now. He works for the Belgian radiostation StuBru and is a voice-over at TV-channel  één. As a DJ, he is a fan of all music that resonates in your heart. He is curious and passionate about humane stories and personal conversations with people who make a mark.</p>
                <q>It's exciting to celebrate the long history of Degroof Petercam. I am looking forward to get to know many of your colleagues and discover their stories!</q>

            </div>

            <div class="bio-host">

                <h3>Aurore Schottey Picavet</h3>
                <p>Aurore Schottey Picavet is a radio host and an actress for theatre, cinema and TV. She is also active as a voice-over. She speaks five languages: French, Dutch, German, English and Spanish. She is a mother, plays the violin and cares about sustainability.</p>
                <q>My values are ecology, collectivity, family, equal rights and culture. For me, it is an honor and a pleasure to broadcast a radio show together with an institution who also defends these values and cares for the future of our planet.</q>

            </div>

        </div>

    </div>

    <div id="previous-editions" class="col-span-12 lg:col-start-2 lg:col-span-10 mb-10">

        <h3 class="text-center text-3xl my-5 lg:mb-10">Previous editions</h3>

        <div class="bg-white overflow-hidden">

            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/542261740?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Degroof Petercam"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

        </div>

    </div>

</main>

@include('includes.footer', [
    'companyName' => env('CLIENT_NAME')
])
</body>
</html>
