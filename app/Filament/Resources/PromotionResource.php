<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PromotionResource\Pages;
use App\Models\Promotion;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class PromotionResource extends Resource
{
    protected static ?string $model = Promotion::class;

    protected static ?string $navigationIcon = 'heroicon-o-percent-badge';
    protected static ?string $navigationLabel = 'Promotions';
    protected static ?string $navigationGroup = 'Snack & Promotions';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('code')
                    ->label('Kode Promo')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Misal: DISKON10'),

                Select::make('type')
                    ->label('Jenis Promo')
                    ->required()
                    ->options([
                        'harga' => 'Potongan Harga Langsung',
                        'diskon' => 'Diskon (%)',
                    ])
                    ->native(false)
                    ->placeholder('Pilih jenis promo'),

                TextInput::make('minimum_price')
                    ->label('Harga Minimum (Rp)')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->step(1000)
                    ->placeholder('Misal: 50000'),

                TextInput::make('discount')
                    ->label('Nominal Diskon')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->placeholder('Isi nilai potongan dalam rupiah atau persen'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('code')
                    ->label('Kode Promo')
                    ->searchable(),

                TextColumn::make('type')
                    ->label('Tipe Promo')
                    ->formatStateUsing(fn($state) => $state === 'harga' ? 'Potongan Harga' : 'Diskon (%)')
                    ->searchable(),

                TextColumn::make('minimum_price')
                    ->label('Harga Minimum')
                    ->money('IDR', true)
                    ->sortable(),

                TextColumn::make('discount')
                    ->label('Nominal Diskon')
                    ->sortable()
                    ->formatStateUsing(function ($record) {
                        return $record->type === 'diskon'
                            ? $record->discount . '%'
                            : 'Rp' . number_format($record->discount, 0, ',', '.');
                    }),
            ])
            ->filters([
                //
            ])
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPromotions::route('/'),
            'create' => Pages\CreatePromotion::route('/create'),
            'edit' => Pages\EditPromotion::route('/{record}/edit'),
        ];
    }
}
