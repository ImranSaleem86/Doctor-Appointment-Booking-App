<?php

namespace App\Filament\Doctor\Resources\Appointments\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class AppointmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('patient.user.name')->label('Patient Name')->disabled(),
                DatePicker::make('appointment_date')->disabled(),
                TimePicker::make('appointment_time')->disabled(),
                Select::make('status')
                ->options([
                    'pending' => 'Pending',
                    'confirmed' => 'Confirmed',
                    'rejected' => 'Rejected',
                    'completed' => 'Completed',
                ])
                ->required(),
                Textarea::make('notes')->label('Doctor Notes'),
            ]);
    }
}
