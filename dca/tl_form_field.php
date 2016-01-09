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


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'use_route';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'use_street_number';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'use_locality';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'use_postal_code';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'use_administrative_area_level_1';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'use_country';

$GLOBALS['TL_DCA']['tl_form_field']['palettes']['addresspicker'] = '
{type_legend},type,name,label;
{places_legend},placeholder,category,bounds,componentRestrictions, componentRestrictions_locality,callback;
{input_legend:hide},use_route,use_street_number,use_locality,use_postal_code,use_administrative_area_level_1,use_country,use_lat_long';

$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['use_route'] = 'use_route_type';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['use_street_number'] = 'use_street_number_type';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['use_locality'] = 'use_locality_type';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['use_postal_code'] = 'use_postal_code_type';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['use_administrative_area_level_1'] = 'use_administrative_area_level_1_type';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['use_country'] = 'use_country_type';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_form_field']['fields']['category'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['category'],
    'exclude'   => true,
    'inputType' => 'select',
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field']['category_ref'],
    'options'   => array('' => 'all', 'geocode','address','establishment', '(regions)', '(cities)'),
    'eval'      => array('tl_class'=>'w50'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['bounds'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['bounds'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => array('tl_class'=>'clr w50'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['componentRestrictions'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['componentRestrictions'],
    'exclude'   => true,
    'inputType' => 'addresspicker',
    'eval'      => array(
        'tl_class'=>'w50',
        // replaces the country with the country code
        'callback' => 'function(a, id){
            var place = a.getPlace()
            for (var i = 0; i < place.address_components.length; i++) {
              addressType = place.address_components[i].types[0];
              if (addressType == "country") {
                document.getElementById(id).value = place.address_components[i].short_name
              }
            }
        }'
    ),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['callback'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['callback'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => array('allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|js', 'tl_class' => 'clr'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_route'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['use_route'],
	'exclude'   => true,
	'inputType' => 'checkbox',
	'eval'      => array('submitOnChange' => true, 'tl_class'=>'clr'),
	'sql'       => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_route_type'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['use_route_type'],
    'exclude'   => true,
    'inputType' => 'select',
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field']['use_types'],
    'options'   => array('long_name','short_name'),
    'eval'      => array('tl_class'=>'clr'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_street_number'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['use_street_number'],
	'exclude'   => true,
	'inputType' => 'checkbox',
	'eval'      => array('submitOnChange' => true, 'tl_class'=>'clr'),
	'sql'       => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_street_number_type'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['use_street_number_type'],
    'exclude'   => true,
    'inputType' => 'select',
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field']['use_types'],
    'options'   => array('long_name','short_name'),
    'eval'      => array('tl_class'=>'clr'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_locality'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['use_locality'],
	'exclude'   => true,
	'inputType' => 'checkbox',
	'eval'      => array('submitOnChange' => true, 'tl_class'=>'clr'),
	'sql'       => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_locality_type'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['use_locality_type'],
    'exclude'   => true,
    'inputType' => 'select',
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field']['use_types'],
    'options'   => array('long_name','short_name'),
    'eval'      => array('tl_class'=>' clr'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_administrative_area_level_1'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['use_administrative_area_level_1'],
	'exclude'   => true,
	'inputType' => 'checkbox',
	'eval'      => array('submitOnChange' => true, 'tl_class'=>'clr'),
	'sql'       => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_administrative_area_level_1_type'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['use_administrative_area_level_1_type'],
    'exclude'   => true,
    'inputType' => 'select',
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field']['use_types'],
    'options'   => array('long_name','short_name'),
    'eval'      => array('tl_class'=>'clr'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_country'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['use_country'],
	'exclude'   => true,
	'inputType' => 'checkbox',
	'eval'      => array('submitOnChange' => true, 'tl_class'=>'clr'),
	'sql'       => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_country_type'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['use_country_type'],
    'exclude'   => true,
    'inputType' => 'select',
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field']['use_types'],
    'options'   => array('long_name','short_name'),
    'eval'      => array('tl_class'=>'clr'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_postal_code'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['use_postal_code'],
	'exclude'   => true,
	'inputType' => 'checkbox',
	'eval'      => array('submitOnChange' => true, 'tl_class'=>'clr'),
	'sql'       => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_postal_code_type'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['use_postal_code_type'],
    'exclude'   => true,
    'inputType' => 'select',
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field']['use_types'],
    'options'   => array('long_name','short_name'),
    'eval'      => array('tl_class'=>'clr'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_lat_long'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['use_lat_long'],
	'exclude'   => true,
	'inputType' => 'checkbox',
	'eval'      => array('tl_class'=>'clr'),
	'sql'       => "char(1) NOT NULL default ''"
);
