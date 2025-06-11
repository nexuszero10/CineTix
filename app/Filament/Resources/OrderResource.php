<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
use Filament\Resources\Resource;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\Group;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;
    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';
    protected static ?string $navigationLabel = 'Orders';
    protected static ?string $navigationGroup = 'User & Orders';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('schedule.movie.image_path')
                    ->label('Poster')
                    ->disk('public')
                    ->getStateUsing(
                        fn($record) => $record->schedule && $record->schedule->movie
                            ? 'images/movies/poster/' . $record->schedule->movie->image_path
                            : null
                    )
                    ->height(100)
                    ->width(70)
                    ->extraImgAttributes(['class' => 'rounded-md object-cover']),

                TextColumn::make('schedule.movie.title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('order_number')
                    ->label('Nomor Pesanan')
                    ->copyable()
                    ->sortable(),

                TextColumn::make('number_of_seats')
                    ->label('Jumlah')
                    ->formatStateUsing(fn($state) => $state . ' item'),

                TextColumn::make('total_price')
                    ->label('Total Harga')
                    ->money('IDR')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Tanggal Pembayaran')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'view' => Pages\ViewOrder::route('/{record}'),
        ];
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Informasi Pemesanan')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('user.username')
                            ->label('Nama Pengguna'),

                        TextEntry::make('order_number')
                            ->label('Nomor Pesanan'),

                        TextEntry::make('number_of_seats')
                            ->label('Jumlah Tiket')
                            ->formatStateUsing(fn($state) => $state . ' item'),

                        TextEntry::make('total_price')
                            ->label('Total Harga')
                            ->money('IDR'),

                        TextEntry::make('status')
                            ->badge()
                            ->colors([
                                'paid' => 'success',
                                'unpaid' => 'danger',
                            ])
                            ->label('Status'),

                        TextEntry::make('created_at')
                            ->label('Dipesan Pada')
                            ->dateTime('d M Y H:i'),
                    ]),

                Section::make('Detail Promo')
                    ->visible(fn($record) => $record->promotion_id !== null)
                    ->columns(2)
                    ->schema([
                        TextEntry::make('promotion.code')
                            ->label('Kode Promo'),

                        TextEntry::make('promotion.discount')
                            ->label('Potongan')
                            ->formatStateUsing(function ($state, $record) {
                                $type = $record->promotion?->type;

                                return match ($type) {
                                    'diskon' => $state . ' %',
                                    'harga' => 'Rp ' . number_format($state, 0, ',', '.'),
                                    default => '-',
                                };
                            }),
                    ]),

                Section::make('Pesanan Snack / Minuman')
                    ->visible(fn($record) => $record->snacks->isNotEmpty())
                    ->schema([
                        Grid::make(2)
                            ->schema([

                                // Kolom Makanan
                                Group::make([
                                    TextEntry::make('snacks_food')
                                        ->label('Makanan')
                                        ->state(function ($record) {
                                            $foods = $record->snacks->where('category', 'food');
                                            if ($foods->isEmpty()) return 'Tidak ada pesanan makanan.';

                                            $rows = $foods->map(function ($snack) {
                                                return "<tr>
                                    <td class='border px-2 py-1'>{$snack->name}</td>
                                    <td class='border px-2 py-1 text-center'>{$snack->pivot->quantity} pcs</td>
                                    <td class='border px-2 py-1 text-right'>Rp " . number_format($snack->price, 0, ',', '.') . "</td>
                                </tr>";
                                            })->implode('');

                                            return "
                                <table class='text-sm w-full border-collapse'>
                                    <thead>
                                        <tr>
                                            <th class='border px-2 py-1 text-left'>Nama</th>
                                            <th class='border px-2 py-1 text-center'>Jumlah</th>
                                            <th class='border px-2 py-1 text-right'>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>$rows</tbody>
                                </table>
                            ";
                                        })
                                        ->columnSpanFull()
                                        ->html(),
                                ]),

                                // Kolom Minuman
                                Group::make([
                                    TextEntry::make('snacks_drink')
                                        ->label('Minuman')
                                        ->state(function ($record) {
                                            $drinks = $record->snacks->where('category', 'drink');
                                            if ($drinks->isEmpty()) return 'Tidak ada pesanan minuman.';

                                            $rows = $drinks->map(function ($snack) {
                                                return "<tr>
                                    <td class='border px-2 py-1'>{$snack->name}</td>
                                    <td class='border px-2 py-1 text-center'>{$snack->pivot->quantity} pcs</td>
                                    <td class='border px-2 py-1 text-right'>Rp " . number_format($snack->price, 0, ',', '.') . "</td>
                                </tr>";
                                            })->implode('');

                                            return "
                                <table class='text-sm w-full border-collapse'>
                                    <thead>
                                        <tr>
                                            <th class='border px-2 py-1 text-left'>Nama</th>
                                            <th class='border px-2 py-1 text-center'>Jumlah</th>
                                            <th class='border px-2 py-1 text-right'>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>$rows</tbody>
                                </table>
                            ";
                                        })
                                        ->columnSpanFull()
                                        ->html(),
                                ]),

                            ]),
                    ])
            ]);
    }
}
