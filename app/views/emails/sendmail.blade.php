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

?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>

<body>

<h2>Contact request from FOXEL website</h2>

<table>
<tr>
    <td>Title:</td>
    <td rowspan="10" style="width:100px;"></td>
    <td>{{ $title }}</td>
</tr>
<tr>
    <td>Last Name:</td>
    <td>{{ $lastname }}</td>
</tr>
<tr>
    <td>First Name:</td>
    <td>{{ $firstname }}</td>
</tr>
<tr>
    <td>Company:</td>
    <td>{{ $company }}</td>
</tr>
<tr>
    <td>Country:</td>
    <td>{{ $country }}</td>
</tr>
<tr>
    <td>Language:</td>
    <td>{{{ App::getLocale() }}}</td>
</tr>
<tr>
    <td>E-Mail:</td>
    <td>{{ $email }}</td>
</tr>
<tr>
    <td>Phone:</td>
    <td>{{ $phone }}</td>
</tr>
<tr>
    <td>Subject:</td>
    <td>{{ $subject }}</td>
</tr>
<tr>
    <td>Message:</td>
    <td>{{ $msg }}</td>
</tr>
</table>

</body>
</html>
