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
{{ Lang::get('license.head') }}
@stop

@section('data')

    <h2>{{ Lang::get('license.title') }}</h2>

    <div class="columns">
        <div class="column">
            <p>{{ Lang::get('license.main.a',array('agpl'=>'http://www.gnu.org/licenses/agpl.html','gpl'=>'http://www.gnu.org/licenses/gpl.html')) }}</p>
        </div>
        <div class="column">
            <p>{{ Lang::get('license.main.b',array('cc'=>'http://creativecommons.org/licenses/by-sa/4.0/')) }}</p>
        </div>
    </div>

    <div class="columns">
        <div class="column noa">
            <p><img class="center" src="{{{ asset('img/license_agpl-v3.png') }}}" width="115" alt="" title="GNU Affero General Public License v3" /></p>
        </div>
        <div class="column noa">
            <p><img class="center" src="{{{ asset('img/license_cc-by-sa.png') }}}" width="155" alt="" title="Creative Commons Attribution-ShareAlike" /></p>
        </div>
    </div>

    <h3>{{ Lang::get('license.additional.subtitle') }}</h3>

    <div class="columns">
        <div class="column">
            <p>{{ Lang::get('license.additional.a') }}</p>
        </div>
        <div class="column">
            <ul style="margin-left:15px;">
                <li style="padding-bottom:20px;">{{ Lang::get('license.additional.b') }}</li>
                <li>{{ Lang::get('license.additional.c') }}</li>
            </ul>
        </div>
    </div>

    <h3>{{ Lang::get('license.usage.subtitle') }}</h3>

    <div class="columns">
        <div class="column">
            <p><strong>{{ Lang::get('license.usage.code.a') }}</strong></p>
            <p>{{ Lang::get('license.usage.code.b') }}</p>
            <p>{{ Lang::get('license.usage.code.c') }}</p>
        </div>
        <div class="column">
            <p><strong>{{ Lang::get('license.usage.service.a') }}</strong></p>
            <p>{{ Lang::get('license.usage.service.b') }}</p>
            <p>{{ Lang::get('license.usage.service.c') }} {{ Lang::get('license.usage.service.d') }}</p>
            <p>{{ Lang::get('license.usage.service.e') }}</p>
        </div>
    </div>

    <h3>{{ Lang::get('license.website.subtitle') }}</h3>

    <div class="columns license">
        <div class="column">
            <p>{{ Lang::get('license.website.a') }}</p>
            <p>{{ Lang::get('license.website.b') }}</p>
        </div>
        <div class="column">
            &nbsp;
        </div>
    </div>

@stop

@section('sidebar')

    @parent

@stop
