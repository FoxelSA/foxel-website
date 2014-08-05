<?php

/**
 * Website of FOXEL SA, Geneva Switzerland.
 *
 * Copyright (c) 2013-2014 FOXEL SA - http://foxel.ch
 * Please read <http://foxel.ch/license> for more information.
 *
 *
 * Author(s):
 *
 *      Alexandre Kraft <a.kraft@foxel.ch>
 *
 *
 * This file is part of the FOXEL project <http://foxel.ch>.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 * Additional Terms:
 *
 *      You are required to preserve legal notices and author attributions in
 *      that material or in the Appropriate Legal Notices displayed by works
 *      containing it.
 *
 *      You are required to attribute the work as explained in the "Usage and
 *      Attribution" section of <http://foxel.ch/license>.
 */

?><!DOCTYPE HTML>
<html lang="{{{ App::getLocale() }}}">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>FOXEL | @yield('head')</title>
    <meta name="description" content="{{ Lang::get('commons.meta') }}" />
    <meta name="viewport" content="initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{{ asset('favicon.ico') }}}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{{ asset('js/jquery.bxslider/jquery.bxslider.css') }}}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{{ asset('js/leaflet/leaflet.css') }}}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{{ asset('css/foxel.css') }}}" />
    <script type="text/javascript" src="{{{ asset('js/jquery-1.11.1.min.js') }}}"></script>
    <script type="text/javascript" src="{{{ asset('js/underscore-1.6.0.min.js') }}}"></script>
    <script type="text/javascript" src="{{{ asset('js/jquery.easing-1.3.min.js') }}}"></script>
    <script type="text/javascript" src="{{{ asset('js/jquery.parallax-1.1.3.min.js') }}}"></script>
    <script type="text/javascript" src="{{{ asset('js/jquery.smooth-scroll-1.4.13.min.js') }}}"></script>
    <script type="text/javascript" src="{{{ asset('js/jquery.waypoints-2.0.5.min.js') }}}"></script>
    <script type="text/javascript" src="{{{ asset('js/jquery.bxslider/jquery.bxslider-4.1.2.min.js') }}}"></script>
    <script type="text/javascript" src="{{{ asset('js/leaflet/leaflet-0.7.3.min.js') }}}"></script>
    <script type="text/javascript" src="{{{ asset('js/foxel.js') }}}"></script>
</head>

<body>

<header>
    <div id="top" class="noa">
        <div class="bound">
            <div id="languages">
                <div class="current">
                    {{ $locale['current'] }} <i class="fa down"></i>
                </div>
                <div class="available">
                    <ul>
@foreach ($locale['others'] as $prefix => $lang)
@if ($prefix == 'en')
                        <li><a href="{{{ url('/').'/' }}}">{{ $lang }}</a></li>
@else
                        <li><a href="{{{ url($prefix).'/' }}}">{{ $lang }}</a></li>
@endif
@endforeach
                    </ul>
                </div>
            </div>
            <div class="icons">
                <a class="icon github" href="https://github.com/FoxelSA" target="_blank"><img src="{{{ asset('img/community/github.png') }}}" height="22" alt="Find us on GitHub" title="Find us on GitHub" /></a>
                <a class="icon gnu" href="http://www.gnu.org/" target="_blank"><img src="{{{ asset('img/community/gnu.png') }}}" height="22" alt="GNU" title="GNU" /></a>
                <a class="icon cohl" href="http://www.ohwr.org/projects/cernohl/wiki" target="_blank"><img src="{{{ asset('img/community/cern-ohl.png') }}}" height="22" alt="CERN Open Hardware License" title="CERN Open Hardware License" /></a>
                <a class="icon klx" href="http://www.kalix.ch/" target="_blank"><img src="{{{ asset('img/community/kalix.png') }}}" height="22" alt="Kalix" title="Kalix" /></a>
                <a class="icon ohwr" href="http://www.ohwr.org/" target="_blank"><img src="{{{ asset('img/community/open-hardware.png') }}}" height="22" alt="Open Hardware" title="Open Hardware" /></a>
            </div>
        </div>
    </div>
    <div id="nav">
        <div class="responsive"></div>
        <div class="bound">
            <div class="air">
                <div id="logo" class="noa">
                    <a href="{{{ route('home').'/' }}}"><img src="{{{ asset('img/foxel.jpg') }}}" width="300" height="50" alt="FOXEL | Stereophotogrammetry Solutions" /></a>
                </div>
                <nav id="menu">
                    {{ render_navigation() }}
                </nav>
                <div class="alternate trigger">
                    <i class="fa bars"></i>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="main">
    @yield('content')
</div>

<footer>
    <div id="triptych">
        <div class="bound">
            <div class="column left">
                <h3>{{ Lang::get('company.footer') }}</h3>
                <p>{{ Lang::get('company.content.a') }}</p>
                <p>{{ Lang::get('company.content.e') }}</p>
                <p>{{ Lang::get('company.content.b_alternate') }}</p>
                <p><a href="{{{ route('company') }}}">{{ Lang::get('commons.readmore') }}</a></p>
            </div>
            <div class="column middle">
                <h3>{{ Lang::get('commons.news.title') }}</h3>
                <p>{{ Lang::get('commons.news.content',array('news'=>route('rmll2014'))) }}</p>
            </div>
            <div class="column right">
                <h3>{{ Lang::get('contact.footer') }}</h3>
                <div id="contacts">
                    <div class="item">
                        <i class="fa map"></i>
                        <p>
                            <strong>{{ Lang::get('contact.connect.name') }}</strong><br />
                            {{ Lang::get('contact.connect.street') }}<br />
                            {{ Lang::get('contact.connect.city') }}<br />
                        </p>
                    </div>
                    <div class="item">
                        <i class="fa phone"></i>
                        <p>{{ Lang::get('contact.connect.phone') }}</p>
                    </div>
                    <div class="item">
                        <i class="fa mail"></i>
                        <p><a href="{{{ route('contact') }}}">{{ Lang::get('contact.connect.email') }}</a></p>
                    </div>
                    <div class="icons">
                        <a class="icon github" href="https://github.com/FoxelSA" target="_blank"><img src="{{{ asset('img/community/github-white.png') }}}" height="22" alt="Find us on GitHub" title="Find us on GitHub" /></a>
                        <a class="icon gnu" href="http://www.gnu.org/" target="_blank"><img src="{{{ asset('img/community/gnu-white.png') }}}" height="22" alt="GNU" title="GNU" /></a>
                        <a class="icon cohl" href="http://www.ohwr.org/projects/cernohl/wiki" target="_blank"><img src="{{{ asset('img/community/cern-ohl.png') }}}" height="22" alt="CERN Open Hardware License" title="CERN Open Hardware License" /></a>
                        <a class="icon klx" href="http://www.kalix.ch/" target="_blank"><img src="{{{ asset('img/community/kalix.png') }}}" height="22" alt="Kalix" title="Kalix" /></a>
                        <a class="icon ohwr" href="http://www.ohwr.org/" target="_blank"><img src="{{{ asset('img/community/open-hardware.png') }}}" height="22" alt="Open Hardware" title="Open Hardware" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom">
        <div class="bound">
            <div id="license">
                <span>{{ Lang::get('commons.footer.license',array('route'=>route('license'))) }}</span>
                <span>{{ Lang::get('commons.footer.copyright',array('year'=>date('Y'),'url'=>'http://foxel.ch/')) }}</span>
            </div>
            <div id="subnav">
                {{ render_navigation(0) }}
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://foxel.ch/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
    g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="http://foxel.ch/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>

</body>
</html>
