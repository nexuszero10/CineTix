<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\EditAction;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Snack & Promotions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul Artikel')
                    ->placeholder('Masukkan judul artikel')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('image_path')
                    ->label('Gambar Artikel')
                    ->placeholder('Unggah gambar pendukung (JPG)')
                    ->image()
                    ->directory('images/news')
                    ->visibility('public')
                    ->acceptedFileTypes(['image/jpeg'])
                    ->maxSize(5120)
                    ->required(fn(string $context) => $context === 'create') // hanya required saat create
                    ->dehydrated(fn($state) => filled($state)) // hanya simpan kalau ada file baru
                    ->preserveFilenames(false),

                Textarea::make('description')
                    ->label('Deskripsi Artikel')
                    ->placeholder('Tulis isi atau ringkasan artikel di sini...')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                ImageColumn::make('image_path')
                    ->label('Gambar')
                    ->disk('public')
                    ->getStateUsing(fn($record) => 'images/news/' . $record->image_path)
                    ->height(60)
                    ->width(100)
                    ->extraImgAttributes(['class' => 'rounded-md'])
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
