<?php

namespace App\Filament\Resources;

use App\Models\Review;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\ReviewResource\Pages;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationLabel = 'Reviews';
    protected static ?string $navigationGroup = 'User & Orders';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('movie.image_path')
                    ->label('Poster')
                    ->disk('public')
                    ->getStateUsing(fn($record) => 'images/movies/poster/' . $record->movie->image_path)
                    ->height(100)
                    ->width(70)
                    ->extraImgAttributes(['class' => 'rounded-md object-cover']),

                TextColumn::make('movie.title')
                    ->label('Title')
                    ->searchable(),

                TextColumn::make('user.name')
                    ->label('Username')
                    ->searchable(),

                TextColumn::make('rating')
                    ->label('Rating')
                    ->sortable(),

                TextColumn::make('comment')
                    ->label('Comment')
                    ->limit(50),
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->with(['movie', 'user']);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReviews::route('/'),
        ];
    }
}
