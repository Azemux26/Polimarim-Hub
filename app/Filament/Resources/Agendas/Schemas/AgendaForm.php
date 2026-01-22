<?php

namespace App\Filament\Resources\Agendas\Schemas;

use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Components\Utilities\Set;

class AgendaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul Agenda')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) =>
                        $set('slug', Str::slug($state)))
                    ->maxLength(255)
                    ->required(),
                TextInput::make('slug')
                    ->unique(ignoreRecord: true)
                    ->readOnly()
                    ->required(),
                Textarea::make('description')
                    ->label('Deskripsi Agenda')
                    ->columnSpanFull(),
                TextInput::make('author')
                    ->label('Author')
                    ->required(),
                DatePicker::make('start_date')
                    ->label('Tanggal Mulai')
                    ->required(),
                DatePicker::make('end_date')
                    ->label('Tanggal Selesai')
                    ->required(),
                TimePicker::make('start_time')
                    ->label('Jam Mulai')
                    ->required(),
                TimePicker::make('end_time')
                    ->label('Jam Selesai')
                    ->required(),
                TextInput::make('location')
                    ->label('Lokasi')
                    ->required(),
                TextInput::make('contact_person')
                    ->prefix('+62')
                    // ->step(15)
                    // ->inputMode('string')
                    ->label('Kontak')
                    // ->required()
                    ->tel(),
                TextInput::make('media')
                    ->label('Media'),   
                    // ->required(),
                TextInput::make('theme')
                    ->label('Tema Agenda')
                    ->required(),
            ]);
    }
}
