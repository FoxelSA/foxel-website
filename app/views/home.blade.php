@extends('layout')

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

?>

@section('head')
{{ Lang::get('home.head') }}
@stop

@section('content')

    <div id="home">

        <div class="slider noa">
            <ul>
                <li><img src="{{{ asset('img/slides/car.jpg') }}}" alt="" /></li>
                <li><img src="{{{ asset('img/slides/mountain.jpg') }}}" alt="" /></li>
            </ul>
        </div>

        <div class="headline">
            <div class="bound">
                <h1>{{ Lang::get('home.title') }}</h1>
                <div class="arrow">
                    <img src="{{{ asset('img/scroll.png') }}}" width="67" height="69" alt="" />
                </div>
            </div>
        </div>

        <div class="domains">
            <div class="responsive" rel="{{{ asset('img/grid/close.png') }}}"></div>
@foreach (Lang::get('home.domains') as $d => $domain)
            <div class="domain">
                <img class="thumb" src="{{{ asset('img/grid/domain_'.str_pad(''.($d+1),2,'0',STR_PAD_LEFT).'-thumb.jpg') }}}" alt="" />
                <div class="caption bg"></div>
                <div class="caption">{{ $domain['name'] }}</div>
                <div class="expand">
                    <div class="column left">
                        <img src="{{{ asset('img/grid/transparent.png') }}}" rel="{{{ asset('img/grid/domain_'.str_pad(''.($d+1),2,'0',STR_PAD_LEFT).'.jpg') }}}" alt="" />
                    </div>
                    <div class="column right">
                        <div class="inner">
                            <h3>{{ $domain['name'] }}</h3>
                            <ul>
@foreach ($domain['points'] as $point)
                               <li>{{ $point }}</li>
@endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
@endforeach
            <div class="clr"></div>
        </div>

        <div class="services noa">
            <div class="item">
                <a href="{{{ route('services') }}}"><img src="{{{ asset('img/services/digitization.png') }}}" alt="" /></a>
                <div class="caption">{{ Lang::get('services.dedicated.digitization.name') }}</div>
                <div class="info"><div class="inner">{{ Lang::get('services.dedicated.digitization.desc') }}</div></div>
            </div>
            <div class="item">
                <a href="{{{ route('services') }}}"><img src="{{{ asset('img/services/engineering.png') }}}" alt="" /></a>
                <div class="caption">{{ Lang::get('services.dedicated.engineering.name') }}</div>
                <div class="info"><div class="inner">{{ Lang::get('services.dedicated.engineering.desc') }}</div></div>
            </div>
            <div class="item">
                <a href="{{{ route('services') }}}"><img src="{{{ asset('img/services/innovation.png') }}}" alt="" /></a>
                <div class="caption">{{ Lang::get('services.dedicated.innovation.name') }}</div>
                <div class="info"><div class="inner">{{ Lang::get('services.dedicated.innovation.desc') }}</div></div>
            </div>
            <div class="item">
                <a href="{{{ route('services') }}}"><img src="{{{ asset('img/services/systems.png') }}}" alt="" /></a>
                <div class="caption">{{ Lang::get('services.dedicated.systems.name') }}</div>
                <div class="info"><div class="inner">{{ Lang::get('services.dedicated.systems.desc') }}</div></div>
            </div>
        </div>

        <div class="appear expertise">
            <div class="bound">
                <div class="inner">
                    <h2>{{ Lang::get('technology.title') }}</h2>
                    <p>{{ Lang::get('technology.content.a') }}</p>
                    <p>{{ Lang::get('technology.content.b') }} {{ Lang::get('technology.content.c') }}</p>
                </div>
            </div>
        </div>

        <div class="interphrase building">
            <div>{{ Lang::get('home.hooks.build.a') }}</div>
            <div class="small">{{ Lang::get('home.hooks.build.b') }}</div>
        </div>

        <div class="appear contributive">
            <div class="bound">
                <div class="inner">
                    <h2>{{ Lang::get('services.contributive.subtitle_alternate') }}</h2>
                    <p>{{ Lang::get('services.contributive.content.a',array('gpl'=>'http://www.gnu.org/licenses/licenses.html#GPL','eupl'=>'https://joinup.ec.europa.eu/software/page/eupl','cohl'=>'http://www.ohwr.org/projects/cernohl/wiki')) }}</p>
                    <p>{{ Lang::get('services.contributive.content.b') }}</p>
                    <p>{{ Lang::get('services.contributive.content.c') }}</p>
                </div>
            </div>
        </div>

        <div class="interphrase developing">
            <img src="{{{ asset('img/logos/contributive-economy.png') }}}" width="80" height="43" alt="{{ Lang::get('home.hooks.develop.c') }}" />
            <div>{{ Lang::get('home.hooks.develop.a') }}</div>
            <div class="small">{{ Lang::get('home.hooks.develop.b') }}</div>
        </div>

    </div>

@stop
