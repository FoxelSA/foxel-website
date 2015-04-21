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
{{ Lang::get('news.head') }} | Convention entre ISS, FOXEL et CINTCOM
@stop

@section('data')

    <h2>Constitution de Biens Communs Numériques<br />par des Tiers­-Lieux</h2>

    <p><em>Communiqué de Presse | Genève, le 21 avril 2015</em></p>

    <p style="font-weight:700;">L'<a href="http://iss.unige.ch" target="_blank">Institut de Science de Service</a> (ISS) de l'Université de Genève, <a href="http://foxel.ch" target="_blank">FOXEL SA</a> et la fondation CINTCOM mettent en place une convention afin de s'entraider dans leurs explorations respectives.</p>
    <p>Cette convention couvre notamment dans les domaines de numérisation du territoire à grande échelle, de constitution de biens communs, de gestion du patrimoine technologique et informationnel, du déploiement de réalisations regroupées sous le chapeau de Smart City ou de Smart Region. Le partenariat touche également la recherche, l'enseignement et le développement de tiers-lieux sur le sujet.</p>

    <ul>
        <li><a href="{{ asset(Lang::get('news.2015.iss.pdf')) }}" target="_blank">Lire le communiqué de presse</a></li>
    </ul>

@stop

@section('sidebar')

    @parent

@stop
