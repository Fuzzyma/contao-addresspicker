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
class AddresspickerField extends \TextField
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'be_widget';
    public $options = array();
    public $useFields = array();

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
            case 'use_route_type':
            case 'use_street_number_type':
            case 'use_locality_type':
            case 'use_administrative_area_level_1_type':
            case 'use_country_type':
			case 'use_postal_code_type':
			case 'use_lat_long':
                $this->options[$strKey] = $varValue;
                break;
			case 'use_route':
			case 'use_street_number':
			case 'use_locality':
			case 'use_administrative_area_level_1':
			case 'use_country':
            case 'use_postal_code':
                $this->useFields[substr($strKey, 4)] = $varValue;
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
        if (isset($GLOBALS['TL_HOOKS']['addresspickerField']) && is_array($GLOBALS['TL_HOOKS']['addresspickerField'])) {
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
                %s%s%s
              }

              var a = new google.maps.places.Autocomplete(document.getElementById("ctrl_%s"), options)
              a.addListener("place_changed", function(){
                %s
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
            isset($this->options['callback']) ? '('.$this->options['callback'].')(a)' : '',
            $this->getCodeToFillAdressInUsedInputs()

        );

    }

    private function getCodeToFillAdressInUsedInputs(){

        // if nothing is needed return
        if(empty($this->useFields) && !isset($this->options['use_lat_long']))return '';
    
        foreach($this->useFields as $key => &$value){
            $value = $this->options['use_'.$key.'_type'];
        }

        $str = empty($this->useFields) ? '' : '
                for (var i = 0; i < place.address_components.length; i++) {
                  addressType = place.address_components[i].types[0];
                  if (componentForm[addressType]) {
                    document.getElementById("ctrl_'.$this->strId.'_" + addressType).value = place.address_components[i][componentForm[addressType]]
                  }
                }';

        return sprintf('
                var place = a.getPlace(), addressType, componentForm = %s
                %s
                %s',
                json_encode($this->useFields),
                $str,
                isset($this->options['use_lat_long']) ? '
                    document.getElementById("ctrl_'.$this->strId.'_lat").value = place.geometry.location.lat()
                    document.getElementById("ctrl_'.$this->strId.'_long").value = place.geometry.location.long()' : ''
        );



    }

}