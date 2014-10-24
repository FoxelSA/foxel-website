@extends('page')

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

?>

@section('head')
{{ Lang::get('technology.head') }}
@stop

@section('data')

    <h2>{{ Lang::get('technology.title') }}</h2>

    <div style="margin:0;margin-top:40px;">
        <iframe class="vimeo dynamic" src="//player.vimeo.com/video/{{ Lang::get('technology.presentation.vimeo') }}?byline=0&amp;portrait=0&amp;color=ecb100" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>

    <p>
        <span class="note">{{ Lang::get('technology.presentation.license',array('license'=>'http://creativecommons.org/licenses/by-sa/4.0/')) }}</span>
        <br />
        <span class="note">
            {{ Lang::get('technology.presentation.attribution',array('route'=>route('license'))) }}
            {{ Lang::get('technology.presentation.download',array('src'=>asset(Lang::get('technology.presentation.src')))) }}
        </span>
    </p>

    <div class="columns" style="margin-top:50px;">
        <div class="column">
            <p>{{ Lang::get('technology.content.a') }}</p>
            <ul>
                <li><a href="#" class="goto anchor" rel="eyesis">{{ Lang::get('technology.cameras.eyesis.name') }}</a></li>
                <li><a href="#" class="goto anchor" rel="phg3">{{ Lang::get('technology.cameras.phg3.name') }}</a></li>
                <li><a href="#" class="goto anchor" rel="phg">{{ Lang::get('technology.cameras.phg.name') }}</a></li>
            </ul>
        </div>
        <div class="column">
            <p>{{ Lang::get('technology.content.b') }} {{ Lang::get('technology.content.c') }}</p>
        </div>
    </div>

    <p>
        <br />
        <img src="{{{ asset('img/technology/elphel_eyesis-4pi.jpg') }}}" class="auto center" alt="" />
    </p>

    <h3 class="anchor eyesis">{{ Lang::get('technology.cameras.eyesis.name') }}</h3>

    <div class="columns">
        <div class="column">
            <p>{{ Lang::get('technology.cameras.eyesis.content.a') }}</p>
        </div>
        <div class="column">
            <p>{{ Lang::get('technology.cameras.eyesis.content.b') }}</p>
        </div>
    </div>

    <table class="specifications">
        <thead>
            <tr>
                <th colspan="2">Technical Specifications</th>
            </tr>
        </thead>
        <tbody>
            <tr class="category">
                <td colspan="2">General</td>
            </tr>
            <tr>
                <td>Camera type</td>
                <td>
                    <ul>
                        <li>Full-sphere panoramic and stereophotogrammetric</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>User interface</td>
                <td>
                    <ul>
                        <li>Dedicated computer and/or tablet</li>
                        <li>Web-based graphical user interface (GUI)</li>
                    </ul>
                </td>
            </tr>
            <tr class="category">
                <td colspan="2">Optical characteristics</td>
            </tr>
            <tr>
                <td>Field of view (combined)</td>
                <td>
                    <ul>
                        <li>4 * &pi; &nbsp;(360°/ 180°)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Resolution</td>
                <td>
                    <ul>
                        <li>130Mpix combined megapixels</li>
                        <li>64MPix combined megapixels w/o overlapping areas <sup>[1]</sup></li>
                        <li>52.8MPix combined megapixels w/o overlapping areas, worst case resolution <sup>[1] [2]</sup></li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Angular resolution</td>
                <td>
                    <ul>
                        <li>+/-30° from the horizon: ≥ 4.2Mpix/ steradian <sup>[2]</sup></li>
                        <li>+30° to +90° (zenith): ≥ 4.2Mpix/ steradian <sup>[2]</sup></li>
                        <li>-30° to -90° (nadir): ≥ 4.2Mpix/ steradian <sup>[2]</sup></li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Calibration</td>
                <td>
                    <ul>
                        <li>
                            Calibrated fixed lens to compensate for the lenses distortions
                            <ul>
                                <li>10&quot; (0.1pix) in the center 80% x 80% area</li>
                                <li>30&quot; (0.3pix) maximal error over the full field of view</li>
                                <li>&lt; 0.03&mu;m/° thermal expansion</li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Image sensors</td>
                <td>
                    <ul>
                        <li>
                            26x high resolution sensor front ends
                            <ul>
                                <li>24x color 5MPix CMOS sensors in array that covers the sphere</li>
                                <li>2x color 5MPix CMOS sensors in the pole that make stereo pairs with corresponding sensors in the camera head, and used for camera egomotion measurement</li>
                            </ul>
                        </li>
                        <li>Precise image capture synchronization</li>
                        <li>Centered and adjusted to reduce aberration</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Lenses</td>
                <td>
                    <ul>
                        <li>
                            26x high resolution lenses
                            <ul>
                                <li>M12 lens mount</li>
                            </ul>
                        </li>
                        <li>Compact optical layout achieves lesser parallax</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Entrance pupils distance</td>
                <td>
                    <ul>
                        <li>46.5mm between entrance pupils of adjacent horizontal lenses</li>
                        <li>50mm between entrance pupils of horizontal and top/bottom lenses <sup>[3]</sup></li>
                    </ul>
                </td>
            </tr>
            <tr class="category">
                <td colspan="2">Position &amp; orientation measurement</td>
            </tr>
            <tr>
                <td>Inertial Measurement Unit</td>
                <td>
                    <ul>
                        <li>
                            IMU powered 3D inertial measurement
                            <ul>
                                <li>2'460 recorded measurements per second</li>
                            </ul>
                        </li>
                        <li>Images are synchronized with IMU with 1&mu;s resolution</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Global Positioning System</td>
                <td>
                    <ul>
                        <li>
                            GPS powered geo-tagging
                            <ul>
                                <li>Internal receiver</li>
                                <li>5-10 Hz update rate (pulse-per-second input)</li>
                            </ul>
                        </li>
                        <li>Images are synchronized with GPS with 1&mu;s resolution</li>
                    </ul>
                </td>
            </tr>
            <tr class="category">
                <td colspan="2">Recording characteristics</td>
            </tr>
            <tr>
                <td>Triggering mode</td>
                <td>
                    <ul>
                        <li>
                            Internal
                            <ul>
                                <li>Generated by the camera</li>
                                <li>Generated by the camera + output the trigger signal (opto-isolated I/O port to trigger external devices)</li>
                            </ul>
                        </li>
                        <li>
                            External
                            <ul>
                                <li>Network generated request</li>
                                <li>Opto-isolated I/O port for triggering the camera from an external device (e.g. GPS/ odometer/ pedometer input interface)</li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Exposure</td>
                <td>
                    <ul>
                        <li>Automatic, semi-manual and full manual</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Maximal frame rate</td>
                <td>
                    <ul>
                        <li>Up to 5 FPS at full resolution (130Mpix)</li>
                        <li>Up to 2.5 FPS for best image quality and better auto-exposure settings</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Image format</td>
                <td>
                    <ul>
                        <li>
                            Acquisition format
                            <ul>
                                <li>JP4 (RAW format), recommended for higher quality</li>
                                <li>JPEG</li>
                                <li>Quicktime (container storing JP4 or JPEG frames)</li>
                            </ul>
                        </li>
                        <li>
                            Export format
                            <ul>
                                <li>TIFF</li>
                                <li>JPEG</li>
                                <li>Any other formats can be exported</li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Panorama image size</td>
                <td>
                    <ul>
                        <li>
                            Acquisition data
                            <ul>
                                <li>~65MB in JP4 (RAW format)</li>
                            </ul>
                        </li>
                        <li>
                            Export data
                            <ul>
                                <li>~390MB in TIFF</li>
                                <li>~28MB in JPEG</li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Internal storage</td>
                <td>
                    <ul>
                        <li>2.25TB - 9x SSDs 256GB 1.8&quot; (Solid State Drives)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>External storage</td>
                <td>
                    <ul>
                        <li>9x 100Mb/sec, over the network</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Data unload</td>
                <td>
                    <ul>
                        <li>Ethernet</li>
                        <li>2x eSATA</li>
                    </ul>
                </td>
            </tr>
            <tr class="category">
                <td colspan="2">Physical characteristics</td>
            </tr>
            <tr>
                <td>Power</td>
                <td>
                    <ul>
                        <li>48V DC</li>
                        <li>60W power consumption</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Weight</td>
                <td>
                    <ul>
                        <li>12kg/ ~26lbs</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Size</td>
                <td>
                    <ul>
                        <li>Radius: 230mm/ ~9 in.</li>
                        <li>Height: 1'350mm / ~53 in.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Protection</td>
                <td>
                    <ul>
                        <li>Weatherproof (camera body and pole)</li>
                        <li>Dustproof (camera body and pole)</li>
                        <li>Thermal compensation</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="note" style="padding:20px 0;">
        <sup>[1]</sup> Megapixels of 2 additional lenses are not included in total panoramic image size.
        <br />
        <sup>[2]</sup> Angular resolution per pixel differs in the sub-camera field of view, minimal resolution is used.
        <br />
        <sup>[3]</sup> Additional pair of sub-cameras mounted one meter below the main 24 sensors. These camera images may be used to measure distances to some objects (not the full-sphere), and then this data can be used to improve precision of the IMU-based measurements of the camera egomotion.
    </div>

    <h3 class="anchor phg3">{{ Lang::get('technology.cameras.phg3.name') }}</h3>

    <div class="columns">
        <div class="column">
            <p>{{ Lang::get('technology.cameras.phg3.content.a') }}</p>
            <p>{{ Lang::get('technology.cameras.phg3.content.b') }}</p>
        </div>
        <div class="column">
            <p>
                <br />
                <img src="{{{ asset('img/technology/elphel_nc353l-369-phg3.jpg') }}}" class="auto center" alt="" />
            </p>
        </div>
    </div>

    <table class="specifications" style="margin-bottom:60px;">
        <thead>
            <tr>
                <th colspan="2">Technical Specifications</th>
            </tr>
        </thead>
        <tbody>
            <tr class="category">
                <td colspan="2">General</td>
            </tr>
            <tr>
                <td>Camera type</td>
                <td>
                    <ul>
                        <li>Stereophotogrammetric camera array</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>User interface</td>
                <td>
                    <ul>
                        <li>Dedicated computer and/or tablet</li>
                        <li>Web-based graphical user interface (GUI)</li>
                    </ul>
                </td>
            </tr>
            <tr class="category">
                <td colspan="2">Optical characteristics</td>
            </tr>
            <tr>
                <td>Field of view</td>
                <td>
                    <ul>
                        <li>60° horizontal/ 45° vertical</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Resolution</td>
                <td>
                    <ul>
                        <li>15Mpix raw data</li>
                        <li>5MPix per sensor</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Calibration</td>
                <td>
                    <ul>
                        <li>
                            Calibrated fixed lens to compensate for the lenses distortions
                            <ul>
                                <li>10&quot; (0.1pix) in the center 80% x 80% area</li>
                                <li>30&quot; (0.3pix) maximal error over the full field of view</li>
                                <li>&lt; 0.03&mu;m/° thermal expansion</li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Image sensors</td>
                <td>
                    <ul>
                        <li>
                            3x high resolution sensor front ends
                            <ul>
                                <li>3x color 5MPix CMOS sensors in array</li>
                            </ul>
                        </li>
                        <li>Precise image capture synchronization</li>
                        <li>Centered and adjusted to reduce aberration</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Lenses</td>
                <td>
                    <ul>
                        <li>
                            3x high resolution lenses
                            <ul>
                                <li>M12 lens mount</li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Entrance pupils distance</td>
                <td>
                    <ul>
                        <li>60mm between entrance pupils of adjacent lenses</li>
                    </ul>
                </td>
            </tr>
            <tr class="category">
                <td colspan="2">Position &amp; orientation measurement</td>
            </tr>
            <tr>
                <td>Inertial Measurement Unit</td>
                <td>
                    <ul>
                        <li>
                            IMU powered 3D inertial measurement (optional)
                            <ul>
                                <li>2'460 recorded measurements per second</li>
                            </ul>
                        </li>
                        <li>Images are synchronized with IMU with 1&mu;s resolution</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Global Positioning System</td>
                <td>
                    <ul>
                        <li>
                            GPS powered geo-tagging (optional)
                            <ul>
                                <li>Internal receiver</li>
                                <li>5-10 Hz update rate (pulse-per-second input)</li>
                            </ul>
                        </li>
                        <li>Images are synchronized with GPS with 1&mu;s resolution</li>
                    </ul>
                </td>
            </tr>
            <tr class="category">
                <td colspan="2">Recording characteristics</td>
            </tr>
            <tr>
                <td>Triggering mode</td>
                <td>
                    <ul>
                        <li>
                            Internal
                            <ul>
                                <li>Generated by the camera</li>
                                <li>Generated by the camera + output the trigger signal (opto-isolated I/O port to trigger external devices)</li>
                            </ul>
                        </li>
                        <li>
                            External
                            <ul>
                                <li>Network generated request</li>
                                <li>Opto-isolated I/O port for triggering the camera from an external device (e.g. GPS/ odometer/ pedometer input interface)</li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Exposure</td>
                <td>
                    <ul>
                        <li>Automatic, semi-manual and full manual</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Maximal frame rate</td>
                <td>
                    <ul>
                        <li>Up to 15 FPS at full resolution (5Mpix per sensor)</li>
                        <li>
                            Higher framerate at lower resolution
                            <ul>
                                <li>60 FPS at 720p</li>
                                <li>30 FPS at 1080p</li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Image format</td>
                <td>
                    <ul>
                        <li>
                            Acquisition format
                            <ul>
                                <li>JP4 (RAW format), recommended for higher quality</li>
                                <li>JPEG</li>
                                <li>Quicktime (container storing JP4 or JPEG frames)</li>
                            </ul>
                        </li>
                        <li>
                            Export format
                            <ul>
                                <li>TIFF</li>
                                <li>JPEG</li>
                                <li>Any other formats can be exported</li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Image size</td>
                <td>
                    <ul>
                        <li>
                            Acquisition data
                            <ul>
                                <li>~7.5MB in JP4 (RAW format)</li>
                            </ul>
                        </li>
                        <li>
                            Export data
                            <ul>
                                <li>~50MB x 3 in TIFF</li>
                                <li>~5MB x 3 in JPEG</li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Internal storage</td>
                <td>
                    <ul>
                        <li>6GB - 3x CFs 2GB (internal CompactFlash)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>External storage</td>
                <td>
                    <ul>
                        <li>3x 100Mb/sec, over the network</li>
                        <li>3x external HDD SATA (optional)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Data unload</td>
                <td>
                    <ul>
                        <li>Ethernet</li>
                    </ul>
                </td>
            </tr>
            <tr class="category">
                <td colspan="2">Physical characteristics</td>
            </tr>
            <tr>
                <td>Power</td>
                <td>
                    <ul>
                        <li>48V DC over POE (power over ethernet)</li>
                        <li>3 x 8W power consumption</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Weight</td>
                <td>
                    <ul>
                        <li>1.1kg/ ~2.4lbs</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Size</td>
                <td>
                    <ul>
                        <li>Width: 110mm/ ~4.3 in.</li>
                        <li>Height: 113mm / ~4.4 in.</li>
                        <li>Length: 138mm / ~5.4 in.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Protection</td>
                <td>
                    <ul>
                        <li>Dustproof</li>
                        <li>Thermal compensation</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>

    <h3 class="anchor phg">{{ Lang::get('technology.cameras.phg.name') }}</h3>

    <div class="columns">
        <div class="column">
            <p>{{ Lang::get('technology.cameras.phg.content.a') }}</p>
            <p>{{ Lang::get('technology.cameras.phg.content.b') }}</p>
        </div>
        <div class="column">
            <div class="column">
            <p>
                <br />
                <img src="{{{ asset('img/technology/elphel_nc353l-369-phg.jpg') }}}" class="auto center" alt="" />
            </p>
        </div>
        </div>
    </div>

    <table class="specifications">
        <thead>
            <tr>
                <th colspan="2">Technical Specifications</th>
            </tr>
        </thead>
        <tbody>
            <tr class="category">
                <td colspan="2">General</td>
            </tr>
            <tr>
                <td>Camera type</td>
                <td>
                    <ul>
                        <li>Photogrammetric</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>User interface</td>
                <td>
                    <ul>
                        <li>Dedicated computer and/or tablet</li>
                        <li>Web-based graphical user interface (GUI)</li>
                    </ul>
                </td>
            </tr>
            <tr class="category">
                <td colspan="2">Optical characteristics</td>
            </tr>
            <tr>
                <td>Field of view</td>
                <td>
                    <ul>
                        <li>60° horizontal/ 45° vertical</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Resolution</td>
                <td>
                    <ul>
                        <li>5Mpix raw data</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Calibration</td>
                <td>
                    <ul>
                        <li>
                            Calibrated fixed lens to compensate for the lenses distortions
                            <ul>
                                <li>10&quot; (0.1pix) in the center 80% x 80% area</li>
                                <li>30&quot; (0.3pix) maximal error over the full field of view</li>
                                <li>&lt; 0.03&mu;m/° thermal expansion</li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Image sensor</td>
                <td>
                    <ul>
                        <li>
                            1x high resolution sensor front end
                            <ul>
                                <li>1x color 5MPix CMOS sensor</li>
                            </ul>
                        </li>
                        <li>Centered and adjusted to reduce aberration</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Lens</td>
                <td>
                    <ul>
                        <li>
                            1x high resolution lens
                            <ul>
                                <li>M12 lens mount</li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr class="category">
                <td colspan="2">Position &amp; orientation measurement</td>
            </tr>
            <tr>
                <td>Inertial Measurement Unit</td>
                <td>
                    <ul>
                        <li>
                            IMU powered 3D inertial measurement (optional)
                            <ul>
                                <li>2'460 recorded measurements per second</li>
                            </ul>
                        </li>
                        <li>Images are synchronized with IMU with 1&mu;s resolution</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Global Positioning System</td>
                <td>
                    <ul>
                        <li>
                            GPS powered geo-tagging (optional)
                            <ul>
                                <li>Internal receiver</li>
                                <li>5-10 Hz update rate (pulse-per-second input)</li>
                            </ul>
                        </li>
                        <li>Images are synchronized with GPS with 1&mu;s resolution</li>
                    </ul>
                </td>
            </tr>
            <tr class="category">
                <td colspan="2">Recording characteristics</td>
            </tr>
            <tr>
                <td>Triggering mode</td>
                <td>
                    <ul>
                        <li>
                            Internal
                            <ul>
                                <li>Generated by the camera</li>
                                <li>Generated by the camera + output the trigger signal (opto-isolated I/O port to trigger external devices)</li>
                            </ul>
                        </li>
                        <li>
                            External
                            <ul>
                                <li>Network generated request</li>
                                <li>Opto-isolated I/O port for triggering the camera from an external device (e.g. GPS/ odometer/ pedometer input interface)</li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Exposure</td>
                <td>
                    <ul>
                        <li>Automatic, semi-manual and full manual</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Maximal frame rate</td>
                <td>
                    <ul>
                        <li>Up to 15 FPS at full resolution (5Mpix)</li>
                        <li>
                            Higher framerate at lower resolution
                            <ul>
                                <li>60 FPS at 720p</li>
                                <li>30 FPS at 1080p</li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Image format</td>
                <td>
                    <ul>
                        <li>
                            Acquisition format
                            <ul>
                                <li>JP4 (RAW format), recommended for higher quality</li>
                                <li>JPEG</li>
                                <li>Quicktime (container storing JP4 or JPEG frames)</li>
                            </ul>
                        </li>
                        <li>
                            Export format
                            <ul>
                                <li>TIFF</li>
                                <li>JPEG</li>
                                <li>Any other formats can be exported</li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Image size</td>
                <td>
                    <ul>
                        <li>
                            Acquisition data
                            <ul>
                                <li>~2.5MB in JP4 (RAW format)</li>
                            </ul>
                        </li>
                        <li>
                            Export data
                            <ul>
                                <li>~50MB in TIFF</li>
                                <li>~5MB in JPEG</li>
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Internal storage</td>
                <td>
                    <ul>
                        <li>2GB - 1x CF 2GB (internal CompactFlash)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>External storage</td>
                <td>
                    <ul>
                        <li>1x 100Mb/sec, over the network</li>
                        <li>1x external HDD SATA (optional)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Data unload</td>
                <td>
                    <ul>
                        <li>Ethernet</li>
                    </ul>
                </td>
            </tr>
            <tr class="category">
                <td colspan="2">Physical characteristics</td>
            </tr>
            <tr>
                <td>Power</td>
                <td>
                    <ul>
                        <li>48V DC over POE (power over ethernet)</li>
                        <li>8W power consumption</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Weight</td>
                <td>
                    <ul>
                        <li>380g/ ~0.8lbs</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Size</td>
                <td>
                    <ul>
                        <li>Width: 110mm/ ~1.7 in.</li>
                        <li>Height: 60mm / ~2.4 in.</li>
                        <li>Length: 138mm / ~5.4 in.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Protection</td>
                <td>
                    <ul>
                        <li>Dustproof</li>
                        <li>Thermal compensation</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>

@stop

@section('sidebar')

    @parent

@stop
