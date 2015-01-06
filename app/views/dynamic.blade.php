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
{{ Lang::get('dynamic.head') }}
@stop

@section('data')

    <h2>{{ Lang::get('dynamic.title') }}</h2>

    <p>{{ Lang::get('dynamic.content') }}</p>

    <div style="margin:0;margin-top:40px;">
        <iframe class="vimeo dynamic" src="//player.vimeo.com/video/{{ Lang::get('dynamic.presentation.vimeo') }}?byline=0&amp;portrait=0&amp;color=ecb100" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>

    <p>
        <span class="note">{{ Lang::get('dynamic.presentation.license',array('license'=>'http://creativecommons.org/licenses/by-sa/4.0/')) }}</span>
        <br />
        <span class="note">
            {{ Lang::get('dynamic.presentation.attribution',array('route'=>route('license'))) }}
            {{ Lang::get('dynamic.presentation.download',array('src'=>asset(Lang::get('dynamic.presentation.src')))) }}
        </span>
    </p>

@stop

@section('sidebar')

    @parent

@stop
