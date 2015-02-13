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
Actualités | FOXEL soutient l'initiative Re-Borne
@stop

@section('data')

    <h2>FOXEL soutient l'initiative Re-Borne<br />pour le maintien du patrimoine genevois</h2>

    <p><em>Genève, le 29 janvier 2015</em></p>

    <p style="font-weight:700;">Dans le cadre du projet <a href="http://re-borne.ch/" target="_blank">Re-Borne</a> de la fondation éponyme, FOXEL parraine la Cheville n° 802_083 située à la frontière entre le Canton de Genève et le Département de la Haute-Savoie aux coordonnées géographiques 6°9'4.702688&quot; E &nbsp;46°9'4.170007&quot; N.</p>
    <p>Parrainer une borne, c'est faire un geste citoyen ! Le projet Re-Borne a pour objectif de restaurer les bornes abimées du canton de Genève et celles qui ont fait l'objet d'actes de vandalisme. Dans une société où souvent l'égoïsme prime, il a semblé important aux porteurs des projets <a href="http://ge200.ch/" target="_blank">GE200.CH</a> et <a href="http://re-borne.ch/" target="_blank">Re-Borne</a>, de donner l'occasion à celles et ceux qui le veulent de faire un geste citoyen en contribuant à une action pérenne et utile. Quoi de plus fort que de marquer son attachement au patrimoine genevois en contribuant à sa restauration ?</p>
    <p>La Fondation Re-Borne est une Fondation d'intérêt public créée dans le cadre de la célébration du bicentenaire de l'entrée de Genève dans la Confédération suisse. Elle a pour but de permettre la restauration des bornes de la frontière nationale du canton de Genève.</p>

    <p><img src="{{{ asset('img/news/re-borne-802_083.jpg') }}}" class="auto center" alt="Certificat Re-Borne FOXEL 802_083" title="Certificat Re-Borne FOXEL 802_083" /></p>

@stop

@section('sidebar')

    @parent

@stop
