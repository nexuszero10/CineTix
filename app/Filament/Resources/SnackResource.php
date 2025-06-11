<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SnackResource\Pages;
use App\Filament\Resources\SnackResource\RelationManagers;
use App\Models\Snack;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Support\Str;

class SnackResource extends Resource
{
    protected static ?string $model = Snack::class;
    protected static ?string $navigationLabel = 'Food & Drink';
    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static ?string $navigationGroup = 'Snack & Promotions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama Produk')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan nama produk')
                    ->rules([
                        'required',
                        'regex:/^[A-Za-z\s]+$/'
                    ])
                    ->validationMessages([
                        'required' => 'Nama produk wajib diisi',
                        'regex' => 'Nama hanya boleh berisi huruf dan spasi saja',
                    ]),

                Select::make('category')
                    ->label('Kategori')
                    ->required()
                    ->options([
                        'food' => 'Makanan',
                        'drink' => 'Minuman',
                    ])
                    ->native(false)
                    ->placeholder('Pilih kategori'),

                TextInput::make('price')
                    ->label('Harga')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->step(500)
                    ->prefix('Rp')
                    ->placeholder('Masukkan harga')
                    ->rules([
                        'required',
                        'numeric',
                        'min:0'
                    ])
                    ->validationMessages([
                        'required' => 'Harap masukkan harga produk',
                        'numeric' => 'Harga harus berupa angka',
                        'min' => 'Harga tidak boleh negatif'
                    ]),

                FileUpload::make('image_path')
                    ->label('Gambar Produk')
                    ->placeholder('Unggah gambar produk (JPG)')
                    ->image()
                    ->visibility('public')
                    ->acceptedFileTypes(['image/jpeg'])
                    ->maxSize(5120)
                    ->required()
                    ->preserveFilenames(false)
                    ->directory(
                        fn(callable $get) =>
                        $get('category') === 'food' ? 'images/foods' : 'images/drinks'
                    )
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Produk')
                    ->searchable(),

                TextColumn::make('category')
                    ->label('Kategori Produk')
                    ->searchable()
                    ->formatStateUsing(fn(string $state) => $state === 'food' ? 'Makanan' : 'Minuman'),

                ImageColumn::make('image_path')
                    ->label('Gambar')
                    ->disk('public')
                    ->getStateUsing(fn($record) => 'images/' . ($record->category === 'food' ? 'foods' : 'drinks') . '/' . $record->image_path)
                    ->height(100)
                    ->width(60)
                    ->extraImgAttributes([
                        'class' => 'rounded-md object-cover'
                    ]),

                TextColumn::make('price')
                    ->label('Harga Produk')
                    ->searchable()
                    ->sortable()
                    ->money('IDR', true),
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
            'index' => Pages\ListSnacks::route('/'),
            'create' => Pages\CreateSnack::route('/create'),
            'edit' => Pages\EditSnack::route('/{record}/edit'),
        ];
    }
}
