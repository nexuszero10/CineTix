<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GenreResource\Pages;
use App\Filament\Resources\GenreResource\RelationManagers;
use App\Models\Genre;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GenreResource extends Resource
{
    protected static ?string $model = Genre::class; 
    protected static ?string $navigationIcon = 'heroicon-o-hashtag';
    protected static ?string $navigationGroup = 'Movie Management';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('genre_name')
                    ->label('Nama Genre')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Contoh : Actiiion, Drama, Thiller')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('genre_name')
                    ->label('Nama Genre')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('movies_count')
                    ->label('Jumlah Film')
                    ->counts('movies')
                    ->sortable(),
            ])
            ->defaultSort('genre_name');
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
            'index' => Pages\ListGenres::route('/'),
            'create' => Pages\CreateGenre::route('/create'),
            'edit' => Pages\EditGenre::route('/{record}/edit'),
        ];
    }
}
