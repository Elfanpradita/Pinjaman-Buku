<?php

namespace App\Filament\Admin\Resources\PenjagaResource\Pages;

use App\Filament\Admin\Resources\PenjagaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenjagas extends ListRecords
{
    protected static string $resource = PenjagaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
