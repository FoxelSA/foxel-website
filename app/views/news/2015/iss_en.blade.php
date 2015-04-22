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
{{ Lang::get('news.head') }} | Agreement between ISS, FOXEL and CINTCOM
@stop

@section('data')

    <h2>Setting up of Digital Commons by <br />means of TiersLieu</h2>

    <p><em>Press Release | Geneva, April 21st, 2015</em></p>

    <p style="font-weight:700;">Geneva University <a href="http://iss.unige.ch" target="_blank">Institute of Information Service Science</a> (ISS), <a href="http://foxel.ch" target="_blank">FOXEL SA</a> and the CINTCOM foundation establish an agreement aiming at developing their respective explorations.</p>
    <p>This agreement covers the domains of large scale digital scanning of geographic territory/space, setting up of digital commons, management of technological and informational heritage, deployment of projects related to Smart Cities or Smart Regions. This partnership concerns research, teaching, and establishment of TiersLieu in relation with the above topics.</p>

    <ul>
        <li><a href="{{ asset(Lang::get('news.2015.iss.pdf')) }}" target="_blank">Read the Press Release</a></li>
    </ul>

@stop

@section('sidebar')

    @parent

@stop
