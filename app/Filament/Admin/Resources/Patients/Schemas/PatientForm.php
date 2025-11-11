<?php

namespace App\Filament\Admin\Resources\Patients\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PatientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user.name')->disabled(),
                TextInput::make('phone'),
                TextInput::make('age'),
                TextInput::make('gender'),
                Textarea::make('address'),
            ]);
    }
}
