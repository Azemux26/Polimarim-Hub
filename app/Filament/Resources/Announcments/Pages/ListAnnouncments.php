<?php

namespace App\Filament\Resources\Announcments\Pages;

use App\Filament\Resources\Announcments\AnnouncmentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAnnouncments extends ListRecords
{
    protected static string $resource = AnnouncmentResource::class;
    protected static ?string $title = 'Daftar Pengumuman';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Buat Pengumuman'),
        ];
    }
}
