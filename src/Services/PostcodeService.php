<?php

declare(strict_types=1);

namespace jolanUK\FilamentPostcodes\Services;

use Filament\Notifications\Notification;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

final class PostcodeService
{
    /**
     * @return array<string>
     */
    public static function get(string $postcode): array
    {
        $response = [];
        $postcode = trim($postcode);

        try {
            $response = Http::get('https://api.postcodes.io/postcodes/' . $postcode)->json();

            if (Arr::has($response, 'error')) {
                Notification::make()
                    ->warning()
                    ->title('Error')
                    ->body('You\'ve set an invalid postcode. Please try again.')
                    ->send();

                return [];
            }

            $response = Arr::only($response, ['result']);

            return self::formatResponseData($response);

        } catch (ConnectionException) {
            Notification::make()
                ->warning()
                ->title('Couldn\'t retrieve a postcode.')
                ->body('The API may be temporarily down. Please try again later.')
                ->send();
        }

        return $response;
    }

    /**
     * @param  array<string>  $responseData
     * @return array<string, mixed>
     */
    private static function formatResponseData(array $responseData): array
    {
        return [
            'quality' => Arr::get($responseData, 'result.quality'),
            'eastings' => Arr::get($responseData, 'result.eastings'),
            'northings' => Arr::get($responseData, 'result.northings'),
            'country' => Arr::get($responseData, 'result.country'),
            'nhs_ha' => Arr::get($responseData, 'result.nhs_ha'),
            'longitude' => Arr::get($responseData, 'result.longitude'),
            'latitude' => Arr::get($responseData, 'result.latitude'),
            'european_electoral_region' => Arr::get($responseData, 'result.european_electoral_region'),
            'primary_care_trust' => Arr::get($responseData, 'result.primary_care_trust'),
            'region' => Arr::get($responseData, 'result.region'),
            'lsoa' => Arr::get($responseData, 'result.lsoa'),
            'msoa' => Arr::get($responseData, 'result.msoa'),
            'incode' => Arr::get($responseData, 'result.incode'),
            'outcode' => Arr::get($responseData, 'result.outcode'),
            'parliamentary_constituency' => Arr::get($responseData, 'result.parliamentary_constituency'),
            'parliamentary_constituency_2024' => Arr::get($responseData, 'result.parliamentary_constituency_2024'),
            'admin_district' => Arr::get($responseData, 'result.admin_district'),
            'parish' => Arr::get($responseData, 'result.parish'),
            'admin_county' => Arr::get($responseData, 'result.admin_county'),
            'date_of_introduction' => Arr::get($responseData, 'result.date_of_introduction'),
            'admin_ward' => Arr::get($responseData, 'result.admin_ward'),
            'ced' => Arr::get($responseData, 'result.ced'),
            'ccg' => Arr::get($responseData, 'result.ccg'),
            'nuts' => Arr::get($responseData, 'result.nuts'),
            'pfa' => Arr::get($responseData, 'result.pfa'),
            'nhs_region' => Arr::get($responseData, 'result.nhs_region'),
            'ttwa' => Arr::get($responseData, 'result.ttwa'),
            'national_park' => Arr::get($responseData, 'result.national_park'),
            'bua' => Arr::get($responseData, 'result.bua'),
            'icb' => Arr::get($responseData, 'result.icb'),
            'cancer_alliance' => Arr::get($responseData, 'result.cancer_alliance'),
            'lsoa11' => Arr::get($responseData, 'result.lsoa11'),
            'msoa11' => Arr::get($responseData, 'result.msoa11'),
            'lsoa21' => Arr::get($responseData, 'result.lsoa21'),
            'msoa21' => Arr::get($responseData, 'result.msoa21'),
            'oa21' => Arr::get($responseData, 'result.oa21'),
            'ruc11' => Arr::get($responseData, 'result.ruc11'),
            'ruc21' => Arr::get($responseData, 'result.ruc21'),
            'lep1' => Arr::get($responseData, 'result.lep1'),
            'lep2' => Arr::get($responseData, 'result.lep2'),
        ];
    }
}
