<?php

namespace App\Filament\Resources\Agendas\Pages;

use App\Filament\Resources\Agendas\AgendaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAgendas extends ListRecords
{
    protected static string $resource = AgendaResource::class;
    protected static ?string $title = 'Daftar Agenda';
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
            ->label('Buat Agenda'),
        ];
    }
}
