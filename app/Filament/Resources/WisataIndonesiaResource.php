<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WisataIndonesiaResource\Pages;
use App\Filament\Resources\WisataIndonesiaResource\RelationManagers;
use App\Models\Wisata_Indonesia;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\Relationship;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\FileUpload;

class WisataIndonesiaResource extends Resource
{
    protected static ?string $model = Wisata_Indonesia::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                ->placeholder('Masukkan nama wisata'),
                Forms\Components\TextInput::make('deskripsi')
                ->placeholder('Deskripsi singkat'),
                Forms\Components\TextInput::make('hargatiket')
                ->placeholder('Rata-rata harga tiket'),
                Forms\Components\TextInput::make('lokasi')
                ->placeholder('Lokasi lengkap'),
                Forms\Components\TextInput::make('kategori')
                ->placeholder('Kategori wisata'),
                Forms\Components\TextInput::make('rating')
                ->numeric()
                ->placeholder('Masukkan rating (0-5)')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                ->searchable()->sortable(),
                Tables\Columns\TextColumn::make('deskripsi')
                ->searchable()->sortable(),
                Tables\Columns\TextColumn::make('harga tiket')
                ->searchable()->sortable(),
                Tables\Columns\TextColumn::make('lokasi')
                ->searchable()->sortable(),
                Tables\Columns\TextColumn::make('kategori')
                ->searchable()->sortable(),
                Tables\Columns\TextColumn::make('rating')
                ->searchable()->sortable()
            ])
            ->filters([
    
        ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListWisataIndonesias::route('/'),
            'create' => Pages\CreateWisataIndonesia::route('/create'),
            'edit' => Pages\EditWisataIndonesia::route('/{record}/edit'),
        ];
    }
}
