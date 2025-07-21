<?php

namespace App\Filament\Admin\Resources\PinjamanResource\Pages;

use App\Filament\Admin\Resources\PinjamanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPinjaman extends EditRecord
{
    protected static string $resource = PinjamanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
