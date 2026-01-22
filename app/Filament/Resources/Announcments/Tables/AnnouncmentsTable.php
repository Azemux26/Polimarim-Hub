<?php

namespace App\Filament\Resources\Announcments\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AnnouncmentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
        ->emptyStateHeading('Belum Ada Pengumuman')
            ->columns([
                 TextColumn::make('title')
                    ->label('Judul Pengumuman')
                    ->searchable(),
                TextColumn::make('slug')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('description')
                    ->label('Deskripsi Agenda')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('author')
                    ->label('Author')
                    ->searchable(),
                TextColumn::make('start_date')
                    ->label('Tanggal Mulai')
                    ->date('d M Y')
                    ->sortable(),
                TextColumn::make('end_date')
                    ->label('Tanggal Selesai')
                    ->date('d M Y')
                    ->sortable(),
                TextColumn::make('start_time')
                    ->label('Jam Mulai')
                    ->time()
                    ->sortable(),
                TextColumn::make('end_time')
                    ->label('Jam Selesai')
                    ->time()
                    ->sortable(),
                TextColumn::make('location')
                    ->label('Lokasi')
                    ->searchable(),
                TextColumn::make('contact_person')
                    ->label('Kontak')
                    ->searchable(),
                TextColumn::make('media')
                    ->label('Media')
                    ->searchable(),
                TextColumn::make('theme')
                    ->label('Tema Agenda')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
