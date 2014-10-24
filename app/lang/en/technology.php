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

    'head'                      => "Technological Expertise",
    'title'                     => "Swiss Expertise<br />Devoted to Innovation",

    'presentation'              => array(
        'vimeo'                     => "109898911",
        'license'                   => "Presentation licensed under the <em>Creative Commons Attribution-ShareAlike 4.0 International <a href=\":license\" target=\"_blank\">(CC BY-SA)</a></em> license.",
        'attribution'               => "Please read our <a href=\":route\" target=\"_blank\">Usage and Attribution</a> guide.",
        'src'                       => "repository/FOXEL-2014-10-24-EN_Technical-Presentation.svg",
        'download'                  => "View and download the <a href=\":src\" target=\"_blank\">presentation in SVG format</a>."
    ),

    'content'                   => array(
        'a'                         => "FOXEL SA masters the entire development chain, from the conceptualization and design of electronic systems and measurement tools to the development of specific software.",
        'b'                         => "Our innovation policy distinguishes between technology (science) and its applications (products). This approach significantly strengthens our links with scientific communities, research centers and academic networks.",
        'c'                         => "Ongoing training and constant watch on technological advances are part of our priorities."
    ),

    'cameras'                   => array(
        'eyesis'                    => array(
            'name'                      => "Camera Elphel Eyesis 4π",
            'content'                   => array(
                'a'                         => "Elphel Eyesis 4π is a high-resolution full-sphere panoramic and stereophotogrammetric camera, calibrated to compensate for optical aberrations allowing to preserve full sensor resolution over the camera field of view.",
                'b'                         => "Distortion calibration is performed for precise pixel-mapping to automatically stitch images into panoramas, and also for photogrammetry and 3D reconstruction."
            )
        ),
        'phg3'                      => array(
            'name'                      => "Camera Elphel NC353L-369-PHG3",
            'content'                   => array(
                'a'                         => "Elphel NC353-369-PHG3 is a network camera with three calibrated M12 lenses and thermally compensated (&lt; 0.03μm/°) sensor front ends.",
                'b'                         => "Distortion calibration allows to compensate optical aberrations and is performed for precise pixel-mapping, intended for use in the area of photogrammetry."
            )
        ),
        'phg'                       => array(
            'name'                      => "Camera Elphel NC353L-369-PHG",
            'content'                   => array(
                'a'                         => "Elphel NC353-369-PHG is a network camera with a calibrated M12 lens and thermally compensated (&lt; 0.03μm/°) sensor front end.",
                'b'                         => "Distortion calibration allows to compensate optical aberrations and is performed for precise pixel-mapping, intended for use in the area of photogrammetry."
            )
        )
    )

);
