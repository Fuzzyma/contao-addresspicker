<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Calendarfield
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'FormAddresspickerField' => 'system/modules/addresspicker/FormAddresspickerField.php',
	'AddresspickerField' => 'system/modules/addresspicker/AddresspickerField.php',
));

TemplateLoader::addFiles(array
(
    'form_addresspicker' => 'system/modules/addresspicker/templates'
));