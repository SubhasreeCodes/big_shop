<?php

namespace App\Filament\Resources\CreateDiscountResource\Pages;

use App\Filament\Resources\CreateDiscountResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCreateDiscounts extends ListRecords
{
    protected static string $resource = CreateDiscountResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
