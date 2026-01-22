<?php

namespace App\Filament\Resources\Announcments\Pages;

use App\Filament\Resources\Announcments\AnnouncmentResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAnnouncment extends CreateRecord
{
    protected static ?string $title = 'Buat Pengumuman';
    protected static string $resource = AnnouncmentResource::class;
}
