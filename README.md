# contao-adresspicker
Contao Wrapper for google places autocomplete.

Comes with a widget for Backend and Frontend.

For Backend use specify `adresspicker` in the dca:

```php
$GLOBALS['TL_DCA']['tl_form_field']['fields']['componentRestrictions'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['componentRestrictions'],
    'exclude'   => true,
    'inputType' => 'adresspicker',
    'eval'      => array('category' => '(regions)', 'tl_class'=>'w50'}'),
    'sql'       => "varchar(255) NOT NULL default ''"
);
```

You can pass the following options to eval:

- category: one of `geocode, address, establishment, (regions), (cities)`
- componentRestrictions: a country code to restrict the picker to that country
- bounds: latitude and longitude for a rectangel the picker is restricted to: 1.223,12.421;4.23,1.213
- callback: javascipt function name or function declaration which is called when a place was selected (`somefunc` or `function(picker){ console.log(picker.getPlace()) }`
- fields you want to get filled, when a place is selected. Available fields are:
    - use_route
    - use_street_number
    - use_locality
    - use_administrative_area_level_1
    - use_country
    - use_postal_code
- a type to every use-field to specify `long_name` or `short_name`
    - use_route_type
    - use_street_number_type
    - use_locality_type
    - use_administrative_area_level_1_type
    - use_country_type
    - use_postal_code_type

Make sure you have corresponding fields in your dca.
The fieldname has to be `[name of the adresspicker]_[name of the field without use]`.
e.g. `componentRestrictions_locality`

```php
$GLOBALS['TL_DCA']['tl_form_field']['fields']['componentRestrictions'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['componentRestrictions'],
    'exclude'   => true,
    'inputType' => 'adresspicker',
    'eval'      => array(
        'callback'          => 'function(a){console.log(a.getPlace())}',
        'category'          => '(regions)',
        'tl_class'          => 'w50',
        'use_locality'      => true,
        'use_locality_type' => 'long_name'
    ),
    'sql'                   => "varchar(255) NOT NULL default ''"
);

// this field is filled automatically when a place is selected
$GLOBALS['TL_DCA']['tl_form_field']['fields']['componentRestrictions_locality`'] = array(
    inputType => 'text'
)
```