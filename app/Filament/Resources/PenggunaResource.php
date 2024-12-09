<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenggunaResource\Pages;
use App\Filament\Resources\PenggunaResource\RelationManagers;
use App\Models\Pengguna;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenggunaResource extends Resource
{
    protected static ?string $model = Pengguna::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                ->placeholder('Ketikkan nama Anda'),
                Forms\Components\TextInput::make('password')
                ->placeholder('Buat password unik'),
                Forms\Components\TextInput::make('email')
                ->placeholder('Input email aktif'),
                Forms\Components\Select::make('role')
                ->options([
                    'admin' => 'Admin',
                    'user' => 'User',
                    'guest' => 'Guest',
                ]),
                Forms\Components\TextInput::make('nomorwa')
                ->label('Nomor WhatsApp')
                ->placeholder('Masukkan nomor WA'),
                Forms\Components\TextInput::make('alamat')
                ->placeholder('Masukkan alamt lengkap'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                ->searchable()->sortable(),
                Tables\Columns\TextColumn::make('email')
                ->searchable()->sortable(),
                Tables\Columns\TextColumn::make('role')
                ->searchable()->sortable(),
                Tables\Columns\TextColumn::make('nomorwa')
                ->searchable()->sortable(),
                Tables\Columns\TextColumn::make('alamat')
                ->searchable()->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('role')
                ->options([
                    'admin' => 'Admin',
                    'user' => 'User',
                    'guest' => 'Guest',
                ])
                ->label('Role'),
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
            'index' => Pages\ListPenggunas::route('/'),
            'create' => Pages\CreatePengguna::route('/create'),
            'edit' => Pages\EditPengguna::route('/{record}/edit'),
        ];
    }
}
