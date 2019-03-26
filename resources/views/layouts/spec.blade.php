<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'ROOMIX')</title>
    <meta name="description" content="@yield('description', 'Запасные части на спецтехнику в Алматы с доставкой по Казахстану')">
    <link rel="icon" href="/images/cogg.ico">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
     <!--  <script src="https://oss.maxcdh.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
   <!-- <script src="https://oss.maxcdh.com/libs/respond.js/1.4.2/respond.min.js"></script> -->
    <script src=" {{ asset('js/vue.min.js')}}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div id="app">
        <nav style="padding: .5rem 1rem;" class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <div class="visible-xs" style="position: absolute;right: 10px;"><a href="https://api.whatsapp.com/send?phone=77057784727" onclick="yaCounter39775005.reachGoal('SPECWHATSAPP'); return true;" style="color: #33d216; font-weight:bold;"><i style="color: #33d216 !important; font-size:80px; float:right; padding-right:10px;" class="fa fa-whatsapp"></i><br>whatsapp</a></div>



                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'ROOMIX') }}
                    </a>

                </div>
                <div id="navbar" class="navbar-right">
                    <div class="nav-item">
                        <i style="color: #168dd2 !important; font-size:19px;" class="fa fa-phone-square"></i><span style="font-size:17px; padding-right: 20px; font-weight:bold;"> <a href="tel:+77272901335" onclick="yaCounter39775005.reachGoal('SPHONE1'); return true;">+7 (727) 290-1335</a></span><br><i style="color: #168dd2 !important; font-size:19px;" class="fa fa-phone-square"></i><span style="font-size:17px; padding-right: 20px; font-weight:bold;"> <a href="tel:+77057784727" onclick="yaCounter39775005.reachGoal('SPHONE2'); return true;">+7 (705) 778-4727</a></span>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')

        <div class="container">
            <hr>
            <div class="row" style="padding: 10px 20px 20px ;">
            <div class="col-lg-3 col-md-6">
                <div style="padding-left: 20px;" itemscope="" itemtype="http://schema.org/LocalBusiness">
                    <address>
                    <h4>Наш адрес в Алматы</h4>
                    <ul style="list-style-type: none; padding-left: 0px;">
                        <li><span itemprop="name">ИП "PARTS GROUP"</span></li>
                        <div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><li>Республика <span itemprop="addressCountry">Казахстан</span>, г. <span itemprop="addressLocality">Алматы</span></li>
                            <li><span itemprop="streetAddress">Илийский тракт, 37A</span></li></div>
                        <li>тел.: <a href="tel:+77272901335" onclick="yaCounter39775005.reachGoal('SPHONE1'); return true;"><span itemprop="telephone">+7(727)290-1335</span></a></li>
                        <li><a href="tel:+77057784727" onclick="yaCounter39775005.reachGoal('SPHONE2'); return true;"><span itemprop="telephone">+7(705)778-4727</span></a></li>
                        <li>e-mail: <span style="color: #cecece; font-weight: 600;"><a href="mailto:manager@roomix.kz"><span itemprop="email">manager@roomix.kz</span></a></span><img itemprop="logo" src="/images/cogg.ico" alt="roomix logo" style="display:none;"><img itemprop="image" src="/images/cogg.ico" alt="roomix logo" style="display:none;"><a href="/" itemprop="url" style="display:none;">roomix.kz</a></li>
                    </ul>
                    </address>
                </div>
            </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="panel-heading">
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-tags fa-stack-2x" style="color:#337ab7;"></i>
                    </span>
                    </div>
                    <h4>В наличии <b>более 30000 наменований</b> запчастей</h4>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="panel-heading">
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-shopping-cart fa-stack-2x" style="color:#337ab7;"></i>
                    </span>
                    </div>
                    <h4><b>Бесплатная доставка по Алматы!</b> По Казахстану - оплата только услуг транспортной компании!</h4>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="panel-heading">
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-search fa-stack-2x" style="color:#337ab7;"></i>
                    </span>
                    </div>
                    <h4><b>Профессиональный подбор</b><br> запчастей на вашу спецтехнику</h4>
                </div>
        </div>
        </div>


    </div>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript" src="//cdn.callbackhunter.com/cbh.js?hunter_code=33048df08c02bf18b5af28015ae834a9" charset="UTF-8"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter39775005 = new Ya.Metrika({
                        id:39775005,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/39775005" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</body>
</html>
