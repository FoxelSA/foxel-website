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

return array(

    'home'              => array(
        'uri'               => '/',
        'nav'               => 'Accueil'
    ),
    'company'           => array(
        'uri'               => 'societe',
        'nav'               => 'Société',
        'sub'               => array(
            /*
            'team'              => array(
                'uri'               => 'equipe',
                'nav'               => 'Qui sommes-nous'
            ),
            */
            'dynamic'           => array(
                'uri'               => 'dynamique',
                'nav'               => 'Dynamique économique'
            )
        )
    ),
    'services'          => array(
        'uri'               => 'services',
        'nav'               => 'Services'
    ),
    'technology'        => array(
        'uri'               => 'technologie',
        'nav'               => 'Technologie',
        'sub'               => array(
            'demo'              => array(
                'uri'               => 'demo',
                'nav'               => 'Démo'
            ),
            'license'           => array(
                'uri'               => 'licence',
                'nav'               => 'Licence'
            )
        )
    ),
    /*
    'investors'         => array(
        'uri'               => 'investisseurs',
        'nav'               => 'Investisseurs'
    ),
    */
    'contact'           => array(
        'uri'               => 'contact',
        'nav'               => 'Contact'
    ),
    'rmll2014'          => array(
        'uri'               => 'actualites/rmll/2014',
        'nav'               => NULL
    )

);
