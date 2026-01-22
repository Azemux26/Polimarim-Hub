<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Schemas\Components\Utilities\Set;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;



class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->label('Kategori')
                    ->required()
                    ->relationship('category', 'name'),
                TextInput::make('title')
                    ->label('Judul Berita')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->required(),
                TextInput::make('slug')
                    ->label('Slug')
                    ->unique(ignoreRecord: true)
                    ->readOnly()
                    ->required(),
                Textarea::make('content')
                    ->label('Isi Berita')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label('Gambar Berita')
                    ->image(),
                Toggle::make('is_published')
                    ->label('Publikasikan')
                    ->required(),
                DateTimePicker::make('published_at')
                    ->label('Tanggal & Jam Publikasi'),
            ]);
    }
}
