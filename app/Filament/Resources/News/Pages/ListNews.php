<?php

namespace App\Filament\Resources\News\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\News\NewsResource;

class ListNews extends ListRecords
{
    protected static string $resource = NewsResource::class;
    protected static ?string $title = 'Daftar Berita';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
            ->label('Buat Berita'),
        ];
    }
}
