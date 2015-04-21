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
{{ Lang::get('news.head') }}
@stop

@section('data')

    <h2>{{ Lang::get('news.title') }}</h2>

    <h3 class="feed">2015</h3>

    <div class="feed">
        <div class="date">{{ Lang::get('news.2015.iss.date') }}</div>
        <div class="text">{{ Lang::get('news.2015.iss.info') }}</div>
    </div>

    <div class="feed">
        <div class="date">{{ Lang::get('news.2015.reborne.date') }}</div>
        <div class="text">{{ Lang::get('news.2015.reborne.info') }}</div>
    </div>

    <div class="feed">
        <div class="date">{{ Lang::get('news.2015.isprs.date') }}</div>
        <div class="text">{{ Lang::get('news.2015.isprs.info') }}</div>
    </div>

    <div class="feed">
        <div class="date">{{ Lang::get('news.2015.sspt.date') }}</div>
        <div class="text">{{ Lang::get('news.2015.sspt.info') }}</div>
    </div>

    <h3 class="feed">2014</h3>

    <div class="feed">
        <div class="date">{{ Lang::get('news.2014.ge200.date') }}</div>
        <div class="text">{{ Lang::get('news.2014.ge200.info') }}</div>
    </div>

    <div class="feed">
        <div class="date">{{ Lang::get('news.2014.rmll.date') }}</div>
        <div class="text">{{ Lang::get('news.2014.rmll.info') }}</div>
    </div>

@stop

@section('sidebar')

    @parent

@stop
