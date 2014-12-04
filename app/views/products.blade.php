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
{{ Lang::get('products.head') }}
@stop

@section('data')

    <h2>{{ Lang::get('products.title') }}</h2>

    <div class="columns">
        <div class="column">
            <p>{{ Lang::get('products.gis.content.a') }}</p>
            <p>{{ Lang::get('products.gis.content.b') }}</p>
        </div>
        <div class="column">
            <p>{{ Lang::get('products.gis.content.c') }}</p>
            <p>{{ Lang::get('products.gis.content.d') }}</p>
            <p>{{ Lang::get('products.gis.content.e') }}</p>
        </div>
    </div>

    <p>
        <br />
        <img src="{{{ asset('img/services/gis.png') }}}" class="auto center" alt="" />
    </p>

    <h3>{{ Lang::get('products.services.subtitle') }}</h3>

    <div class="columns" style="margin-top:15px;">
        <div class="column">
            <p>{{ Lang::get('products.services.content.a') }}</p>
            <p>{{ Lang::get('products.services.content.b') }}</p>
        </div>
        <div class="column">
            <p>{{ Lang::get('products.services.content.c') }}</p>
        </div>
    </div>

    <div class="columns" style="margin-top:15px;">
        <div class="column" style="margin-top:15px;">
            <div style="position:absolute;top:0;left:0;"><img src="{{{ asset('img/services/digitization-icon.png') }}}" width="60" height="50" alt="" /></div>
            <div style="margin-top:13px;margin-left:70px;">
                <p class="low left"><strong>{{ Lang::get('products.dedicated.digitization.name') }}</strong></p>
                <p class="left">{{ Lang::get('products.dedicated.digitization.desc') }}</p>
            </div>
        </div>
        <div class="column" style="margin-top:15px;">
            <div style="position:absolute;top:0;left:0;"><img src="{{{ asset('img/services/engineering-icon.png') }}}" width="60" height="50" alt="" /></div>
            <div style="margin-top:13px;margin-left:70px;">
                <p class="low left"><strong>{{ Lang::get('products.dedicated.engineering.name') }}</strong></p>
                <p class="left">{{ Lang::get('products.dedicated.engineering.desc') }}</p>
            </div>
        </div>
    </div>
    <div class="columns">
        <div class="column">
            <div style="position:absolute;top:0;left:0;"><img src="{{{ asset('img/services/innovation-icon.png') }}}" width="60" height="50" alt="" /></div>
            <div style="margin-top:13px;margin-left:70px;">
                <p class="low left"><strong>{{ Lang::get('products.dedicated.innovation.name') }}</strong></p>
                <p class="left">{{ Lang::get('products.dedicated.innovation.desc') }}</p>
            </div>
        </div>
        <div class="column">
            <div style="position:absolute;top:0;left:0;"><img src="{{{ asset('img/services/systems-icon.png') }}}" width="60" height="50" alt="" /></div>
            <div style="margin-top:13px;margin-left:70px;">
                <p class="low left"><strong>{{ Lang::get('products.dedicated.systems.name') }}</strong></p>
                <p class="left">{{ Lang::get('products.dedicated.systems.desc') }}</p>
            </div>
        </div>
    </div>

    <h3>{{ Lang::get('products.contributive.subtitle') }}</h3>

    <div class="columns">
        <div class="column">
            <p>{{ Lang::get('products.contributive.content.a',array('gpl'=>'http://www.gnu.org/licenses/licenses.html#GPL','eupl'=>'https://joinup.ec.europa.eu/software/page/eupl','cohl'=>'http://www.ohwr.org/projects/cernohl/wiki')) }}</p>
        </div>
        <div class="column">
            <p>{{ Lang::get('products.contributive.content.b') }}</p>
            <p>{{ Lang::get('products.contributive.content.c') }}</p>
        </div>
    </div>

@stop

@section('sidebar')

    @parent

@stop
