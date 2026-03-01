<?php

namespace jolanUK\FilamentPostcodes\Forms\Components;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Utilities\Set;
use jolanUK\FilamentPostcodes\Services\PostcodeService;
use Livewire\Component as Livewire;

class PostcodeField extends TextInput
{
    private string $qualityField = 'quality';

    private string $eastingsField = 'eastings';

    private string $northingsField = 'northings';

    private string $countryField = 'country';

    private string $nhsHAField = 'nhs_ha';

    private string $longitudeField = 'longitude';

    private string $latitudeField = 'latitude';

    private string $europeanElectoralRegionField = 'european_electoral_region';

    private string $primaryCareTrustField = 'primary_care_trust';

    private string $regionField = 'region';

    private string $lsoaField = 'lsoa';

    private string $msoaField = 'msoa';

    private string $incodeField = 'incode';

    private string $outcodeField = 'outcode';

    private string $parliamentaryConstituencyField = 'parliamentary_constituency';

    private string $parliamentaryConstituency2024Field = 'parliamentary_constituency_2024';

    private string $adminDistrictField = 'admin_district';

    private string $parishField = 'parish';

    private string $adminCountyField = 'admin_county';

    private string $dateOfIntroductionField = 'date_of_introduction';

    private string $adminWardField = 'admin_ward';

    private string $cedField = 'ced';

    private string $ccgField = 'ccg';

    private string $nutsField = 'nuts';

    private string $pfaField = 'pfa';

    private string $nhsRegionField = 'nhs_region';

    private string $ttwaField = 'ttwa';

    private string $nationalParkField = 'national_park';

    private string $buaField = 'bua';

    private string $icbField = 'icb';

    private string $cancerAllianceField = 'cancer_alliance';

    private string $lsoa11Field = 'lsoa11';

    private string $msoa11Field = 'msoa11';

    private string $lsoa21Field = 'lsoa21';

    private string $msoa21Field = 'msoa21';

    private string $oa21Field = 'oa21';

    private string $ruc11Field = 'ruc11';

    private string $ruc21Field = 'ruc21';

    private string $lep1Field = 'lep1';

    private string $lep2Field = 'lep2';

