<?php

namespace App\Filament\Resources\BooklistResource\Pages;

use App\Filament\Resources\BooklistResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBooklist extends CreateRecord
{
    protected static string $resource = BooklistResource::class;
}
