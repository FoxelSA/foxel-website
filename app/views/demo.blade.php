@extends('page')

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
{{ Lang::get('demo.head') }}
@stop

@section('data')

    <h2>{{ Lang::get('demo.title') }}</h2>

    <div class="columns">
        <div class="column">
            <p>{{ Lang::get('demo.content.a') }}</p>
            <p>{{ Lang::get('demo.content.b') }}</p>
        </div>
        <div class="column noa">
            <p class="demo first">{{ Lang::get('demo.basic.dreamsofmouron') }}</p>
            <p><a href="{{ Config::get('app.demo') }}/dreamsofmouron/" target="_blank"><img src="{{{ asset('img/demo/dreams-of-mouron.png') }}}" class="auto center" alt="" /></a></p>
        </div>
    </div>

    <div class="columns">
        <div class="column noa">
            <p class="demo">{{ Lang::get('demo.basic.motorcycle') }}</p>
            <p><a href="{{ Config::get('app.demo') }}/motorcycle/motorcycle0/" target="_blank"><img src="{{{ asset('img/demo/motorcycle-0.png') }}}" class="auto center" alt="" /></a></p>
            <p><a href="{{ Config::get('app.demo') }}/motorcycle/motorcycle1/" target="_blank"><img src="{{{ asset('img/demo/motorcycle-1.png') }}}" class="auto center" alt="" /></a></p>
        </div>
        <div class="column noa">
            <p class="demo">{{ Lang::get('demo.basic.unige') }}</p>
            <p><a href="{{ Config::get('app.demo') }}/unige/unige0/" target="_blank"><img src="{{{ asset('img/demo/unige-0.png') }}}" class="auto center" alt="" /></a></p>
            <p><a href="{{ Config::get('app.demo') }}/unige/unige1/" target="_blank"><img src="{{{ asset('img/demo/unige-1.png') }}}" class="auto center" alt="" /></a></p>
        </div>
    </div>

    <div class="columns">
        <div class="column noa">
            <p class="demo">{{ Lang::get('demo.basic.golf') }}</p>
            <p><a href="{{ Config::get('app.demo') }}/golf/golf0/" target="_blank"><img src="{{{ asset('img/demo/golf-0.png') }}}" class="auto center" alt="" /></a></p>
            <p><a href="{{ Config::get('app.demo') }}/golf/golf1/" target="_blank"><img src="{{{ asset('img/demo/golf-1.png') }}}" class="auto center" alt="" /></a></p>
        </div>
        <div class="column noa">
            <p class="demo">{{ Lang::get('demo.basic.jungfraujoch') }}</p>
            <p><a href="{{ Config::get('app.demo') }}/jungfrau/jungfrau0/" target="_blank"><img src="{{{ asset('img/demo/jungfrau-0.png') }}}" class="auto center" alt="" /></a></p>
            <p><a href="{{ Config::get('app.demo') }}/jungfrau/jungfrau1/" target="_blank"><img src="{{{ asset('img/demo/jungfrau-1.png') }}}" class="auto center" alt="" /></a></p>
        </div>
    </div>

    <div class="columns">
        <div class="column noa">
            <p class="demo">{{ Lang::get('demo.basic.highway') }}</p>
            <p><a href="{{ Config::get('app.demo') }}/highway/highway0/" target="_blank"><img src="{{{ asset('img/demo/highway-0.png') }}}" class="auto center" alt="" /></a></p>
            <p><a href="{{ Config::get('app.demo') }}/highway/highway1/" target="_blank"><img src="{{{ asset('img/demo/highway-1.png') }}}" class="auto center" alt="" /></a></p>
        </div>
        <div class="column noa">&nbsp;</div>
    </div>

@stop

@section('sidebar')

    @parent

@stop
