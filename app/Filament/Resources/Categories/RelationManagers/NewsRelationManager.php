<?php

namespace App\Filament\Resources\Categories\RelationManagers;


use App\Filament\Resources\Categories\CategoryResource;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Utilities\Set;
use phpDocumentor\Reflection\Types\Boolean;

class NewsRelationManager extends RelationManager
{
    protected static string $relationship = 'news';

    protected static ?string $relatedResource = 'App\Filament\Resources\News\NewsResource';

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul Berita')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('category.name')
                    ->label('Kategori'),
                // IconColumn::make('is_published')
                //     ->label('Status Publikasi')
                //     ->boolean(),
                TextColumn::make('is_published')
                    ->label('Status Publikasi')
                    ->formatStateUsing(fn(bool $state): string => $state ? __('Terpublikasi') : __('Tidak Terpublikasi')) // Format berdasarkan boolean
                    ->badge()  // Menampilkan sebagai badge
                    ->color(fn(bool $state): string => $state ? 'success' : 'danger'),
                TextColumn::make('published_at')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
