<?php

namespace App\Filament\Resources;

use App\Models\Ticket;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TicketResource\Pages;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Support\Facades\DB;

class TicketResource extends Resource
{
    protected static ?string $model = Ticket::class;

    protected static ?string $navigationIcon = 'heroicon-o-ticket';
    protected static ?string $navigationLabel = 'Tickets';
    protected static ?string $navigationGroup = 'User & Orders';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('schedule.movie.image_path')
                    ->label('Poster')
                    ->disk('public')
                    ->getStateUsing(fn($record) => 'images/movies/poster/' . $record->schedule->movie->image_path)
                    ->height(100)
                    ->width(70)
                    ->extraImgAttributes(['class' => 'rounded-md object-cover']),

                TextColumn::make('schedule.movie.title')
                    ->label('Title')
                    ->searchable(),

                TextColumn::make('schedule.date')
                    ->label('Date')
                    ->date(),

                TextColumn::make('schedule.time')
                    ->label('Time'),

                TextColumn::make('schedule.studio.studio_code')
                    ->label('Studio'),

                TextColumn::make('order.order_number')
                    ->label('Order No.')
                    ->searchable(),

                TextColumn::make('total_tickets')
                    ->label('Total Tickets')
                    ->getStateUsing(function (Ticket $record) {
                        return $record->order?->tickets->count() ?? '-';
                    }),

                TextColumn::make('seats_summary')
                    ->label('Seats')
                    ->getStateUsing(function (Ticket $record) {
                        return $record->order?->tickets
                            ->map(fn($t) => $t->row_seat . $t->row_number)
                            ->implode(', ') ?? '-';
                    }),
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([])
            ->bulkActions([]);
    }

    public static function getEloquentQuery(): Builder
    {
        return Ticket::query()
            ->fromSub(
                Ticket::select('tickets.*')
                    ->whereIn('id', function ($query) {
                        $query->selectRaw('MIN(id)')
                            ->from('tickets')
                            ->groupBy('order_id');
                    }),
                'tickets'
            )
            ->with(['order.tickets', 'schedule.movie', 'schedule.studio']);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTickets::route('/'),
        ];
    }
}
