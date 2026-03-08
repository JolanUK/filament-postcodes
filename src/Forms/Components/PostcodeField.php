<?php

namespace jolanUK\FilamentPostcodes\Forms\Components;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Utilities\Set;
use JolanUK\FilamentPostcodes\Traits\PostcodeTraits;
use Livewire\Component as Livewire;

class PostcodeField extends TextInput
{
    use PostcodeTraits;

    protected function setUp(): void
    {
        parent::setUp();

        $this->live();
        $this->minLength(6);
        $this->maxLength(8);
        $this->required();
        $this->rules(['required', 'min:6', 'max:8']);

        $this->afterStateUpdated(function (Livewire $livewire, Component $component, Set $set, ?string $state, ?string $old) {
            $livewire->validateOnly($component->getStatePath());
            $postcodeLookup = $this->getPostcode($state);
            $this->castPostcodeFields($postcodeLookup, $set);
        });
    }
}
