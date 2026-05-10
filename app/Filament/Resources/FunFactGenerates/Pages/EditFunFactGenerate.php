<?php

namespace App\Filament\Resources\FunFactGenerates\Pages;

use App\Filament\Resources\FunFactGenerates\FunFactGenerateResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFunFactGenerate extends EditRecord
{
    protected static string $resource = FunFactGenerateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
