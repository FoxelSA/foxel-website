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


/**
 * render_navigation()
 */
function render_navigation($depth=-1,$tree=NULL,&$html='',$level=0,$preroute='') {

    $html .= $level > 0 ? '<ul class="sub l'.$level.'">' : '<ul>';

    if (is_null($tree))
        $tree = Lang::get('routes');

    foreach ($tree as $route => $item) {

        if (isset($item['nav']) && $item['nav'] != NULL) {

            $active = $route == Route::currentRouteName();
            if ($route == 'news' && substr(Route::currentRouteName(),0,5) == 'news.')
                $active = true;

            $html .= '<li>';
            $html .= '<a href="'.route($route).($route=='home'?'/':'').'"'.($active?' class="active"':'').'>'.$item['nav'].'</a>';

            if (isset($item['sub']) && is_array($item['sub'])) {
                if ($depth == -1 || $level < $depth)
                    render_navigation($depth,$item['sub'],$html,$level+1,$preroute.$route.'.sub.');
            }

            $html .= '</li>';
        }
    }

    $html .= '</ul>';

    return $html;

}
