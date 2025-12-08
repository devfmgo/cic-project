<?php

namespace App\Filament\Resources\ObatCategoryResource\Pages;

use App\Filament\Resources\ObatCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListObatCategories extends ListRecords
{
    protected static string $resource = ObatCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
