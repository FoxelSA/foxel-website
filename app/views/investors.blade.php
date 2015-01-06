@extends('page')

<?php

/**
 * Website of FOXEL SA, Geneva Switzerland.
 *
 * Copyright (c) 2013-2015 FOXEL SA - http://foxel.ch
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
{{ Lang::get('investors.head') }}
@stop

@section('data')

    <h2>{{ Lang::get('investors.highlights.subtitle') }}</h2>

    <div class="columns">
        <div class="column">
            <p>{{ Lang::get('investors.highlights.content.a') }}</p>
            <p>{{ Lang::get('investors.highlights.content.b',array('dynamic'=>route('dynamic'))) }}</p>
            <p>{{ Lang::get('investors.highlights.content.c',array('technology'=>route('technology'))) }}</p>
        </div>
        <div class="column">
            <p>{{ Lang::get('investors.highlights.content.d') }}</p>
            <p>{{ Lang::get('investors.highlights.content.e') }}</p>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <h3>{{ Lang::get('investors.national.subtitle') }}</h3>
            <p>{{ Lang::get('investors.national.content.a',array('pdf'=>asset(Lang::get('investors.national.pdf')))) }}</p>
            <p>{{ Lang::get('investors.national.content.b',array('contact'=>route('contact'))) }}</p>
        </div>
        <div class="column">
            <p style="position:relative;top:35px;">
                <a href="{{ asset(Lang::get('investors.national.pdf')) }}" target="_blank"><img src="{{{ asset('img/investors/foxel-national.png') }}}" class="auto center" alt="" /></a>
            </p>
        </div>
    </div>

    <h3>{{ Lang::get('investors.title') }}</h3>

    <div class="columns">
        <div class="column">
            <p>{{ Lang::get('investors.content.a') }}</p>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <ul class="big">
                <li>{{ Lang::get('investors.content.b.0') }}</li>
                <li>{{ Lang::get('investors.content.b.1',array('services'=>route('products'))) }}</li>
                <li>{{ Lang::get('investors.content.b.2',array('technology'=>route('technology'))) }}</li>
                <li>{{ Lang::get('investors.content.b.3',array('license'=>route('license'))) }}</li>
            </ul>
        </div>
        <div class="column">
            <ul class="big">
                <li>{{ Lang::get('investors.content.b.4') }}</li>
                <li>{{ Lang::get('investors.content.b.5',array('dynamic'=>route('dynamic'))) }}</li>
                <li>{{ Lang::get('investors.content.b.6') }}</li>
                <li>{{ Lang::get('investors.content.b.7') }}</li>
                <li>{{ Lang::get('investors.content.b.8') }}</li>
            </ul>
        </div>
    </div>

@stop

@section('sidebar')

    @parent

@stop
