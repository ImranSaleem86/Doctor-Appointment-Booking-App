<?php

namespace App\Filament\Admin\Resources\Appointments\Schemas;

use Filament\Forms\Components\DatePicker;
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
                Select::make('doctor_id')
                    ->relationship('doctor.user', 'name')
                    ->label('Doctor')
                    ->required(),
                Select::make('patient_id')
                    ->relationship('patient.user', 'name')
                    ->label('Patient')
                    ->required(),
                DatePicker::make('appointment_date')->required(),
                TimePicker::make('appointment_time')->required(),
                Select::make('status')
                    ->options([
                    'pending' => 'Pending',
                    'confirmed' => 'Confirmed',
                    'rejected' => 'Rejected',
                    'completed' => 'Completed',
                ]),
                Textarea::make('notes'),
            ]);
    }
}
