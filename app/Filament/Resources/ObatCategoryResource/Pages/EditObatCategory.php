<?php

namespace App\Filament\Resources\ObatCategoryResource\Pages;

use App\Filament\Resources\ObatCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditObatCategory extends EditRecord
{
    protected static string $resource = ObatCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
