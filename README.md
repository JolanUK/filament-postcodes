# filament-postcodes

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jolanuk/filament-postcodes.svg?style=flat-square)](https://packagist.org/packages/jolanuk/filament-postcodes)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jolanuk/filament-postcodes/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/jolanuk/filament-postcodes/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jolanuk/filament-postcodes/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/jolanuk/filament-postcodes/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jolanuk/filament-postcodes.svg?style=flat-square)](https://packagist.org/packages/jolanuk/filament-postcodes)

A valid UK postcode generator for FilamentPHP, structurally inspired by the Brazilian equivalent developed by [Otávio Araújo](https://github.com/otavio-araujo/filament-smart-cep). This version uses the API found at [postcodes.io](https://postcodes.io).

## Installation

You can install the package via composer:

```bash
composer require jolanuk/filament-postcodes
```

## Usage

Similar to SmartCEP, Filament Postcodes also implements field bindings.

```php
use jolanUK\FilamentPostcodes\Forms\Components\PostcodeField;

PostcodeField::make('postcode')
    ->bindQualityField('quality')
    ->bindEastingsField('eastings')
    ->bindNorthingsField('northings')
    ->bindCountryField('country')
    ->bindNHSHAField('nhs_ha')
    ->bindLongitudeField('longitude')
    ->bindLatitudeField('latitude')
    ->bindEuropeanElectoralRegionField('european_electoral_region')
    ->bindPrimaryCareTrustField('primary_care_trust')
    ->bindRegionField('region')
    ->bindLSOAField('lsoa')
    ->bindMSOAField('msoa')
    ->bindIncodeField('incode')
    ->bindOutcodeField('outcode')
    ->bindParliamentaryConstituencyField('parliamentary_constituency')
    ->bindParliamentaryConstituency2024Field('parliamentary_constituency_2024')
    ->bindAdminDistrictField('admin_district')
    ->bindParishField('parish')
    ->bindAdminCountyField('admin_county')
    ->bindDateOfIntroductionField('date_of_introduction')
    ->bindAdminWardField('admin_ward')
    ->bindCEDField('ced')
    ->bindCCGField('ccg')
    ->bindNUTSField('nuts')
    ->bindPFAField('pfa')
    ->bindNHSRegionField('nhs_region')
    ->bindTTWAField('ttwa')
    ->bindNationalParkField('national_park')
    ->bindBUAField('bua')
    ->bindICBField('icb')
    ->bindCancerAllianceField('cancer_alliance')
    ->bindLSOA11Field('lsoa11')
    ->bindMSOA11Field('msoa11')
    ->bindLSOA21Field('lsoa21')
    ->bindMSOA21Field('msoa21')
    ->bindOA21Field('oa21')
    ->bindRUC11Field('ruc11')
    ->bindRUC21Field('ruc21')
    ->bindLEP1Field('lep1')
    ->bindLEP2Field('lep2'),
```

This will bind to a field in the same schema, with the matching machine name.

```php
TextInput::make('quality'),
TextInput::make('eastings'),
TextInput::make('northings'),
TextInput::make('country'),
TextInput::make('nhs_ha'),
TextInput::make('longitude'),
TextInput::make('latitude'),
TextInput::make('european_electoral_region'),
TextInput::make('primary_care_trust'),
TextInput::make('region'),
TextInput::make('lsoa'),
TextInput::make('msoa'),
TextInput::make('incode'),
TextInput::make('outcode'),
TextInput::make('parliamentary_constituency'),
TextInput::make('parliamentary_constituency_2024'),
TextInput::make('admin_district'),
TextInput::make('parish'),
TextInput::make('admin_county'),
TextInput::make('date_of_introduction'),
TextInput::make('admin_ward'),
TextInput::make('ced'),
TextInput::make('ccg'),
TextInput::make('nuts'),
TextInput::make('pfa'),
TextInput::make('nhs_region'),
TextInput::make('ttwa'),
TextInput::make('national_park'),
TextInput::make('bua'),
TextInput::make('icb'),
TextInput::make('cancer_alliance'),
TextInput::make('lsoa11'),
TextInput::make('msoa11'),
TextInput::make('lsoa21'),
TextInput::make('msoa21'),
TextInput::make('oa21'),
TextInput::make('ruc11'),
TextInput::make('ruc21'),
TextInput::make('lep1'),
TextInput::make('lep2'),
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please [email me directly](mailto:development@jolan.uk) to report security vulnerabilities.

## Credits

- [Kris Young](https://github.com/jolanUK)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.