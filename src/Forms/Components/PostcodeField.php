<?php

namespace jolanUK\FilamentPostcodes\Forms\Components;

use Filament\Forms\Components\Field;
use Filament\Support\Components\Attributes\ExposedLivewireMethod;
use Illuminate\Support\Facades\Http;

class PostcodeField extends Field
{
    public string $postcode = '';

    protected string $view = 'filament-postcodes::postcode-field';

    #[ExposedLivewireMethod]
    public function postcodeLookup($postcode)
    {
        if (empty($postcode)) {
            return null;
        }

        $postcode = trim($postcode);

        $response = Http::get('https://api.postcodes.io/postcodes/' . $postcode);

        return $response->json();
    }
}