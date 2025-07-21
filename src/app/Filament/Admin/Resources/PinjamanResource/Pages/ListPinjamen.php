<?php

namespace App\Filament\Admin\Resources\PinjamanResource\Pages;

use App\Filament\Admin\Resources\PinjamanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPinjamen extends ListRecords
{
    protected static string $resource = PinjamanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
