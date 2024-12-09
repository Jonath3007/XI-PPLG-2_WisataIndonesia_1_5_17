<?php

namespace App\Filament\Resources\WisataIndonesiaResource\Pages;

use App\Filament\Resources\WisataIndonesiaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWisataIndonesias extends ListRecords
{
    protected static string $resource = WisataIndonesiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
