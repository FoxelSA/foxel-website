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
{{ Lang::get('company.head') }}
@stop

@section('data')

    <h2>{{ Lang::get('company.title') }}</h2>

    <div class="columns">
        <div class="column">
            <p>{{ Lang::get('company.content.a') }}</p>
            <p class="low">{{ Lang::get('company.content.b') }}</p>
            <ul>
                <li>{{ Lang::get('company.content.c.0') }}</li>
                <li>{{ Lang::get('company.content.c.1') }}</li>
                <li>{{ Lang::get('company.content.c.2') }}</li>
                <li>{{ Lang::get('company.content.c.3') }}</li>
                <li>{{ Lang::get('company.content.c.4') }}</li>
                <li>{{ Lang::get('company.content.c.5') }}</li>
            </ul>
        </div>
        <div class="column">
            <p>{{ Lang::get('company.content.d') }}</p>
            <p>
                <br />
                <img src="{{{ asset('img/visuals/company.png') }}}" class="auto center" alt="" />
            </p>
        </div>
    </div>

    <h3>{{ Lang::get('company.expertise.subtitle') }}</h3>

    <div class="columns">
        <div class="column">
            <p>{{ Lang::get('company.expertise.content.a') }}</p>
            <p>{{ Lang::get('company.expertise.content.b') }}</p>
        </div>
        <div class="column">
            <p>{{ Lang::get('company.expertise.content.c') }}</p>
            <p>{{ Lang::get('company.expertise.content.d') }}</p>
        </div>
    </div>

    <h3>{{ Lang::get('company.ethics.subtitle') }}</h3>

    <div class="columns">
        <div class="column">
            <p>{{ Lang::get('company.ethics.content.a',array('kalix'=>'http://kalix.ch/')) }}</p>
        </div>
        <div class="column noa">
            <p><a href="http://kalix.ch/" target="_blank"><img src="{{{ asset('img/logos/kalix.png') }}}" width="65" class="hov marged" alt="Kalix" title="Kalix" /></a></p>
        </div>
    </div>
    <div class="columns">
        <div class="column">
            <p>{{ Lang::get('company.ethics.content.b',array('3dok'=>'http://3dok.info/')) }}</p>
        </div>
        <div class="column noa">
            <p><a href="http://3dok.info/" target="_blank"><img src="{{{ asset('img/logos/3dok.png') }}}" width="75" class="hov marged" alt="3D Ethics Charter" title="3D Ethics Charter" /></a></p>
        </div>
    </div>

    <h3>{{ Lang::get('company.network.subtitle') }}</h3>

    <div class="columns">
        <div class="column">
            <p>{{ Lang::get('company.network.content.a') }}</p>
            <p>{{ Lang::get('company.network.content.b',array('elphel'=>'http://elphel.com/')) }}</p>
        </div>
        <div class="column">
            <p>{{ Lang::get('company.network.content.c') }}</p>
            <p>{{ Lang::get('company.network.content.d',array('rmll'=>'http://rmll.info/')) }}</p>
        </div>
    </div>

@stop

@section('sidebar')

    @parent

@stop
