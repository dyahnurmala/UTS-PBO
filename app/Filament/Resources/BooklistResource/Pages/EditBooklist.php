<?php

namespace App\Filament\Resources\BooklistResource\Pages;

use App\Filament\Resources\BooklistResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBooklist extends EditRecord
{
    protected static string $resource = BooklistResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
