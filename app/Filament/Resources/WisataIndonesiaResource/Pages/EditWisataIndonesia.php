<?php

namespace App\Filament\Resources\WisataIndonesiaResource\Pages;

use App\Filament\Resources\WisataIndonesiaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWisataIndonesia extends EditRecord
{
    protected static string $resource = WisataIndonesiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
