<?php

namespace App\Filament\Resources\FunFactGenerates\Pages;

use App\Filament\Resources\FunFactGenerates\FunFactGenerateResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFunFactGenerates extends ListRecords
{
    protected static string $resource = FunFactGenerateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
