<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Andreas Schempp 2009-2012
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


$GLOBALS['TL_LANG']['tl_form_field']['places_legend'] = 'Autovervollständigung';
$GLOBALS['TL_LANG']['tl_form_field']['input_legend']  = 'Inputfelder automatisch ausfüllen';
 
/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_form_field']['category']              = array('Ergebnisstyp', 'Die angezeigetn Ergebnisse ergeben sich aus dem Typ');
$GLOBALS['TL_LANG']['tl_form_field']['bounds']                = array('Grenzen', 'Rechteck, indem die Ergebnisse liegen. Format: lat,long;lat,long');
$GLOBALS['TL_LANG']['tl_form_field']['componentRestrictions'] = array('Land', 'Ländercode um das Ergebniss auf ein Land einzugrenzen');
$GLOBALS['TL_LANG']['tl_form_field']['callback']              = array('Callback', 'JS Funktionsname oder function(a, id){ ... }');

$GLOBALS['TL_LANG']['tl_form_field']['use_route']                       = array('Straßennamen eintragen', 'Das Feld muss existieren. Name: [name dieses feldes]_route');
$GLOBALS['TL_LANG']['tl_form_field']['use_street_number']               = array('Hausnummer eintragen', 'Das Feld muss existieren. Name: [name dieses feldes]_street_number');
$GLOBALS['TL_LANG']['tl_form_field']['use_locality']                    = array('Stadt eintragen', 'Das Feld muss existieren. Name: [name dieses feldes]_locality');
$GLOBALS['TL_LANG']['tl_form_field']['use_postal_code']                 = array('PLZ eintragen', 'Das Feld muss existieren. Name: [name dieses feldes]_postal_code');
$GLOBALS['TL_LANG']['tl_form_field']['use_administrative_area_level_1'] = array('Bundesland eintragen', 'Das Feld muss existieren. Name: [name dieses feldes]_administrative_area_level_1');
$GLOBALS['TL_LANG']['tl_form_field']['use_country']                     = array('Land eintragen', 'Das Feld muss existieren. Name: [name dieses feldes]_country');

$GLOBALS['TL_LANG']['tl_form_field']['use_route_type']                       = array(' ');
$GLOBALS['TL_LANG']['tl_form_field']['use_street_number_type']               = array(' ');
$GLOBALS['TL_LANG']['tl_form_field']['use_locality_type']                    = array(' ');
$GLOBALS['TL_LANG']['tl_form_field']['use_postal_code_type']                 = array(' ');
$GLOBALS['TL_LANG']['tl_form_field']['use_administrative_area_level_1_type'] = array(' ');
$GLOBALS['TL_LANG']['tl_form_field']['use_country_type']                     = array(' ');

$GLOBALS['TL_LANG']['tl_form_field']['category_ref']['all']           = 'Alle Typen';
$GLOBALS['TL_LANG']['tl_form_field']['category_ref']['geocode']       = 'GeoCode';
$GLOBALS['TL_LANG']['tl_form_field']['category_ref']['address']       = 'Adressen';
$GLOBALS['TL_LANG']['tl_form_field']['category_ref']['establishment'] = 'Geschäftliche Einrichtungen';
$GLOBALS['TL_LANG']['tl_form_field']['category_ref']['(regions)']     = 'Regionen';
$GLOBALS['TL_LANG']['tl_form_field']['category_ref']['(cities)']      = 'Städte';

$GLOBALS['TL_LANG']['tl_form_field']['use_types']['long_name']  = 'Lange Repräsentation';
$GLOBALS['TL_LANG']['tl_form_field']['use_types']['short_name'] = 'Kurze Repräsentation';