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
{{ Lang::get('team.head') }}
@stop

@section('data')

    <h2 style="padding-bottom:10px;">Leadership Committee</h2>

    <div class="columns team">
        <div class="column noa">
            <div class="pic">
                <img src="{{{ asset('img/team/lionel-lourdin.jpg') }}}" alt="" />
            </div>
            <div class="people">
                <div class="name">Lionel Lourdin</div>
                <div class="title">Secretary</div>
                <div class="dept">President</div>
            </div>
        </div>
        <div class="column noa">
            <div class="pic">
                <img src="{{{ asset('img/team/alexandre-kraft.jpg') }}}" alt="" />
            </div>
            <div class="people">
                <div class="name">Alexandre Kraft</div>
                <div class="title">Vice-Secretary</div>
                <div class="dept">Vice president</div>
            </div>
        </div>
    </div>

    <div class="columns team">
        <div class="column noa">
            <div class="pic">
                <img src="{{{ asset('img/team/nathalie-veysset.jpg') }}}" alt="" />
            </div>
            <div class="people">
                <div class="name">Nathalie Veysset</div>
                <div class="title">Leader of Operations</div>
            </div>
        </div>
        <div class="column noa">
            <div class="pic">
                <img src="{{{ asset('img/team/jean-baptiste-guillet.jpg') }}}" alt="" />
            </div>
            <div class="people">
                <div class="name">Jean-Baptiste Guillet</div>
                <div class="title">Leader of Business Development</div>
            </div>
        </div>
    </div>

    <div class="columns team">
        <div class="column noa">
            <div class="pic">
                <img src="{{{ asset('img/team/michel-leonard.jpg') }}}" alt="" />
            </div>
            <div class="people">
                <div class="name">Pr. Michel Léonard</div>
                <div class="title">Leader of Scientific Development</div>
            </div>
        </div>
        <div class="column noa">
            <div class="pic">
                <img src="{{{ asset('img/team/nils-hamel.jpg') }}}" alt="" />
            </div>
            <div class="people">
                <div class="name">Nils Hamel</div>
                <div class="title">Leader of Technology</div>
                <div class="dept">EPF Physicist</div>
            </div>
        </div>
    </div>

    <div class="columns team">
        <div class="column noa">
            <div class="pic">
                <img src="{{{ asset('img/team/raphael-lourdin.jpg') }}}" alt="" />
            </div>
            <div class="people">
                <div class="name">Raphaël Lourdin</div>
                <div class="title">Leader of Creation</div>
            </div>
        </div>
    </div>

    <h2 style="padding-top:20px;padding-bottom:10px;">Team</h2>

    <div class="columns team">
        <div class="column noa">
            <div class="pic">
                <img src="{{{ asset('img/team/pierre-moulon.jpg') }}}" alt="" />
            </div>
            <div class="people">
                <div class="name">Pierre Moulon</div>
                <div class="title">PhD in Signal, Image and Automatic</div>
                <div class="dept">Research and Development</div>
                <div class="more">Photogrammetry + Mathematics</div>
            </div>
        </div>
        <div class="column noa">
            <div class="pic">
                <img src="{{{ asset('img/team/stephane-flotron.jpg') }}}" alt="" />
            </div>
            <div class="people">
                <div class="name">Stéphane Flotron</div>
                <div class="title">PhD in Applied Mathematics</div>
                <div class="dept">Research and Development</div>
                <div class="more">Photogrammetry + Mathematics</div>
            </div>
        </div>
    </div>

    <div class="columns team">
        <div class="column noa">
            <div class="pic">
                <img src="{{{ asset('img/team/kevin-velickovic.jpg') }}}" alt="" />
            </div>
            <div class="people">
                <div class="name">Kevin Velickovic</div>
                <div class="title">Developer</div>
                <div class="dept">Development</div>
                <div class="more">Data Processing Interfaces</div>
            </div>
        </div>
        <div class="column noa">
            <div class="pic">
                <img src="{{{ asset('img/team/luc-deschenaux.jpg') }}}" alt="" />
            </div>
            <div class="people">
                <div class="name">Luc Deschenaux</div>
                <div class="title">Developer</div>
                <div class="dept">Development</div>
                <div class="more">WebGL + Front-end Interfaces</div>
            </div>
        </div>
    </div>

    <div class="columns team">
        <div class="column noa">
            <div class="pic">
                <img src="{{{ asset('img/team/kevin-frattini.jpg') }}}" alt="" />
            </div>
            <div class="people">
                <div class="name">Kevin Frattini</div>
                <div class="title">Digitizing Agent</div>
                <div class="dept">Digitization</div>
                <div class="more">Data Planning + Acquisition</div>
            </div>
        </div>
        <div class="column noa">
            <div class="pic">
                <img src="{{{ asset('img/team/joelle-egger.jpg') }}}" alt="" />
            </div>
            <div class="people">
                <div class="name">Joëlle Egger</div>
                <div class="title">Accountant</div>
                <div class="dept">Administration</div>
                <div class="more">Accounting + Administration</div>
            </div>
        </div>
    </div>

    <div class="columns team">
        <div class="column noa">
            <div class="pic">
                <img src="{{{ asset('img/team/malory-jessaume.jpg') }}}" alt="" />
            </div>
            <div class="people">
                <div class="name">Malory Jessaume</div>
                <div class="title">Bachelor in Communication and Free Software</div>
                <div class="dept">Administration</div>
                <div class="more">Community Management</div>
            </div>
        </div>
    </div>

    <h2 style="padding-top:20px;padding-bottom:10px;">Advisory Committee</h2>

    <div class="columns team">
        <div class="column noa">
            <div class="pic">
                <img src="{{{ asset('img/team/raymond-jacot.jpg') }}}" alt="" />
            </div>
            <div class="people">
                <div class="name">Raymond Jacot</div>
                <div class="title">Networking</div>
                <div class="dept">Board Member</div>
            </div>
        </div>
    </div>

@stop

@section('sidebar')

    @parent

@stop
