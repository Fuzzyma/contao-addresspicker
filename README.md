# contao-bootstrap-datepicker
Contao Wrapper for google places autocomplete.

Comes with a widget for Backend and Frontend.

For Backend use specify `adresspicker` in the dca:

```php
$GLOBALS['TL_DCA']['tl_form_field']['fields']['componentRestrictions'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['componentRestrictions'],
    'exclude'   => true,
    'inputType' => 'adresspicker',
    'eval'      => array('helpwizard'=>true, 'category' => '(regions)', 'tl_class'=>'w50'}'),
    'sql'       => "varchar(255) NOT NULL default ''"
);
```

You can pass the following options to eval:

- category: one of `geocode, address, establishment, (regions), (cities)`
- componentRestrictions: a country code to restrict the picker to that country
- bounds: latitude and longitude for a rectange the picker is restricted to: 1.223,12.421;4.23,1.213
- callback: javascipt function name or function declaration which is called when a place was selected (`somefunc` or `function(picker){ console.log(picker.getPlace()) }`