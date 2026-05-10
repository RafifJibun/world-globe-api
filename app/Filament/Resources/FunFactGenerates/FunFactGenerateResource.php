<?php

namespace App\Filament\Resources\FunFactGenerates;

use App\Filament\Resources\FunFactGenerates\Pages\CreateFunFactGenerate;
use App\Filament\Resources\FunFactGenerates\Pages\EditFunFactGenerate;
use App\Filament\Resources\FunFactGenerates\Pages\ListFunFactGenerates;
use App\Filament\Resources\FunFactGenerates\Schemas\FunFactGenerateForm;
use App\Filament\Resources\FunFactGenerates\Tables\FunFactGeneratesTable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FunFactGenerateResource extends Resource
{
    protected static ?string $model = \App\Models\FunFact::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'fact';

    public static function form(Schema $schema): Schema
    {
        return FunFactGenerateForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FunFactGeneratesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFunFactGenerates::route('/'),
            'create' => CreateFunFactGenerate::route('/create'),
            'edit' => EditFunFactGenerate::route('/{record}/edit'),
        ];
    }
}
