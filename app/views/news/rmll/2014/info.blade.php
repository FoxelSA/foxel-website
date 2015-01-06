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
Actualités | FOXEL aux RMLL 2014
@stop

@section('data')

    <h2>FOXEL aux 15èmes Rencontres Mondiales<br />du Logiciel Libre à Montpellier</h2>

    <p><em>Genève, le 4 juillet 2014</em></p>

    <p style="font-weight:700;">FOXEL participe à la 15ème édition des Rencontres Mondiales du Logiciel Libre (<a href="http://2014.rmll.info/" target="_blank">RMLL 2014</a>) qui ont lieu cette année à Montpellier et ont également l'avantage d'accueillir la 3ème édition de la semaine européenne de l'Open Data (<a href="http://opendataweek.org" target="_blank">European Open Data Week</a>).</p>
    <p>Les co-fondateurs de la société FOXEL y donneront le lundi 7 juillet 2014 à 16:20 (Amphi 31) une <a href="https://2014.rmll.info/conference238" target="_blank">conférence <em>(#238 Foxel - Un modèle économique pour booster la création de biens communs)</em></a> présentant succinctement les activités de la société ainsi que les technologies libres qu'elle utilise, puis abordera de manière approfondie le fonctionnement de son modèle économique, des mécanismes et des valeurs qui l'animent.</p>

    <h3>Journées grand public</h3>
    <p>FOXEL participera également aux <a href="https://2014.rmll.info/Journees-Grand-Public" target="_blank">journées grand public du samedi 5 et du dimanche 6 juillet 2014</a>, avec un stand présentant son activités, ses technologies et son matériel de numérisation d'environnement.</p>
    <p>Ces deux journées, qui ouvrent cette 15ème édition, ont pour but de faire découvrir les technologies et la culture libre à un large public. Elles se déroulent en plein centre-ville de Montpellier, à deux pas de la place de la Comédie, à l'ombre des platanes et au son des cigales.</p>

    <h3>Atelier de développement contributif</h3>
    <p>Du 5 au 11 juillet 2014, FOXEL organisera chaque jour, dans sa « FOXEL ROOM », un atelier de développement contributif en collaboration avec Think Services de l'Université de Genève. Le but de cet atelier est d'appréhender les outils technologiques permettant de valoriser le patrimoine informationnel de la région.</p>
    <p>Il faut rappeler les produits FOXEL offrent la possibilité de saisir d'un seul tenant l'environnement alentour sous la forme de panorama en haute résolution. Ils offrent également la possibilité de reconstruire l'environnement en trois dimensions au travers des paires stéréos ainsi que du matériel de positionnement embarqué sur la caméra.</p>
    <p>Le système de positionnement est en charge de la géolocalisation de la caméra durant les campagnes de mesure. Sont rôle est d'attacher les prises de vue au référentiel terrestre ainsi que d'enregistrer l'orientation de la caméra au cours du temps.</p>
    <p>Sur la base des images acquises par la caméra, une reconstruction de l'environnement est effectuée. Les données reconstruites sont attachées au référentiel terrestre, donnant la possibilité de mesure entre des points choisi, par exemple au travers d'une navigation panoramique.</p>

    <p class="low">Les domaines suivants seront étudiés durant cet atelier :</p>
    <ul>
        <li>Outils de numérisation</li>
        <li>Outils de post-traitement et de parallélisation du traitement</li>
        <li>Points d'intérêts / Détection automatique</li>
        <li>Interfaces à réalité augmentée sur la base des panoramas et des points d'intérêts</li>
        <li>Interfaces de gestion de tickets sur la base d'images géo-localisées</li>
        <li>Détection et floutage automatique des têtes</li>
        <li>Détection paramétrique d'objet 2D et 3D</li>
        <li>Système de positionnement</li>
        <li>Reconstruction tridimensionnelle</li>
        <li>Service de mesure</li>
    </ul>

    <p>Un <a href="http://rmll2014.foxel.ch/" target="_blank">wiki</a> dédié à cet atelier sera disponible dès le premier jour des Rencontres afin de décrire les outils utilisés, le déroulement du workshop, et de donner accès aux données brutes et aux données post-traitées utilisées lors de l'atelier.</p>
    <p style="font-weight:700;">Toute l'équipe de la société FOXEL sera présente à l'occasion de cette Rencontre annuelle, événement incontournable de la communauté du libre. Rendez-vous du 5 au 11 juillet 2014 à Montpellier !</p>

@stop

@section('sidebar')

    @parent

@stop
