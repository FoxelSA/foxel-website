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
 *      Kevin Velickovic <k.velickovic@foxel.ch>
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

    <h2>MISE EN PLACE DU COLLÈGE DES RESPONSABLES DES CONTRIBUTIONS DE FOXEL SA</h2>

    <h4><b>Une dynamique confédérale pour le management des contributions</b></h4>
    <p><em>Communication officielle | Genève, le 18 aout 2015</em></p>

    <p>Après deux ans d'incubation et d'exploration contributive de technologies disruptives sur les territoires helvétique, français et monégasque, la rentrée 2015 marque une étape importante pour les démarches de la réappropriation du territoire numérique et du déploiement des technologies FOXEL à l'international.</p>
    <p>Fondée en 2013, FOXEL est le fruit d'une intense veille technologique et de nombreuses années de recherche et développement. Spécialisée dans la numérisation industrielle 3D-métrique d'environnement, la société FOXEL fédère une nouvelle approche économique en matière d'exploitation, d'industrialisation et d'endogénéisation de technologies disruptives, non brevetables, et essentiellement régies par de licences dites « libres ».</p>
    <p>Cette approche stratégique est intrinsèque à la mission de FOXEL qui vise à permettre la réappropriation du territoire numérique et la consolidation de patrimoine numérique pour ses clients. Elle s'inscrit dans la continuité des démarches de gouvernance déjà menées par le CERN en matière de développement Open Hardware notamment par la publication en 2011 de la licence « CERN Open hardware license », première licence « libre » du genre que FOXEL applique pour l'ensemble de ses développements matériels.</p>
    <p>Pour mener à bien la transition de FOXEL vers une société de l'économie de la contribution de dimension industrielle et répondre à ses responsabilités sociétales grandissantes issues de ses deux premières années d'activités, la structure traditionnelle de Direction de l'entreprise à l'avantage d'évoluer aujourd'hui en un <a href="{{ route('team').'/' }}"><u>Collège de Responsables</u></a> chargés d'assurer de manière transversale et contributive le management et le développement de l'entreprise.</p>
    <p>La direction menée jusqu'à ce jour par M. Olivier Wasem (CEO) aura permis d'aboutir à cette évolution majeure, nécessaire pour mener à bien un management des contributions en conformité avec les valeurs et fondements des collaborateurs communautés et acteurs qui participent au déploiement mondial du projet FOXEL. M. Olivier Wasem se retire à présent des activités opérationnelles de la société pour se diriger vers d'autres horizons.</p>
    <p>Le nouveau Collège de Responsables de FOXEL est doté d'un Secrétaire général en la personne de M. Lionel Lourdin et d'un Secrétaire adjoint en la personne de M. Alexandre Kraft, tous deux co-fondateurs et administrateurs de FOXEL. Ils sont chargés d'organiser le management des contributions, tout en veillant au respect des fondements constitutionnels de la société. MM. Lionel Lourdin et Alexandre Kraft bénéficient de plus de 15 ans d'expérience entrepreneuriale dans l'univers des technologies disruptives et des communautés du Logiciel Libre. Spécialistes des modèles de développement et des licences libres de type GNU GPL, ils apporteront tous deux leur expérience et savoir-faire pour mener un management pérenne des contributions afin de permettre la standardisation des technologies FOXEL.</p>
    <p>Cette évolution, marquée par l'inauguration de son nouveau Collège de Responsables, fait partie de l'approche originelle de FOXEL menée par l'ensemble des fondateurs. Le but est de formaliser et d'assurer les mécanismes d'innovation et d'endogénéisation des technologies disruptives dans l'esprit d'une Société de l'information contributive et inclusive, au sens de la Déclaration de Principes de Genève ratifiée lors du Sommet Mondial de la Société de l'Information (SMSI, 2004).</p>
    <p><a href="https://github.com/societe/3-0/blob/master/SOCIETE_3-0_Lumieres-numeriques_et_biens-communs_v1-0.pdf"><img src="{{{ asset('img/news/nous-contribuons.png') }}}" class="auto left" width="150px" alt="Société 3.0" title="Société 3.0" /></a></p>

@stop

@section('sidebar')

    @parent

@stop
