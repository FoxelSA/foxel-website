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

@section('content')

    <div id="head">
        <div class="bound">
            <h1>@yield('head')</h1>
        </div>
    </div>

@yield('intermede')

    <div id="wrapper">
        <div class="bound">
            <div id="content" class="structure">
                @yield('data')
            </div>
            <div id="sidebar" class="structure">

@section('sidebar')

                <div class="block noa">
                    <div class="logo">
                        <a href="http://3dok.info/" target="_blank"><img src="{{{ asset('img/logos/3dok.png') }}}" width="70" alt="3D Ethics Charter" title="3D Ethics Charter" /></a>
                    </div>
                    <div class="logo inline">
                        <a href="http://elphel.com/" target="_blank"><img src="{{{ asset('img/logos/elphel.png') }}}" width="97" height="75" alt="Elphel, Inc." title="Elphel, Inc." /></a>
                    </div>
                    <div class="logo inline">
                        <a href="http://gnu.org/" target="_blank"><img src="{{{ asset('img/logos/gnu.png') }}}" width="45" height="44" alt="GNU" title="GNU" /></a>
                    </div>
                    <div class="logo inline">
                        <a href="http://www.ohwr.org/projects/cernohl/wiki" target="_blank"><img src="{{{ asset('img/logos/cern-ohl.png') }}}" width="38" height="47" alt="CERN Open Hardware License" title="CERN Open Hardware License" /></a>
                    </div>
                </div>
                <div class="block">
                    <h5>{{ Lang::get('commons.news.title') }}</h5>
                    <p>{{ Lang::get('commons.news.content') }}</p>
                </div>

@show

            </div>
        </div>
    </div>

@stop
