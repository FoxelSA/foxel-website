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

// demo
$sets = get_basic_demos();

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
        <div class="column noa">&nbsp;</div>
    </div>

    <div class="columns">
        <div class="column noa">
@foreach ($sets as $index => $set)
@if ($index % 2 == 0)
            <p class="demo">{{ $set->name }}</p>
    @foreach ($set->views as $view)
            <p>
                <a href="{{ Config::get('app.demo') }}/basic/?s={{ $set->path; }}&p={{ $view->pid }}" target="_blank"><img src="{{ Config::get('app.demo') }}/basic/tiles/{{ $set->path }}/{{ $view->pid }}/preview.png" class="auto center" alt="" /></a>
                <span class="pano">{{ $view->caption }}</span>
            </p>
    @endforeach
@endif
@endforeach
            <p class="demo">Dreams of Mouron</p>
            <p>
                <a href="{{ Config::get('app.demo') }}/lib/dreamsofmouron/" target="_blank"><img src="{{{ asset('img/demo/dreams-of-mouron.png') }}}" class="auto center" alt="" /></a>
                <span class="pano">Project of Didier Mouron and Don Harper</span>
            </p>
        </div>
        <div class="column noa">
@foreach ($sets as $index => $set)
@if ($index % 2 == 1)
            <p class="demo">{{ $set->name }}</p>
    @foreach ($set->views as $view)
            <p>
                <a href="{{ Config::get('app.demo') }}/basic/?s={{ $set->path; }}&p={{ $view->pid }}" target="_blank"><img src="{{ Config::get('app.demo') }}/basic/tiles/{{ $set->path }}/{{ $view->pid }}/preview.png" class="auto center" alt="" /></a>
                <span class="pano">{{ $view->caption }}</span>
            </p>
    @endforeach
@endif
@endforeach
        </div>
    </div>

@stop

@section('sidebar')

    @parent

@stop
