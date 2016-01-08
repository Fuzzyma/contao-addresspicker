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
 * Config
 */
//$GLOBALS['TL_DCA']['tl_form_field']['config']['onload_callback'][] = array('tl_form_field_datepicker', 'adjustFields');


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'useStreet';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'useCity';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'useState';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'useZip';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'useCountry';

$GLOBALS['TL_DCA']['tl_form_field']['palettes']['adresspicker'] = '
{type_legend},type,name,label;
{places_legend},placeholder,category,bounds,componentRestrictions, componentRestrictions_locality,callback;
{input_legend:hide},useStreet,useCity,useState,useZip,useCountry,useLatLong';

$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['useStreet'] = 'useStreet_type';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['useCity'] = 'useCity_type';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['useState'] = 'useState_type';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['useZip'] = 'useZip_type';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['useCountry'] = 'useCountry_type';

$GLOBALS['TL_DCA']['tl_form_field']['fields']['category'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['category'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array('geocode','address','establishment', '(regions)', '(cities)'),
    'eval'      => array('helpwizard'=>true, 'tl_class'=>'w50'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['bounds'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['bounds'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => array('helpwizard'=>true, 'tl_class'=>'clr w50'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['componentRestrictions'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['componentRestrictions'],
    'exclude'   => true,
    'inputType' => 'adresspicker',
    'eval'      => array('helpwizard'=>true),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['callback'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['componentRestrictions'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => array('helpwizard'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|js', 'tl_class' => 'clr'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_route'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['useRoute'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange' => true, 'tl_class'=>'clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_route_type'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['useRoute_type'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array('long_name','short_name'),
    'eval'      => array('helpwizard'=>true, 'tl_class'=>'clr w50'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_street_number'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['useStreet_number'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange' => true, 'tl_class'=>'clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_street_number_type'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['useStreet_number_type'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array('long_name','short_name'),
    'eval'      => array('helpwizard'=>true, 'tl_class'=>'clr w50'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_locality'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['use_locality'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange' => true, 'tl_class'=>'clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_locality_type'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['use_locality_type'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array('long_name','short_name'),
    'eval'      => array('helpwizard'=>true, 'tl_class'=>' clr w50'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_administrative_area_level_1'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['use_administrative_area_level_1'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange' => true, 'tl_class'=>'clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_administrative_area_level_1_type'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['use_administrative_area_level_1_type'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array('long_name','short_name'),
    'eval'      => array('helpwizard'=>true, 'tl_class'=>'clr w50'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_country'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['use_country'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange' => true, 'tl_class'=>'clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_country_type'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['use_country_type'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array('long_name','short_name'),
    'eval'      => array('helpwizard'=>true, 'tl_class'=>'clr w50'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_postal_code'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['use_postal_code'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange' => true, 'tl_class'=>'clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_postal_code_type'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['use_postal_code_type'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array('long_name','short_name'),
    'eval'      => array('helpwizard'=>true, 'tl_class'=>'clr w50'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['use_lat_long'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['use_lat_long'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange' => true, 'tl_class'=>'clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

/*
class tl_form_field_datepicker extends Backend
{

	public function adjustFields($dc)
	{
		if ($this->Input->get('act') == 'edit')
		{
			$objField = $this->Database->execute("SELECT * FROM tl_form_field WHERE id=".$dc->id);

			if ($objField->type == 'datepicker')
			{
				$GLOBALS['TL_DCA']['tl_form_field']['fields']['mandatory']['eval']['tl_class'] = 'w50 m12';
				$GLOBALS['TL_DCA']['tl_form_field']['fields']['value']['eval']['tl_class'] = 'w50';
			}
		}
	}
}*/

