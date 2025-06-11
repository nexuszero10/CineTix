<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TimelineResource\Pages;
use App\Models\Timeline;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;

class TimelineResource extends Resource
{
    protected static ?string $model = Timeline::class;

    protected static ?string $navigationIcon = 'heroicon-o-clock';
    protected static ?string $navigationLabel = 'Timeline';
    protected static ?string $navigationGroup = 'Movie Management';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('movie_id')
                ->relationship('movie', 'title')
                ->label('Judul Film')
                ->searchable()
                ->required(),

            Select::make('status')
                ->label('Kategori')
                ->options([
                    'now_showing' => 'Now Showing',
                    'coming_soon' => 'Coming Soon',
                ])
                ->required(),

            DatePicker::make('start_date')
                ->label('Mulai Tayang')
                ->required()
                ->visible(fn($get) => $get('status') === 'coming_soon'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('movie.title')
                    ->label('Judul Film')
                    ->searchable(),

                TextColumn::make('status')
                    ->label('Kategori')
                    ->formatStateUsing(fn(string $state) => $state === 'now_showing' ? 'Now Showing' : 'Coming Soon')
                    ->badge()
                    ->color(fn(string $state) => $state === 'now_showing' ? 'success' : 'warning'),

                TextColumn::make('start_date')
                    ->label('Mulai Tayang')
                    ->formatStateUsing(fn($state, $record) => $record->status === 'now_showing' ? 'Ongoing' : ($state ? date('d M Y', strtotime($state)) : '-')),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTimelines::route('/'),
            'create' => Pages\CreateTimeline::route('/create'),
            'edit' => Pages\EditTimeline::route('/{record}/edit'),
        ];
    }
}
