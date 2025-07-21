<?php

namespace App\Filament\Admin\Resources\PenjagaResource\Pages;

use App\Filament\Admin\Resources\PenjagaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenjaga extends EditRecord
{
    protected static string $resource = PenjagaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
