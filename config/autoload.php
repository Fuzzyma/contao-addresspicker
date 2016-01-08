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
	'FormAdresspickerField' => 'system/modules/adresspicker/FormAdresspickerField.php',
	'AdresspickerField' => 'system/modules/adresspicker/AdresspickerField.php',
));

TemplateLoader::addFiles(array
(
    'form_adresspicker' => 'system/modules/adresspicker/templates'
));