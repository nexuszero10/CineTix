<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScheduleResource\Pages;
use App\Models\Schedule;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Grid;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Illuminate\Database\Eloquent\Builder;

class ScheduleResource extends Resource
{
    protected static ?string $model = Schedule::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationLabel = 'Schedules';
    protected static ?string $navigationGroup = 'Movie Management';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Data Jadwal Film')
                ->schema([
                    Grid::make(2)->schema([
                        Select::make('movie_id')
                            ->label('Film')
                            ->relationship('movie', 'title')
                            ->searchable()
                            ->nullable(),

                        Select::make('studio_id')
                            ->label('Studio')
                            ->relationship('studio', 'studio_code')
                            ->required(),

                        DatePicker::make('date')
                            ->label('Tanggal')
                            ->required(),

                        TimePicker::make('time')
                            ->label('Waktu')
                            ->required(),

                        TextInput::make('day')
                            ->label('Hari')
                            ->required(),

                        TextInput::make('capacity')
                            ->label('Kapasitas')
                            ->numeric()
                            ->default(40),

                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'showing' => 'Sedang Tayang',
                                'not_showing' => 'Tidak Tayang',
                            ])
                            ->required(),
                    ])
                ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->formatStateUsing(fn(string $state): string => match ($state) {
                        'showing' => 'Sedang Tayang',
                        'not_showing' => 'Tidak Tayang',
                        default => '-',
                    })
                    ->color(fn(string $state): string => match ($state) {
                        'showing' => 'success',
                        'not_showing' => 'danger',
                        default => 'gray',
                    })
                    ->sortable(),

                TextColumn::make('movie.title')
                    ->label('Judul Film')
                    ->sortable()
                    ->searchable()
                    ->getStateUsing(fn($record) => $record->movie?->title ?? '-'),

                TextColumn::make('date')
                    ->label('Tanggal')
                    ->date()
                    ->sortable(),

                TextColumn::make('time')
                    ->label('Waktu')
                    ->time()
                    ->sortable(),

                TextColumn::make('studio.studio_code')
                    ->label('Studio')
                    ->sortable(),

                TextColumn::make('capacity')
                    ->label('Kapasitas')
                    ->sortable(),
            ])
            ->defaultSort('date', 'asc')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->orderByRaw("CASE WHEN status = 'showing' THEN 0 WHEN status = 'not_showing' THEN 1 ELSE 2 END")
            ->orderBy('date', 'asc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSchedules::route('/'),
            'create' => Pages\CreateSchedule::route('/create'),
            'edit' => Pages\EditSchedule::route('/{record}/edit'),
        ];
    }
}
