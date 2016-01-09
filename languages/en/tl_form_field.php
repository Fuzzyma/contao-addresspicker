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


$GLOBALS['TL_LANG']['tl_form_field']['places_legend'] = 'Autocomplete';
$GLOBALS['TL_LANG']['tl_form_field']['input_legend']  = 'Autofill Inputs';
 
/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_form_field']['category']              = array('Resulttype', 'The listed results belong to the selected type');
$GLOBALS['TL_LANG']['tl_form_field']['bounds']                = array('Bounds', 'Rectangle which restrict the results. Format: lat,long;lat,long');
$GLOBALS['TL_LANG']['tl_form_field']['componentRestrictions'] = array('Country', 'Countrycode to limit the result to the specified country');
$GLOBALS['TL_LANG']['tl_form_field']['callback']              = array('Callback', 'JS functionname or function(a, id){ ... }');

$GLOBALS['TL_LANG']['tl_form_field']['use_route']                       = array('Autofill Streetname', 'Field must exist. Name: [name of this field]_route');
$GLOBALS['TL_LANG']['tl_form_field']['use_street_number']               = array('Autofill Streetnumber', 'Field must exist. Name: [name of this field]_street_number');
$GLOBALS['TL_LANG']['tl_form_field']['use_locality']                    = array('Autofill City', 'Field must exist. Name: [name of this field]_locality');
$GLOBALS['TL_LANG']['tl_form_field']['use_postal_code']                 = array('Autofill Postal Code', 'Field must exist. Name: [name of this field]_postal_code');
$GLOBALS['TL_LANG']['tl_form_field']['use_administrative_area_level_1'] = array('Autofill State', 'Field must exist. Name: [name of this field]_administrative_area_level_1');
$GLOBALS['TL_LANG']['tl_form_field']['use_country']                     = array('Autofill Country', 'Field must exist. Name: [name of this field]_country');

$GLOBALS['TL_LANG']['tl_form_field']['use_route_type']                       = array(' ');
$GLOBALS['TL_LANG']['tl_form_field']['use_street_number_type']               = array(' ');
$GLOBALS['TL_LANG']['tl_form_field']['use_locality_type']                    = array(' ');
$GLOBALS['TL_LANG']['tl_form_field']['use_postal_code_type']                 = array(' ');
$GLOBALS['TL_LANG']['tl_form_field']['use_administrative_area_level_1_type'] = array(' ');
$GLOBALS['TL_LANG']['tl_form_field']['use_country_type']                     = array(' ');

$GLOBALS['TL_LANG']['tl_form_field']['category_ref']['all']           = 'All Types';
$GLOBALS['TL_LANG']['tl_form_field']['category_ref']['geocode']       = 'GeoCode';
$GLOBALS['TL_LANG']['tl_form_field']['category_ref']['address']       = 'Adresses';
$GLOBALS['TL_LANG']['tl_form_field']['category_ref']['establishment'] = 'Business Results';
$GLOBALS['TL_LANG']['tl_form_field']['category_ref']['(regions)']     = 'Regions';
$GLOBALS['TL_LANG']['tl_form_field']['category_ref']['(cities)']      = 'Cities';

$GLOBALS['TL_LANG']['tl_form_field']['use_types']['long_name']  = 'Long Representation';
$GLOBALS['TL_LANG']['tl_form_field']['use_types']['short_name'] = 'Short Representation';