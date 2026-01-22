<?php

namespace App\Filament\Resources\Announcments\Pages;

use App\Filament\Resources\Announcments\AnnouncmentResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAnnouncment extends EditRecord
{
    protected static string $resource = AnnouncmentResource::class;
    protected static ?string $title = 'Edit Pengumuman';

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
