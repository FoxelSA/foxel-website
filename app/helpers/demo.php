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


/**
 * get_basic_demos()
 */
function get_basic_demos() {

    $sets = NULL;

    try {

        // json
        $json = json_decode(file_get_contents(Config::get('app.demo').'/basic/config.json'));
        $sets = &$json->config->sets;

    } catch (Exception $e) {
        $sets = array();
    }

    // parse
    foreach ($sets as &$_set) {

        // order
        foreach ($_set->views as $v => &$_view) {
            $_view->pid = $v;
            if (!isset($_view->order))
                $_view->order = 0;
        }

        // sort
        usort($_set->views, function ($a,$b) {
            if ($a->order == $b->order)
                return ($a->pid < $b->pid) ? -1 : 1;
            return ($a->order < $b->order) ? -1 : 1;
        });

    }

    return $sets;

}
