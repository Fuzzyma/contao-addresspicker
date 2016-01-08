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
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'useLatLong';

$GLOBALS['TL_DCA']['tl_form_field']['palettes']['adresspicker'] = '
{type_legend},type,name,label;
{places_legend},placeholder,category,bounds,componentRestrictions,callback;
{input_legend:hide},useStreet,useCity,useState,useZip,useCountry,useLatLong';

$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['useStreet'] = 'useStreet_type,useStreet_hidden';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['useCity'] = 'useCity_type,useCity_hidden';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['useState'] = 'useState_type,useState_hidden';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['useZip'] = 'useZip_type,useZip_hidden';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['useCountry'] = 'useCountry_type,useCountry_hidden';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['useLatLong'] = 'useLatLong_type,useLatLong_hidden';

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
    'eval'      => array('helpwizard'=>true, 'category' => '(regions)', 'tl_class'=>'w50', 'callback' => 'function bla(a){console.log(a)}'),
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

$GLOBALS['TL_DCA']['tl_form_field']['fields']['useStreet'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['useStreet'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange' => true, 'tl_class'=>'clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['useStreet_type'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['useStreet_type'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array('long_name','short_name'),
    'eval'      => array('helpwizard'=>true, 'tl_class'=>'clr w50'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['useStreet_hidden'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['useStreet_hidden'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['useCity'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['useCity'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange' => true, 'tl_class'=>'clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['useCity_type'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['useCity_type'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array('long_name','short_name'),
    'eval'      => array('helpwizard'=>true, 'tl_class'=>'clr w50'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['useCity_hidden'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['useCity_hidden'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['useState'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['useState'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange' => true, 'tl_class'=>'clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['useState_type'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['useState_type'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array('long_name','short_name'),
    'eval'      => array('helpwizard'=>true, 'tl_class'=>'clr w50'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['useState_hidden'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['useState_hidden'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['useZip'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['useZip'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange' => true, 'tl_class'=>'clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['useZip_type'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['useZip_type'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array('long_name','short_name'),
    'eval'      => array('helpwizard'=>true, 'tl_class'=>'clr w50'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['useZip_hidden'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['useZip_hidden'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['useCountry'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['useCountry'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange' => true, 'tl_class'=>'clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['useCountry_type'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['useCountry_type'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array('long_name','short_name'),
    'eval'      => array('helpwizard'=>true, 'tl_class'=>'clr w50'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['useCountry_hidden'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['useCountry_hidden'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['useLatLong'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['useLatLong'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange' => true, 'tl_class'=>'clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['useLatLong_type'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['useLatLong_type'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array('long_name','short_name'),
    'eval'      => array('helpwizard'=>true, 'tl_class'=>'clr w50'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['useLatLong_hidden'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['useLatLong_hidden'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
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

