<?php

namespace App\Filament\Resources\Announcments;

use BackedEnum;
use Filament\Tables\Table;
use App\Models\Announcment;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\Support\Htmlable;
use App\Filament\Resources\Announcments\Pages\EditAnnouncment;
use App\Filament\Resources\Announcments\Pages\ListAnnouncments;
use App\Filament\Resources\Announcments\Pages\CreateAnnouncment;
use App\Filament\Resources\Announcments\Schemas\AnnouncmentForm;
use App\Filament\Resources\Announcments\Tables\AnnouncmentsTable;

class AnnouncmentResource extends Resource
{
    protected static ?string $model = Announcment::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChatBubbleLeftEllipsis;

    protected static ?string $navigationLabel = 'Pengumuman';

    protected static ?int $navigationSort = 3;

    public function getTitle(): string | Htmlable
    {
        return __('Custom Page Title');
    }

    public static function configure(): void
    {
        TextInput::configureUsing(function (TextInput $component): void {
            $component->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/');
        });
    }

    public static function form(Schema $schema): Schema
    {
        return AnnouncmentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AnnouncmentsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAnnouncments::route('/'),
            'create' => CreateAnnouncment::route('/create'),
            'edit' => EditAnnouncment::route('/{record}/edit'),
        ];
    }
}
