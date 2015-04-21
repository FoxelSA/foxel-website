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

return array(

    'head'                      => "News",
    'title'                     => "Latest News",

    '2015'                      => array(
        'iss'                       => array(
            'date'                      => "April 21, 2015",
            'info'                      => "University of Geneva's Institute of Information Service Science (ISS), FOXEL and the CINTCOM foundation <a href=\"".route('news.2015.iss')."\">establish a convention aiming at developing their respective explorations</a>.",
            'pdf'                       => "repository/pressrelease/FOXEL-2015-04-21-EN_ISS-CINTCOM-FOXEL.pdf",
        ),
        'reborne'                   => array(
            'date'                      => "January 29, 2015",
            'info'                      => "FOXEL <a href=\"".route('news.2015.reborne')."\">supports the Re-Borne initiative</a> in maintaining the Geneva's heritage through its sponsorship of a national state border marker of the Canton of Geneva."
        ),
        'isprs'                     => array(
            'date'                      => "January 13, 2015",
            'info'                      => "FOXEL is <a href=\"http://www.isprs.org/members/SustainingDetails.aspx?id=394\" target=\"_blank\">officially affiliated</a> as sustaining member to the International Society for Photogrammetry and Remote Sensing (<a href=\"http://www.isprs.org/\" target=\"_blank\">ISPRS</a>)."
        ),
        'sspt'                      => array(
            'date'                      => "January 6, 2015",
            'info'                      => "FOXEL is <a href=\"http://www.sspt.ch/fr/mainmenu-affiliation/mainmenu-la-societe-membres-collectifs\" target=\"_blank\">officially affiliated</a> as collective member to the Swiss Society for Photogrammetry and Remote Sensing (<a href=\"http://www.sspt.ch/\" target=\"_blank\">SSPT/SGPF</a>)."
        )
    ),

    '2014'                      => array(
        'ge200'                     => array(
            'date'                      => "November 10, 2014",
            'info'                      => "FOXEL is proud to be amongst the official suppliers of <a href=\"http://ge200.ch/\" target=\"_blank\">GE200.ch</a>, the celebration of Geneva's bicentennial entry in the Swiss confederation."
        ),
        'rmll'                      => array(
            'date'                      => "July 4, 2014",
            'info'                      => "FOXEL's development team <a href=\"".route('news.2014.rmll')."\">will participate in the 15th Libre Software Meeting</a> (RMLL/LSM) taking place in Montpellier (France) from July 5-11<sup>th</sup>, 2014."
        )
    )

);
