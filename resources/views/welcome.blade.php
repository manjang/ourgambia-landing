<!Doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Our Gambia</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <meta name="description" content="Our Gambia is the leading internet platform in the Gambia, which offers easy online and mobile shopping, travel, classifieds and services platform.">
        <link rel="icon" type="image/png" href="{{ URL('/images/logo-alt.png') }}">
    </head>

    <body class="landing">
        <div class="landing-wrap">
            <div class="language">
                <a href="/{{'en'}}" class="active">@lang('messages.english')</a>
                <a href="/{{'fr'}}">@lang('messages.french')</a>
                <a href="/{{'nl'}}">@lang('messages.dutch')</a>
                <a href="/{{'ar'}}">@lang('messages.arabic')</a>
            </div>

            <div class="ourgambia-logo">
                <a href="{{ URL('/') }}"><img src="{{ URL('/images/logo.png') }}" alt="Our Gambia Logo"></a>
                <h2 class="headline">@lang('messages.headline')</h2>
            </div>
            
            <div class="classifieds-row">
                <div class="classifieds-row--wrap">
                    <div class="classified-block">
                        <img src="{{ URL('/images/gambian-flag.png') }}" height="60" width="60" alt="Our Gambia">
                        <a href="#"></a>
                    </div>

                    <div class="classified-block">
                        <a href="#">@lang('messages.hotel')</a>
                    </div>

                    <div class="classified-block">
                        <a href="#">@lang('messages.shop')</a>
                    </div>

                    <div class="classified-block">
                        <a href="#">@lang('messages.directory')</a>
                    </div>

                    <div class="classified-block">
                        <a href="#">@lang('messages.classifieds')</a>
                    </div>

                    <div class="classified-block">
                        <a href="#">@lang('messages.jobs')</a>
                    </div>

                    <div class="classified-block">
                        <a href="#">@lang('messages.music')</a>
                    </div>

                    <div class="classified-block">
                        <a href="#">@lang('messages.whoswho')</a>
                    </div>
                </div>
            </div>

            <div class="ourgambia-headline">@lang('messages.cta')</div>

            <div class="services">
                <div class="services-wrap">
                    <a href="http://www.hotel.gm" target="_blank" class="service">
                        <img src="{{ URL('/images/hotel-logo.png') }}" width="90" height="90" alt="Our Gambia Hotels">
                        <div class="service-desc">
                            <h4 class="service-name">Our Gambia: Hotels</h4>

                        </div>
                    </a>

                    <a href="#" target="_blank" class="service">
                        <img src="{{ URL('/images/ourgambia-shop.png') }}" width="90" height="90" alt="Our Gambia Shop">
                        <div class="service-desc">
                            <h4 class="service-name">Our Gambia: Online Shopping</h4>
                        </div>
                    </a>

                    <a href="#" target="_blank" class="service">
                        <img src="{{ URL('/images/ourgambia-directory.gif') }}" width="90" height="90" alt="Our Gambia Directory">
                        <div class="service-desc">
                            <h4 class="service-name">Our Gambia: Directory</h4>
                        </div>
                    </a>

                    <a href="#" target="_blank" class="service">
                        <img src="{{ URL('/images/logo-alt.png') }}" width="90" height="90" alt="Our Gambia Classifieds">
                        <div class="service-desc">
                            <h4 class="service-name">Our Gambia: Classifieds</h4>
                        </div>
                    </a>

                    <a href="http://www.music.gm" target="_blank" class="service">
                        <img src="{{ URL('/images/ourgambia-music.png') }}" width="90" height="90" alt="Our Gambia Music">
                        <div class="service-desc">
                            <h4 class="service-name">Our Gambia: Music</h4>
                        </div>
                    </a>

                    <a href="#" target="_blank" class="service">
                        <img src="{{ URL('/images/whoswho.png') }}" width="90" height="90" alt="Our Gambia Who is Who">
                        <div class="service-desc">
                            <h4 class="service-name">Our Gambia: Who's Who</h4>
                        </div>
                    </a>

                    <a href="http://www.jobs.gm" target="_blank" class="service">
                        <img src="{{ URL('/images/logo-alt.png') }}" width="90" height="90" alt="Our Gambia Jobs">
                        <div class="service-desc">
                            <h4 class="service-name">Our Gambia: Jobs</h4>
                        </div>
                    </a>

                    <a href="#" class="service">
                        <img src="{{ URL('/images/logo-alt.png') }}" width="90" height="90" alt="Our Gambia Jobs">
                        <div class="service-desc">
                            <h4 class="service-name">About Us</h4>
                        </div>
                    </a>
                </div>
            </div>

            <div class="ourgambia-logo">
                <div class="powered-by">@lang('messages.powered')</div>
                <a href="http://www.quest.gm" target="_blank"><img src="{{ URL('/images/quest.png') }}" width="80" height="80" alt="Our Gambia"></a>
            </div>

        </div>
    </body>
</html>