    public function getPostcode(Livewire $livewire, Component $component, Set $set): void
    {
        $postcodeResponse = PostcodeService::get($this->getState());

        if (! empty($postcodeResponse['quality'])) {
            $set($this->qualityField, $postcodeResponse['quality']);
        }

        if (! empty($postcodeResponse['eastings'])) {
            $set($this->eastingsField, $postcodeResponse['eastings']);
        }

        if (! empty($postcodeResponse['northings'])) {
            $set($this->northingsField, $postcodeResponse['northings']);
        }

        if (! empty($postcodeResponse['country'])) {
            $set($this->countryField, $postcodeResponse['country']);
        }

        if (! empty($postcodeResponse['nhs_ha'])) {
            $set($this->nhsHAField, $postcodeResponse['nhs_ha']);
        }

        if (! empty($postcodeResponse['longitude'])) {
            $set($this->longitudeField, $postcodeResponse['longitude']);
        }

        if (! empty($postcodeResponse['latitude'])) {
            $set($this->latitudeField, $postcodeResponse['latitude']);
        }

        if (! empty($postcodeResponse['european_electoral_region'])) {
            $set($this->europeanElectoralRegionField, $postcodeResponse['european_electoral_region']);
        }

        if (! empty($postcodeResponse['primary_care_trust'])) {
            $set($this->primaryCareTrustField, $postcodeResponse['primary_care_trust']);
        }

        if (! empty($postcodeResponse['region'])) {
            $set($this->regionField, $postcodeResponse['region']);
        }

        if (! empty($postcodeResponse['lsoa'])) {
            $set($this->lsoaField, $postcodeResponse['lsoa']);
        }

        if (! empty($postcodeResponse['msoa'])) {
            $set($this->msoaField, $postcodeResponse['msoa']);
        }

        if (! empty($postcodeResponse['incode'])) {
            $set($this->incodeField, $postcodeResponse['incode']);
        }

        if (! empty($postcodeResponse['outcode'])) {
            $set($this->outcodeField, $postcodeResponse['outcode']);
        }

        if (! empty($postcodeResponse['parliamentary_constituency'])) {
            $set($this->parliamentaryConstituencyField, $postcodeResponse['parliamentary_constituency']);
        }

        if (! empty($postcodeResponse['parliamentary_constituency_2024'])) {
            $set($this->parliamentaryConstituency2024Field, $postcodeResponse['parliamentary_constituency_2024']);
        }

        if (! empty($postcodeResponse['admin_district'])) {
            $set($this->adminDistrictField, $postcodeResponse['admin_district']);
        }

        if (! empty($postcodeResponse['parish'])) {
            $set($this->parishField, $postcodeResponse['parish']);
        }

        if (! empty($postcodeResponse['admin_county'])) {
            $set($this->adminCountyField, $postcodeResponse['admin_county']);
        }

        if (! empty($postcodeResponse['date_of_introduction'])) {
            $set($this->dateOfIntroductionField, $postcodeResponse['date_of_introduction']);
        }

        if (! empty($postcodeResponse['admin_ward'])) {
            $set($this->adminWardField, $postcodeResponse['admin_ward']);
        }

        if (! empty($postcodeResponse['ced'])) {
            $set($this->cedField, $postcodeResponse['ced']);
        }

        if (! empty($postcodeResponse['ccg'])) {
            $set($this->ccgField, $postcodeResponse['ccg']);
        }

        if (! empty($postcodeResponse['nuts'])) {
            $set($this->nutsField, $postcodeResponse['nuts']);
        }

        if (! empty($postcodeResponse['pfa'])) {
            $set($this->pfaField, $postcodeResponse['pfa']);
        }

        if (! empty($postcodeResponse['nhs_region'])) {
            $set($this->nhsRegionField, $postcodeResponse['nhs_region']);
        }

        if (! empty($postcodeResponse['ttwa'])) {
            $set($this->ttwaField, $postcodeResponse['ttwa']);
        }

        if (! empty($postcodeResponse['national_park'])) {
            $set($this->nationalParkField, $postcodeResponse['national_park']);
        }

        if (! empty($postcodeResponse['bua'])) {
            $set($this->buaField, $postcodeResponse['bua']);
        }

        if (! empty($postcodeResponse['icb'])) {
            $set($this->icbField, $postcodeResponse['icb']);
        }

        if (! empty($postcodeResponse['cancer_alliance'])) {
            $set($this->cancerAllianceField, $postcodeResponse['cancer_alliance']);
        }

        if (! empty($postcodeResponse['lsoa11'])) {
            $set($this->lsoa11Field, $postcodeResponse['lsoa11']);
        }

        if (! empty($postcodeResponse['msoa11'])) {
            $set($this->msoa11Field, $postcodeResponse['msoa11']);
        }

        if (! empty($postcodeResponse['lsoa21'])) {
            $set($this->lsoa21Field, $postcodeResponse['lsoa21']);
        }

        if (! empty($postcodeResponse['msoa21'])) {
            $set($this->msoa21Field, $postcodeResponse['msoa21']);
        }

        if (! empty($postcodeResponse['oa21'])) {
            $set($this->oa21Field, $postcodeResponse['oa21']);
        }

        if (! empty($postcodeResponse['ruc11'])) {
            $set($this->ruc11Field, $postcodeResponse['ruc11']);
        }

        if (! empty($postcodeResponse['ruc21'])) {
            $set($this->ruc21Field, $postcodeResponse['ruc21']);
        }

        if (! empty($postcodeResponse['lep1'])) {
            $set($this->lep1Field, $postcodeResponse['lep1']);
        }

        if (! empty($postcodeResponse['lep2'])) {
            $set($this->lep2Field, $postcodeResponse['lep2']);
        }
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->live();
        $this->minLength(6);
        $this->maxLength(8);
        $this->required();
        $this->rules(['required', 'min:6', 'max:8']);
        $this->afterStateUpdated(function (Livewire $livewire, Component $component, Set $set) {
            $livewire->validateOnly($component->getStatePath());
            $this->getPostcode($livewire, $component, $set);
        });
    }

    public function bindQualityField(string $qualityField): self
    {
        $this->qualityField = $qualityField;

        return $this;
    }

    public function bindEastingsField(string $eastingsField): self
    {
        $this->eastingsField = $eastingsField;

        return $this;
    }

    public function bindNorthingsField(string $northingsField): self
    {
        $this->northingsField = $northingsField;

        return $this;
    }

    public function bindCountryField(string $countryField): self
    {
        $this->countryField = $countryField;

        return $this;
    }

    public function bindNHSHAField(string $nhsHAField): self
    {
        $this->nhsHAField = $nhsHAField;

        return $this;
    }

    public function bindLongitudeField(string $longitudeField): self
    {
        $this->longitudeField = $longitudeField;

        return $this;
    }

    public function bindLatitudeField(string $latitudeField): self
    {
        $this->latitudeField = $latitudeField;

        return $this;
    }

