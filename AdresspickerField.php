<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Provide methods to handle adresspicker fields.
 */
class AdresspickerField extends \TextField
{
    protected $options = array();

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'be_widget';


	/**
	 * @param array $arrAttributes
	 */
	public function __construct($arrAttributes=null)
	{
		parent::__construct($arrAttributes);

        array_unshift($GLOBALS['TL_JAVASCRIPT'],'https://maps.googleapis.com/maps/api/js?key=AIzaSyCTzc9PNH252fKi7Qdyg63wymXK2OXr4V4&libraries=places');
	}


	/**
	 * Add specific attributes
	 *
	 * @param string $strKey
	 * @param mixed  $varValue
	 */
	public function __set($strKey, $varValue)
	{
		switch ($strKey)
		{
			case 'category':
			case 'bounds':
			case 'componentRestrictions':
			case 'callback':
			case 'useStreet':
			case 'useStreet_type':
			case 'useStreet_hidden':
			case 'useCity':
			case 'useCity_type':
			case 'useCity_hidden':
			case 'useState':
			case 'useState_type':
			case 'useState_hidden':
			case 'useZip':
			case 'useZip_type':
			case 'useZip_hidden':
			case 'useCountry':
			case 'useCountry_type':
			case 'useCountry_hidden':
			case 'useLatLong':
			case 'useLatLong_type':
			case 'useLatLong_hidden':
                $this->options[$strKey] = $varValue;
                break;
			default:
				parent::__set($strKey, $varValue);
				break;
		}
	}

	/**
	 * Generate the widget and return it as string
	 *
	 * @return string
	 */
	public function generate()
	{

        // callback can change all options
        if (isset($GLOBALS['TL_HOOKS']['adresspickerField']) && is_array($GLOBALS['TL_HOOKS']['adresspickerField'])) {
            foreach ($GLOBALS['TL_HOOKS']['formDatepickerField'] as $callback) {
                $objCallback = (method_exists($callback[0], 'getInstance') ? call_user_func(array($callback[0], 'getInstance')) : new $callback[0]());
                $arrConfig = $objCallback->$callback[1]($this);
            }
        }

        return sprintf('<input type="text" name="%s" id="ctrl_%s" class="tl_text%s"%s onfocus="Backend.getScrollOffset()">%s%s',
                        $this->strName,
                        $this->strId,
                        (($this->strClass != '') ? ' ' . $this->strClass : ''),
                        $this->getAttributes(),
                        $this->wizard,
                        $this->getScriptTag());

	}


    public function getScriptTag(){

        // shortcut for props
        $b = null;
        if($this->options['bounds']){
            $latLong = explode(';',$this->options['bounds']);
            $b = [explode(';',trim($latLong[0])), explode(';',trim($latLong[1]))];
        }

        $c = $this->options['category'];
        $r = $this->options['componentRestrictions'];

        return sprintf(
            // script code
            '<script>
            (function(){
              if(!google)return

              var options = {
                %s
                %s
                %s
              }

              var a = new google.maps.places.Autocomplete(document.getElementById("ctrl_%s"), options)
              a.addListener("place_changed", function(){
                %s
              })
            })()
            </script>',

            // replacements
            isset($c) ? 'types: ["'.$c.'"],' : '',
            isset($r) ? 'componentRestrictions: {country: "'.$r.'"},' : '',
            isset($b) ? '
                bounds: new google.maps.LatLngBounds(
                  new google.maps.LatLng(' . $b[0][0] . ',' . $b[0][1] . '),
                  new google.maps.LatLng(' . $b[1][0] . ',' . $b[1][1] . ')
                )' : '',
            $this->strId,
            isset($this->options['callback']) ? '('.$this->options['callback'].')(a)' : ''

        );

    }
}