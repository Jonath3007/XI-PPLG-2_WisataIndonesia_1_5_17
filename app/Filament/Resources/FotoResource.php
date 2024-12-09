<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FotoResource\Pages;
use App\Filament\Resources\FotoResource\RelationManagers;
use App\Models\Foto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Log; 

class FotoResource extends Resource
{
    protected static ?string $model = Foto::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('foto')
                ->label('Upload Foto')
                ->disk('public')
                ->directory('uploads/foto')
                ->required()
                ->preserveFilenames()
                ->afterStateUpdated(function (FileUpload $component, $state) {
                    if ($state instanceof \Illuminate\Http\UploadedFile) {
                        $foto = $component->getModel();

                        if ($foto && $foto instanceof Foto) {
                            $foto->namafile = $state->getClientOriginalName();
                            $foto->save();
                        } else {
                            Log::warning('Model tidak valid atau tidak ditemukan', ['foto' => $foto]);
                        }
                    }
                }),
            TextInput::make('namafile')
                ->label('Nama File Foto'),
        ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
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
            'index' => Pages\ListFotos::route('/'),
            'create' => Pages\CreateFoto::route('/create'),
            'edit' => Pages\EditFoto::route('/{record}/edit'),
        ];
    }
}