    public function bindEuropeanElectoralRegionField(string $europeanElectoralRegionField): self
    {
        $this->europeanElectoralRegionField = $europeanElectoralRegionField;

        return $this;
    }

    public function bindPrimaryCareTrustField(string $primaryCareTrustField): self
    {
        $this->primaryCareTrustField = $primaryCareTrustField;

        return $this;
    }

    public function bindRegionField(string $regionField): self
    {
        $this->regionField = $regionField;

        return $this;
    }

    public function bindLSOAField(string $lsoaField): self
    {
        $this->lsoaField = $lsoaField;

        return $this;
    }

    public function bindMSOAField(string $msoaField): self
    {
        $this->msoaField = $msoaField;

        return $this;
    }

    public function bindIncodeField(string $incodeField): self
    {
        $this->incodeField = $incodeField;

        return $this;
    }

    public function bindOutcodeField(string $outcodeField): self
    {
        $this->outcodeField = $outcodeField;

        return $this;
    }

    public function bindParliamentaryConstituencyField(string $parliamentaryConstituencyField): self
    {
        $this->parliamentaryConstituencyField = $parliamentaryConstituencyField;

        return $this;
    }

    public function bindParliamentaryConstituency2024Field(string $parliamentaryConstituency2024Field): self
    {
        $this->parliamentaryConstituency2024Field = $parliamentaryConstituency2024Field;

        return $this;
    }

    public function bindAdminDistrictField(string $adminDistrictField): self
    {
        $this->adminDistrictField = $adminDistrictField;

        return $this;
    }

    public function bindParishField(string $parishField): self
    {
        $this->parishField = $parishField;

        return $this;
    }

    public function bindAdminCountyField(string $adminCountyField): self
    {
        $this->adminCountyField = $adminCountyField;

        return $this;
    }

    public function bindDateOfIntroductionField(string $dateOfIntroductionField): self
    {
        $this->dateOfIntroductionField = $dateOfIntroductionField;

        return $this;
    }

    public function bindAdminWardField(string $adminWardField): self
    {
        $this->adminWardField = $adminWardField;

        return $this;
    }

    public function bindCEDField(string $cedField): self
    {
        $this->cedField = $cedField;

        return $this;
    }

    public function bindCCGField(string $ccgField): self
    {
        $this->ccgField = $ccgField;

        return $this;
    }

    public function bindNUTSField(string $nutsField): self
    {
        $this->nutsField = $nutsField;

        return $this;
    }

    public function bindPFAField(string $pfaField): self
    {
        $this->pfaField = $pfaField;

        return $this;
    }

    public function bindNHSRegionField(string $nhsRegionField): self
    {
        $this->nhsRegionField = $nhsRegionField;

        return $this;
    }

    public function bindTTWAField(string $ttwaField): self
    {
        $this->ttwaField = $ttwaField;

        return $this;
    }

    public function bindNationalParkField(string $nationalParkField): self
    {
        $this->nationalParkField = $nationalParkField;

        return $this;
    }

    public function bindBUAField(string $buaField): self
    {
        $this->buaField = $buaField;

        return $this;
    }

    public function bindICBField(string $icbField): self
    {
        $this->icbField = $icbField;

        return $this;
    }

    public function bindCancerAllianceField(string $cancerAllianceField): self
    {
        $this->cancerAllianceField = $cancerAllianceField;

        return $this;
    }

    public function bindLSOA11Field(string $lsoa11Field): self
    {
        $this->lsoa11Field = $lsoa11Field;

        return $this;
    }

    public function bindMSOA11Field(string $msoa11Field): self
    {
        $this->msoa11Field = $msoa11Field;

        return $this;
    }

    public function bindLSOA21Field(string $lsoa21Field): self
    {
        $this->lsoa21Field = $lsoa21Field;

        return $this;
    }

    public function bindMSOA21Field(string $msoa21Field): self
    {
        $this->msoa21Field = $msoa21Field;

        return $this;
    }

    public function bindOA21Field(string $oa21Field): self
    {
        $this->oa21Field = $oa21Field;

        return $this;
    }

    public function bindRUC11Field(string $ruc11Field): self
    {
        $this->ruc11Field = $ruc11Field;

        return $this;
    }

    public function bindRUC21Field(string $ruc21Field): self
    {
        $this->ruc21Field = $ruc21Field;

        return $this;
    }

    public function bindLEP1Field(string $lep1Field): self
    {
        $this->lep1Field = $lep1Field;

        return $this;
    }

    public function bindLEP2Field(string $lep2Field): self
    {
        $this->lep2Field = $lep2Field;

        return $this;
    }
}
