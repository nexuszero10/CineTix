<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MovieResource\Pages;
use App\Filament\Resources\MovieResource\RelationManagers;
use App\Models\Movie;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TagsInput;

class MovieResource extends Resource
{
    protected static ?string $model = Movie::class;
    protected static ?string $navigationIcon = 'heroicon-o-film';
    protected static ?string $navigationGroup = 'Movie Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Film')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('title')
                                    ->label('Judul')
                                    ->required()
                                    ->unique(ignoreRecord: true),

                                TextInput::make('duration')
                                    ->label('Durasi (menit)')
                                    ->numeric()
                                    ->required(),

                                TextInput::make('director')
                                    ->label('Sutradara')
                                    ->required(),

                                TagsInput::make('cast')
                                    ->label('Pemeran')
                                    ->placeholder('Florence Pugh, Sebastian Stan, Julia Louis-Dreyfus')
                                    ->required()
                                    ->separator(',')
                                    ->dehydrateStateUsing(fn(array $state) => implode(', ', $state))
                                    ->formatStateUsing(fn($state) => is_string($state) ? explode(', ', $state) : $state),

                                TextInput::make('release_year')
                                    ->label('Tahun Rilis')
                                    ->numeric()
                                    ->minValue(1900)
                                    ->maxValue(date('Y'))
                                    ->required(),

                                TextInput::make('price')
                                    ->label('Harga Tiket')
                                    ->numeric()
                                    ->required(),

                                Select::make('category_id')
                                    ->label('Kategori Usia')
                                    ->relationship('category', 'category_name')
                                    ->required(),

                                Select::make('genres')
                                    ->label('Genre Film')
                                    ->multiple()
                                    ->relationship('genres', 'genre_name')
                                    ->preload()
                                    ->searchable()
                                    ->required()
                                    ->helperText('Pilih satu atau lebih genre untuk film ini')
                                    ->createOptionForm([
                                        TextInput::make('genre_name')
                                            ->label('Nama Genre')
                                            ->required()
                                            ->unique(),
                                    ])
                            ]),

                        Textarea::make('synopsis')
                            ->label('Sinopsis')
                            ->rows(5)
                            ->required(),

                        TextInput::make('trailer_url')
                            ->label('Link Trailer YouTube')
                            ->url()
                            ->required()
                            ->live()
                            ->afterStateUpdated(function ($state, callable $set) {
                                // Ubah menjadi embed YouTube
                                $embedUrl = preg_replace(
                                    '/(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/',
                                    'https://www.youtube.com/embed/$1',
                                    $state
                                );
                                $embedUrl = preg_replace(
                                    '/(?:https?:\/\/)?(?:www\.)?youtu\.be\/([a-zA-Z0-9_-]+)/',
                                    'https://www.youtube.com/embed/$1',
                                    $embedUrl
                                );
                                $set('trailer_url', $embedUrl);
                            }),

                        FileUpload::make('image_path')
                            ->label('Poster Film')
                            ->image()
                            ->directory('images/movies/poster')
                            ->imageEditor()
                            ->acceptedFileTypes(['image/jpeg'])
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image_path')
                    ->label('Poster')
                    ->disk('public')
                    ->getStateUsing(fn($record) => 'images/movies/poster/' . $record->image_path)
                    ->height(100)
                    ->width(70)
                    ->extraImgAttributes(['class' => 'rounded-md object-cover']),

                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('timeline.status')
                    ->label('Status')
                    ->formatStateUsing(fn($state) => $state === 'now_showing' ? 'Now Showing' : ($state === 'coming_soon' ? 'Coming Soon' : '-'))
                    ->badge()
                    ->searchable()
                    ->color(fn($state) => match ($state) {
                        'now_showing' => 'success',
                        'coming_soon' => 'warning',
                        default => 'gray',
                    }),

                TextColumn::make('price')
                    ->label('Harga')
                    ->money('IDR', true)
                    ->sortable(),

                TextColumn::make('release_year')
                    ->label('Tahun')
                    ->sortable(),

                TextColumn::make('category.category_name')
                    ->label('Kategori Usia')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'SU' => 'success',      // hijau
                        '13+' => 'warning',     // kuning
                        '17+' => 'info',      // biru
                        '21+' => 'danger',      // merah
                    })
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListMovies::route('/'),
            'create' => Pages\CreateMovie::route('/create'),
            'edit' => Pages\EditMovie::route('/{record}/edit'),
        ];
    }
}
