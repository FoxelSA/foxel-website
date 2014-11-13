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

// @see:
// Easy i18n with language prefix and language-related route in Laravel 4
// Marvin Roger - https://coderwall.com/p/czumyq


// locale
$locale = NULL;
$fallback = Config::get('app.fallback_locale');
$segment = Request::segment(1);

// available locales
$locales = Config::get('app.available_locales');
$data = array('current'=>$locales[$fallback],'others'=>$locales);
unset($data['others'][$fallback]);

// language exists
if (in_array($segment,array_keys($locales))) {

    // application locale
    $locale = $segment;
    App::setLocale($locale);

    // available locales
    $data = array('current'=>$locales[$locale],'others'=>$locales);
    unset($data['others'][$locale]);

}

// share
View::share('locale',$data);

// prefixed routes
Route::group(array('prefix'=>$locale),function()
{

    Route::get(Lang::get('routes.home.uri'), array('as'=>'home',function() {
        return View::make('home');
    }));

    Route::get(Lang::get('routes.company.uri'), array('as'=>'company',function() {
        return View::make('company');
    }));

        Route::get(Lang::get('routes.company.sub.team.uri'), array('as'=>'team',function() {
            return View::make('team');
        }));

        Route::get(Lang::get('routes.company.sub.dynamic.uri'), array('as'=>'dynamic',function() {
            return View::make('dynamic');
        }));

    Route::get(Lang::get('routes.services.uri'), array('as'=>'services',function() {
        return View::make('services');
    }));

    Route::get(Lang::get('routes.technology.uri'), array('as'=>'technology',function() {
        return View::make('technology');
    }));

        Route::get(Lang::get('routes.technology.sub.demo.uri'), array('as'=>'demo',function() {
            return View::make('demo');
        }));

        Route::get(Lang::get('routes.technology.sub.license.uri'), array('as'=>'license',function() {
            return View::make('license');
        }));

    Route::get(Lang::get('routes.investors.uri'), array('as'=>'investors',function() {
        return View::make('investors');
    }));

    Route::get(Lang::get('routes.contact.uri'), array('as'=>'contact',function() {
        return View::make('contact');
    }));

    Route::get(Lang::get('routes.disclaimer.uri'), array('as'=>'disclaimer',function() {
        return View::make('disclaimer');
    }));

    Route::get(Lang::get('routes.rmll2014.uri'), array('as'=>'rmll2014',function() {
        return View::make('news.rmll.2014.info');
    }));

});

// sendmail
Route::post('sendmail',array('as'=>'sendmail','uses'=>'SendmailController@send'));
